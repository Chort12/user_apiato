<?php

namespace App\Containers\AppSection\User\UI\WEB\Requests;

use App\Ship\Parents\Requests\Request;

class StoreRequest extends Request
{
    public function rules(): array
    {
        return [
            'f_name' => 'required|string|max:50',
            'l_name' => 'required|string|max:50',
            'm_name' => 'nullable|string|max:50',
            'password' => 'required|string|min:4',
            'birthday' => 'required|date|before:today',
            'email' => 'email|required|unique:users',
            'image' => 'file|max:2048'];
    }
}
