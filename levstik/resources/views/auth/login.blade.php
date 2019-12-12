@extends('layout')

@section('content')
<section class="hero is-danger is-fullheight">
    <div class="hero-body">
      <div class="container">
        <div class="columns is-centered">
          <div class="column is-5-tablet is-4-desktop is-3-widescreen">
                <form method="POST" class="box" action="{{ route('login') }}">
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
                <label for="" class="label">Geslo</label>
                <div class="control has-icons-left">
                        <input id="password" type="password" class="input @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                        <span class="icon is-small is-left">
                                <i class="fa fa-lock"></i>
                              </span>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>
              </div>
              <div class="field">
                <label for="" class="checkbox">
                        <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Zampomni si me') }}
                                </label>
                            </div>
              </div>
              <div class="field">
                <button class="button is-success">
                  Login
                </button>
              </div>

              <div class="field">
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                            
                        {{ __('Ste pozabili geslo?') }}
                        
                    </a>    
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
