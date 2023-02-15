<div class="border border-blue-400 rounded-lg px-8 py-6 mb-8">
    <form action="/tweets" method="post">
        @csrf
    
        <textarea name="body" placeholder="Get Tooting" class="w-full" ></textarea>
        <hr class="my-4">

        <footer class="flex justify-between">
            <img class="rounded-full mr-3"src="{{ auth()->user()->avatar }}" alt="Your Avatar">
            <button class="bg-blue-500 rounded-lg shadow py-2 px-2 text-white" type="submit">Tweet now</button>

        </footer>
        @error('body')

        <p class="text-red-500 text-sm mt-3">{{ $message }}</p>
            
        @enderror
    </form>
</div>