@extends('app')
@section('titulo','Processos')

@section('styles')
@endsection

@section('content')
    @parent
    <h2>Cadastro de Processo</h2>
    <div class="panel-heading">
        Formulário
        <a class="pull-right" href="{{ url('processos') }}">Listagem</a>
    </div>

    <div class="container">
        <div class="container-fluid">
            @if(Request::is('*/editar'))
                {!! Form::model($registro, ['method' => 'PATCH', 'url' => 'registros/'.$registro->id]) !!}
            @else
                {!! Form::open(['url' => 'registros/salvar']) !!}
            @endif

            <div class="row">
                <div class="col-sm-4">
                    <h5><b>CPF</b></h5>
                    <div class="form-group">
                        <div class="input-group">
                            <input class="form-control" type="text">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-search"></span></span>
                        </div>
                    </div>
                </div><!--/col-->

                <div class="col-sm-8">
                    <h5>&nbsp;</h5>
                    <div class="form-group">
                        <input class="input-group form-control" type="text">
                    </div>
                </div><!--/col-->
            </div><!--/row-->

            <div class="row">
                <div class="col-md-4">
                    <h5><b>Imóvel</b></h5>
                    <select class="form-control" name="id_tiporegistro">
                        <option value="-">-</option>
                    </select>
                </div>

                <div class="col-md-4">
                    <h5><b>Valor</b></h5>
                    <div class="form-group">
                        <input class="input-group form-control" type="text">
                    </div>
                </div>

                <div class="col-md-4">
                    <h5><b>Desconto</b></h5>
                    <div class="form-group">
                        <input class="input-group form-control" type="text">
                    </div>
                </div>
            </div><!--/row-->

            <div class="row">
                <div class="col-sm-6">
                    <h5><b>Condição Comercial</b></h5>
                    <textarea class="col-sm-12 form-group input-group form-control"></textarea>
                </div>

                <div class="col-sm-6">
                    <h5><b>Observação</b></h5>
                    <textarea class="col-sm-12 form-group input-group form-control"></textarea>
                </div>
            </div>



            {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}

            {!! Form::close() !!}
        </div>
    </div>
@endsection


@section('scripts')
@endsection