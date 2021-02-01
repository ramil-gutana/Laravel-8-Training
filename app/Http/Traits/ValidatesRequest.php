<?php

namespace App\Http\Traits;

use Illuminate\Support\Facades\Validator;

trait ValidatesRequest{

    public function ValidatesRequest(array $data){
        return Validator::make($data,$this->rules())->validate();
    }

    public function rules(){
        return [
            'title' => 'required|min:5|regex:/^[A-Za-z0-9. \'",-]+$/',
            'content' => 'required|min:15'
        ];
    }
}

