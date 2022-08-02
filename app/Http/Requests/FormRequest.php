<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class FormRequest extends Request
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
            "name" => "string|required|max:50",
            "date" => "string|date|required",
            "img_cover" => 'required|image|max:20000',

        ];
    }
}