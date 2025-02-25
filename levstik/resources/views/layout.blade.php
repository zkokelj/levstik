<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Levstikova aleja')</title>
    <link rel="shortcut icon" href="../images/fav_icon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://unpkg.com/bulma@0.8.0/css/bulma.min.css" />
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    
    <!-- These three links are because of new cards -->
    <link rel="stylesheet" type="text/css" href="{{url('/css/hero.css')}}">
    <link rel="stylesheet" href="https://unpkg.com/bulma-modal-fx/dist/css/modal-fx.min.css" />
    <script src="{{url('/js/bulma.js')}}"></script>

    <link rel="stylesheet" type="text/css" href="{{url('/css/slideshow.css')}}">


</head>

<body>
        <section class="hero is-info ">
            <div class="hero-head">
                <nav class="navbar">
                    <div class="navbar-brand" style="margin-left: 18%">
                        <a class="navbar-item" href="/">
                            {{__('text.title')}}            
                        </a>
                    </div>
                    <div class="container">
                        <div id="navbarMenu" class="navbar-menu" style="margin-right: 20%">
                            <div class="navbar-end">
                                <div class="tabs is-right">
                                    <ul>
                                        <li class="{{ Request::segment(1) == "" ? 'is-active' : '' }}"><a href="/">{{__('text.home')}}</a></li>
                                        <li class="{{ Request::segment(1) === 'nagrajenci' ? 'is-active' : '' }}"><a href="/nagrajenci">{{__('text.winners')}}</a></li>
                                        <li class="{{ Request::segment(1) === 'o_projektu' ? 'is-active' : '' }}"><a href="/o_projektu">{{__('text.about')}}</a></li>
                                    </ul> 
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </section>
        
        <section >
        @yield('content')
        </section>

        <footer class="footer">
                <div class="content has-text-centered">
                  
                  <form method="POST" action="/language" style="display: inline;">
                    @csrf
                    <button class="button is-medium 
                    @if ( Config::get('app.locale') == 'si') is-active @endif
                    slo-button">Slovensčina <input type="hidden" name="language" value="Slovenščina"/></button>
                  </form>
                  <form method="POST" action="/language" style="display: inline;">
                    @csrf
                    <button class="button is-medium 
                    @if ( Config::get('app.locale') == 'en') is-active @endif
                    eng-button">English <input type="hidden" name="language" value="English"/></button>
                  </form>
                  <form method="POST" action="/language" style="display: inline;">
                    @csrf
                    <button class="button is-medium  
                    @if ( Config::get('app.locale') == 'ch') is-active @endif
                    ch-button">Chinese <input type="hidden" name="language" value="Chinese"/></button>
                  </form>
                </div>

                <div class="content has-text-centered">
                  <p>
                    {{__('text.madeby')}} <a href="https://www.linkedin.com/in/%C5%BEiga-kokelj-1b7a6337/">Žiga Kokelj</a>
                  </p>
                  <p>   
                        <hr>
                        @if (Auth::check())
                        <a href="/nagrajenci/create"><strong>Dodaj novega nagrajenca</strong></a>
                        <hr>
                        <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                         <strong>{{ __('text.logout') }}</strong>
                         <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                          </a>
                        @endif
                  </p>
                </div>
              </footer>
    </body>
</html>