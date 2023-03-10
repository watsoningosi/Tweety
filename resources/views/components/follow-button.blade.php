@unless (current_user()->is($user))
    <form action="{{ route('follow', $user->username) }}" method="post">
        @csrf
        <button class="bg-blue-500 rounded-lg py-2 px-2 text-white text-xs" type="submit">
            {{ current_user()->isFollowing($user)? 'Unfollow Me': 'Follow Me' }}
        </button>
    </form>
@endunless
