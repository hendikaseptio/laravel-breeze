<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BusRequest extends FormRequest
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
            'plate_number' => ['required','max:10'],
            'brand' => ['required','string'],
            'seat' => ['required','numeric'],
            'price' => ['required','numeric','min:100'],
        ];
    }
}
