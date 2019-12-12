@extends('layout')

@section('content')
<section class="hero is-danger is-fullheight">
    <div class="hero-body">
      <div class="container">
        <div class="columns is-centered">
          <div class="column is-5-tablet is-4-desktop is-3-widescreen">
                <form method="POST" class="box" action="{{ route('password.email') }}">
                        @csrf
              <div class="field">
                <label for="" class="label">Email</label>
                <div class="control has-icons-left">
                  <input id="email" type="email" class="input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                  <span class="icon is-small is-left">
                        <i class="fa fa-envelope"></i>
                      </span>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>
              </div>
              
              <div class="field">
                <button class="button is-success">
                  Resetiraj
                </button>
              </div>

             
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection

