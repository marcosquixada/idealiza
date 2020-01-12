<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <title>Sistema Web | @yield('titulo')</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="{{asset('bower_components/bootstrap/dist/css/bootstrap.css')}}">
    <style>
        html {
            height: 100%;
        }
        body {
            background: -webkit-gradient(linear, left top, left bottom, from(#fff), to(#c4e1ed)) fixed;
        }
        /*body{*/
            /*background-attachment: fixed;*/
            /*height: 100%;*/
            /*margin: 0;*/
            /*background-repeat: no-repeat;*/
            /*background: #feffff; !* Old browsers *!*/
            /*background: -moz-linear-gradient(top,  #feffff 0%, #ddf1f9 35%, #c4e1ed 100%); !* FF3.6-15 *!*/
            /*background: -webkit-linear-gradient(top,  #feffff 0%,#ddf1f9 35%,#c4e1ed 100%); !* Chrome10-25,Safari5.1-6 *!*/
            /*background: linear-gradient(to bottom,  #feffff 0%,#ddf1f9 35%,#c4e1ed 100%); !* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ *!*/
            /*filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#feffff', endColorstr='#c4e1ed',GradientType=0 ); !* IE6-9 *!*/

        /*}*/
    </style>
    @yield('styles')
</head>
<body>
<div class="container-fluid">
    @section('content')
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">MaxProtocolo</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    @if(Auth::check())
                    <ul class="nav navbar-nav">
                        <li class="active dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Cadastros <b class="caret"></b><span class="sr-only">(current)</span></a>
                            <ul class="dropdown-menu">
                                <li><a href="/registros">Correspondências</a></li>
                                <li><a href="/tipos_correspondencia">Tipos de Correspondência</a></li>
                                <li><a href="/origens">Origens e Destinos</a></li>
                                <li class="divider"></li>
                                <li><a href="/tramites">Trâmites</a></li>
                                <li><a href="/natureza_tramites">Natureza Trâmites</a></li>
                                <li><a href="/users">Usuários</a></li>
                                <li class="divider"></li>
                                <li><a href="/secretarias">Secretarias</a></li>
                                <li><a href="/departamentos">Departamentos</a></li>
                                <li><a href="/tipos_registro">Tipos de Registros</a></li>
                                <li class="divider"></li>
                                <li><a href="/pessoas">Pessoas</a></li>
                                <li><a href="/campos">Campos</a></li>
                                <li><a href="/registro_campos">Registro - Campos</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Relatórios</a></li>
                        <li><a href="#">Gráficos</a></li>
                        <li><a href="#">Opções</a></li>
                        <li><a href="#">Ajuda</a></li>
                    </ul>
                        <p class="navbar-text navbar-right">Logado como {{Auth::user()->nome}}, <a
                                    href="/logout">Sair</a></p>
                    @endif
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
    @show
</div>
<script src="{{asset('bower_components/jquery/dist/jquery.js')}}"></script>
<script src="{{asset('bower_components/bootstrap/dist/js/bootstrap.js')}}"></script>
@yield('scripts')

</body>
</html>
