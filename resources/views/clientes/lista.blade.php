@extends('app')
@section('titulo','Clientes')

@section('styles')
@endsection

@section('content')
    @parent
    <h2>Clientes</h2>

    <div class="panel-body">
        @if(Session::has('mensagem_sucesso'))
            <div class="alert alert-success">
                {{ Session::get('mensagem_sucesso') }}
            </div>
        @endif

        {!! Form::open(['url' => 'clientes/consultar']) !!}

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
                <a class="btn btn-primary" href="{{ url('clientes/novo') }}">Novo</a>
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
                    @foreach($clientes as $cliente)
                        <tr>
                            <td>{{ $cliente->id }}</td>
                            <td>{{ $cliente->dtInicio }}</td>
                            <td>{{ $cliente->dtConclusao }}</td>
                            <td>{{ $cliente->status }}</td>
                            <td>
                                <a href="/clientes/{{ $cliente->id }}/editar" class="btn btn-sm btn-default">Editar</a>
                                {{ Form::open(['method' => 'DELETE', 'url' => '/clientes/'.$cliente->id, 'style' => 'display: inline;']) }}
                                <button type="submit" class="btn btn-sm btn-default">Excluir</button>
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