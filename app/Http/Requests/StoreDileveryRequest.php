<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDileveryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
        'ar_name'=>'required|string|unique:delivery_types|min:7|max:30',
        'en_name'=>'required|string|unique:delivery_types|min:7|max:40',
        'ar_details'=>'required|string|min:30',
        'en_details'=>'required|string|min:30',

        'ar_title_Up'=>'required|string|min:5|max:20',
        'en_title_Up'=>'required|string|min:5|max:20',
        'ar_title_down'=>'required|string||min:10|max:100',
        'en_title_down'=>'required|string||min:10|max:100',

        'icons'=>'required',
        'imgs'=>'required',
       
        ];
    }
}
