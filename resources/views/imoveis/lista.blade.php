@extends('app')
@section('titulo','Imóveis')

@section('styles')
@endsection

@section('content')
    @parent
    <h2>Imóveis</h2>

    <div class="panel-body">
        @if(Session::has('mensagem_sucesso'))
            <div class="alert alert-success">
                {{ Session::get('mensagem_sucesso') }}
            </div>
        @endif

        {!! Form::open(['url' => 'imoveis/consultar']) !!}

        <div class="row">
            <div class="col-md-3"></div>

            <div class="col-md-2">
                <h5><b>Cliente</b></h5>
                <div class="form-group">
                    <div class="input-group" id="datePicker">
                        <input class="form-control date" type="text" name="data">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                    </div>
                </div>
            </div>

            <div class="col-md-2">
                <h5><b>Condomínio</b></h5>
                <div class="form-group">
                    <div class="input-group" id="datePicker">
                        <input class="form-control date" type="text" name="data">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                    </div>
                </div>
            </div>

            <div class="col-md-2">
                <h5><b>CEP</b></h5>
                <div class="form-group">
                    <div class="input-group" id="datePicker">
                        <input class="form-control date" type="text" name="data">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                    </div>
                </div>
            </div>
        </div><!--/row-->

        <div class="row">
            <div class="col-md-3"></div>

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
            <div class="col-md-3"></div>

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
                    @foreach($imoveis as $imovel)
                        <tr>
                            <td>{{ $imovel->id }}</td>
                            <td>{{ $imovel->dtInicio }}</td>
                            <td>{{ $imovel->dtConclusao }}</td>
                            <td>{{ $imovel->status }}</td>
                            <td>
                                <a href="/imoveis/{{ $imovel->id }}/editar" class="btn btn-sm btn-default">Editar</a>
                                {{ Form::open(['method' => 'DELETE', 'url' => '/imoveis/'.$imovel->id, 'style' => 'display: inline;']) }}
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