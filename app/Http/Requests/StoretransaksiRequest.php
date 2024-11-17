<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoretransaksiRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
<<<<<<< HEAD
        return false;
=======
<<<<<<< HEAD
        return false;
=======
        return true;
>>>>>>> 2f36051 (update)
>>>>>>> 74b14f5 (update)
    }

    /**
     * Get the validation rules that apply to the request.
     *
<<<<<<< HEAD
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
=======
<<<<<<< HEAD
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
=======
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
>>>>>>> 2f36051 (update)
>>>>>>> 74b14f5 (update)
     */
    public function rules(): array
    {
        return [
            //
        ];
    }
}
