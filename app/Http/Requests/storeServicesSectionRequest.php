<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class storeServicesSectionRequest extends FormRequest
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
            'heading_title_top_P.*' =>'required|string|min:5|max:100' ,
        
 
            'heading_title_H.*'=>'required|string|min:5|max:100',
         
            'heading_title_bottom_P.*' => 'required|string|min:5|max:200'
        ];
    }
}
