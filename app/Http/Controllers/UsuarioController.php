<?php

namespace App\Http\Controllers;

use App\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller {

    public function listar() {
        return Usuario::all();
    }

    public function criar() {
        
    }

    public function editar($id) {
        return Usuario::find($id);
    }

    public function remover($id) {
        $usuario = Usuario::find($id);
        $usuario->delete();
        return redirect('usuario/listar');
    }

    public function salvar(Request $request) {
        $usuario = new Usuario();

        if ($request->has('id')) {
            $usuario = Usuario::find($id);
        }

        $usuario->matricula = $request->matricula;
        $usuario->nome = $request->nome;
        $usuario->senha = $request->senha;
        $usuario->save();

        return redirect('usuario/listar');
    }

}
