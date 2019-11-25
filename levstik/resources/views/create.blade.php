@extends('layout')

@section('content')
    <h1>Nov Levstikov nagrajenec</h1>
    
    <form method="POST" action="/nagrajenci">

        {{ csrf_field() }}
        
        <div>
            <input type=text" name="full_name" placeholder="Ime in priimek nagrajenca">
        </div>    
        <div>
            <input type=text" name="year" placeholder="XXXX">
        </div>
        <div>
            <textarea name="short_info" placeholder="Kratek opis"></textarea>
        </div>
            
        <div>
            <textarea name="description" placeholder="Opis"></textarea>
        </div>

        <div>
            <button type="submit"> Ustvari nagrajenca</button>
        </div>
    </form>

    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error}}</li>
        @endforeach
    </ul>


@endsection

@section('title')
    Nagrajenci
@endsection