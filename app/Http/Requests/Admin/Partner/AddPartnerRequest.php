<?php

namespace App\Http\Requests\Admin\Partner;

use Illuminate\Foundation\Http\FormRequest;

class AddPartnerRequest extends FormRequest
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
            'en_name' => 'required|string|alpha',
            'ar_name' => 'required|string|alpha',
            'link' => 'required|url',
            'logo' => 'required|file:image|mimes:png,jpg,webp,jpeg'
        ];
    }
}
