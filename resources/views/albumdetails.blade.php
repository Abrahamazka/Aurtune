<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aurtune - Albums</title>
    <link rel="icon" href="{{ asset('/build/assets/aurtunelogo.png') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<style>
  body { font-family: "Inter", system-ui, -apple-system, Segoe UI, Roboto, Arial, sans-serif; }
  .font-display { font-family: "Playfair Display", serif; }
</style>
<body class="bg-[#f2f2f2] min-h-screen">

<div class="mx-auto max-w-6xl bg-white">
     <header class="border-b border-gray-200">
         <nav class="pt-1 pr-3 pl-3">
             <div class="r mx-auto flex items-center justify-between">
                 <a href="#"><img src="{{ asset('/build/assets/Aurtune-tagline.png') }}" alt="Aurtune Logo" class="w-44 h-28"></a>
                 <div >
                     <a href="/home" class="text-black hover:text-blue-300 px-5">Home</a>
                     <a href="/albums" class="font-semibold text-black hover:text-blue-500 px-5">Albums</a>
                     <a href="/songs" class="text-black hover:text-blue-300 px-5">Songs</a>
                     <a href="/artists" class="text-black hover:text-blue-500 px-5">Artists</a>
                     <a href="/about" class="text-black hover:text-blue-500 px-5">About us</a>
                     <a href="/account" class="text-black hover:text-blue-500 px-5">My account</a>
                    </div>
                </div>
            </nav>
    </header>
    <section class="px-6 py-6">
        <p class="text-sm text-gray-500">
            <a href="/home" class="hover:text-black transition-colors">Home</a>
            <span class="mx-2">></span>
            <a href="/albums" class="hover:text-black transition-colors">Albums</a>
            <span class="mx-2">></span>
            <span class="text-black">Midnight Jazz Sessions</span>
        </p>
    </section>

    <section class="px-6 py-8 border-b border-gray-200"> 
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
            <div class="lg:col-span-4">
                <div class="overflow-hidden rounded-md bg-gray-200 shadow-sm">
                    <img src="{{ asset('/build/assets/Hybrid.jpg') }}" alt="Midnight Jazz Sessions Album Cover" class="w-full h-full object-cover">
                </div>
            </div>
            <div class="lg:col-span-8">
                <p class="text-sm text-gray-500 uppercase tracking-[0.3em]">Featured Album</p>
                <h1 class="text-5xl font-bold text-gray-900 mt-2">Midnight Jazz Sessions</h1>
                <p class="text-gray-700 text-lg mt-4">by <a href="#" class="font-semibold hover:text-blue-300 transition-colors">Aurtune Collective</a></p>
                <div class="flex flex-wrap gap-3 mt-5 text-gray-500">
                    <span class="rounded-md px-4 py-2 bg-gray-100">Jazz &bull; 2024 &bull; 12 tracks &bull; 45 min</span>
                </div>
                <p class="text-gray-700 mt-6">Experience the soulful rhythms and smooth melodies of "Midnight Jazz Sessions," a captivating album that takes you on a late-night musical journey. Featuring a blend of classic jazz standards and original compositions, this album is perfect for unwinding after a long day or setting the mood for a cozy evening.</p>
                <div class="mt-4 flex flex-wrap gap-3">
                    <a href="/albums" class="rounded-md bg-black text-white/90 text-sm px-4 py-3 hover:bg-gray-800 transition-colors">Back to Albums</a>
                    <a href="" class="rounded-md bg-gray-200 text-gray-800 text-sm px-4 py-3 hover:bg-gray-300 transition-colors ml-4">View Artist</a>
                </div>
            </div>
        </div>
    </section>

    <section class="px-7 py-8 border-b border-gray-200">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 ">
            <div class="lg:col-span-2">
                <h2 class="text-2xl font-semibold">About this album</h2>
                <p class="text-gray-600 mt-4 leading-relaxed">
                        This album invites listeners into a cinematic jazz experience built around
                        subtle improvisation, rich tonal layers, and polished arrangements. Each track
                        unfolds with its own atmosphere, moving between gentle introspection and vibrant
                        ensemble energy. Ideal for evening sessions, focused listening, or simply
                        rediscovering the emotional depth of contemporary jazz.</p>
            </div>
            <div class="lg:col-span-1">
                <div class="rounded-md p-5 bg-gray-100 shadow-sm">
                    <h3 class="text-lg font-semibold text-center">Album Information</h3>
                    <div class="mt-4 space-y-3 text-sm">
                        <div class="flex items-center justify-between">
                            <span>Artist</span>
                            <span>Aurtune Collective</span>
                        </div>
                    <div class="flex items-center justify-between">
                        <span>Release Date</span>
                        <span>2024</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <span>Genre</span>
                        <span>Jazz</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <span>Tracks</span>
                        <span>12</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <span>Duration</span>
                        <span>45 min</span>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="px-6 py-8 border-b border-gray-200">
            <div class="flex items-center justify-between">
                <h2 class="text-2xl font-semibold">Tracklist</h2>
                <p class="text-sm text-gray-500">5 tracks • 15 min</p>
            </div>

            <div class="mt-6 overflow-hidden rounded-md border border-gray-200">

                <div class="grid grid-cols-12 bg-gray-50 px-4 py-3 text-sm font-semibold text-gray-600">
                    <div class="col-span-1">#</div>
                    <div class="col-span-8">Title</div>
                    <div class="col-span-3 text-right">Duration</div>
                </div>

                <div class="grid grid-cols-12 items-center px-4 py-4 text-sm hover:bg-gray-50 transition-colors border-t border-gray-100">
                    <div class="col-span-1 text-gray-500">1</div>
                     <div class="col-span-8">
                         <p class="font-medium">Blue Horizon</p>
                         <p class="text-xs text-gray-500 mt-1">Aurtune Collective</p>
                     </div>
                    <div class="col-span-3 text-right text-gray-500">3:42</div>
                </div>
                <div class="grid grid-cols-12 items-center px-4 py-4 text-sm hover:bg-gray-50 transition-colors border-t border-gray-100">
                    <div class="col-span-1 text-gray-500">2</div>
                     <div class="col-span-8">
                         <p class="font-medium">Blue Horizon</p>
                         <p class="text-xs text-gray-500 mt-1">Aurtune Collective</p>
                     </div>
                    <div class="col-span-3 text-right text-gray-500">3:42</div>
                </div>
                <div class="grid grid-cols-12 items-center px-4 py-4 text-sm hover:bg-gray-50 transition-colors border-t border-gray-100">
                    <div class="col-span-1 text-gray-500">3</div>
                     <div class="col-span-8">
                         <p class="font-medium">Blue Horizon</p>
                         <p class="text-xs text-gray-500 mt-1">Aurtune Collective</p>
                     </div>
                    <div class="col-span-3 text-right text-gray-500">3:42</div>
                </div>
                <div class="grid grid-cols-12 items-center px-4 py-4 text-sm hover:bg-gray-50 transition-colors border-t border-gray-100">
                    <div class="col-span-1 text-gray-500">4</div>
                     <div class="col-span-8">
                         <p class="font-medium">Blue Horizon</p>
                         <p class="text-xs text-gray-500 mt-1">Aurtune Collective</p>
                     </div>
                    <div class="col-span-3 text-right text-gray-500">3:42</div>
                </div>
                <div class="grid grid-cols-12 items-center px-4 py-4 text-sm hover:bg-gray-50 transition-colors border-t border-gray-100">
                    <div class="col-span-1 text-gray-500">5</div>
                     <div class="col-span-8">
                         <p class="font-medium">Blue Horizon</p>
                         <p class="text-xs text-gray-500 mt-1">Aurtune Collective</p>
                     </div>
                    <div class="col-span-3 text-right text-gray-500">3:42</div>
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