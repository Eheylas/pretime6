@extends('layouts/app')

@section('titulo', 'make ato')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <form class="form-horizontal" action="/ato/salvar" method="post">   
                {{ csrf_field() }}
                <div class="form-group row">
                    <label for="numero_ato" class="col-md-2 control-label">Número</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="numero_ato" value="{{ old('numero_ato') }}" placeholder="Número do Ato"/>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="periodo_letivo" class="col-md-2 control-label">Período Letivo</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="periodo_letivo" value="{{ old('periodo_letivo') }}" placeholder="Ano"/>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="situacão" class="col-md-2 control-label">Situação</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="situacão" value="{{ old('situacão') }}" placeholder="Estado"/>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="data_de_criacao" class="col-md-2 control-label">Data de Criação</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="data_de_criacao" value="{{ old('data_de_criacao') }}" placeholder="DD/MM/AA"/>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="titulo_ato" class="col-md-2 control-label">Título do Ato</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="titulo_ato" value="{{ old('titulo_ato') }}" placeholder="Título do Ato"/>
                    </div>
                </div>                
                <div class="form-group row">
                    <label for="descricao_ato" class="col-md-2 control-label">Descrição do Ato</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="descricao_ato" size="20" value="{{ old('descricao_ato') }}" placeholder="Descrição do Ato"/>
                    </div>
                </div> 
                <br>
                <div align="center">
                    <input type="submit" value="Salvar" class="btn btn-primary"/>
                    &nbsp;&nbsp;
                    <a href="/ato/listar" class="btn btn-primary">Voltar</a>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
