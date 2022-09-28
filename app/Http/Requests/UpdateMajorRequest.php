<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateMajorRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            //validasi form update
            //penggunaan "unique:majors,name" untuk validasi ketika ada nama yang sudah di inputkan
            //penggunaan ".$this->major->id" untuk validasi ketika hanya ingin update description
            'name'=>'required|max:50|unique:majors,name,'.$this->major->id,
            'description'=>'required',
        ];
    }
}
