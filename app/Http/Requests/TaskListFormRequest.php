<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TaskListFormRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:1000',
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
