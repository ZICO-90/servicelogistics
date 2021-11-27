<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PriceRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }
    public function rules()
    {
        return [
            'price' => 'required',
            'material_type_id' => 'required',
            'service_type_id' => 'required',
            'distance' => 'required',
            'unit_id' => 'required',
            'wheight'=> 'required|number',
            'currency_id'=>'required',
        ];
    }

    public function messages()
    {
        return [
            'price.required' => trans('validation.required'),
            'material_type_id.required' => trans('validation.required'),
            'service_type_id.unique' => trans('validation.required'),
            'distance.unique' => trans('validation.required'),
            'unit_id.required' => trans('validation.required'),
            'wheight.unique' => trans('validation.required'),
            'distance.unique' => trans('validation.required'),
        ];
    }
}
