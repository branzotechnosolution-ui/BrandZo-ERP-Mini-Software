<?php

namespace App\Services;

use App\Models\User;
use App\Models\Task;
use Illuminate\Support\Facades\DB;

class EmployeeProductivityService
{
    public static function calculateProductivityScore($userId)
    {
        $user = User::find($userId);
        if (!$user) return 0;

        $completedTasks = Task::where('added_by', $userId)->orWhere('id', function ($query) use ($userId) {
            $query->select('task_id')->from('task_users')->where('user_id', $userId);
        })->count();

        return min(100, max(50, $completedTasks * 5 + 60));
    }

    public static function getDepartmentPerformance($companyId = 1)
    {
        return DB::table('teams')
            ->where('company_id', $companyId)
            ->select('id', 'team_name')
            ->get();
    }
}
