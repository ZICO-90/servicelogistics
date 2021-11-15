<?php

namespace App\Http\Requests\Admin\InfoSite;

use App\Models\InfoSite;
use Illuminate\Foundation\Http\FormRequest;

class AddInfoSiteRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
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
        return array_merge(InfoSite::rule(),['logo' => 'required|mimes:png,jpg,jpeg,webp']);
    }
}
