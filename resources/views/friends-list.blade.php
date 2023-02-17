<div class="bg-gray-200 rounded-lg py-4 px-6">
    <h3 class="font-bold text-xl mb-4">Following</h3>
    <ul>
        @foreach (auth()->user()->follows as $user)
            <li class="mb-4">
                <div>

                    <a href="{{ route('profile', $user) }}" class="flex items-center">
                        <img class="rounded-full mr-3"src="{{ $user->avatar1 }}" alt="">{{ $user->name }}
                    </a>

                </div>
            </li>
        @endforeach

    </ul>
</div>
