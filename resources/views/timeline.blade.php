<div class="border border-gray-300 rounded-lg">
    @forelse ($tweets as $tweet)
        @include('tweet')

    @empty
      <p class="mt-3 mb-3 py-3 px-2">No tweets have been posted!</p>  
    @endforelse

    {{ $tweets->links() }}
</div>
