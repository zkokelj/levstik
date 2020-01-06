@extends('layout')

@section('content')




<section class="articles">
        <div class="column is-8 is-offset-2">
 
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
                                                      <h1 class="title">{{__('text.title')}}</h1>
                                                      <p>{{__('text.description')}}</p>
                                                    </div>
                                                  </div>
                                                </div>
                                              </section>

                                    

                                    <!-- Slideshow container -->
                                    <div class="slideshow-container">

                                        <!-- Full-width images with number and caption text -->
                                        <div class="mySlides fade">
                                        <div class="numbertext">1 / 3</div>
                                        <img src="{{url('/images/Arkade1.jpg')}}" style="width:100%">
                                        <div class="text"><strong style="color: white;">Levstikove arkade</strong></div>
                                        </div>
                                    
                                        <div class="mySlides fade">
                                        <div class="numbertext">2 / 3</div>
                                        <img src="{{url('/images/Arkade2.jpg')}}" style="width:100%">
                                        <div class="text"><strong>Umetniki na Levstikovi aleji</strong></div>
                                        </div>
                                    
                                        <div class="mySlides fade">
                                        <div class="numbertext">3 / 3</div>
                                        <img src="{{url('/images/Arkade3.jpg')}}" style="width:100%">
                                        <div class="text"><strong>Umetniki na Levstikovi aleji</strong></div>
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
                                        <span class="dot" onclick="currentSlide(3)"></span>
                                    </div>
                                                                            


                                </div>
                        
                        
                    </div>
                </div>
            </div>
            <!-- END ARTICLE -->
            <!-- START PROMO BLOCK -->
            <section class="hero is-info is-bold is-small promo-block">
                <div class="hero-body">
                    <div class="container">
                        <h1 class="title">
                            <i class="fa fa-bell"></i> Splentna stran v izdelavi.</h1>
                        <span class="tag is-black is-medium is-rounded">
                                Prihaja v 2020!
                            </span>
                    </div>
                </div>
            </section>
            <!-- END PROMO BLOCK -->
            
          </div>

    </section>
    <!-- END ARTICLE FEED -->

    <script src="{{url('/js/slideshow.js')}}"></script>
@endsection

@section('title')
    {{__('text.home')}}
@endsection