<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FormQds extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'applicant_id',
        'name_of_applicant',
        'address',
        'phone_number',
        'farm_location',
        'premises_location', 
        'years_of_expirience',
        'qds_has_crops',
        'have_been_qds',
        'previous_grower_number',
        'have_adequate_storage_facility',
        'cropping_history',
        'have_adequate_isolation',
        'isolation_distance',
        'have_adequate_labor',
        'number_of_labors',
        'aware_of_minimum_standards',
        'signature_of_applicant',
        'recommendation',
        'certification',
        'status',
        'valid_from',
        'valid_until',
        'inspector_id',
        'grower_number',
        'registration_number',
       
    ];
}
