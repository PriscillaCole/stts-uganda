<?php

namespace App\Admin\Controllers;

use App\Models\FormQds;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class FormQdsController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'FormQds';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new FormQds());

        $grid->column('id', __('Id'));
        $grid->column('applicant_id', __('Applicant id'));
        $grid->column('name_of_applicant', __('Name of applicant'));
        $grid->column('address', __('Address'));
        $grid->column('phone_number', __('Phone number'));
        $grid->column('farm_location', __('Farm location'));
        $grid->column('premises_location', __('Premises location'));
        $grid->column('years_of_expirience', __('Years of expirience'));
        $grid->column('have_been_qds', __('Have been qds'));
        $grid->column('previous_grower_number', __('Previous grower number'));
        $grid->column('have_adequate_storage_facility', __('Have adequate storage facility'));
        $grid->column('cropping_history', __('Cropping history'));
        $grid->column('have_adequate_isolation', __('Have adequate isolation'));
        $grid->column('isolation_distance', __('Isolation distance'));
        $grid->column('have_adequate_labor', __('Have adequate labor'));
        $grid->column('number_of_labors', __('Number of labors'));
        $grid->column('aware_of_minimum_standards', __('Aware of minimum standards'));
        $grid->column('signature_of_applicant', __('Signature of applicant'));
        $grid->column('recommendation', __('Recommendation'));
        $grid->column('certification', __('Certification'));
        $grid->column('status', __('Status'));
        $grid->column('valid_from', __('Valid from'));
        $grid->column('valid_until', __('Valid until'));
        $grid->column('inspector_id', __('Inspector id'));
        $grid->column('grower_number', __('Grower number'));
        $grid->column('registration_number', __('Registration number'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

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
        $show = new Show(FormQds::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('applicant_id', __('Applicant id'));
        $show->field('name_of_applicant', __('Name of applicant'));
        $show->field('address', __('Address'));
        $show->field('phone_number', __('Phone number'));
        $show->field('farm_location', __('Farm location'));
        $show->field('premises_location', __('Premises location'));
        $show->field('years_of_expirience', __('Years of expirience'));
        $show->field('have_been_qds', __('Have been qds'));
        $show->field('previous_grower_number', __('Previous grower number'));
        $show->field('have_adequate_storage_facility', __('Have adequate storage facility'));
        $show->field('cropping_history', __('Cropping history'));
        $show->field('have_adequate_isolation', __('Have adequate isolation'));
        $show->field('isolation_distance', __('Isolation distance'));
        $show->field('have_adequate_labor', __('Have adequate labor'));
        $show->field('number_of_labors', __('Number of labors'));
        $show->field('aware_of_minimum_standards', __('Aware of minimum standards'));
        $show->field('signature_of_applicant', __('Signature of applicant'));
        $show->field('recommendation', __('Recommendation'));
        $show->field('certification', __('Certification'));
        $show->field('status', __('Status'));
        $show->field('valid_from', __('Valid from'));
        $show->field('valid_until', __('Valid until'));
        $show->field('inspector_id', __('Inspector id'));
        $show->field('grower_number', __('Grower number'));
        $show->field('registration_number', __('Registration number'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new FormQds());

        $form->number('applicant_id', __('Applicant id'));
        $form->text('name_of_applicant', __('Name of applicant'));
        $form->textarea('address', __('Address'));
        $form->text('phone_number', __('Phone number'));
        $form->textarea('farm_location', __('Farm location'));
        $form->textarea('premises_location', __('Premises location'));
        $form->number('years_of_expirience', __('Years of expirience'));
        $form->switch('have_been_qds', __('Have been qds'));
        $form->text('previous_grower_number', __('Previous grower number'));
        $form->switch('have_adequate_storage_facility', __('Have adequate storage facility'));
        $form->textarea('cropping_history', __('Cropping history'));
        $form->switch('have_adequate_isolation', __('Have adequate isolation'));
        $form->number('isolation_distance', __('Isolation distance'));
        $form->switch('have_adequate_labor', __('Have adequate labor'));
        $form->number('number_of_labors', __('Number of labors'));
        $form->switch('aware_of_minimum_standards', __('Aware of minimum standards'));
        $form->text('signature_of_applicant', __('Signature of applicant'));
        $form->textarea('recommendation', __('Recommendation'));
        $form->textarea('certification', __('Certification'));
        $form->text('status', __('Status'))->default('pending');
        $form->date('valid_from', __('Valid from'))->default(date('Y-m-d'));
        $form->date('valid_until', __('Valid until'))->default(date('Y-m-d'));
        $form->number('inspector_id', __('Inspector id'));
        $form->text('grower_number', __('Grower number'));
        $form->text('registration_number', __('Registration number'));

        return $form;
    }
}
