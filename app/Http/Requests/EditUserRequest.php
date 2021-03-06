<?php

namespace Turismo\Http\Requests;

use Turismo\Http\Requests\Request;
use Illuminate\Routing\Route; 

class EditUserRequest extends Request
{
    public function __construct(Route $route)
    {
        $this->route =$route;
    }
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
            'email'     =>  'required|unique:users,email,'.$this->route->getParameter('id'),//no duplicar email, ignorando el actual, requiere use and contruct
            'password'  =>  '',
            'role'      =>  'required|in:user,hotelero'//seguridad para limitar el acceso.
        ];
    }
}
