<x-app>
    <div>
        @forelse ($users as $user)
            <div class="flex items-center mb-3">
                <a href="{{ route('profile', $user) }}">
                    <img src="{{ $user->avatar }}" width="60" height="60" class="rounded mr-4"
                    alt="{{ $user->username }}'s avatar">
                </a>

                <div>
                    <h4> <a class="block font-bold" href="{{ route('profile', $user) }}">{{'@'. $user->username }}</a></h4>
                </div>
            </div>

        @empty
        <p class="font-bold">No users yet!</p>
        @endforelse

        {{ $users->links() }}
    </div>
</x-app>
