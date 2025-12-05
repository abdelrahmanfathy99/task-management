<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FilterTaskRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'page'            => ['nullable', 'integer'],
            'per_page'        => ['nullable', 'integer'],
            'title'           => ['nullable', 'string', 'max:255'],
            'description'     => ['nullable', 'string'],
            'assignee_ids'    => ['nullable', 'array'],
            'assignee_ids.*'  => ['nullable', 'integer'],
            'from_date'       => ['nullable', 'date'],
            'to_date'         => ['nullable', 'date', 'after_or_equal:from_date'],
            'status'          => ['nullable', 'in:completed,pending,canceled']
        ];
    }
}
