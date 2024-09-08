<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentCreateRequest extends FormRequest
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
    public function rules(): array
    {
        return [
            'nim' => 'required|unique:students|max:8',
            'name' => 'required',
            'gender' => 'required',
            'jurusan_id' => 'required',
        ];
    }

    // untuk mengubah attribute
    public function attributes()
    {
        return ([
            'jurusan_id' => 'jurusan',
        ]);
    }

    // untuk merubah message
    public function messages()
    {
        return ([
            'nim.required' => "NIM wajib di isi",
            'nim.unique' => "NIM sudah digunakan mahasiswa lain",
            'nim.max' => "NIM tidak boleh lebih dari :max karakter",
            'name.required' => "Nama wajib di isi",
            'gender.required' => "Gender wajib di isi",
            'jurusan_id.required' => "Jurusan wajib di isi",
        ]);
    }
}
