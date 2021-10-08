<?php

namespace App\Http\Requests\Employee;

use Illuminate\Foundation\Http\FormRequest;

class StoreEmployeeRequest extends FormRequest
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
            'name'          =>'required|string',
            'position'      =>'required|string',
            'email'         =>'string|email|unique:employees',
            'phone'         =>'string|numeric',
            'avatar'        =>'string',
            'salary'        =>'required|integer',
            'start_date'    =>'string',
        ];
    }
}
