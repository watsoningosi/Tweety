<x-master>
    <div class="container mx-auto px-6 py-4">
        <div class="row">
            <div class="page-wrapper">

                <div class="col-md-8 flex justify-center mt-5">
                    <div class="card font-bold text-xl ">
                        <div class="font-bold uppercase text-xl mb-6">{{ __('Login') }}</div>

                        <div class="card-body">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="row mb-3">
                                    <label for="email"
                                        class="text-xs mb-2">{{ __('Email Address') }}</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email"
                                            class="border border-blue-400 @error('email') is-invalid @enderror" name="email"
                                            value="{{ old('email') }}" required autocomplete="email" autofocus>

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-6">
                                    <label for="password"
                                        class="text-xs">{{ __('Password') }}</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password"
                                            class="border border-blue-400 @error('password') is-invalid @enderror" name="password"
                                            required autocomplete="current-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                

                                <div class="row mt-6">
                                    <div class="col-md-8 offset-md-4">
                                        <button type="submit" class="bg-green-500 rounded-lg shadow py-2 px-4 text-white">
                                            {{ __('Login') }}
                                        </button>

                                        @if (Route::has('password.request'))
                                            <a class="rounded bg-gray-400 py-2 px-3 text-sm text-black-100" href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-master>
