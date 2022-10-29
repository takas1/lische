<?php

namespace App\Http\Requests;

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
            'genre_id' => ['required', 'numeric', 'between:1,6'],
            'name' => ['required', 'max:40'],
            'grade_id' => ['required', 'numeric', 'between:1,6'],
            'exam_date' => ['nullable', 'date'],
            'fee' => ['nullable', 'numeric', 'between:0,500000'],
            'status_id' => ['required', 'numeric', 'between:1,3'],
        ];
    }
}
