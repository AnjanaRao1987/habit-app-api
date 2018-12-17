<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HabitRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            "name" => ['required', 'string', 'max:50'],
            "category" => ['required', 'string', 'max:50'],
            "description" => ['string', 'max:150'],
            "frequency" => ['required', 'integer'],
            "period" => ['required', 'string', 'max:15'],
            "motivation" => ['string'],
        ];
    }
}
