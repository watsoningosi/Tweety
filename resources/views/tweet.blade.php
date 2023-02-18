<div class="flex p-4 border-b border-b-gray-400">
    <div class="mr-4 flex-shrink-0">
        <a href="{{ route('profile', $tweet->user) }}">
            <img width="50" height="50" class="rounded-full mr-2"src="/storage/{{ $tweet->user->avatar }}" alt="">
        </a>
        
    </div>

    <div>
        <h5 class="font-bold mb-4"><a href="{{ route('profile', $tweet->user) }}">{{ $tweet->user->name }}</a></h5>
        <p class="text-sm">
           {{ $tweet->body }}
        </p>

    </div>
</div>