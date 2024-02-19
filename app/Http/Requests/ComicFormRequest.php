<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComicFormRequest extends FormRequest
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
            'title' => 'required | max:20',
            'author' => 'required | min:2',
        ];
    }

    // costumise error message
    public function messages()
    {

        return [
            'title.required' => "Please add a comic title",
            'title.max' => "Title has to be max 20 character long",
            'author.required' => "Please add author",
            'author.min' => "Author name has to be min 2 character long"
        ];
    }
}
