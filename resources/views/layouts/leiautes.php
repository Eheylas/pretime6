<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Sistema de Atas e Atos - @yield('title')</title>
        <link href="http://getbootstrap.com/docs/3.3/dist/css/bootstrap.min.css" rel="stylesheet">                
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">


        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script src = "https://code.jquery.com/jquery-2.2.2.min.js" integridade = "sha256-36cp2Co + / + 62rEAAYHLmRCPIych47CvdM uTBJwSzWjI =" crossorigin = "anonymous"></script>

    </head>
    <body>
        <div id="app">
            <nav class="navbar navbar-default navbar-static-top">
                <div class="container">
                    <div class="navbar-header">

                        <!-- Collapsed Hamburger -->
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                            <span class="sr-only">Toggle Navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                        <!-- Branding Image -->
                        <a class="navbar-brand" href="{{ url('/') }}">
                            {{ config('app.name', 'Laravel') }}
                        </a>
                    </div>

                    <div class="collapse navbar-collapse" id="app-navbar-collapse">
                        <!-- Left Side Of Navbar -->
                        <ul class="nav navbar-nav">
                            &nbsp;
                        </ul>
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                <li><a href="/inicio">Início</a></li>
                                <li><a href="" onclick="return confirm('**Falta fazer**');">Sobre</a></li>
                            </ul>
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="/login">Sair</a></li>
                            </ul>
                        </div>
                    </div>
            </nav>
        </div>
        <h1 align="center">@yield('titulo')</h1>
        @if (count($errors) > 0)
        <!-- Form Error List -->
        <div class="alert alert-danger">
            <strong>Whoops! Something went wrong!</strong>

            <br><br>

            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <br>
        <div class="container">
            @yield('conteudo')
        </div>
    </body>
</html>