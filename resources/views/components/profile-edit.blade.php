@can('edit', $user)
    
    <a class="rounded-full border border-gray-300 py-2 px-2 text-black text-xs mr-2" href="{{ $user->path('edit') }}">Edit
        Profile</a>
@endcan
