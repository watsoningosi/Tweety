<div class="flex p-4 border-b border-b-gray-400">
    <div class="mr-4 flex-shrink-0">
        <a href="{{ route('profile', $tweet->user) }}">
            <img width="50" height="50" class="rounded-full mr-2"src="{{ $tweet->user->avatar }}" alt="">
        </a>

    </div>

    <div>
        <h5 class="font-bold mb-4"><a href="{{ route('profile', $tweet->user) }}">{{ $tweet->user->name }}</a></h5>
        <p class="text-sm">
            {{ $tweet->body }}
        </p>

        <div class="flex">
            <form action="/tweets/{{ $tweet->id }}/like" method="post">
                @csrf
                <div class="flex items-center mr-4">
                    <div class="text-gray-500 mr-1 w-3">
                        <div class="fill-current">
                            <img src="/images/thumbsup.png" alt="">
                        </div>

                    </div>
                    <button type="submit" class="text-xs text-gray-500">{{ $tweet->likes ?: 0 }}</button>
                </div>
            </form>

            <form action="/tweets/{{ $tweet->id }}/like" method="post">
                @csrf
                @method('DELETE')
                <div class="flex items-center">
                    <div class="text-gray-500 mr-1 w-3">
                        <div class="">
                            <img src="/images/thumbdown.png" alt="">
                        </div>

                    </div>
                    <button type="submit" class="text-xs text-gray-500">{{ $tweet->dislikes ?: 0 }}</button>
                </div>
            </form>



        </div>

    </div>
</div>
