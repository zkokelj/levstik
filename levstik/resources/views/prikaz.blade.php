@extends('layout')

@section('content')

<section class="section" id="about">

    <!-- START ARTICLE -->
    <div class="card article">
        <div class="card-content">
                
           
            <div class="content article-body">
                    <div class="media-center">
                                                                
                            <p>
                                    
                                </p>

                                <section class="section">
                                        <div class="columns">
                                          <div class="column is-10 is-offset-1">
                                            <div class="content is-medium">
                                              <h2 class="subtitle">{{$winner->year}}</h2>
                                              <h1 class="title">{{$winner->full_name}}</h1>
                                              <p>
                                                  @if ( Config::get('app.locale') == 'si')
                                                  {{ $winner->description }}  
                                                @elseif ( Config::get('app.locale') == 'en')
                                                  {{ $winner->description_en }}
                                                @elseif ( Config::get('app.locale') == 'ch')
                                                  {{ $winner->description_ch }}
                                                @endif
                                              </p>
                                            </div>
                                          </div>
                                        </div>
                                      </section>

                            

                            <!-- Slideshow container -->
                            <div class="slideshow-container">

                                <!-- Full-width images with number and caption text -->
                                <div class="mySlides fade">
                                <div class="numbertext">1 / 2</div>
                                <img src="{{ asset('storage/'. $winner->image1 ) }}" style="width:100%">
                                </div>
                            
                                <div class="mySlides fade">
                                <div class="numbertext">2 / 2</div>
                                <img src="{{ asset('storage/'. $winner->image2 ) }}" style="width:100%">
                                </div>
                            
                               
                            
                                <!-- Next and previous buttons -->
                                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                                <a class="next" onclick="plusSlides(1)">&#10095;</a>
                            </div>
                            <br>
                            
                            <!-- The dots/circles -->
                            <div style="text-align:center">
                                <span class="dot" onclick="currentSlide(1)"></span>
                                <span class="dot" onclick="currentSlide(2)"></span>
                            </div>
                                                                    


                        </div>
                
                
            </div>
        </div>
    </div>
    <!-- END ARTICLE -->



      
        
        @if (Auth::check())
          <form method="GET" action="/nagrajenci/{{$winner->full_name_id}}/edit">
            @csrf

            <div class="field">
              <div class="control">
                <button type="submit" class="button">{{__('text.edit')}}</button>
              </div>
            </div>
          </form>
          <hr>
        @endif
       
      
        </div>
        
      </section>
      <script src="{{url('/js/slideshow.js')}}"></script>
@endsection

@section('title')
    {{$winner->full_name}}
@endsection