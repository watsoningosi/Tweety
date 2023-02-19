<x-master>
    <div style="top:0%" class="container mx-auto flex justify-center">


        <div class="px-32 bg-gray-100 py-16 mt-0">

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="row mb-6">
                    <label for="email" class="block uppercase font-bold text-xs mb-2">{{ __('Email Address') }}</label>

                    
                        <input id="email" type="email"
                            class="w-full border border-blue-400 p-2 @error('email') is-invalid @enderror" name="email"
                            value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    
                </div>

                <div class="mb-6">
                    <label for="password" class="block uppercase font-bold text-xs mb-2">{{ __('Password') }}</label>

                    <input id="password" type="password"
                        class="w-full border border-blue-400 p-2 @error('password') is-invalid @enderror"
                        name="password" required autocomplete="current-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                </div>



                <div class="mt-6">
                    <div class="col-md-8 offset-md-4">
                        <button type="submit" class="bg-green-500 rounded-lg shadow py-2 px-4 mr-2 text-white">
                            {{ __('Login') }}
                        </button>

                        @if (Route::has('password.request'))
                            <a class="text-sm text-black-100"
                                href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                    </div>
                </div>
            </form>
        </div>

</x-master>
