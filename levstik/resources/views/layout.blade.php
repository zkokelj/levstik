<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Levstikova aleja')</title>
    <link rel="shortcut icon" href="../images/fav_icon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://unpkg.com/bulma@0.8.0/css/bulma.min.css" />
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <style>
        body {
  font-family: Arial, Helvetica, sans-serif !important;
}
 /* The flip card container - set the width and height to whatever you want. We have added the border property to demonstrate that the flip itself goes out of the box on hover (remove perspective if you don't want the 3D effect */
.flip-card {
  background-color: transparent !important;
  width: 300px !important;
  height: 200px !important;
  border: 1px solid #f1f1f1 !important;
  perspective: 1000px !important; /* Remove this if you don't want the 3D effect */
}

/* This container is needed to position the front and back side */
.flip-card-inner {
  position: relative !important;
  width: 100% !important;
  height: 100% !important;
  text-align: center !important;
  transition: transform 0.8s !important;
  transform-style: preserve-3d !important;
}

/* Do an horizontal flip when you move the mouse over the flip box container */
.flip-card:hover .flip-card-inner {
  transform: rotateY(180deg) !important;
}

/* Position the front and back side */
.flip-card-front, .flip-card-back {
  position: absolute !important;
  width: 100% !important;
  height: 100% !important;
  backface-visibility: hidden !important;
}

/* Style the front side (fallback if image is missing) */
.flip-card-front {
  background-color: #bbb !important;
  color: black !important;
}

/* Style the back side */
.flip-card-back {
  background-color: dodgerblue !important;
  color: white !important;
  transform: rotateY(180deg) !important;
} 
    </style>
</head>


<body>
        <nav class="navbar is-danger">
                <div class="navbar-brand">
                    <a class="navbar-item" href="/">
                        {{__('text.title')}}
                    </a>
                </div>
                <div id="navbarExampleTransparentExample" class="navbar-menu">
                    <div class="navbar-start is-link">
                        <a class="navbar-item" href="/">
                            {{__('text.home')}}
                        </a>
                        <a class="navbar-item" href="/nagrajenci">
                            {{__('text.winners')}}
                        </a>
                        </div>
                    </div>

                    <div class="navbar-end">
                        <div class="navbar-item">
                            <div class="control">
                                <div class="select is-primary">
                                        <form method="POST" action="/language">
                                            @csrf
                                            <select name='language' onchange="this.form.submit()">
                                              <option
                                              @if ( Config::get('app.locale') == 'si')
                                                    selected
                                                @endif
                                              >Slovenščina </option>
                                              <option
                                              @if ( Config::get('app.locale') == 'en')
                                                    selected
                                                @endif
                                              >English</option>
                                              <option
                                              @if ( Config::get('app.locale') == 'ch')
                                                    selected
                                                @endif
                                              >Chinese</option>
                                            </select>
                                          </form>      
                                </div>
                            </div>
                        </div>
                    </div>
                    
            </nav>
        
        <section style="width: 75%; margin: 2% auto;">
        @yield('content')
        </section>

        <footer class="footer">
                <div class="content has-text-centered">
                  <p>
                    {{__('text.madeby')}} <a href="https://zigakokelj.com">Žiga Kokelj</a>.
                    
                    <!-- The source code is licensed
                    <a href="http://opensource.org/licenses/mit-license.php">MIT</a>. The website content
                    is licensed <a href="http://creativecommons.org/licenses/by-nc-sa/4.0/">CC BY NC SA 4.0</a>. -->
                  </p>
                  <p>   
                        @if (Auth::check())
                        <a href="/nagrajenci/create"><strong>Dodaj novega nagrajenca</strong></a>
                        <hr>
                        <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                         <strong>{{ __('Logout') }}</strong>
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