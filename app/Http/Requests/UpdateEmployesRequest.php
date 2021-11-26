<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Carbon\Carbon ;
class UpdateEmployesRequest extends FormRequest
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
            'ar_name' =>'required|string|min:7|max:30' ,
            'en_name'=>'required|string|min:7|max:30',
    
            'ar_Country'=>'required|string|max:20',
            'en_Country'=>'required|string|max:20',
    
            'ar_details'=>'required|string|min:10',
            'en_details'=>'required|string|min:10',
    
            'ar_city' =>'required|string|max:20',
            'en_city'=>'required|string|max:20',
    
            'birth_date'=> [
                'required',
                
                'before:' . Carbon::now()->subYears(18)->format('d-m-Y')
              ],
            'phone'=>'required|string|unique:employes,phone,'.$this->get('employeId'),
            'email'=>'required|string|unique:employes,email,'.$this->get('employeId'),
            'imgs'=> 'nullable|mimes:jpg,jpeg,png'
        ];
    }
}
