@extends('home')
@section('titulo','Arquivos')

@section('styles')
@endsection

@section('content')
    @parent

    <div class="panel-body">
        @if(Session::has('mensagem_sucesso'))
            <div class="alert alert-success">
                {{ Session::get('mensagem_sucesso') }}
            </div>
        @endif

        @if(Auth::getUser()-> perfil == "ADMIN")
        <div class="row">
            <div class="col-sm-2 col-sm-offset-5 text-center">
                <a class="btn btn-primary" href="{{ url('/arquivos/create?tipo='.$request->tipo.'&dir='.$request->dir) }}">Novo</a>
            </div>
        </div>
        @endif

        <br>

        <div class="row">
            <div class="col-md-1"></div>

            <div class="col-md-1"></div>

            <div class="col-md-8">
                <table class="table table-bordered table-hover">
                    <th>Arquivo</th>
                    @if(Auth::getUser()-> perfil == "ADMIN")
                        <th>Ações</th>
                    @endif
                    <tbody>
                    @foreach($files as $file)
                        <?php $file = explode("/", $file)[3]; ?>
                        <tr>
                            {{--<td>{{ $file->id }}</td>--}}
                            <td><a href="getFile?nome={{$file}}&dir={{$request->dir}}&tipo={{$request->tipo}}">{{$file}}</a></td>
                            @if(Auth::getUser()-> perfil == "ADMIN")
                            <td>
                                {{ Form::open(['method' => 'DELETE', 'url' => '/processos/'.$file, 'style' => 'display: inline;']) }}
                                <button type="submit" class="btn btn-sm btn-default btn-delete">Excluir</button>
                                {{ Form::close() }}
                            </td>
                            @endif
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