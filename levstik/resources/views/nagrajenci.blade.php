@extends('layout')

@section('content')
 
    @foreach(array_chunk($winners->toArray(), 3) as $x)
        <div class="row columns">
            @foreach($x as $w)
            <div class="column is-one-third">
                    <div class="card large">
                        <div class="card-image">
                            <figure class="image">
                                    <img src="https://images.unsplash.com/photo-1475778057357-d35f37fa89dd?dpr=1&auto=compress,format&fit=crop&w=1920&h=&q=80&cs=tinysrgb&crop=" alt="Image">
                            </figure>
                        </div>
                        <div class="card-content">
                            <div class="media">
                                <div class="media-content">
                                    <p class="title is-4 no-padding">{{ $w['year'] }}</p>
                                    <p class="subtitle is-3">{{ $w['full_name'] }}</p>
                                </div>
                            </div>
                            <div class="content">
                                    {{ $w['short_info'] }}
                            </div>
                            <div>
                                <a href="/nagrajenci/{{ $w['id'] }}">
                                    <button class="button is-danger is-rounded">Več informacij</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endforeach

@endsection

@section('title')
    Nagrajenci
@endsection