<div class="bg-gray-200 rounded-lg py-4 px-6">
    <h3 class="font-bold text-xl mb-4">Following</h3>
    <ul>
        @forelse (current_user()->follows as $user)
            <li class="mb-4">
                <div>

                    <a href="{{ route('profile', $user) }}" class="flex items-center">
                        <img class="rounded-full mr-3"src="{{ $user->avatar1 }}" alt="">{{ $user->name }}
                    </a>

                </div>
            </li>

            @empty
            <p class="mt-3 mb-3 py-3 px-2">No followers Yet</p>  
        @endforelse

    </ul>
</div>
