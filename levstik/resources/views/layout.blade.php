<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title', 'Levstikova aleja')</title>
    </head>
    <body>
        @yield('content')
        
        <ul>
            <li><a href="/">Domov</a></li>
            <li><a href="/nagrajenci">Nagrajenci</a></li>
        </ul>
    </body>
</html>