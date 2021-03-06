@extends('app')
@section('titulo','Processos')

@section('styles')
@endsection

@section('content')
    @parent
    <h2>Cadastro de Clientes</h2>
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
                <div class="col-sm-3">
                    <h5><b>CPF</b></h5>
                    <div class="form-group">
                        <div class="form-group">
                            <input class="input-group form-control" type="text">
                        </div>
                    </div>
                </div><!--/col-->

                <div class="col-sm-3">
                    <h5><b>RG</b></h5>
                    <div class="form-group">
                        <div class="form-group">
                            <input class="input-group form-control" type="text">
                        </div>
                    </div>
                </div><!--/col-->

                <div class="col-sm-3">
                    <h5><b>Nome</b></h5>
                    <div class="form-group">
                        <div class="form-group">
                            <input class="input-group form-control" type="text">
                        </div>
                    </div>
                </div><!--/col-->

                <div class="col-sm-3">
                    <h5><b>Apelido</b></h5>
                    <div class="form-group">
                        <div class="form-group">
                            <input class="input-group form-control" type="text">
                        </div>
                    </div>
                </div><!--/col-->
            </div><!--/row-->

                <div class="row">
                    <div class="col-sm-3">
                        <h5><b>Data de Nascimento</b></h5>
                        <div class="form-group">
                            <div class="form-group">
                                <input class="input-group form-control" type="text">
                            </div>
                        </div>
                    </div><!--/col-->

                    <div class="col-sm-3">
                        <h5><b>Email</b></h5>
                        <div class="form-group">
                            <div class="form-group">
                                <input class="input-group form-control" type="text">
                            </div>
                        </div>
                    </div><!--/col-->

                    <div class="col-sm-3">
                        <h5><b>CEP</b></h5>
                        <div class="form-group">
                            <div class="form-group">
                                <input class="input-group form-control" type="text">
                            </div>
                        </div>
                    </div><!--/col-->

                    <div class="col-sm-3">
                        <h5><b>Endereço</b></h5>
                        <div class="form-group">
                            <div class="form-group">
                                <input class="input-group form-control" type="text">
                            </div>
                        </div>
                    </div><!--/col-->
                </div><!--/row-->

                <div class="row">
                    <div class="col-sm-3">
                        <h5><b>Número</b></h5>
                        <div class="form-group">
                            <div class="form-group">
                                <input class="input-group form-control" type="text">
                            </div>
                        </div>
                    </div><!--/col-->

                    <div class="col-sm-3">
                        <h5><b>Complemento</b></h5>
                        <div class="form-group">
                            <div class="form-group">
                                <input class="input-group form-control" type="text">
                            </div>
                        </div>
                    </div><!--/col-->

                    <div class="col-sm-3">
                        <h5><b>Sexo</b></h5>
                        <div class="form-group">
                            <div class="form-group">
                                <input class="input-group form-control" type="text">
                            </div>
                        </div>
                    </div><!--/col-->

                    <div class="col-sm-3">
                        <h5><b>Estado</b></h5>
                        <div class="form-group">
                            <div class="form-group">
                                <input class="input-group form-control" type="text">
                            </div>
                        </div>
                    </div><!--/col-->
                </div><!--/row-->

                <div class="row">
                    <div class="col-sm-3">
                        <h5><b>Cidade</b></h5>
                        <div class="form-group">
                            <div class="form-group">
                                <input class="input-group form-control" type="text">
                            </div>
                        </div>
                    </div><!--/col-->

                    <div class="col-sm-3">
                        <h5><b>Bairro</b></h5>
                        <div class="form-group">
                            <div class="form-group">
                                <input class="input-group form-control" type="text">
                            </div>
                        </div>
                    </div><!--/col-->

                    <div class="col-sm-3">
                        <h5><b>Tel. Residencial</b></h5>
                        <div class="form-group">
                            <div class="form-group">
                                <input class="input-group form-control" type="text">
                            </div>
                        </div>
                    </div><!--/col-->

                    <div class="col-sm-3">
                        <h5><b>Celular</b></h5>
                        <div class="form-group">
                            <div class="form-group">
                                <input class="input-group form-control" type="text">
                            </div>
                        </div>
                    </div><!--/col-->
                </div><!--/row-->

                <div class="row">
                    <div class="col-sm-3">
                        <h5><b>Estado Civil</b></h5>
                        <div class="form-group">
                            <div class="form-group">
                                <input class="input-group form-control" type="text">
                            </div>
                        </div>
                    </div><!--/col-->

                    <div class="col-sm-3">
                        <h5><b>Renda</b></h5>
                        <div class="form-group">
                            <div class="form-group">
                                <input class="input-group form-control" type="text">
                            </div>
                        </div>
                    </div><!--/col-->

                    <div class="col-sm-3">
                        <h5><b>Tipo Renda</b></h5>
                        <div class="form-group">
                            <div class="form-group">
                                <input class="input-group form-control" type="text">
                            </div>
                        </div>
                    </div><!--/col-->

                    <div class="col-sm-3">
                        <h5><b>Compor Renda</b></h5>
                        <div class="form-group">
                            <div class="form-group">
                                <input class="input-group form-control" type="text">
                            </div>
                        </div>
                    </div><!--/col-->
                </div><!--/row-->

            {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}

            {!! Form::close() !!}
        </div>
    </div>
@endsection


@section('scripts')
@endsection