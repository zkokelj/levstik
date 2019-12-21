@extends('layout')

@section('content')

<section class="section" id="about">
        <!-- Title -->
        <div class="section-heading">
          <h3 class="title is-2">{{$winner->full_name}}</h3>
          <h4 class="subtitle is-5">{{$winner->year}}</h4>
          <div class="container">
            {{$winner->description}}
          </div>
        </div>
    
        <div class="columns has-same-height is-gapless">
          <div class="column" style="margin: 20px">
            <!-- Profile -->
            <div class="card">
              <div class="card-content">
                <h3 class="title is-4">Informacije</h3>
    
                <div class="content">
                  <table class="table-profile">
                    <tr>
                      <th colspan="1"></th>
                      <th colspan="2"></th>
                    </tr>
                    <tr>
                      <td>Address:</td>
                      <td>{{$winner->image2}}</td>
                    </tr>
                    <tr>
                      <td>Phone:</td>
                      <td>0123-456789</td>
                    </tr>
                    <tr>
                      <td>Email:</td>
                      <td>minion@despicable.me</td>
                    </tr>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <div class="column" style="margin: 20px">
            <!-- Profile picture -->

            <!--
            <div class="card">
              <div class="card-image">
                <figure class="image is-4by3">
                  <img src="https://source.unsplash.com/random/1280x960" alt="Slika nagrajenca">
                </figure>
              </div>
                
            </div>
          </div>
          <div class="column" style="margin: 20px">
                <div class="card-image">
                        <figure class="image is-4by3">
                          <img src="https://source.unsplash.com/random/1280x960" alt="Slika aleje">
                        </figure>
                      </div>
          </div> -->


          @if($winner->image1)
          <div class="column" style="margin: 20px">
            <img src="{{ asset('storage/'. $winner->image1 ) }}" >
          </div>  
          @endif


          @if($winner->image2)
          <div class="column" style="margin: 20px">
            <img src="{{ asset('storage/'. $winner->image2 ) }}" >
          </div>  
          @endif
        </div>

        <hr>
        
        @if (Auth::check())
          <form method="GET" action="/nagrajenci/{{$winner->id}}/edit">
            @csrf

            <div class="field">
              <div class="control">
                <button type="submit" class="button">Uredi</button>
              </div>
            </div>
          </form>
          <hr>
        @endif
       
      

        
      </section>
 
@endsection

@section('title')
    {{$winner->full_name}}
@endsection