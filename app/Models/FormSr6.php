<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class FormSr6 extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'applicant_id',
        'type',
        'name_of_applicant',
        'phone_number',
        'address',
        'premises_location',
        'years_of_expirience',
        'form_sr6_has_crops',
        'seed_grower_in_past',
        'grower_number',
        'have_adequate_storage',
        'previous_grower_number',
        'cropping_histroy',
        'have_adequate_isolation',
        'have_adequate_labor',
        'aware_of_minimum_standards',
        'signature_of_applicant',
        'status',
        'inspector_id',
        'status_comment', 
        'registration_number', 
        'valid_from',
        'valid_until',
    ];
}
