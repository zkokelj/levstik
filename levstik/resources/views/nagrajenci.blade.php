@extends('layout')

@section('content')
 
    @foreach(array_chunk($winners->toArray(), 3) as $x)
        <div class="row columns">
            @foreach($x as $w)
            <div class="column is-one-third">
                    <div class="card large">
                        <div class="card-image">
                            <figure class="image">
                                    <img src="{{ asset('storage/'. $w['image1'] ) }}" >
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
                                @if ( Config::get('app.locale') == 'si')
                                    {{ $w['short_info'] }}  
                                @elseif ( Config::get('app.locale') == 'en')
                                    {{ $w['short_info_en'] }}
                                @elseif ( Config::get('app.locale') == 'ch')
                                    {{ $w['short_info_ch'] }}
                                @endif
                            </div>
                            <div>
                                <a href="/nagrajenci/{{ $w['full_name_id'] }}">
                                <button class="button is-danger is-rounded">{{__('text.more_info')}}</button>
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