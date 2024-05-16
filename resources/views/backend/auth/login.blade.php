@extends('backend.layouts.public-app')
@section('content')

<!-- Section: Design Block -->
<section class="background-radial-gradient overflow-hidden">
  <style>
    /* CSS styles */
    .background-radial-gradient {
      background-color: hsl(218, 41%, 15%);
      background-image: radial-gradient(650px circle at 0% 0%,
          hsl(218, 41%, 35%) 15%,
          hsl(218, 41%, 30%) 35%,
          hsl(218, 41%, 20%) 75%,
          hsl(218, 41%, 19%) 80%,
          transparent 100%),
        radial-gradient(1250px circle at 100% 100%,
          hsl(218, 41%, 45%) 15%,
          hsl(218, 41%, 30%) 35%,
          hsl(218, 41%, 20%) 75%,
          hsl(218, 41%, 19%) 80%,
          transparent 100%);
    }

    #radius-shape-1 {
      height: 220px;
      width: 220px;
      top: -60px;
      left: -130px;
      background: radial-gradient(#44006b, #ad1fff);
      overflow: hidden;
    }

    #radius-shape-2 {
      border-radius: 38% 62% 63% 37% / 70% 33% 67% 30%;
      bottom: -60px;
      right: -110px;
      width: 300px;
      height: 300px;
      background: radial-gradient(#44006b, #ad1fff);
      overflow: hidden;
    } 
    .bg-glass {
      background-color: hsla(0, 0%, 100%, 0.9) !important;
      backdrop-filter: saturate(200%) blur(25px);
    }
    .card {
      min-height: 100%;
    }
  </style>

  <div class="container-fluid px-4 py-5 px-md-5 text-center text-lg-start my-5" style="height:100vh">
    <div class="row gx-lg-5 align-items-center mb-5">
      <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
        <!-- Left content -->
        <h1 class="my-5 display-5 fw-bold ls-tight" style="color: hsl(218, 81%, 95%)">
          Rusa Tracker Portal <br />
          <span style="color: hsl(218, 81%, 75%)">Login Now</span>
        </h1>
        <p class="mb-4 opacity-70" style="color: hsl(218, 81%, 85%)">
            This project aims to create an online portal for monitoring the physical progress of infrastructure projects at Model Degree Colleges (MDCs), Professional Colleges, and Girls Hostels funded by the Rashtriya Uchchatar Shiksha Abhiyan (RUSA) initiative.
        </p>
      </div>

      <div class="col-lg-6 mb-5 mb-lg-0 position-relative d-flex align-items-center">
        <!-- Right content -->
        <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
        <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>

        <div class="card bg-glass w-100">
          <div class="card-body px-4 py-5 px-md-5">
            <!-- Login Form -->
            <form method="POST" action="{{ route('login') }}">
              @csrf
              <!-- Email input -->
              <div class="mb-4">
                <input type="email" id="email" class="form-control" name="email" placeholder="Email" required autocomplete="email" autofocus>
                @error('email')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>

              <!-- Password input -->
              <div class="mb-4">
                <input type="password" id="password" class="form-control" name="password" required autocomplete="current-password" placeholder="Password">
                @error('password')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>

              <!-- Checkbox -->
              <div class="form-check d-flex justify-content-center mb-4">
                <input class="form-check-input me-2" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <label class="form-check-label" for="remember">
                  {{ __('Remember Me') }}
                </label>
              </div>

              <!-- Submit button -->
              <button type="submit" class="btn btn-primary btn-block mb-4">
                {{ __('Login') }}
              </button>

              <!-- Forgot Password Link -->
              @if (Route::has('password.request'))
              <div class="text-center">
                <p><a href="{{ route('password.request') }}" class="btn btn-link">{{ __('Forgot Your Password?') }}</a></p>
              </div>
              @endif
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection