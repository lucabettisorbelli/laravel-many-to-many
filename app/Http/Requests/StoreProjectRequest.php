<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjectRequest extends FormRequest
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
            "title" => "required|min:4|max:160",
            "description" => "max:65535",
            "image" => "url|max:255",
            "type_id" => "nullable|exists:types,id",
            "technologies" => "nullable|exists:technology,id"
        ];
    }

    public function messages()
    {
        return [
            "title.required" => "Ogni progetto deve avere un titolo"
        ];
    }
}
