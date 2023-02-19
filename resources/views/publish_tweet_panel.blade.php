<div class="border border-blue-400 rounded-lg px-8 py-6 mb-8">
    <form action="/tweets" method="post">
        @csrf
    
        <textarea name="body" placeholder="Start Tweeting" class="outline-0 border border-blue-100 w-full p-4" required autofocus></textarea>
        <hr class="my-4">

        <footer class="flex justify-between items-center">
            <img width="50" height="50" class="rounded-full mr-3"src="{{ current_user()->avatar }}" alt="Your Avatar">
            <button class="bg-blue-500 rounded-lg shadow py-1o px-4 text-white h-10" type="submit">Publish Tweet</button>

        </footer>
        @error('body')

        <p class="text-red-500 text-sm mt-3">{{ $message }}</p>
            
        @enderror
    </form>
</div>