<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class addconventionRequest extends FormRequest
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
            'ar_title'=>'required|string|max:191',
            'en_title'=>'required|string|max:191',
            'ar_content'=>'required|string',
            'en_content'=>'required|string',
            'customer'=>'required|string|max:191',
            'company'=>'required|string|max:191',
            'photo'=>'required',
        ];
    }
}
