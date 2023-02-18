<x-app>
    <form action="{{ $user->path() }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PATCH')

        <div class="mb-6">
            <label for="" class="block mb-2 uppercase font-bold text-xs text-gray-700"> Username</label>

            <input type="text" value="{{ $user->username }}" class="border border-gray-400 p-2 w-full" name="username"
                id="" required>

            @error('username')
                <p class="text-red-400">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="" class="block mb-2 uppercase font-bold text-xs text-gray-700">FullName</label>

            <input type="text" value="{{ $user->name }}" class="border border-gray-400 p-2 w-full" name="name"
                id="" required>

            @error('name')
                <p class="text-red-400">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">

            <label for="" class="block mb-2 uppercase font-bold text-xs text-gray-700">Avatar</label>
            <div class="flex">
                <input type="file" class="border border-gray-400 p-2 w-full" name="avatar" id="">
                <img width="40" height="40" src="{{ $user->avatar }}" alt="">
                @error('avatar')
                    <p class="text-red-400">{{ $message }}</p>
                @enderror
            </div>

        </div>

        <div class="mb-6">
            <label for="" class="block mb-2 uppercase font-bold text-xs text-gray-700">Email</label>

            <input type="email" value="{{ $user->email }}" class="border border-gray-400 p-2 w-full" name="email"
                id="" required>

            @error('email')
                <p class="text-red-400">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="" class="block mb-2 uppercase font-bold text-xs text-gray-700">Profile Info</label>

            <textarea class="border border-gray-400 p-2 w-full" name="description" id="" cols="10" rows="4"
                required>{{ $user->description }}</textarea>

            @error('email')
                <p class="text-red-400">{{ $message }}</p>
            @enderror
        </div>


        <div class="mb-6">
            <label for="" class="block mb-2 uppercase font-bold text-xs text-gray-700">Password</label>

            <input type="password" class="border border-gray-400 p-2 w-full" name="password" id="">

            @error('password')
                <p class="text-red-400">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="" class="block mb-2 uppercase font-bold text-xs text-gray-700">Password
                Confirmation</label>

            <input type="password" name="password_confirmation" class="border border-gray-400 p-2 w-full"
                id="">

            @error('password_confirmation')
                <p class="text-red-400">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-6">
            <button class="bg-blue-400 text-white rounded py-2 px-4" name="submit" type="submit">Submit</button>
        </div>
    </form>
</x-app>
