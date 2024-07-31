<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Encore\Admin\Form;
use Illuminate\Support\Facades\Auth;


class Utils extends Model
{
    use HasFactory;

    // Helper method to restrict access
    public static function restrictAccess(Form $form, $message)
    {
        $form->html('<div class="alert alert-danger">' . $message . '</div>');
        $form->footer(function ($footer) {
            $footer->disableReset();
            $footer->disableSubmit();
            $footer->disableViewCheck();
            $footer->disableEditingCheck();
            $footer->disableCreatingCheck();
        });
    }

    //Application forms
    //1.generic functions for all application forms
    //check if the status of the form is pending, rejected,halted or accepted
    public static function can_create_form($app_form)
    {
        if (!$app_form->valid_from) {
            return false;
        }

        if (!$app_form->valid_until) {
            return false;
        }

        $now = time();
        $then = strtotime($app_form->valid_until);

        if ($now < $then) {
            return true;
        } else {
            return false;
        }


        return true;
    }

    //renew or create a new form after its expired
    public static function can_renew_form($model_name)
    {
        $user = Admin::user();
        $model = "App\\Models\\" . ucfirst($model_name);
        $recs = $model::where('applicant_id',  $user->id)->get();

        foreach ($recs as $key => $value) {

            if ($value->status == 5) {
                $now = time();
                $then = strtotime($value->valid_until);
                if ($now < $then) {
                    return true;
                } else {
                    return false;
                }
            }
            return true;
        }
    }

    //check expiration date for all Forms
    public static function check_expiration_date($model_name, $id)
    {
        $model = "App\\Models\\" . ucfirst($model_name);
        $form = $model::find($id);
        if ($form->status == 5) {
            if ($form->valid_until != null && $form->valid_from != null) {
                $now = time();
                $then = strtotime($form->valid_until);

                if ($now < $then) {
                    return false;
                } else {
                    return true;
                }
            }
        }

        return false;
    }

    //check is form accepted
    public static function is_form_accepted($model_name)
    {
        $user = Admin::user();
        $model = "App\\Models\\" . ucfirst($model_name);
        $recs = $model::where('applicant_id',  $user->id)->get();
        foreach ($recs as $key => $value) {
            if ($value->status == 5) {
                return true;
            }
        }
    }
   

    //delete notification after the form has been viewed
    public static function delete_notification($model_name, $id)
    {
        
        $model = "App\\Models\\" .ucfirst($model_name);
        $user =auth('admin')->user();
        $form = $model::findOrFail($id);
        //delete the notification from the database once a user views the form
        if(!$user->inRoles(['administrator','ldf_admin']) )
        {
            
            if($form->status == 2 || $form->status == 3 || $form->status == 4 || $form->status == 5)
            {
                
                \App\Models\MyNotification::where(['receiver_id' => $user->id, 'model_id' => $id, 'model' => $model_name])->delete();
        
            }

        }

    
    }

    public static function take_action($model, $id , $url ,$show)
    {
        if (!Admin::user()->isRole('basic-user'))
        {
            //button link to the show-details form
            //check the status of the form being shown
            if($model->status == 1 || $model->status == 2 || $model->status == null)
            {
            $show->field('id','Action')->unescape()->as(function ($id)  use ($url)
            {
                return "<a href='/admin/$url/$id/edit' class='btn btn-primary' id='action-button-$id'>Take Action</a>";
            });
            }

            
        }

        if (Admin::user()->isRole('admin'))
        {
            //button link to the show-details form
           
            $show->field('id','Action')->unescape()->as(function ($id) use ($url)
            {
                return "<a href='/admin/$url/$id/edit' class='btn btn-primary' id='action-button-$id'>Take Action</a>";
            });
            
        }

        if (Admin::user()->isRole('basic-user')) 
        {
            if($model->status == 3 || $model->status == 4)
            {
                $show->field('id','Action')->unescape()->as(function ($id)  use ($url)
                {
                    return "<a href='/admin/$url/$id/edit' class='btn btn-primary' id='action-button-$id'>Take Action</a>";
                });
            }
        }

          //script to change the button to a loading button when clicked
          $script = <<<SCRIPT
          $(document).ready(function(){
              $('a.btn-primary').click(function(){
                  var id = $(this).attr('id');
                  $(this).html('<i class="fa fa-spinner fa-spin"></i> Loading...');
                  $(this).attr('disabled', 'disabled');
                  $(this).css('cursor', 'not-allowed');
              });
          });
          SCRIPT;
          Admin::script($script);
    }

    //check if inspector remarks exist
    public static function check_inspector_remarks()
    {
        $user = Auth::user();
        $recs = FormSr6::where('applicant_id',  $user->id)->get();
        foreach ($recs as $key => $value) {
            if ($value->inspector_remarks != null) {
                return true;
            }
        }
    }


}
