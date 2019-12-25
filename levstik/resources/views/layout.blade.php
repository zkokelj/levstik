<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Levstikova aleja')</title>
    <link rel="shortcut icon" href="../images/fav_icon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://unpkg.com/bulma@0.8.0/css/bulma.min.css" />
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/cards.css">


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
                                              <option>Izbira jezika</option>
                                              <option>Slovenščina</option>
                                              <option>English</option>
                                              <option>Chinese</option>
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
                        @endif
                  </p>
                </div>
              </footer>
    </body>
</html>