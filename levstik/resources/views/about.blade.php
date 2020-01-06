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
                                                      <h1 class="title">{{__('text.about')}}</h1>
                                                      <p>{{__('text.about_description')}}</p>
                                                    </div>
                                                  </div>
                                                </div>
                                              </section>

                                    

                                    
                        
                    </div>
                </div>
            </div>
            <!-- END ARTICLE -->

@endsection

@section('title')
    {{__('text.about')}}
@endsection