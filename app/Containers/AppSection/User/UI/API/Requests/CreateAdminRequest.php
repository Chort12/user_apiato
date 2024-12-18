<?php

namespace App\Containers\AppSection\User\UI\API\Requests;

use App\Ship\Parents\Requests\Request;

class CreateAdminRequest extends Request
{
    /**
     * Define which Roles and/or Permissions has access to this request.
     */
    protected array $access = [
        'permissions' => 'create-admins',
        'roles' => '',
    ];

    /**
     * Id's that needs decoding before applying the validation rules.
     */
    protected array $decode = [

    ];

    /**
     * Defining the URL parameters (`/stores/999/items`) allows applying
     * validation rules on them and allows accessing them like request data.
     */
    protected array $urlParameters = [

    ];

    public function rules(): array
    {
        return [
//            'email' => 'required|email|max:40|unique:users,email',
//            'password' => 'required|min:3|max:30',
//            'name' => 'min:2|max:50',

            'f_name' => 'required|string|max:50',
            'l_name' => 'nullable|string|max:50',
            'm_name' => 'required|string|max:50',
            'password' => 'required|string|min:4',
            'birthday' => 'required|date|before:today',
            'email' => 'email|required|unique:users',
            'image' => 'file|max:2048',
        ];
    }

    public function authorize(): bool
    {
        return $this->check([
            'hasAccess',
        ]);
    }
}
