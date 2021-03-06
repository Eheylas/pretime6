@extends('layouts/app')

@section('titulo', 'Cancel Ato')

@section('content')    

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <form class="form-horizontal" action="/ato/saveCancel" method="post"> 
                {{ csrf_field() }}
                <input type="hidden" name="id" value="{{ $ato->id }}"/>
                <div class="form-group row">
                    <label for="numero_ato" class="col-md-2 control-label">Número do Ato</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="numero_ato" value="{{ $ato->numero_ato }}" disabled="disabled"/>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="periodo_letivo" class="col-md-2 control-label">Período Letivo</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="periodo_letivo" value="{{ $ato->periodo_letivo }}" disabled="disabled"/>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="situacão" class="col-md-2 control-label">Situação</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="situacão" value="{{ $ato->situacão }}" disabled="disabled"/>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="reposnsável" class="col-md-2 control-label">Responsável</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="responsavel" value="{{ $ata->responsavel }}" disabled="disabled"/>
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="data" class="col-md-2 control-label">Data de Criação</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="data_de_criacao" value="{{ $ato->data_de_criacao }}" disabled="disabled"/>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="titulo_ato" class="col-md-2 control-label">Título</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="titulo_ato" value="{{ $ato->titulo_ato }}" disabled="disabled"/>
                    </div>
                </div>                
                <div class="form-group row">
                    <label for="descricao_ato" class="col-md-2 control-label">Descrição</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="descricao_ato" value="{{ $ato->descricao_ato }}" disabled="disabled"/>
                    </div>
                </div> 
               
                <br>
                <div align="center">
                    <input type="submit" value="Salvar" class="btn btn-primary"/>
                    &nbsp;&nbsp;
                    <a href="/ato/listar" class="btn btn-primary">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
</div>
