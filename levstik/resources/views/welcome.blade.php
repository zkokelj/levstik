@extends('layout')

@section('content')
<section class="articles">
        <div class="column is-8 is-offset-2">
 
            <!-- START ARTICLE -->
            <div class="card article">
                <div class="card-content">
                        <div class="media">
                                <div class="media-content has-text-centered">
                                    <p class="title article-title">Levstikove aleje</p>
                                    <!--  <div class="tags has-addons level-item">
                                        <span class="tag is-rounded is-info">@zigakokelj</span>
                                        <span class="tag is-rounded">December 12, 2019</span>
                                    </div> -->
                                </div>
                            </div>
                   
                    <div class="content article-body">
                            <div class="media-center">
                                    <img src="https://img.rtvslo.si/_up/upload/2015/09/28/65248408_arkade1_fp-xl.jpg" class="author-image" alt="Placeholder image">
                                </div>
                        <p>
                            {{__('text.description')}}
                        </p>
                        
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

@endsection

@section('title')
    {{__('text.home')}}
@endsection