<?php

namespace App\Models;

use App\Traits\CustomScopes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Debt extends Model
{
    use HasFactory, SoftDeletes, CustomScopes;

    protected $fillable = [
        'slug',
        'type',
        'name',
        'phone',
        'email',
        'creditor',
        'active_criminal_case',
        'criminal_case_description',
        'active_civil_case',
        'civil_case_description',
        'currently_in_country',
        'valid_passport',
        'client_status',
        'timelineRequirement',
        'settlement_upload_emirates_front',
        'settlement_upload_emirates_back',
        'settlement_upload_passport',
        'settlement_upload_ejari',
    ];

    protected $casts = [
        'creditor' => 'array',
    ];
}
