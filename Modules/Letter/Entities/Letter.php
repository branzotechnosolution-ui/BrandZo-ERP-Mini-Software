<?php

namespace Modules\Letter\Entities;

use App\Models\BaseModel;
use App\Models\User;
use App\Traits\HasCompany;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Letter extends BaseModel
{
    use HasCompany;

    protected $casts = [
        'offer_details' => 'array',
    ];

    protected $fillable = [
        'company_id',
        'user_id',
        'template_id',
        'creator_id',
        'name',
        'top',
        'right',
        'left',
        'bottom',
        'description',
        'status',
        'offer_details',
    ];

    protected $appends = ['employee_name'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function creator(): BelongsTo
    {
        return $this->belongsTo(User::class, 'creator_id');
    }

    public function template(): BelongsTo
    {
        return $this->belongsTo(Template::class, 'template_id');
    }

    public function employeeName(): Attribute
    {
        return Attribute::make(
            get: function () {
                $details = $this->offer_details;
                if (!empty($details['employee_name'])) {
                    return $details['employee_name'];
                }
                return $this->name ?: $this->user?->name;
            },
        );
    }

}
