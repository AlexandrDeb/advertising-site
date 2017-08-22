<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateAdRequest extends Request
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

                'title' => 'required|max:255',
                'description' => 'required',
                'author_name' => 'required',
                'created_at_datetime' => 'required|date',

        ];
    }
}
