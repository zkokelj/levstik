@extends('layout')

@section('content')
<section class="hero is-danger is-fullheight">
    <div class="hero-body">
      <div class="container">
        <div class="columns is-centered">
          <div class="column is-5-tablet is-4-desktop is-3-widescreen">
                <form method="POST" class="box" action="{{ route('register') }}">
                        @csrf
              <div class="field">
                <label for="name" class="label">Ime</label>
                <div class="control has-icons-left">
                  <input id="name" type="text" class="input @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                  <span class="icon is-small is-left">
                        <i class="fa fa-user"></i>
                      </span>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>
              </div>



              <div class="field">
                <label for="email" class="label">Email</label>
                <div class="control has-icons-left">
                  <input id="email" type="text" class="input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
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
                <label for="password" class="label">Geslo</label>
                <div class="control has-icons-left">
                        <input id="password" type="password" class="input @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
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
                <label for="password-confirm" class="label">Ponovno geslo</label>
                <div class="control has-icons-left">
                        <input id="password-confirm" type="password" class="input @error('password') is-invalid @enderror" name="password_confirmation" required autocomplete="new-password">
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
                <button class="button is-success">
                  Registracija
                </button>
              </div>

              
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
