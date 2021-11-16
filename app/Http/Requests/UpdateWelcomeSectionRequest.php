<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateWelcomeSectionRequest extends FormRequest
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
            'ar_title_p' =>'required|string|min:5|max:60' ,
            'en_title_p'=>'required|string|min:5|max:60',
 
            'ar_title_h'=>'required|string|max:150',
            'en_title_h'=>'required|string|max:150',
            'ar_title_span' => 'nullable|string|max:60',
            'en_title_span' => 'nullable|string|max:60'
        ];
    }
}
