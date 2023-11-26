<?php

namespace App\Http\Requests\Backend\AdminUser;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class UpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(Request $r): array
    {
        $id=encryptor('decrypt',$r->uptoken);
        return [
            'userName'=>'required',
            'EmailAddress'=>'nullable|unique:admin_users,email,'.$id,
            'contactNumber'=>'required|unique:admin_users,contact_no,'.$id
        ];
    }
}
