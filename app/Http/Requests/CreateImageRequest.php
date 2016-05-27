<?php

namespace Turismo\Http\Requests;

use Turismo\Http\Requests\Request;

class CreateImageRequest extends Request
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
            'title'     => 'required',
            'name'     => 'required|image'
        ];
    }
}
