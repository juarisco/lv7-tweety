<div class="border border-blue-400 rounded-lg px-8 py-6 mb-8">
    <form action="/tweets" method="POST">
        @csrf

        <textarea
            name="body"
            class="w-full"
            placeholder="What's up doc?"
            autofocus
            required
        ></textarea>

        <hr class="my-4">

        <footer class="flex justify-between items-center">
            <img
                src="{{ current_user()->avatar }}"
                alt="Your avatar"
                class="rounded-full mr-2"
                width="50"
                height="50"
            >

            <x-button></x-button>
        </footer>

    </form>

    @error('body')
    <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
    @enderror
</div>
