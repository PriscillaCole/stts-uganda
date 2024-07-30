<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FormSr4 extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'administrator_id',
        'type',
        'name_of_applicant',
        'address',
        'company_initials',
        'phone_number',
        'repackage_equipment',
        'premises_location',
        'expirience_in',
        'years_of_expirience',
        'dealers_in',
        'marketing_of',
        'have_adequate_land',
        'have_adequate_storage',
        'have_adequate_equipment',
        'have_contractual_agreement',
        'have_adequate_field_officers',
        'have_conversant_seed_matters',
        'souce_of_seed',
        'have_adequate_land_for_production',
        'have_internal_quality_program',
        'receipt',
        'accept_declaration',
        'status',
        'inspector_id',
        'valid_from',
        'valid_until',
        

    ];
}
