@extends('layouts.app')
@section('content')




<div class="container" id="blur">
    <div div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card border-0 shadow rounded-3 my-5">
          <div class="card-body p-4 p-sm-5">
            <h5 class="card-title text-center mb-5 fw-light fs-5">Sign In</h5>
            <form method="POST" action="{{ route('login') }}">
                @csrf
              <div class="form-floating mb-3">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                <label for="floatingInput">Email address</label>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                         <strong>{{ $message }}</strong>
                                    </span>
                @enderror
              </div>
              <div class="form-floating mb-3">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                <label for="floatingPassword">Password</label>
                
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                     </span>
                @enderror
              </div>

              <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <label class="form-check-label" for="rememberPasswordCheck">
                  Remember password
                </label>
              </div>
              <div class="d-grid">
                <button class="btn btn-primary btn-login text-uppercase fw-bold" type="submit">Sign
                  in</button>
              </div>
              <hr class="my-4">
              <div class="d-grid mb-2">
                <a href="{{ route('redirectToProvider') }}" class="btn btn-danger btn-login text-uppercase fw-bold" type="submit">
                <img src="../../img/google.svg" alt="" srcset=""> Sign in with Google
                </a>
              </div>
              <div class="d-grid">
                <a href="{{ route('redirectFacebook') }}" class="btn btn-primary btn-login text-uppercase fw-bold" type="submit">
                <img src="../../img/facebook.svg" alt="" srcset=""> Sign in with Facebook
                </a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

</div>
   

@endsection
@section('ads')
<div class="popup">
        <div class="contentBox">
            <div class="close"></div>
            <div class="ads">
            @foreach($ads as $i)
             {!! $i->link_iklan !!}
            @endforeach
            </div>
        </div>
    </div>

@endsection

