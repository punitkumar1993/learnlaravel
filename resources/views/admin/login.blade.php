@include('layouts.guest.header')
  <div class="card-body login-card-body">
    <p class="login-box-msg">Sign in to start your session</p>

    <form id = "login_form" action="{{ url('/login') }}" method="post">
      @csrf
      <div class="input-group mb-3">
        <input placeholder="Enter email" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
        <div class="input-group-append">
          <div class="input-group-text">
            <span class="fas fa-envelope"></span>
          </div>
        </div>

      </div>
      <div class="input-group mb-3">
        <input   placeholder="Enter password" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
        <div class="input-group-append">
          <div class="input-group-text">
            <span class="fas fa-lock"></span>
          </div>
        </div>
      </div>
      <div class="input-group mb-3" style="display:none" id="otp_field">
        <input id="otp" type="text" class="form-control" name="otp" placeholder="Enter OTP">
        <div class="input-group-append">
          <div class="input-group-text">
            <span class="fas fa-lock"></span>
          </div>
        </div>
        
      </div>
      <span class="invalid-feedback" id="eroor_otp"  role="alert" style="display:none;">              
      </span>
      <span  id="success_otp"  role="alert" style="display:none;">              
      </span>
      <div class="row">
        <div class="col-8">
          <a class="btn btn-link" href="{{ route('password.request') }}">
            {{ __('Forgot Your Password?') }}
          </a>
        </div>
        <!-- /.col -->
        <div class="col-4">
          <button type="submit" id="login" class="btn btn-primary btn-block">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
    <div class="social-auth-links text-center mb-3">
      <p>- OR -</p>
      @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
      @endif
          
    </div>
    <!-- /.social-auth-links -->
  </div>
  <!-- /.login-card-body -->
@include('layouts.guest.footer')
