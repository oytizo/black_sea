<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StudentRequest extends FormRequest
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
        // $studentId = $this->route('student') ? $this->route('student')->id : null;
        $studentId = $this->route('student');

        return [
            'name' => 'required|string|max:255',
            'email' => [
                'required',
                'email',
                Rule::unique('students', 'email')->ignore($studentId),
            ],
            'contact' => 'required|numeric|min:11',
            'address' => 'required|string',
            'session' => 'required|string',
            'age' => 'required|date',
            'gender' => 'required|string'
        ];
    }
}
