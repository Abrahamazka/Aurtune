<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aurtune - Artists</title>
    <link rel="icon" href="{{ asset('/build/assets/aurtunelogo.png') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<style>
    body {
        font-family: "Inter", system-ui, -apple-system, Segoe UI, Roboto, Arial, sans-serif;
    }

    .font-display {
        font-family: "Playfair Display", serif;
    }
</style>

<body class="bg-[#f2f2f2] min-h-screen">

    @php
    $artists = [
    ['name' => 'Aurtune Collective', 'genre' => 'Jazz', 'albums' => 12, 'tracks' => 58],
    ['name' => 'Luna Hart', 'genre' => 'Pop', 'albums' => 8, 'tracks' => 37],
    ['name' => 'Nova Pulse', 'genre' => 'Electronic', 'albums' => 6, 'tracks' => 29],
    ['name' => 'Miles Carter', 'genre' => 'Jazz', 'albums' => 10, 'tracks' => 44],
    ['name' => 'The Rivals', 'genre' => 'Rock', 'albums' => 7, 'tracks' => 33],
    ['name' => 'Ava Monroe', 'genre' => 'Soul', 'albums' => 5, 'tracks' => 24],
    ['name' => 'Silver Lane', 'genre' => 'Indie', 'albums' => 9, 'tracks' => 41],
    ['name' => 'Leon Vance', 'genre' => 'Classical', 'albums' => 11, 'tracks' => 52],
    ['name' => 'Kai Turner', 'genre' => 'Hip-Hop', 'albums' => 4, 'tracks' => 21],
    ['name' => 'Scarlet Noise', 'genre' => 'Alternative', 'albums' => 6, 'tracks' => 30],
    ['name' => 'Aurora Blue', 'genre' => 'Jazz', 'albums' => 7, 'tracks' => 35],
    ['name' => 'Charlie North', 'genre' => 'Pop', 'albums' => 5, 'tracks' => 27],
    ];
    @endphp

    <div class="mx-auto max-w-6xl bg-white">
        <header class="border-b border-gray-200">
            <nav class="pt-1 pr-3 pl-3">
                <div class="r mx-auto flex items-center justify-between">
                    <a href="#"><img src="{{ asset('/build/assets/Aurtune-tagline.png') }}" alt="Aurtune Logo" class="w-44 h-28"></a>
                    <div>
                        <a href="/home" class="text-black hover:text-blue-300 px-5">Home</a>
                        <a href="/albums" class="text-black hover:text-blue-500 px-5">Albums</a>
                        <a href="/songs" class="text-black hover:text-blue-300 px-5">Songs</a>
                        <a href="/artists" class="font-semibold text-black hover:text-blue-500 px-5">Artists</a>
                        <a href="/about" class="text-black hover:text-blue-500 px-5">About us</a>
                        <a href="/account" class="text-black hover:text-blue-500 px-5">My account</a>
                    </div>
                </div>
            </nav>
        </header>
        <section class="px-8 py-10 border-b border-gray-200">
            <p class="text-sm text-gray-500">
                <a href="/home" class="hover:text-black transition-colors">Home</a>
                <span class="mx-2">></span>
                <span class="text-black">Artists</span>
            </p>

            <div class="mt-3 flex flex-col md:flex-row md:items-end md:justify-between gap-4">
                <div>
                    <h1 class="text-4xl font-bold tracking-tight font-display">Artists</h1>
                    <p class="text-gray-600 mt-2">Discover a curated lineup of artists across genres, moods, and timeless musical styles.</p>
                </div>
                <form action="/search" method="GET" class="ml-auto">
                    <div class="relative">
                        <input type="text" name="q" placeholder="Search artists... " class="w-full rounded-md border border-gray-300 bg-white py-2 pl-5 pr-24 text-sm outline-none focus:border-black">
                        <button type="submit" class="absolute right-1 top-1/2 -translate-y-1/2 rounded-md bg-black px-4 py-1.5 text-sm text-white transition-all duration-300 hover:bg-gray-800">Search</button>
                    </div>
                </form>
            </div>
        </section>

        <section class="px-6 py-8 border-b border-gray-200">
            <div class="flex items-center justify-between">
                <h2 class="text-2xl font-semibold">Top Artists</h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-6">
                <a href="/artistdetails" class="border rounded-lg border-gray-200 p-5 hover:bg-gray-50 transition-colors">
                    <p class="text-xs uppercase tracking-[0.3em] text-gray-500">Pop</p>
                    <h3 class="text-xl font-semibold mt-2">Michael Jackson</h3>
                    <p class="text-sm text-gray-600 mt-2">12 Albums &bull; 56 Tracks</p>
                </a>
                <a href="/artistdetails" class="border rounded-lg border-gray-200 p-5 hover:bg-gray-50 transition-colors">
                    <p class="text-xs uppercase tracking-[0.3em] text-gray-500">Pop</p>
                    <h3 class="text-xl font-semibold mt-2">Michael Jackson</h3>
                    <p class="text-sm text-gray-600 mt-2">12 Albums &bull; 56 Tracks</p>
                </a>
                <a href="/artistdetails" class="border rounded-lg border-gray-200 p-5 hover:bg-gray-50 transition-colors">
                    <p class="text-xs uppercase tracking-[0.3em] text-gray-500">Pop</p>
                    <h3 class="text-xl font-semibold mt-2">Michael Jackson</h3>
                    <p class="text-sm text-gray-600 mt-2">12 Albums &bull; 56 Tracks</p>
                </a>
            </div>
        </section>


        <section class="px-3 py-2 border-b border-gray-200">
            <div class=" mx-auto flex items-center justify-between gap-5 px-6">
                <p class="p-3 font-bold">Genres :</p>
                <div class="gap-none">
                    <button class="px-3 py-1 transition-all duration-100 hover:font-bold">Jazz</button>
                    <button class="px-3 py-1 transition-all duration-100 hover:font-bold">Rock</button>
                    <button class="px-3 py-1 transition-all duration-100 hover:font-bold">Pop</button>
                    <button class="px-3 py-1 transition-all duration-100 hover:font-bold">Hip-Hop</button>
                    <button class="px-3 py-1 transition-all duration-100 hover:font-bold">Classical</button>
                </div>
                <div class="flex items-center gap-3 text-sm">
                    <span class="text-gray-500">12 Artists</span>

                    <select name="sort" id="sort" class="border rounded-md border-gray-300 py-1 px-2 outline-none focus:border-black">
                        <option value="newest">Newest</option>
                        <option value="oldest">Oldest</option>
                        <option value="alphabetical">Alphabetical</option>
                    </select>
                </div>
            </div>
        </section>

        <section class="px-6 py-8">
            <div class="grid grid-cols-2 sm:grid-cols3 lg:grid-cols4 xl:grid-cols-5 gap-x-5 gap-y-8">
                @foreach ($artists as $artist)
                <a href="/artistdetails" class="group block">
                    <div class="aspect-square w-full overflow-hidden rounded-lg bg-gray-200">
                        <img src="{{ asset('/build/assets/album-placeholder.png') }}" alt="{{ $artist['name'] }} Artist Image" class="h-full w-full object-cover transition-transform duration-300 group-hover:scale-105">
                    </div>
                    <h3 class="mt-4 text-sm font-semibold text-gray-900">{{ $artist['name'] }}</h3>
                    <p class="text-sm text-gray-500">{{ $artist['genre'] }} &bull; {{ $artist['albums'] }} Albums &bull; {{ $artist['tracks'] }} Tracks</p>
                </a>
                @endforeach
            </div>
        </section>
        <section class="px-6 pb-6">
            <div class="flex items-center justify-center gap-2">
                <button class="px-4 py-2 rounded-md border border-gray-300 bg-white text-sm transition-all duration-300 hover:bg-gray-100">Prev</button>
                <button class="rounded-md bg-black text-white px-4 py-2 text-sm">1</button>
                <button class="rounded-md border border-gray-300 px-4 py-2 text-sm hover:bg-gray-100 transition-colors">2</button>
                <button class="rounded-md border border-gray-300 px-4 py-2 text-sm hover:bg-gray-100 transition-colors">3</button>
                <button class="px-4 py-2 rounded-md border border-gray-300 bg-white text-sm transition-all duration-300 hover:bg-gray-100">Next</button>
            </div>
        </section>
    </div>
    <footer class="bg-[#3A3A3A] text-white">
        <div>
            <img src="{{ asset('/build/assets/aurno2.png') }}" alt="Aurtune Logo" class="w-44 h-28 mx-auto">
        </div>
        <div class="mx-auto max-w-6xl text-center border-t border-white/20 pt-8 pb-8 pl-20">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-12 lg:gap-20 text-left">
                <div>
                    <h4 class="text-white text-sm font-semibold tracking-wide">NEED HELP</h4>
                    <ul class="mt-4 space-y-3 text-sm">
                        <li><a href="#" class="text-gray-300 hover:text-white transition-colors">Support</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white transition-colors">FAQs</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white transition-colors">Contact Us</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-white text-sm font-semibold tracking-wide">COMPANY</h4>
                    <ul class="mt-4 space-y-3 text-sm">
                        <li><a href="#" class="text-gray-300 hover:text-white transition-colors">About Us</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white transition-colors">Careers</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-white text-sm font-semibold tracking-wide">AURTUNE</h4>
                    <ul class="mt-4 space-y-3 text-sm">
                        <li><a href="#" class="text-gray-300 hover:text-white transition-colors">About Us</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white transition-colors">Careers</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-white text-sm font-semibold tracking-wide">FOLLOW US</h4>
                    <ul class="mt-4 space-y-3 text-sm">
                        <li><a href="#" class="flex items-center gap-2 text-gray-300 hover:text-white transition-colors"><img src="{{ asset('/build/assets/tiktok.png') }}" alt="Tiktok" class="inline-flex h-6 w-6 items-center justify-center">Tiktok</a></li>
                        <li><a href="#" class="flex items-center gap-2 text-gray-300 hover:text-white transition-colors"><img src="{{ asset('/build/assets/youtube.png') }}" alt="Youtube" class="inline-flex h-6 w-6 items-center justify-center">Youtube</a></li>
                        <li><a href="#" class="flex items-center gap-2 text-gray-300 hover:text-white transition-colors"><img src="{{ asset('/build/assets/instagram.png') }}" alt="Instagram" class="inline-flex h-6 w-6 items-center justify-center">Instagram</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="mx-auto max-w-6xl px-6 text-center border-t border-white/20 pt-8">
            <p class="text-sm">&copy; 2026 Aurtune. All rights reserved.</p>
            <div class="mt-4 flex justify-center gap-6">
                <a href="#" class="text-gray-300 hover:text-white transition-colors">Privacy Policy</a>
                <a href="#" class="text-gray-300 hover:text-white transition-colors">Terms of Service</a>
                <a href="#" class="text-gray-300 hover:text-white transition-colors">Contact Us</a>
            </div>
        </div>
    </footer>
</body>

</html>