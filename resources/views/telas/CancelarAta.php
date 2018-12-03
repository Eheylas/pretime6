@extends('layouts/app')

@section('titulo', 'Cancelar Ata')

@section('content')        

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <form class="form-horizontal" action="/ata/saveCancel" method="post"> 
                {{ csrf_field() }}
                <input type="hidden" name="id" value="{{ $ata->id }}"/>
                <div class="form-group row">
                    <label for="numero_da_ata" class="col-md-2 control-label">Número Da Ata</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="numero_da_ata" value="{{ $ata->numero_da_ata }}" disabled="disabled"/>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="periodo_letivo" class="col-md-2 control-label">Período Letivo</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="periodo_letivo" value="{{ $ata->periodo_letivo }}" disabled="disabled"/>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="situacao" class="col-md-2 control-label">Situação</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="situacao" value="{{ $ata->situacao }}" disabled="disabled"/>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="data" class="col-md-2 control-label">Data</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="data" value="{{ $ata->data_criacao }}" disabled="disabled"/>
                    </div>
                </div>
                
                   </div>
                </div>
                <div class="form-group row">
                    <label for="Responsável" class="col-md-2 control-label">Responsável</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="Responsável" value="{{ $ata->responsavel }}" disabled="disabled"/>
                    </div>
                </div>
      
 
                
                <div class="form-group row">
                    <label for="titulo_da_ata" class="col-md-2 control-label">Título da Ata</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="titulo_da_ata" value="{{ $ata->titulo }}" disabled="disabled"/>
                    </div>
                </div>                
               
            
                <br>
                <div align="center">
                    <input type="submit" value="Salvar" class="btn btn-primary"/>
                    &nbsp;&nbsp;
                    <a href="/ata/listar" class="btn btn-primary">Desistir</a>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
