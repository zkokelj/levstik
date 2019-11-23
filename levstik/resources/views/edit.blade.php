@extends('layout')

@section('content')
    <h1>Uredi</h1>
    
    <form method="POST" action="/nagrajenci/{{ $winner->id }}">

        @csrf
        @method('PATCH')
        
        
        <div>
            <input type=text" name="full_name" placeholder="Ime in priimek nagrajenca" value={{ $winner->full_name }}>
        </div>    
        <div>
            <input type=text" name="year" placeholder="XXXX" value={{ $winner->year }}>
        </div>
        <div>
            <textarea name="short_info" placeholder="Kratek opis" value={{ $winner->short_info }}></textarea>
        </div>
            
        <div>
            <textarea name="description" placeholder="Opis" value={{ $winner->description }}></textarea>
        </div>

        <div>
            <button type="submit">Shrani</button>
        </div>
    </form>

    <form method="POST" action="/nagrajenci/{{ $winner->id }}">

        @csrf

        @method('DELETE')
        <button type="submit">Izbriši</button>
        
    </form>


@endsection

@section('title')
    Uredi nagrajenca
@endsection