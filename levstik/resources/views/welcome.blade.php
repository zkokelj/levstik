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
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Accumsan lacus vel facilisis volutpat est velit egestas. Sapien eget mi proin sed. Sit amet mattis vulputate enim.
                        </p>
                        <p>
                            Commodo ullamcorper a lacus vestibulum sed arcu. Fermentum leo vel orci porta non. Proin fermentum leo vel orci porta non pulvinar. Imperdiet proin fermentum leo vel. Tortor posuere ac ut consequat semper viverra. Vestibulum lectus mauris ultrices eros.
                        </p>
                        <h3 class="has-text-centered">Lectus vestibulum mattis ullamcorper velit sed ullamcorper morbi. Cras tincidunt lobortis feugiat vivamus.</h3>
                        <p>
                            In eu mi bibendum neque egestas congue quisque egestas diam. Enim nec dui nunc mattis enim ut tellus. Ut morbi tincidunt augue interdum velit euismod in. At in tellus integer feugiat scelerisque varius morbi enim nunc. Vitae suscipit tellus mauris a diam.
                            Arcu non sodales neque sodales ut etiam sit amet.
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
                            <i class="fa fa-bell-o"></i> Splentna stran v izdelavi.</h1>
                        <span class="tag is-black is-medium is-rounded">
                                Prihaja v 2020
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
    Domov
@endsection