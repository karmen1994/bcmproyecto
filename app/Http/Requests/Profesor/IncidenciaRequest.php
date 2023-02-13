<?php

namespace App\Http\Requests\Profesor;

use Illuminate\Foundation\Http\FormRequest;

class IncidenciaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {   if($this->user_id== auth()->user()->id){
            return true;
        }else {
            return false;
        }
        
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        $rules = [
            'detalles'=> 'required',
            'turno'=>'required',
            'fecha'=>'required',
            'estado'=>'required'
        ];
        return $rules;
    }
}
