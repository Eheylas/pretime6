extends('layouts/app')

@section('titulo', 'Criação da Ata')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <form class="form-horizontal" action="/ata/salvar" method="post">   
                {{ csrf_field() }}
                <input type="hidden" name="id" value="{{ $ata->id }}"/>
                <div class="form-group row">
                    <label for="numero_da_ata" class="col-md-2 control-label">Número da Ata</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="numero_da_ata" value="{{ $ata->numero_da_ata }}"/>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="periodo_letivo" class="col-md-2 control-label">Período Letivo</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="periodo_letivo" value="{{ $ata->periodo_letivo }}"/>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="situacao" class="col-md-2 control-label">Situação</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="situacao" value="{{ $ata->situacao }}"/>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="data_criacao" class="col-md-2 control-label">Data de Criação</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="data_criacao" value="{{ $ata->data_criacao }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="titulo" class="col-md-2 control-label">Título da Ata</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="titulo" value="{{ $ata->titulo }}"/>
                    </div>
                </div>                
                <div class="form-group row">
                    <label for="reposnsável" class="col-md-2 control-label">Participantes</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="participantes" value="{{ $ata->participantes }}" disabled="disabled"/>
                    </div>
                </div>
                
                
                
                
                
                <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Lista de Atas</div>
                <a href="{{url('criar.ata')}}" class="btn btn-success">Criar</a>
                <table class="table">
                  <tr><th>Número da Ata</th>
                    <th>Titulo da Ata</th>
                    <th>Descrição da Ata</th></tr>
                     <?php foreach ($ata as $ata): ?>
                     <tr><td><?php echo $ata->numero_de_ata; ?></td>
                     <td><?php echo $ata->titulo; ?></td>
                     <td><?php echo $ata->descricao_ato; ?></td>
                     <td><a href="{{url('atas'.$ata->id. 'editar.ata')}}" class="btn btn-primary">Editar</a>
                     <td><a href="{{url('atas'.$ata->id. 'ata/listar')}}" class="btn btn-danger" onclick="return confirm">Remover</a>
                     </tr>
                    <?php endforeach; ?>
                </table>
                {{ $atas->links() }}
                </div>
            </div>
        </div>
    </div>
                
                
                
                <br>
                <div align="center">
                    <input type="submit" value="Salvar" class="btn btn-primary"/>
                    &nbsp;&nbsp;
                    <a href="/ata/listar" class="btn btn-primary">Voltar</a>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
