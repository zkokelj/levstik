@extends('layout')

@section('content')
<section class="container">
    @foreach(array_chunk($winners->toArray(), 3) as $x)
    <div class="columns features">
        @foreach($x as $w)
        <div class="column is-4">
            <div class="card is-shady">
                <div class="card-image has-text-centered">
                    
                    <img class="card-image-img" src="{{ asset('storage/'. $w['image1'] ) }}">
                </div>
                <div class="card-content">
                    <div class="content">
                        <h2>{{$w['year']}}</h2>
                        <h3>{{$w['full_name']}}</h3>

                        <p>
                            @if ( Config::get('app.locale') == 'si')
                                {{ $w['short_info'] }}  
                            @elseif ( Config::get('app.locale') == 'en')
                                {{ $w['short_info_en'] }}
                            @elseif ( Config::get('app.locale') == 'ch')
                                {{ $w['short_info_ch'] }}
                            @endif
                        </p>

                        <p>Purus semper eget duis at tellus at urna condimentum mattis. Non blandit massa enim nec. Integer enim neque volutpat ac tincidunt vitae semper quis. Accumsan tortor posuere ac ut consequat semper viverra nam.</p>
                        <p><a href="#">Learn more</a></p>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    @endforeach
</section>

@endsection

@section('title')
    Nagrajenci
@endsection