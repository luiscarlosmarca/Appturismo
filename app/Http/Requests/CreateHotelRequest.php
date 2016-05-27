<?php

namespace Turismo\Http\Requests;

use Turismo\Http\Requests\Request;

class CreateHotelRequest extends Request
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
            'name'      =>  'required',
            'phone'     =>  'required',
            'address'   =>  'required',
            'email'     =>  'required|email',
            'details'   =>  'required|max:3000|min:50',
            'image'     =>  'required|image'
        ];
    }
}
