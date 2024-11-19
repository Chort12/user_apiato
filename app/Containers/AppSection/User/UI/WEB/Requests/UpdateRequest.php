<?php

//namespace AppSection\User\UI\WEB\Requests;
namespace App\Containers\AppSection\User\UI\WEB\Requests;
use App\Ship\Parents\Requests\Request;

class UpdateRequest extends Request
{
    public function rules(): array
    {
        return [
            'f_name' => 'string|required|max:50',
            'm_name' => 'string|max:50|nullable',
            'l_name' => 'string|max:50|required',
            'birthday' => 'date|required|before:today',
            'password' => 'string|min:4|nullable',
            'email' => 'string|email|required',
            'image' => 'file|max:2048',
        ];
    }

}
