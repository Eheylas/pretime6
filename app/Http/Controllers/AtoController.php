<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Ato;
use App\Http\Requests\AtoRequest;

class AtoController extends Controller {
    public function __construct() {
        $this->middleware('auth');
    }
    public function listar() {
        return view('listar.ato', ['atos' => Ato::paginate(10)]);
    }
    public function criar() {
        return view('criar.ato');
    }
    public function editar($id) {
        return view('editar.ato', ['ato' => Ato::findOrFail($id)]);
    }
    public function remover($id) {
        $ato = Ato::find($id);
        $ato->delete();
        return redirect('ato/listar');
    }
    public function salvar(AtoRequest $request) {
        $ato = new Ato;
        if ($request->has('id')) {
            $ato = Ato::find($request->id);
        }
        $ato->numero_ato = $request->numero_ato;
        $ato->periodo_letivo = $request->periodo_letivo;
        $ato->situacão = $request->situacão;
        $ato->data_de_criacao = $request->data_de_criacao;
        $ato->titulo_ato = $request->titulo_ato;
        $ato->descricao = $request->descricao;
        $ato->save();
        return redirect('ato/listar');
    }

    public function vizualizar($id) {
        return view('vizualizar.ato', ['ato' => Ato::findOrFail($id)]);
    }
    public function cancelar($id) {
        return view('cancelar.ato', ['ato' => Ato::findOrFail($id)]);
    }
    public function publicar($id) {
        return view('publicar.ato', ['ato' => Ato::find($id)]);
    }
}