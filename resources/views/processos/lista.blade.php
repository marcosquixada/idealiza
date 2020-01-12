@extends('app')
@section('titulo','Processos')

@section('styles')
@endsection

@section('content')
    @parent
    <h2>Processos</h2>

    <div class="panel-body">
        @if(Session::has('mensagem_sucesso'))
            <div class="alert alert-success">
                {{ Session::get('mensagem_sucesso') }}
            </div>
        @endif

        {!! Form::open(['url' => 'processos/consultar']) !!}

        <div class="row">
            <div class="col-md-1"></div>

            <div class="col-md-2"></div>

            <div class="col-md-2">
                <h5><b>Status</b></h5>
                <select class="form-control" name="id_tiporegistro">
                    <option value="R">Iniciado</option>
                    <option value="E">Em Andamento</option>
                    <option value="S">Encerrado</option>
                </select>
            </div>

            <div class="col-md-2">
                <h5><b>Data Início</b></h5>
                <div class="form-group">
                    <div class="input-group" id="datePicker">
                        <input class="form-control date" type="text" name="data">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                    </div>
                </div>
            </div>

            <div class="col-md-2">
                <h5><b>Data Fim</b></h5>
                <div class="form-group">
                    <div class="input-group" id="datePicker">
                        <input class="form-control date" type="text" name="data">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                    </div>
                </div>
            </div>
        </div><!--/row-->

        <div class="row">
            <div class="col-md-1"></div>

            <div class="col-md-2"></div>

            <div class="col-sm-2">
                <h5><b>CPF</b></h5>
                <div class="form-group">
                    <div class="input-group">
                        <input class="form-control" type="text">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-search"></span></span>
                    </div>
                </div>
            </div><!--/col-->

            <div class="col-sm-4">
                <h5>&nbsp;</h5>
                <div class="form-group">
                    <input class="input-group form-control" type="text">
                </div>
            </div><!--/col-->
        </div><!--/row-->

        <div class="row">
            <div class="col-md-1"></div>

            <div class="col-md-2"></div>

            <div class="col-md-2">
                {!! Form::submit('Consultar', ['class' => 'btn btn-primary']) !!}
                <a class="btn btn-primary" href="{{ url('processos/novo') }}">Novo</a>
            </div>

            <div class="col-md-2">

            </div>

        </div><!--/row-->

        <br>

        <div class="row">
            <div class="col-md-1"></div>

            <div class="col-md-1"></div>

            <div class="col-md-8">
                <table class="table table-bordered table-hover">
                    <th>ID</th>
                    <th>Dt. Início</th>
                    <th>Dt. Conclusão</th>
                    <th>Status</th>
                    <th>Ações</th>
                    <tbody>
                    @foreach($processos as $processo)
                        <tr>
                            <td>{{ $processo->id }}</td>
                            <td>{{ $processo->dtInicio }}</td>
                            <td>{{ $processo->dtConclusao }}</td>
                            <td>{{ $processo->status }}</td>
                            <td>
                                <a href="/processos/{{ $processo->id }}/editar" class="btn btn-sm btn-default btn-detail">Editar</a>
                                {{ Form::open(['method' => 'DELETE', 'url' => '/processos/'.$processo->id, 'style' => 'display: inline;']) }}
                                <button type="submit" class="btn btn-sm btn-default btn-delete">Excluir</button>
                                {{ Form::close() }}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection


@section('scripts')
@endsection