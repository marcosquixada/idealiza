<!DOCTYPE html>
<html lang="en" ng-app>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Premier</title>

	<link href="{{ asset('/css/app.css') }}" rel="stylesheet">

	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
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
	<script type="text/javascript">
        $('.date').mask('00/00/0000');
        $( ".datepicker" ).datepicker();
        $('.time').mask('00:00:00');
        $('.date_time').mask('00/00/0000 00:00:00');
        $('.cep').mask('00000-000');
        $('.phone').mask('0000-0000');
        $('.phone_with_ddd').mask('(00) 0000-0000');
        $('.phone_us').mask('(000) 000-0000');
        $('.mixed').mask('AAA 000-S0S');
        $('.cpf').mask('000.000.000-00', {reverse: true});
        $('.cnpj').mask('00.000.000/0000-00', {reverse: true});
        $('.money').mask('000.000.000.000.000,00', {reverse: true});
	</script>
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="/">Premier</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				@if(Auth::check())
					<ul class="nav navbar-nav">
						<li class="active dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Cadastros <b class="caret"></b><span class="sr-only">(current)</span></a>
							<ul class="dropdown-menu">
								<li><a href="/atendentes">Atendentes</a></li>
								<li><a href="/clientes">Clientes</a></li>
								<li class="divider"></li>
								<li><a href="/construtoras">Construtoras</a></li>
								<li><a href="/condominios">Condomínios</a></li>
								<li><a href="/imoveis">Imóveis</a></li>
								<li class="divider"></li>
								<li><a href="/processos">Processos</a></li>
							</ul>
						</li>
						<li><a href="#">Relatórios</a></li>
						<li><a href="#">Gráficos</a></li>
						<li><a href="#">Opções</a></li>
						<li><a href="#">Ajuda</a></li>
					</ul>
					<p class="navbar-text navbar-right">Logado como {{Auth::user()->nome}}, <a
								href="/auth/logout">Sair</a></p>
				{{--@else--}}
					{{--<li><a href="{{ url('/auth/login') }}">Login</a></li>--}}
					{{--<li><a href="{{ url('/auth/register') }}">Register</a></li>--}}
				@endif
			</div><!-- /.navbar-collapse -->

			{{--<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">--}}
				{{--<ul class="nav navbar-nav">--}}
					{{--<li><a href="{{ url('/') }}">Home</a></li>--}}
				{{--</ul>--}}

				{{--<ul class="nav navbar-nav navbar-right">--}}
					{{--@if (Auth::guest())--}}
						{{--<li><a href="{{ url('/auth/login') }}">Login</a></li>--}}
						{{--<li><a href="{{ url('/auth/register') }}">Register</a></li>--}}
					{{--@else--}}
						{{--<li class="dropdown">--}}
							{{--<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>--}}
							{{--<ul class="dropdown-menu" role="menu">--}}
								{{--<li><a href="{{ url('/auth/logout') }}">Logout</a></li>--}}
							{{--</ul>--}}
						{{--</li>--}}
					{{--@endif--}}
				{{--</ul>--}}
			{{--</div>--}}
		</div>
	</nav>

	@yield('content')

	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
	<script src="http://code.angularjs.org/1.0.1/angular-1.0.1.min.js"></script>

</body>
</html>
