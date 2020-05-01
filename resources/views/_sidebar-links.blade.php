<ul>
    <li>
        <a
            class="font-bold text-lg mb-4 block"
            href="{{ route('home') }}"
        >
            Home
        </a>
    </li>

    <li>
        <a
            class="font-bold text-lg mb-4 block"
            href="/explore"
        >
            Explore
        </a>
    </li>

    <li>
        <a
            class="font-bold text-lg mb-4 block"
            href="{{ auth()->user()->path() }}"
        >
            Profile
        </a>
    </li>

    <li>
        <form action="/logout" method="post">
            @csrf

            <button type="submit" class="font-bold text-lg">Logout</button>
        </form>

    </li>
</ul>
