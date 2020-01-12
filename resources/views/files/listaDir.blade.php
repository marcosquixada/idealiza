@extends('home')
@section('titulo','Arquivos')

@section('styles')
@endsection

@section('content')
    @parent

    <div class="panel-body">
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
                    <th>Cliente</th>
                    <tbody>
                    @foreach($files as $file)
                        <?php $file = explode("/", $file)[2];?>
                        <tr>
                            {{--<td>{{ $file->id }}</td>--}}
                            <td><a href="/listaArquivos?dir={{$file}}&tipo={{$request->tipo}}">{{$file}}</a></td>
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