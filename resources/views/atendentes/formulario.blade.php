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
                        <div class="input-group">
                            <input class="form-control" type="text" name="cpf">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-search"></span></span>
                        </div>
                    </div>
                </div><!--/col-->

                <div class="col-sm-3">
                    <h5><b>RG</b></h5>
                    <div class="form-group">
                        <div class="input-group">
                            <input class="form-control" type="text" name="rg">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-search"></span></span>
                        </div>
                    </div>
                </div><!--/col-->

                <div class="col-sm-3">
                    <h5><b>Nome</b></h5>
                    <div class="form-group">
                        <div class="input-group">
                            <input class="form-control" type="text" name="nome">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-search"></span></span>
                        </div>
                    </div>
                </div><!--/col-->

                <div class="col-sm-3">
                    <h5><b>Apelido</b></h5>
                    <div class="form-group">
                        <div class="input-group">
                            <input class="form-control" type="text" name="apelido">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-search"></span></span>
                        </div>
                    </div>
                </div><!--/col-->
            </div><!--/row-->

                <div class="row">
                    <div class="col-sm-3">
                        <h5><b>Data de Nascimento</b></h5>
                        <div class="form-group">
                            <div class="input-group">
                                <input class="form-control" type="text" name="dt_nasc">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-search"></span></span>
                            </div>
                        </div>
                    </div><!--/col-->

                    <div class="col-sm-3">
                        <h5><b>Email</b></h5>
                        <div class="form-group">
                            <div class="input-group">
                                <input class="form-control" type="text" name="email">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-search"></span></span>
                            </div>
                        </div>
                    </div><!--/col-->

                    <div class="col-sm-3">
                        <h5><b>CEP</b></h5>
                        <div class="form-group">
                            <div class="input-group">
                                <input class="form-control" type="text" name="cep">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-search"></span></span>
                            </div>
                        </div>
                    </div><!--/col-->

                    <div class="col-sm-3">
                        <h5><b>Endereço</b></h5>
                        <div class="form-group">
                            <div class="input-group">
                                <input class="form-control" type="text" name="endereco">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-search"></span></span>
                            </div>
                        </div>
                    </div><!--/col-->
                </div><!--/row-->

                <div class="row">
                    <div class="col-sm-3">
                        <h5><b>Número</b></h5>
                        <div class="form-group">
                            <div class="input-group">
                                <input class="form-control" type="text" name="numero">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-search"></span></span>
                            </div>
                        </div>
                    </div><!--/col-->

                    <div class="col-sm-3">
                        <h5><b>Complemento</b></h5>
                        <div class="form-group">
                            <div class="input-group">
                                <input class="form-control" type="text" name="complemento">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-search"></span></span>
                            </div>
                        </div>
                    </div><!--/col-->

                    <div class="col-sm-3">
                        <h5><b>Sexo</b></h5>
                        <div class="form-group">
                            <div class="input-group">
                                <input class="form-control" type="text" name="sexo">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-search"></span></span>
                            </div>
                        </div>
                    </div><!--/col-->

                    <div class="col-sm-3">
                        <h5><b>Estado</b></h5>
                        <div class="form-group">
                            <div class="input-group">
                                <input class="form-control" type="text" name="estado">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-search"></span></span>
                            </div>
                        </div>
                    </div><!--/col-->
                </div><!--/row-->

                <div class="row">
                    <div class="col-sm-3">
                        <h5><b>Cidade</b></h5>
                        <div class="form-group">
                            <div class="input-group">
                                <input class="form-control" type="text" name="cidade">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-search"></span></span>
                            </div>
                        </div>
                    </div><!--/col-->

                    <div class="col-sm-3">
                        <h5><b>Bairro</b></h5>
                        <div class="form-group">
                            <div class="input-group">
                                <input class="form-control" type="text" name="bairro">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-search"></span></span>
                            </div>
                        </div>
                    </div><!--/col-->

                    <div class="col-sm-3">
                        <h5><b>Tel. Residencial</b></h5>
                        <div class="form-group">
                            <div class="input-group">
                                <input class="form-control" type="text" name="telres">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-search"></span></span>
                            </div>
                        </div>
                    </div><!--/col-->

                    <div class="col-sm-3">
                        <h5><b>Celular</b></h5>
                        <div class="form-group">
                            <div class="input-group">
                                <input class="form-control" type="text" name="telcel">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-search"></span></span>
                            </div>
                        </div>
                    </div><!--/col-->
                </div><!--/row-->

                <div class="row">
                    <div class="col-sm-3">
                        <h5><b>Estado Civil</b></h5>
                        <div class="form-group">
                            <div class="input-group">
                                <input class="form-control" type="text" name="estado_civil">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-search"></span></span>
                            </div>
                        </div>
                    </div><!--/col-->

                    <div class="col-sm-3">
                        <h5><b>Renda</b></h5>
                        <div class="form-group">
                            <div class="input-group">
                                <input class="form-control valor" type="text" name="renda">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-search"></span></span>
                            </div>
                        </div>
                    </div><!--/col-->

                    <div class="col-sm-3">
                        <h5><b>Tipo Renda</b></h5>
                        <div class="form-group">
                            <div class="input-group">
                                <input class="form-control" type="text" name="tipo_renda">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-search"></span></span>
                            </div>
                        </div>
                    </div><!--/col-->

                    <div class="col-sm-3">
                        <h5><b>Compor Renda</b></h5>
                        <div class="form-group">
                            <div class="input-group">
                                <input class="form-control" type="text" name="compor_renda">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-search"></span></span>
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