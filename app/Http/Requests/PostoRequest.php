<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostoRequest extends FormRequest
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
    switch($this->method()){
        case "GET":
        case "DELETE":
            {
                return []; 
            }
        case "POST":
            {
                return [
                    'cidade_id' => 'required|numeric|exists:cidades,id',
                    'reservatorio' => 'required|numeric|between:0,100.00',
                    'latitude' =>'numeric|required',
                    'longitude' =>'numeric|required',

                    
                ];
            }
        case "PUT":
            {
                return [
                    
                    'reservatorio' => 'numeric|between:0,100.00',
                    'latitude' =>'numeric',
                    'longitude' =>'numeric'
                    
                ];
            }
        }
    }
}
