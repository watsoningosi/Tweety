<ul>
    <li>
        <a class="font-bold text-lg mb-4 block" href="{{ route('home') }}">Home</a>
        <a class="font-bold text-lg mb-4 block" href="{{ route('explore') }}">Explore</a>
        <a class="font-bold text-lg mb-4 block" href="">Notifications</a>
        <a class="font-bold text-lg mb-4 block" href="">Messages</a>
        <a class="font-bold text-lg mb-4 block" href="">Bookmarks</a>
        <a class="font-bold text-lg mb-4 block" href="">Lists</a>
        <a class="font-bold text-lg mb-4 block" href="{{ route('profile', current_user()) }}">Profile</a>
        <a class="font-bold text-lg mb-4 block" href="">More</a>
        <form action="/logout" method="post">
            @csrf
            <input name="submit" value="Logout" type="submit" class="font-bold text-red-lg mb-4 block">
        </form>

    </li>
</ul>
