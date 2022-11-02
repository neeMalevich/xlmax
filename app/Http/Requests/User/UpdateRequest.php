<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|alpha',
            'surname' => 'required|string',
            'date_of_birth' => 'required|string',
            'gender' => 'required|integer',
            'city' => 'required|string',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Поле обязательное к заполнению',
            'name.alpha' => 'Поле должно содержать только буквы',
            'surname.required' => 'Поле обязательное к заполнению',
            'surname.alpha' => 'Поле должно содержать только буквы',
            'gender.required' => 'Поле обязательное к заполнению',
            'city.required' => 'Поле обязательное к заполнению',
            'date_of_birth.required' => 'Поле обязательное к заполнению',
            'city.string' => 'Поле должно быть строкой',

        ];
    }
}
