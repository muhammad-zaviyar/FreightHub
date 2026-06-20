<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormsController extends Controller
{
    
    public function form_advanced()
    {
        return view('pages.forms.form-advanced');
    }
    
    public function form_inputs()
    {
        return view('pages.forms.formelements.form-inputs');
    }
    
    public function form_check_radios()
    {
        return view('pages.forms.formelements.form-check-radios');
    }

    public function form_input_group()
    {
        return view('pages.forms.formelements.form-input-group');
    }

    public function form_select()
    {
        return view('pages.forms.formelements.form-select');
    }

    public function form_range()
    {
        return view('pages.forms.formelements.form-range');
    }

    public function form_input_masks()
    {
        return view('pages.forms.formelements.form-input-masks');
    }

    public function form_file_uploads()
    {
        return view('pages.forms.formelements.form-file-uploads');
    }

    public function form_datetime_pickers()
    {
        return view('pages.forms.formelements.form-datetime-pickers');
    }

    public function form_color_pickers()
    {
        return view('pages.forms.formelements.form-color-pickers');
    }

    public function floating_labels()
    {
        return view('pages.forms.floating-labels');
    }

    public function form_layout()
    {
        return view('pages.forms.form-layout');
    }

    public function form_wizards()
    {
        return view('pages.forms.form-wizards');
    }

    public function quill_editor()
    {
        return view('pages.forms.quill-editor');
    }

    public function form_validation()
    {
        return view('pages.forms.form-validation');
    }
    
    public function form_select2()
    {
        return view('pages.forms.form-select2');
    }

}
