@extends('layouts/app')

@section('titulo', 'Pesquisar')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <form class="form-horizontal">      
                <div class="form-group row">
                    <label for="numero_ata" class="col-md-2 control-label">Número</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="numero_ata" placeholder="Número da Ata">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="periodo_letivo" class="col-md-2 control-label">Período Letivo</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="periodo_letivo" placeholder="Ano">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="situacao" class="col-md-2 control-label">Situação</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="situacao" placeholder="Estado da Ata">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nome" class="col-md-2 control-label">Responsável</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="nome" placeholder="Falta fazer">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="titulo_ata" class="col-md-2 control-label">Título</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="titulo_ata" placeholder="Título da Ata">
                    </div>
                </div>                
            </form>
        </div>
    </div>
</div>
<br>
<div align="center">
    <a href="" class="btn btn-primary">
        <span class="glyphicon glyphicon-search"></span> 
    </a>
</div>
<br>
<h2 align="center">Listagem das Atas Criadas:</h2>
<br>
<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">Número da Ata</th>
            <th scope="col">Período Letivo</th>
            <th scope="col">Situação</th>
            <th scope="col">Data</th>
            <th scope="col">Título</th>
            <th scope="col">Ações</th>
            
        </tr>
    </thead>
    @foreach ($atas as $ata)
    <tbody>
        <tr>
            <td>{{ $ata->numero_da_ata }}</td>
            <td>{{ $ata->periodo_letivo }}</td>
            <td>{{ $ata->situacao }}</td>
            <td>{{ $ata->data_criacao }}</td>
            <td>{{ $ata->titulo }}</td
            <td>
                &nbsp;
                <a href="/ata/{{ $ata->id }}/editar.ata" >
                    <span class="glyphicon glyphicon-edit"></span> Editar
                </a>
                &nbsp;&nbsp;|&nbsp;&nbsp;
                <a href="/ata/{{ $ata->id }}/remover" 
                   onclick="return confirm('Quer remover essa Ata?');">
                    <span class="glyphicon glyphicon-trash"></span> Remover
                </a>
                &nbsp;&nbsp;|&nbsp;&nbsp;
                <a href="/ata/{{ $ata->id }}/visualizar.ata">
                    <span class="glyphicon glyphicon-check"></span> Visualizar
                </a>
                &nbsp;
            </td>
        </tr>
    </tbody>
    @endforeach
