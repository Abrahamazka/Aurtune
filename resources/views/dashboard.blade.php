<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aurtune Admin Dashboard</title>
    <link rel="icon" href="/favicon.ico">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>
</head>

<body class="bg-[#f2f2f2] text-black">

    @php
    $recentSongs = [
    ['title' => 'City After Dark', 'artist' => 'Aurtune Collective', 'album' => 'Midnight Jazz Sessions', 'status' => 'Published'],
    ['title' => 'Blue Horizon', 'artist' => 'Miles Carter', 'album' => 'Blue Horizon', 'status' => 'Published'],
    ['title' => 'Velvet Smoke', 'artist' => 'Aurtune Collective', 'album' => 'Midnight Jazz Sessions', 'status' => 'Draft'],
    ['title' => 'Golden Room', 'artist' => 'Luna Hart', 'album' => 'Golden Echo', 'status' => 'Published'],
    ];

    $recentAlbums = [
    ['title' => 'Midnight Jazz Sessions', 'artist' => 'Aurtune Collective', 'year' => '2024'],
    ['title' => 'Blue Horizon', 'artist' => 'Miles Carter', 'year' => '2023'],
    ['title' => 'Golden Echo', 'artist' => 'Luna Hart', 'year' => '2024'],
    ];
    @endphp

    <div class="min-h-screen lg:grid lg:grid-cols-[260px_1fr]">

        <!-- SIDEBAR -->
        <aside class="bg-[#3A3A3A] text-white px-6 py-6">
            <div class="flex items-center gap-3 border-b border-white/10 pb-6">
                <img src="{{ asset('/build/assets/Aurtune-tagline-white.png') }}" alt="Aurtune" class="h-10">
            </div>

            <div class="mt-8">
                <p class="text-xs uppercase tracking-[0.2em] text-white/40">Main Menu</p>

                <nav class="mt-4 space-y-2 text-sm">
                    <a href="#" class="flex items-center rounded-xl bg-white/10 px-4 py-3 text-white">
                        Dashboard
                    </a>
                    <a href="#" class="flex items-center rounded-xl px-4 py-3 text-white/70 hover:bg-white/10 hover:text-white transition-colors">
                        Artists
                    </a>
                    <a href="#" class="flex items-center rounded-xl px-4 py-3 text-white/70 hover:bg-white/10 hover:text-white transition-colors">
                        Albums
                    </a>
                    <a href="#" class="flex items-center rounded-xl px-4 py-3 text-white/70 hover:bg-white/10 hover:text-white transition-colors">
                        Songs
                    </a>
                    <a href="#" class="flex items-center rounded-xl px-4 py-3 text-white/70 hover:bg-white/10 hover:text-white transition-colors">
                        Genres
                    </a>
                    <a href="#" class="flex items-center rounded-xl px-4 py-3 text-white/70 hover:bg-white/10 hover:text-white transition-colors">
                        Users
                    </a>
                </nav>
            </div>

            <div class="mt-10">
                <p class="text-xs uppercase tracking-[0.2em] text-white/40">Quick Access</p>

                <div class="mt-4 space-y-2 text-sm">
                    <a href="#" class="block rounded-xl px-4 py-3 text-white/70 hover:bg-white/10 hover:text-white transition-colors">
                        Add New Song
                    </a>
                    <a href="#" class="block rounded-xl px-4 py-3 text-white/70 hover:bg-white/10 hover:text-white transition-colors">
                        Add New Album
                    </a>
                    <a href="#" class="block rounded-xl px-4 py-3 text-white/70 hover:bg-white/10 hover:text-white transition-colors">
                        Add New Artist
                    </a>
                </div>
            </div>

            <div class="mt-10 border-t border-white/10 pt-6">
                <form action="{{ route('logout') }}" method="POST" class="inline">
                    @csrf
                    <button type="submit" class="block rounded-xl px-4 py-3 text-sm text-red-300 hover:text-red-200 transition-colors">
                        Logout
                    </button>
                </form>
            </div>
        </aside>

        <!-- MAIN -->
        <main class="p-4 md:p-6 lg:p-8">

            <!-- TOPBAR -->
            <section class="rounded-2xl bg-white px-6 py-5 shadow-sm border border-gray-200">
                <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
                    <div>
                        <p class="text-sm text-gray-500">Welcome home, </p>
                        <h1 class="mt-1 text-3xl font-bold">{{ auth()->user()->name }}</h1>
                    </div>

                    <div class="flex items-center gap-3">
                        <input
                            type="text"
                            placeholder="Search in dashboard..."
                            class="w-full md:w-[280px] rounded-full border border-gray-300 px-4 py-2.5 text-sm outline-none focus:border-black">
                        <div class="flex h-11 w-11 items-center justify-center rounded-full bg-black text-white text-sm font-semibold">
                            <img src="{{ asset('/build/assets/123.jpg') }}" alt="User Icon" class="rounded-full object-cover">
                        </div>
                    </div>
                </div>
            </section>

            <!-- STATS -->
            <section class="mt-6 grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-4">
                <div class="rounded-2xl bg-white p-5 shadow-sm border border-gray-200">
                    <p class="text-sm text-gray-500">Total Artists</p>
                    <h2 class="mt-2 text-3xl font-bold">128</h2>
                    <p class="mt-2 text-sm text-green-600">+8 this month</p>
                </div>

                <div class="rounded-2xl bg-white p-5 shadow-sm border border-gray-200">
                    <p class="text-sm text-gray-500">Total Albums</p>
                    <h2 class="mt-2 text-3xl font-bold">342</h2>
                    <p class="mt-2 text-sm text-green-600">+14 this month</p>
                </div>

                <div class="rounded-2xl bg-white p-5 shadow-sm border border-gray-200">
                    <p class="text-sm text-gray-500">Total Songs</p>
                    <h2 class="mt-2 text-3xl font-bold">1,284</h2>
                    <p class="mt-2 text-sm text-green-600">+31 this week</p>
                </div>

                <div class="rounded-2xl bg-white p-5 shadow-sm border border-gray-200">
                    <p class="text-sm text-gray-500">Genres</p>
                    <h2 class="mt-2 text-3xl font-bold">24</h2>
                    <p class="mt-2 text-sm text-gray-500">Catalog categories</p>
                </div>
            </section>

            <!-- QUICK ACTIONS -->
            <section class="mt-6 rounded-2xl bg-white p-6 shadow-sm border border-gray-200">
                <div class="flex items-center justify-between">
                    <h2 class="text-xl font-semibold">Quick Actions</h2>
                </div>

                <div class="mt-5 grid grid-cols-1 md:grid-cols-3 gap-4">
                    <a href="#" class="rounded-2xl border border-gray-200 p-5 hover:bg-gray-50 transition-colors">
                        <p class="text-sm text-gray-500">Action</p>
                        <h3 class="mt-2 text-lg font-semibold">Add New Artist</h3>
                        <p class="mt-2 text-sm text-gray-600">Create a new artist profile in the catalog.</p>
                    </a>

                    <a href="#" class="rounded-2xl border border-gray-200 p-5 hover:bg-gray-50 transition-colors">
                        <p class="text-sm text-gray-500">Action</p>
                        <h3 class="mt-2 text-lg font-semibold">Add New Album</h3>
                        <p class="mt-2 text-sm text-gray-600">Publish a new album with cover and metadata.</p>
                    </a>

                    <a href="#" class="rounded-2xl border border-gray-200 p-5 hover:bg-gray-50 transition-colors">
                        <p class="text-sm text-gray-500">Action</p>
                        <h3 class="mt-2 text-lg font-semibold">Add New Song</h3>
                        <p class="mt-2 text-sm text-gray-600">Insert a new track and connect it to an album.</p>
                    </a>
                </div>
            </section>

            <!-- TABLES -->
            <section class="mt-6 grid grid-cols-1 xl:grid-cols-2 gap-6">

                <!-- RECENT SONGS -->
                <div class="rounded-2xl bg-white p-6 shadow-sm border border-gray-200">
                    <div class="flex items-center justify-between">
                        <h2 class="text-xl font-semibold">Recent Songs</h2>
                        <a href="#" class="text-sm text-blue-500 hover:text-blue-700 transition-colors">View all</a>
                    </div>

                    <div class="mt-5 overflow-hidden rounded-2xl border border-gray-200">
                        <div class="grid grid-cols-12 bg-gray-50 px-4 py-3 text-sm font-semibold text-gray-600">
                            <div class="col-span-5">Title</div>
                            <div class="col-span-3">Artist</div>
                            <div class="col-span-2">Album</div>
                            <div class="col-span-2 text-right">Status</div>
                        </div>

                        @foreach ($recentSongs as $song)
                        <div class="grid grid-cols-12 items-center border-t border-gray-100 px-4 py-4 text-sm hover:bg-gray-50 transition-colors">
                            <div class="col-span-5">
                                <p class="font-medium">{{ $song['title'] }}</p>
                            </div>
                            <div class="col-span-3 text-gray-600">{{ $song['artist'] }}</div>
                            <div class="col-span-2 text-gray-600 truncate">{{ $song['album'] }}</div>
                            <div class="col-span-2 text-right">
                                @if ($song['status'] === 'Published')
                                <span class="rounded-full bg-green-100 px-3 py-1 text-xs font-medium text-green-700">
                                    Published
                                </span>
                                @else
                                <span class="rounded-full bg-yellow-100 px-3 py-1 text-xs font-medium text-yellow-700">
                                    Draft
                                </span>
                                @endif
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

                <!-- RECENT ALBUMS -->
                <div class="rounded-2xl bg-white p-6 shadow-sm border border-gray-200">
                    <div class="flex items-center justify-between">
                        <h2 class="text-xl font-semibold">Recent Albums</h2>
                        <a href="#" class="text-sm text-blue-500 hover:text-blue-700 transition-colors">View all</a>
                    </div>

                    <div class="mt-5 space-y-4">
                        @foreach ($recentAlbums as $album)
                        <a href="#" class="flex items-center gap-4 rounded-2xl border border-gray-200 p-4 hover:bg-gray-50 transition-colors">
                            <img
                                src="{{ asset('/build/assets/album-placeholder.png') }}"
                                alt="{{ $album['title'] }}"
                                class="h-16 w-16 rounded-xl object-cover shrink-0">
                            <div class="min-w-0 flex-1">
                                <h3 class="text-lg font-semibold leading-tight truncate">{{ $album['title'] }}</h3>
                                <p class="mt-1 text-sm text-gray-500">{{ $album['artist'] }} • {{ $album['year'] }}</p>
                            </div>
                        </a>
                        @endforeach
                    </div>
                </div>

            </section>

            <!-- BOTTOM GRID -->
            <section class="mt-6 grid grid-cols-1 xl:grid-cols-3 gap-6">

                <div class="rounded-2xl bg-white p-6 shadow-sm border border-gray-200 xl:col-span-2">
                    <div class="flex items-center justify-between">
                        <h2 class="text-xl font-semibold">Management Overview</h2>
                    </div>

                    <div class="mt-5 grid grid-cols-1 md:grid-cols-3 gap-4">
                        <div class="rounded-2xl bg-gray-50 p-5">
                            <p class="text-sm text-gray-500">Draft Songs</p>
                            <h3 class="mt-2 text-2xl font-bold">18</h3>
                        </div>

                        <div class="rounded-2xl bg-gray-50 p-5">
                            <p class="text-sm text-gray-500">Pending Albums</p>
                            <h3 class="mt-2 text-2xl font-bold">7</h3>
                        </div>

                        <div class="rounded-2xl bg-gray-50 p-5">
                            <p class="text-sm text-gray-500">New Users</p>
                            <h3 class="mt-2 text-2xl font-bold">53</h3>
                        </div>
                    </div>
                </div>

                <div class="rounded-2xl bg-white p-6 shadow-sm border border-gray-200">
                    <h2 class="text-xl font-semibold">Admin Notes</h2>
                    <div class="mt-4 rounded-2xl bg-gray-50 p-4 text-sm text-gray-600 leading-relaxed">
                        Keep this dashboard focused on the core CRUD workflow:
                        artists, albums, songs, and genres. Add charts later only if needed.
                    </div>
                </div>

            </section>

        </main>
    </div>

</body>

</html>