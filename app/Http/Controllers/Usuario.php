<?php

namespace App\Http\Controllers;

use App\Models\Usuario as ModelsUsuario;
use Illuminate\Http\Request;

class Usuario extends Controller
{
    public function cadastrar(){
        return view('usuarios.cadastro');
    }

    public function salvar(Request $request){
        $request->validate([
            "nome" => "required",
            "email" => "required|email|unique:usuario,email",
            "senha" => "required|min:8"
        ]);
        if (ModelsUsuario::cadastrar($request)) {
            return view('usuarios.sucesso',[
                "fulano" => $request->input("nome")
            ]);
        }else{
            echo "Ops! algo errado aconteceu";
        }
    }
}
