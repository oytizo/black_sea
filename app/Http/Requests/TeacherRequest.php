<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class TeacherRequest extends FormRequest
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
        $teacherId = $this->route('teacher');

        return [
            'name' => 'required|string|max:255',
            'email' => [
                'required',
                'email',
                Rule::unique('teachers', 'email')->ignore($teacherId),
            ],
            'password' => [
                'nullable',
                'string',
                'min:8',
            ],
            'contact' => 'required|numeric|min:11',
            'address' => 'required|string',
            'age' => 'required|date',
            'gender' => 'required|string'
        ];
    }
}
