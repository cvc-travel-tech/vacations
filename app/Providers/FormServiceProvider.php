<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Form;

class FormServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //

    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
        // dd('test');
        Form::component('bsText', 'admin.Form.text', ['name', 'value' => null, 'attributes' => []]);
        Form::component('ckeditor', 'admin.Form.ckeditor', ['name', 'value' => null, 'attributes' => []]);
        Form::component('bsTextarea', 'admin.Form.textarea', ['name', 'value' => null, 'attributes' => []]);
        Form::component('bsNumber', 'admin.Form.number', ['name', 'value' => null, 'attributes' => []]);
        Form::component('img', 'admin.Form.img', ['name', 'value' => null, 'attributes' => []]);
        Form::component('bsSelect', 'admin.Form.select', ['name', 'value' => null, 'attributes' => []]);
        Form::component('multiImg', 'admin.Form.multiImg', ['name', 'value' => null, 'attributes' => []]);

        //json
        Form::component('json', 'admin.Form.json', ['name', 'inputs'  => [], 'value' => null, 'attributes' => []]);
        Form::component('jsonBsText', 'admin.Form.json-form.text', ['jsonName', 'inputName', 'value' => null, 'attributes' => [], 'value_key' => null]);
        Form::component('jsonImg', 'admin.Form.json-form.img', ['jsonName', 'inputName', 'value' => null, 'attributes' => [], 'value_key' => null]);
        Form::component('jsonCkeditor', 'admin.Form.json-form.ckeditor', ['jsonName', 'inputName', 'value' => null, 'attributes' => [], 'value_key' => null]);
        Form::component('jsonBsTextarea', 'admin.Form.json-form.textarea', ['jsonName', 'inputName', 'value' => null, 'attributes' => [], 'value_key' => null]);
        Form::component('jsonBsNumber', 'admin.Form.json-form.number', ['jsonName', 'inputName', 'value' => null, 'attributes' => [], 'value_key' => null]);
        Form::component('jsonDatepicker', 'admin.Form.json-form.datepicker', ['jsonName', 'inputName', 'value' => null, 'attributes' => [], 'value_key' => null]);
    }
}
