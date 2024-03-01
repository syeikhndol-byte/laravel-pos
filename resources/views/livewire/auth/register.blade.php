<div>
    <section class="section">
        <div class="container mt-3">
            <div class="row">
                <div class="col-12 col-sm-8 offset-sm-2 col-md-8 offset-md-3 col-lg-6 offset-lg-3 col-xl-8 offset-xl-2">
                    <div class="login-brand">
                        <svg width="30" class="text-primary" viewBox="0 0 30 30" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <rect x="-0.757324" y="19.2427" width="28" height="4" rx="2"
                                transform="rotate(-45 -0.757324 19.2427)" fill="currentColor" />
                            <rect x="7.72803" y="27.728" width="28" height="4" rx="2"
                                transform="rotate(-45 7.72803 27.728)" fill="currentColor" />
                            <rect x="10.5366" y="16.3945" width="16" height="4" rx="2"
                                transform="rotate(45 10.5366 16.3945)" fill="currentColor" />
                            <rect x="10.5562" y="-0.556152" width="28" height="4" rx="2"
                                transform="rotate(45 10.5562 -0.556152)" fill="currentColor" />
                        </svg>
                    </div>

                    <div class="card card-primary">
                        <div class="card-header">
                            <h4>Register</h4>
                        </div>

                        <div class="card-body">
                            <form wire:submit="register" class="row g-3">

                                <div class="row g-3">
                                    <div class="form-floating mb-1 col-md-6">
                                        <input type="text"
                                            class="form-control @error('form.username') is-invalid @enderror"
                                            id="username" placeholder="admin@example.com">
                                        <label for="username">{{ __('Username') }}</label>
                                    </div>
                                    @error('form.username')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror

                                    <div class="form-floating mb-1 col-md-6">
                                        <input type="email"
                                            class="form-control @error('form.email') is-invalid @enderror"
                                            id="email" placeholder="admin@example.com">
                                        <label for="email">{{ __('Email') }}</label>
                                    </div>
                                    @error('form.email')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="row g-3">
                                        <div class="form-floating mb-3 col-md-6">
                                            <input type="password"
                                                class="form-control @error('form.password') is-invalid @enderror"
                                                id="password" placeholder="admin@example.com">
                                            <label for="password">{{ __('Password') }}</label>
                                        </div>
                                        @error('form.password')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror

                                        <div class="form-floating mb-3 col-md-6">
                                            <input type="password"
                                                class="form-control @error('form.confirm-password') is-invalid @enderror"
                                                id="confirm-password" placeholder="admin@example.com">
                                            <label for="confirm-password">{{ __('Confirm Password') }}</label>
                                        </div>
                                        @error('form.confirm-password')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                </div>
                                <div class="col-lg-12 d-flex justify-content-between mt-3">
                                    <div class="form-check mb-3">
                                        <input type="checkbox" class="form-check-input" id="customCheck1">
                                        <label class="form-check-label"
                                            for="customCheck1">{{ __('I agree with the terms of use') }}</label>
                                    </div>
                                </div>

                                <div class="col-lg-12 mt-3">
                                    <button type="submit"
                                        class="btn btn-primary btn-block">{{ __('Sign Up') }}</button>
                                </div>
                            </form>

                        </div>
                    </div>
                    <div class="mt-2 text-muted text-center" style="font-size: small">
                        {{ __("Already have an Account?") }} <a href="{{ route('login') }}">{{ __('Login') }}</a>
                    </div>
                    <div class="text-muted text-center" style="font-size: small">
                        {{ __('Copyright') }} &copy; {{ __('CSO CODE') }}
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
