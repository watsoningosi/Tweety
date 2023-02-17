<form action="/profiles/{{ $user->name }}/follow" method="post">
    @csrf
    <button class="bg-blue-500 rounded-lg py-2 px-2 text-white text-xs" type="submit">
    {{ auth()->user()->isFollowing($user) ? 'Unfollow Me' : 'Follow Me' }}
    </button>
</form>