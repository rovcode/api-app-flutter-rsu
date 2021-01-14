<div class="container-fluid">
    <div class="row align-items-center justify-content-center">
        <div class="col-12 col-md-5 col-lg-6 col-xl-4 px-lg-6 my-5">

            <!-- Heading -->
            <h1 class="display-4 text-center mb-3">
              {{ __('auth.Login') }}
            </h1>

            <!-- Subheading -->
            <p class="text-muted text-center mb-5">
              {{ __('auth.MenssageLogin') }}
            </p>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <!-- Email address -->
                <div class="form-group">

                  <!-- Label -->
                  <label for="email">{{ __('auth.E-Mail_Address') }}</label>

                  <!-- Input -->
                  <input id="email" type="email"
                  class="form-control  @error('email') is-invalid @enderror"
                  placeholder="name@address.com" name="email" value="{{ old('email') }}"
                  required autocomplete="email" autofocus>
                  @error('email')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </div>

                <!-- Password -->
                <div class="form-group">

                  <div class="row">
                    <div class="col">

                      <!-- Label -->
                      <label for="password">{{ __('auth.Password') }}</label>

                    </div>
                    <div class="col-auto">

                      @if (Route::has('password.request'))
                        <!-- Help text -->
                        <a href="{{ route('password.request') }}" class="form-text small text-muted">
                          {{ __('auth.Forgot_Your_Password?') }}
                        </a>
                      @endif

                    </div>
                  </div> <!-- / .row -->

                  <!-- Input group -->
                  <div class="input-group input-group-merge">

                    <!-- Input -->
                    <input id="password" type="password" class="form-control form-control-appended @error('password') is-invalid @enderror"
                    placeholder="Enter your password" name="password" required autocomplete="current-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <!-- Icon -->
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="fe fe-eye"></i>
                      </span>
                    </div>

                  </div>
                </div>
                <div class="form-group">
                    <div class="input-group input-group-merge">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('auth.Remember_Me') }}
                            </label>
                        </div>
                    </div>
                </div>
                <!-- Submit -->
                <button type="submit" class="btn btn-lg btn-block btn-primary mb-3">
                  {{ __('auth.Login') }}
                </button>


                <!-- Link -->
                @if (Route::has('register'))
                    <div class="text-center">
                      <small class="text-muted text-center">
                        {{ __('auth.Dont_have_an_account_yet?') }} <a href="{{ route('register') }}">{{ __('auth.Register') }}</a>.
                      </small>
                    </div>
                @endif
              </form>

        </div>
        <div class="col-12 col-md-7 col-lg-6 col-xl-8 d-none d-lg-block">
          <!-- Image -->
          <div class="bg-cover vh-100 mt-n1 mr-n3" style="background-image: url({{ asset('assets/img/covers/auth-side-cover.jpg') }});"></div>
        </div>
      </div> <!-- / .row -->
    </div> <!-- / .container -->