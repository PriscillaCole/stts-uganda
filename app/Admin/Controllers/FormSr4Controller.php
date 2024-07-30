<?php

namespace App\Admin\Controllers;

use App\Models\FormSr4;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class FormSr4Controller extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'FormSr4';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new FormSr4());

        $grid->column('id', __('Id'));
        $grid->column('applicant_id', __('Applicant id'));
        $grid->column('type', __('Type'));
        $grid->column('name_of_applicant', __('Name of applicant'));
        $grid->column('address', __('Address'));
        $grid->column('company_initials', __('Company initials'));
        $grid->column('phone_number', __('Phone number'));
        $grid->column('repackage_equipment', __('Repackage equipment'));
        $grid->column('premises_location', __('Premises location'));
        $grid->column('expirience_in', __('Expirience in'));
        $grid->column('years_of_expirience', __('Years of expirience'));
        $grid->column('dealers_in', __('Dealers in'));
        $grid->column('marketing_of', __('Marketing of'));
        $grid->column('have_adequate_land', __('Have adequate land'));
        $grid->column('have_adequate_storage', __('Have adequate storage'));
        $grid->column('have_adequate_equipment', __('Have adequate equipment'));
        $grid->column('have_contractual_agreement', __('Have contractual agreement'));
        $grid->column('have_adequate_field_officers', __('Have adequate field officers'));
        $grid->column('have_conversant_seed_matters', __('Have conversant seed matters'));
        $grid->column('souce_of_seed', __('Souce of seed'));
        $grid->column('have_adequate_land_for_production', __('Have adequate land for production'));
        $grid->column('have_internal_quality_program', __('Have internal quality program'));
        $grid->column('receipt', __('Receipt'));
        $grid->column('accept_declaration', __('Accept declaration'));
        $grid->column('status', __('Status'));
        $grid->column('inspector_id', __('Inspector id'));
        $grid->column('valid_from', __('Valid from'));
        $grid->column('valid_until', __('Valid until'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));
        $grid->column('deleted_at', __('Deleted at'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(FormSr4::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('applicant_id', __('Applicant id'));
        $show->field('type', __('Type'));
        $show->field('name_of_applicant', __('Name of applicant'));
        $show->field('address', __('Address'));
        $show->field('company_initials', __('Company initials'));
        $show->field('phone_number', __('Phone number'));
        $show->field('repackage_equipment', __('Repackage equipment'));
        $show->field('premises_location', __('Premises location'));
        $show->field('expirience_in', __('Expirience in'));
        $show->field('years_of_expirience', __('Years of expirience'));
        $show->field('dealers_in', __('Dealers in'));
        $show->field('marketing_of', __('Marketing of'));
        $show->field('have_adequate_land', __('Have adequate land'));
        $show->field('have_adequate_storage', __('Have adequate storage'));
        $show->field('have_adequate_equipment', __('Have adequate equipment'));
        $show->field('have_contractual_agreement', __('Have contractual agreement'));
        $show->field('have_adequate_field_officers', __('Have adequate field officers'));
        $show->field('have_conversant_seed_matters', __('Have conversant seed matters'));
        $show->field('souce_of_seed', __('Souce of seed'));
        $show->field('have_adequate_land_for_production', __('Have adequate land for production'));
        $show->field('have_internal_quality_program', __('Have internal quality program'));
        $show->field('receipt', __('Receipt'));
        $show->field('accept_declaration', __('Accept declaration'));
        $show->field('status', __('Status'));
        $show->field('inspector_id', __('Inspector id'));
        $show->field('valid_from', __('Valid from'));
        $show->field('valid_until', __('Valid until'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));
        $show->field('deleted_at', __('Deleted at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new FormSr4());

        $form->number('applicant_id', __('Applicant id'));
        $form->text('type', __('Type'));
        $form->text('name_of_applicant', __('Name of applicant'));
        $form->text('address', __('Address'));
        $form->text('company_initials', __('Company initials'));
        $form->text('phone_number', __('Phone number'));
        $form->text('repackage_equipment', __('Repackage equipment'));
        $form->text('premises_location', __('Premises location'));
        $form->text('expirience_in', __('Expirience in'));
        $form->number('years_of_expirience', __('Years of expirience'));
        $form->text('dealers_in', __('Dealers in'));
        $form->text('marketing_of', __('Marketing of'));
        $form->switch('have_adequate_land', __('Have adequate land'));
        $form->switch('have_adequate_storage', __('Have adequate storage'));
        $form->switch('have_adequate_equipment', __('Have adequate equipment'));
        $form->switch('have_contractual_agreement', __('Have contractual agreement'));
        $form->switch('have_adequate_field_officers', __('Have adequate field officers'));
        $form->switch('have_conversant_seed_matters', __('Have conversant seed matters'));
        $form->text('souce_of_seed', __('Souce of seed'));
        $form->switch('have_adequate_land_for_production', __('Have adequate land for production'));
        $form->switch('have_internal_quality_program', __('Have internal quality program'));
        $form->text('receipt', __('Receipt'));
        $form->switch('accept_declaration', __('Accept declaration'));
        $form->text('status', __('Status'));
        $form->number('inspector_id', __('Inspector id'));
        $form->date('valid_from', __('Valid from'))->default(date('Y-m-d'));
        $form->date('valid_until', __('Valid until'))->default(date('Y-m-d'));

        return $form;
    }
}
