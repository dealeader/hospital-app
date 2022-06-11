<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UserUpdateRequest extends FormRequest
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
            'first_name' => 'required|alpha|max:32',
            'second_name' => 'required|alpha|max:64',
            'patronymic' => 'required|alpha|max:64',
            'document' => 'required|numeric|digits:11',
            'role' => 'required|string',
            'work_expirience' => 'required|numeric|integer',
            'category_id' => 'required|numeric|integer',
        ];
    }
}
