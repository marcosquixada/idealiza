@extends('home')
@section('titulo','Arquivos')

@section('styles')
@endsection

@section('content')
    @parent
    <h2>Upload de Arquivos</h2>

    <div class="panel-body">
        @if(Session::has('mensagem_sucesso'))
            <div class="alert alert-success">
                {{ Session::get('mensagem_sucesso') }}
            </div>
        @endif

        {!! Form::open(['url' => url(Request::path()), 'files' => true]) !!}

        <div class="row">
            <div class="col-sm-2">
                <h5><b>Cliente</b></h5>
                <div class="form-group">
                    <div class="input-group">
                        <input type="hidden" name="tipo" value="{{$request->tipo}}" />
                        <input class="form-control" type="text" id="clienteId" name="id_cliente">
                        <span class="input-group-addon">
                                <a href="#">
                                    <span class="glyphicon glyphicon-search" data-toggle="modal" data-target="#clientesModal"></span>
                                </a>
                            </span>
                        @include('clientes/lov')
                    </div>
                </div>
            </div><!--/col-->

            <div class="col-sm-4">
                <h5>&nbsp;</h5>
                <div class="form-group">
                    <input class="input-group form-control" type="text" name="dir" id="clienteDesc" value="{{$request->dir}}">
                </div>
            </div><!--/col-->
        </div>

        <div class="row">
            <div class="col-sm-6">
                <h5><b>Arquivo</b></h5>
                <div class="form-group">
                    <input class="input-group form-control" type="file" id="file" name="file">
                </div>
            </div><!--/col-->
        </div>

        {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}

        {!! Form::close() !!}
    </div>
@endsection


@section('scripts')
@endsection