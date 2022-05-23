<?php

namespace App\Http\Requests\Film;

use Illuminate\Foundation\Http\FormRequest;

class StoreFilmRequest extends FormRequest
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
            'cinema_id' => 'integer',
            'name'=>'required|string',
            'short_desc'=>'required|string|min:10',
            'full_desc'=>'required|string|min:50',
            'trailer'=>'required|string',
            'kinopoisk_link'=>'required|string',
        ];
    }
}
