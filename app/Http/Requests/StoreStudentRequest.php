<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreStudentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        //yang bisa nginsert harus login dahulu
        // return false;
        //tidakperlu login
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name'=>'required|max:50',
            'date_birth'=>'required|date',
            'gender'=>'required|in:male,female',
            'address'=>'required',
        ];
    }
}
