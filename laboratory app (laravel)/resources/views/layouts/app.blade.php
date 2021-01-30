<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- <title>{{ config('app.name', 'Платные услуги ГБУЗ РК "РКБ им. Н.А. Семашко"') }}</title>-->
<title>Лаборатория ГБУЗ РК "РКБ им. Н.А. Семашко</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/chosen/chosen.jquery.js') }}"></script>
    <script src="{{ asset('js/chosen/chosen.proto.js') }}"></script>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<link href="{{ asset('css/main_menu.css') }}" rel="stylesheet">
	<link href="{{ asset('css/mystyles.css') }}" rel="stylesheet">
    <link href="{{ asset('js/chosen/chosen.css') }}" rel="stylesheet">

    <script language="JavaScript">
        $(document).ready(function () {
          $(".chosen-select").chosen();
       });
    </script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
         
            <div class="container">
                <div class="menuTitle">
                <a class="navbar-brand" href="{{ url('/') }}" style="font-size:14px; text-align:center;">
                    Клиническая лаборатория <br>ГБУЗ РК "РКБ им.Н.А. Семашко"
                </a>
            </div>
           <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->

                    </ul>
					
                     <!-- Center Of Navbar -->
                    @auth
					<ul class="nav justify-content-center MainMenu">
  						<li class="nav-item" style="display:block;">
    						<a class="nav-link link-main-menu" href="{{ url('/patient/add') }}">Добавить пациента</a>
  						</li>
  						<li class="nav-item" style="display:block;">
    						<a class="nav-link link-main-menu" href="{{ url('/contract/add') }}">Добавить договор</a>
  						</li>
  						<li class="nav-item" >
    						<a class="nav-link link-main-menu btn btn-outline-primary " href="{{ url('/analysis/add') }}">Добавить анализ</a>
  						</li>
  						                          
                          <li class="nav-item dropdown" style="display:none;">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Отчётность
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ url('/patient/list') }}">Пацинты и договора</a>
                                                 
                          </li>

                          <li class="nav-item" >
                          <a class="nav-link link-main-menu btn btn-outline-primary" href="{{ url('/analysis/list') }}">Результаты анализов</a>    
                         </li>

					</ul>
                   
                    @endauth
					 <!-- Center Of Navbar END -->

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Вход') }}</a>
                            </li>
                          <!--  @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Регистрация') }}</a>
                                </li>
                            @endif-->
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                  
                </div>
            </div>  
           <p class="menuTitle btn btn-secondary btn-sm">версия приложения 2.0.50</p>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

</body>
</html>
