<ul>
    <li>
        <a class="font-bold text-lg mb-4 block" href="{{ route('home') }}">Home</a>
        <a class="font-bold text-lg mb-4 block" href="{{ route('explore') }}">Explore</a>
        <a class="font-bold text-lg mb-4 block" href="{{ route('profile', current_user()) }}">Profile</a>
        <form action="/logout" method="post">
            @csrf
            <input name="submit" value="Logout" type="submit" class="font-bold text-lg mb-4 block">
        </form>

    </li>
</ul>
