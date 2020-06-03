<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestAdminSlide extends FormRequest
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
            'sd_title' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'sd_title.required' => 'Danh mục không được để trống',
        ];
    }
}
