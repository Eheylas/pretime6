<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Ata;
use App\Http\Requests\AtaRequest;
use Illuminate\Support\Facades\DB;

class AtaController extends Controller {
    public function __construct() {
        $this->middleware('auth');
    }
    public function listar() {
        return view('listar', ['atas' => Ata::paginate(10)]);
    }
    public function criar() {
        return view('criar');
    }
    public function editar($id) {
        return view('editar', ['ata' => Ata::findOrFail($id)]);
    }
    public function remover($id) {
        $ata = Ata::find($id);
        $ata->delete();
        return redirect('ata/listar');
    }
    public function salvar(AtaRequest $request) {
        $ata = new Ata;
        if ($request->has('id')) {
            $ata = Ata::find($request->id);
        }
        $ata->situacao = $request->situacao;
        $ata->titulo = $request->titulo;
        $ata->numero_da_ata = $request->numero_da_ata;
        $ata->periodo_letivo = $request->periodo_letivo;
        $ata->data_criacao = $request->data_criacao;
        $ata->participantes = $request->participantes;       
        $ata->save();
        return redirect('atas/listar');
    }
    public function visualizar($id) {
        return view('visualizar', ['ata' => Ata::findOrFail($id)]);
    }
    public function cancelar($id) {
        return view('cancelar', ['ata' => Ata::findOrFail($id)]);
    }
    public function assinar($id) {
        return view('assinar', ['ata' => Ata::find($id)]);
    }
  }
