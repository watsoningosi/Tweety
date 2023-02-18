<x-master>
    <div class="mx-auto px-6 py-4 bg-white-500">

        <div class="uppercase font-bold text-lg mb-4">{{ __('Register') }}</div>

        <div style="max-width: 700px;" class="flex-2 justify-center">

            <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                @csrf

                <div class="mb-6">
                    <label for="username" class="block mb-2 uppercase font-bold text-xs">{{ __('UserName') }}</label>

                    <div class="col-md-12">
                        <input id="username" type="text"
                            class="p-2 border border-black-400 w-full @error('username') is-invalid @enderror"
                            name="username" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('username')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="name" class="block mb-2 uppercase font-bold text-xs">{{ __('Name') }}</label>

                    <div class="col-md-6">
                        <input id="name" type="text"
                            class=" border border-black-400 w-full p-2 @error('name') is-invalid @enderror"
                            name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="email"
                        class="block mb-2 uppercase font-bold text-xs">{{ __('Email Address') }}</label>

                    <div class="col-md-6">
                        <input id="email" type="email"
                            class="border border-black-400 w-full p-2 form-control @error('email') is-invalid @enderror"
                            name="email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="" class="block mb-2 uppercase font-bold text-xs">{{ __('Avatar') }}</label>

                    <div class="col-md-6">
                        <input id="avatar" type="file"
                            class="border border-black-400 w-full p-2 form-control @error('avatar') is-invalid @enderror"
                            name="avatar" required>

                        @error('avatar')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <textarea name="description" value="{{ old('description') }}" class="border border-blue-400 w-full p-2" id="description" cols="30" rows="4"></textarea>

                <div class="row mb-3">
                    <label for="password" class="block mb-2  uppercase font-bold text-xs">{{ __('Password') }}</label>

                    <div class="col-md-6">
                        <input id="password" type="password"
                            class="border border-black-400 w-full p-2 form-control @error('password') is-invalid @enderror"
                            name="password" required autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="password-confirm"
                        class="block mb-2 uppercase font-bold text-xs">{{ __('Confirm Password') }}</label>

                    <div class="col-md-6">
                        <input id="password-confirm" type="password"
                            class="border border-black-400 w-full p-2 form-control" name="password_confirmation"
                            required autocomplete="new-password">
                    </div>
                </div>

                <div class="row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="px-4 py-2 mt-3 rounded text-white text-sm uppercase bg-blue-400">
                            {{ __('Register') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    </div>
</x-master>
