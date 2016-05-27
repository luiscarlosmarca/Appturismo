<?php

namespace Turismo\Http\Requests;

use Turismo\Http\Requests\Request;

class CreateRoomRequest extends Request
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
            'price'      => 'required|integer',
            'image'     => 'required|image'
        ];
    }
}
