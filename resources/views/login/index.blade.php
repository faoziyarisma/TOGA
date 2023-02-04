@extends('layouts.main')

@section('container')
<div class="row justify-content-center isian-db">
    <div class="col-md-4">
      @if (session()->has('success'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif
      
      @if (session()->has('loginError'))
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('loginError') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif

        <main class="form-signin">
            <form action="/login" method="post">
              {{-- <img class="mb-4 rounded mx-auto d-block" src="../image/logo_undip.jpg" alt="" width="80" height="90"> --}}
              <h1 class="h3 mt-5 mb-4 fw-normal text-center">Silahkan Login</h1>
              @csrf
              <div class="form-floating">
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="name@example.com" autofocus required value="{{ old("email") }}">
                <label for="email">Email address</label>
                @error('email')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>
              <div class="form-floating">
                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Password" required>
                <label for="password">Password</label>
                @error('password')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>
              {{-- <div class="checkbox mb-3">
                <label>
                  <input type="checkbox" value="remember-me"> Remember me
                </label>
              </div> --}}
              <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
              {{-- <small class="d-block text-center mt-3">Not registered? <a href="/register">Register Now!</a></small> --}}
              {{-- <p class="mt-5 mb-3 text-muted text-center">&copy; Risma Blog 2021</p> --}}
            </form>
          </main>
    </div>
</div>


  <!--My Style CSS-->
  <link rel="stylesheet" href="/css/style.css">
@endsection