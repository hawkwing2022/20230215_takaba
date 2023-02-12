<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TodoRequest extends FormRequest
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
            'task' => 'required|max:20'
        ];
    }
    public function messages()
    {
        return [
            'task.required' => '・タスクを入力してください。',
            'task.max' => '・タスクは20文字以内で入力してください。'
        ];
    }
}
