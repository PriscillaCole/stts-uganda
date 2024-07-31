<?php

namespace App\Admin\Controllers;

use App\Models\FormSr6;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class FormSr6Controller extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'FormSr6';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new FormSr6());

        $grid->column('id', __('Id'));
        $grid->column('applicant_id', __('Applicant id'));
        $grid->column('type', __('Type'));
        $grid->column('name_of_applicant', __('Name of applicant'));
        $grid->column('phone_number', __('Phone number'));
        $grid->column('address', __('Address'));
        $grid->column('premises_location', __('Premises location'));
        $grid->column('years_of_expirience', __('Years of expirience'));
        $grid->column('seed_grower_in_past', __('Seed grower in past'));
        $grid->column('grower_number', __('Grower number'));
        $grid->column('have_adequate_storage', __('Have adequate storage'));
        $grid->column('previous_grower_number', __('Previous grower number'));
        $grid->column('cropping_histroy', __('Cropping histroy'));
        $grid->column('have_adequate_isolation', __('Have adequate isolation'));
        $grid->column('have_adequate_labor', __('Have adequate labor'));
        $grid->column('aware_of_minimum_standards', __('Aware of minimum standards'));
        $grid->column('signature_of_applicant', __('Signature of applicant'));
        $grid->column('status', __('Status'));
        $grid->column('inspector_id', __('Inspector id'));
        $grid->column('status_comment', __('Status comment'));
        $grid->column('registration_number', __('Registration number'));
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
        $show = new Show(FormSr6::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('applicant_id', __('Applicant id'));
        $show->field('type', __('Type'));
        $show->field('name_of_applicant', __('Name of applicant'));
        $show->field('phone_number', __('Phone number'));
        $show->field('address', __('Address'));
        $show->field('premises_location', __('Premises location'));
        $show->field('years_of_expirience', __('Years of expirience'));
        $show->field('seed_grower_in_past', __('Seed grower in past'));
        $show->field('grower_number', __('Grower number'));
        $show->field('have_adequate_storage', __('Have adequate storage'));
        $show->field('previous_grower_number', __('Previous grower number'));
        $show->field('cropping_histroy', __('Cropping histroy'));
        $show->field('have_adequate_isolation', __('Have adequate isolation'));
        $show->field('have_adequate_labor', __('Have adequate labor'));
        $show->field('aware_of_minimum_standards', __('Aware of minimum standards'));
        $show->field('signature_of_applicant', __('Signature of applicant'));
        $show->field('status', __('Status'));
        $show->field('inspector_id', __('Inspector id'));
        $show->field('status_comment', __('Status comment'));
        $show->field('registration_number', __('Registration number'));
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
        $form = new Form(new FormSr6());

        $form->number('applicant_id', __('Applicant id'));
        $form->text('type', __('Type'));
        $form->text('name_of_applicant', __('Name of applicant'));
        $form->text('phone_number', __('Phone number'));
        $form->textarea('address', __('Address'));
        $form->textarea('premises_location', __('Premises location'));
        $form->number('years_of_expirience', __('Years of expirience'));
        $form->switch('seed_grower_in_past', __('Seed grower in past'));
        $form->text('grower_number', __('Grower number'));
        $form->switch('have_adequate_storage', __('Have adequate storage'));
        $form->text('previous_grower_number', __('Previous grower number'));
        $form->textarea('cropping_histroy', __('Cropping histroy'));
        $form->switch('have_adequate_isolation', __('Have adequate isolation'));
        $form->switch('have_adequate_labor', __('Have adequate labor'));
        $form->switch('aware_of_minimum_standards', __('Aware of minimum standards'));
        $form->text('signature_of_applicant', __('Signature of applicant'));
        $form->text('status', __('Status'))->default('pending');
        $form->number('inspector_id', __('Inspector id'));
        $form->textarea('status_comment', __('Status comment'));
        $form->text('registration_number', __('Registration number'));
        $form->date('valid_from', __('Valid from'))->default(date('Y-m-d'));
        $form->date('valid_until', __('Valid until'))->default(date('Y-m-d'));

        return $form;
    }
}
