<?php

namespace App\Observers;

use App\Enums\MaritalStatus;
use Illuminate\Support\Carbon;
use App\Models\Company;
use App\Models\EmployeeDetails;
use App\Models\EmployeeLeaveQuota;
use App\Events\NewUserSlackEvent;
use App\Models\User;
use App\Notifications\NoticePeriodStarted;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Notification;

class EmployeeDetailsObserver
{

    public function saving(EmployeeDetails $detail)
    {
        if (!isRunningInConsoleOrSeeding() && auth()->check()) {
            $detail->last_updated_by = user()->id;
        }

        // Auto-calculate notice_period_end_date when only the start date is provided.
        if (!empty($detail->notice_period_start_date) && empty($detail->notice_period_end_date)) {
            $companyId = $detail->company_id ?: optional($detail->user)->company_id;
            $company = $companyId ? Company::find($companyId) : null;
            $noticeMonths = $company->default_notice_period_months ?? null;

            if (!empty($noticeMonths)) {
                $detail->notice_period_end_date = Carbon::parse($detail->notice_period_start_date)
                    ->addMonths((int) $noticeMonths)
                    ->format('Y-m-d');
            }
        }
    }

    public function creating(EmployeeDetails $detail)
    {
        if (!isRunningInConsoleOrSeeding() && auth()->check()) {
            $detail->added_by = user()->id;
        }

        $detail->company_id = $detail->user->company_id;

        if (is_null($detail->marital_status)) {
            $detail->marital_status = MaritalStatus::Single;
        }

    }

    public function created(EmployeeDetails $detail)
    {
        $settings = company();

        $user = $detail->user;

        Artisan::call('app:recalculate-leaves-quotas ' . $detail->company_id . ' ' . $user->id);

        event(new NewUserSlackEvent($user));


    }

    public function updated(EmployeeDetails $detail)
    {
        if (user() && $detail->isDirty('joining_date'))  {
            Artisan::call('app:recalculate-leaves-quotas ' . $detail->company_id . ' ' . $detail->user_id);
        }

        if ($detail->isDirty('notice_period_start_date') && !empty($detail->notice_period_start_date)) {
            $admins = User::allAdmins($detail->company_id);

            if ($admins->isNotEmpty()) {
                Notification::send($admins, new NoticePeriodStarted($detail));
            }
        }

    }

}
