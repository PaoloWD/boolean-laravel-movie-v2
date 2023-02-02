<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreActorRequest extends FormRequest
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
            'name'=>'required|min:5|max:255',
            'surname'=>'required|string',   
        ];
    }

    public function messages(){
        return[
            "name.required" => "Il nome è obbligatorio",
            "name.min" =>  "Il nome deve avere almeno :min caratteri",
            "name.max" =>  "Il nome deve avere massimo :max caratteri",
            "surname.required" => "Il nome è obbligatorio",
            "surname.min" =>  "Il nome deve avere almeno :min caratteri",
            "surname.max" =>  "Il nome deve avere massimo :max caratteri",
            
        ];
    }
    
}