<?php

namespace App\Http\Requests\Cinema;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCinemaRequest extends FormRequest
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
            'name'=>'required|string',
            'short_desc'=>'string',
            'full_desc'=>'string',
            'poster'=>'image|mimes:jpg,jpeg,png',
        ];
    }
}
