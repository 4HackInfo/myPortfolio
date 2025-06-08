<script src="https://cdn.tailwindcss.com"></script>

<header class="bg-black/50 text-white py-4 w-[100%]">
    <nav class="flex justify-center gap-10 text-lg font-semibold">
    <a href="{{route('home')}}" class="hover:bg-white hover:text-black px-4 py-2 rounded transition">Home</a>
    <a href="{{ route('achievement') }}" class="hover:bg-white hover:text-black px-4 py-2 rounded transition">Achievement</a>
    <a href="{{ route('skills') }}" class="hover:bg-white hover:text-black px-4 py-2 rounded transition">Skills</a>
    <a href="{{ route('contact') }}" class="hover:bg-white hover:text-black px-4 py-2 rounded transition">Contact</a>
    <a href="{{ route('portfolio') }}" class="hover:bg-white hover:text-black px-4 py-2 rounded transition">Portfolio</a>
</nav>
</header>