<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class TrackRequest extends Request
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
            "name" => "nullable|string|max:50",
            "audio" => 'required|mimetypes:audio/mpeg|max:25000',

        ];
    }
}
