<?php

namespace App\Http\Requests\Film;

use Illuminate\Foundation\Http\FormRequest;

class UpdateFilmRequest extends FormRequest
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
            'cinema_id'=>'required|string',
            'name'=>'required|string',
            'short_desc'=>'required|string',
            'full_desc'=>'required|string',
            'trailer'=>'required|string',
            'kinopoisk_link'=>'required|string',
        ];
    }
}
