<x-app>

    @section('content')
        <header class="mb-6 relative">

            <img class="rounded" src="/images/banner.jpg" alt="">

            <div class="flex justify-between items-center">

                <div>
                    <h2 class="font-bold text-2xl mb-2">{{ $user->name }}</h2>
                    <p class="text-sm"> Joined {{ $user->created_at->diffForHumans() }}</p>
                </div>

                <div class="flex">
                    <a class="rounded-full border border-gray-300 py-2 px-2 text-black text-xs mr-2" href="">Edit
                        Profile</a>

            <x-follow-button :user="$user">

            </x-follow-button>
                </div>
            </div>

            <img src="{{ $user->avatar }}" class="rounded-full mr-2 absolute"
                style="width: 150px; left: calc(50% - 65px); top:50%;" alt="">

            <p class="text-sm mt-8">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Est, veniam magnam beatae iusto blanditiis ea
                distinctio optio voluptas laudantium eligendi aliquid! Tenetur ipsa commodi voluptate culpa vitae atque odit
                blanditiis?
            </p>
        </header>

        @include('timeline', [
            'tweets' => $user->tweets,
        ])
    </x-app>
