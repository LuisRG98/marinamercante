<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveEmbRequest extends FormRequest
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
            'id_emb'=>'required',
            'user_id'=>'required',
            'nom_prop'=>'required',
            'nom_emb'=>'required',
            'asc_cop'=>'nullable',
            'num_cert'=>'nullable',
            'clase_tipo'=>'required',
            'serv_emb'=>'nullable',
            'base_op'=>'nullable',
            'matricula'=>'nullable',
            'eslora'=>'nullable',
            'manga'=>'nullable',
            'puntal'=>'nullable',
            'trb'=>'nullable',
            'trn'=>'nullable',
            'sist_prop'=>'nullable',
            'francobordo'=>'nullable',
            'men_pel'=>'required',
            'num_max'=>'required',
            'material'=>'required',
            'anio'=>'required',
        ];
    }
}
