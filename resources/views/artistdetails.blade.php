<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aurtune - Artistdetails</title>
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
                     <a href="/albums" class="text-black hover:text-blue-500 px-5">Albums</a>
                     <a href="/songs" class="text-black hover:text-blue-300 px-5">Songs</a>
                     <a href="/artists" class="font-semibold text-black hover:text-blue-500 px-5">Artists</a>
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
            <a href="/artists" class="hover:text-black transition-colors">Artists</a>
            <span class="mx-2">></span>
            <span class="text-black">Aurtune Collective</span>
        </p>
    </section>

    <section class="px-6 py-8 border-b border-gray-200"> 
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
            <div class="lg:col-span-4">
                <div class="overflow-hidden rounded-md bg-gray-200 shadow-sm">
                    <img src="{{ asset('/build/assets/hihi.jpg') }}" alt="Midnight Jazz Sessions Album Cover" class="w-full h-full object-cover">
                </div>
            </div>
            <div class="lg:col-span-8">
                <p class="text-sm text-gray-500 uppercase tracking-[0.3em]">Featured Artist</p>
                <h1 class="text-5xl font-bold text-gray-900 mt-2">Cecilia Kara Armelia</h1>
                <p class="text-gray-700 text-lg mt-4">Jazz Pianist and Composer</p>
                <div class="flex flex-wrap gap-3 mt-5 text-gray-500">
                    <span class="rounded-md px-4 py-2 bg-gray-100">Jazz &bull; 12 Albums &bull; 67 tracks &bull; Since 2009</span>
                </div>
                <p class="text-gray-700 mt-6">Cecilia Kara armelia is a contemporary jazz ensemble known for blending classic
                        improvisational depth with modern cinematic textures. Their sound moves gracefully
                        between intimate late-night moods and refined, energetic arrangements—making them
                        one of the standout names in Aurtune’s curated catalog.</p>
                <div class="mt-4 flex flex-wrap gap-3">
                    <a href="/artists" class="rounded-md bg-black text-white/90 text-sm px-4 py-3 hover:bg-gray-800 transition-colors">Back to Artists</a>
                    <a href="/albumdetails" class="rounded-md bg-gray-200 text-gray-800 text-sm px-4 py-3 hover:bg-gray-300 transition-colors ml-4">View Albums</a>
                </div>
            </div>
        </div>
    </section>

    <section class="px-7 py-8 border-b border-gray-200">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 ">
            <div class="lg:col-span-2">
                <h2 class="text-2xl font-semibold">About the artist</h2>
                <p class="text-gray-600 mt-4 leading-relaxed">
                        Formed in 2009, Cecilia Kara Armelia emerged from a shared passion for elegant jazz
                        storytelling and immersive contemporary production. Their work explores the timeless
                        structure of traditional jazz while weaving in modern harmonies, ambient layers, and
                        polished instrumentation. The result is a sophisticated listening experience that
                        feels equally suited for focused listening, relaxed evenings, and premium editorial playlists.</p>
            </div>
            <div class="lg:col-span-1">
                <div class="rounded-md p-5 bg-gray-100 shadow-sm">
                    <h3 class="text-lg font-semibold text-center">Artist Information</h3>
                    <div class="mt-4 space-y-3 text-sm">
                        <div class="flex items-center justify-between">
                            <span>Artist</span>
                            <span>Cecilia Kara Armelia</span>
                        </div>
                    <div class="flex items-center justify-between">
                        <span>Genre</span>
                        <span>Jazz</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <span>Origin</span>
                        <span>New York, US</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <span>Active since</span>
                        <span>2009</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <span>Albums</span>
                        <span>12</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <span>Tracks</span>
                        <span>67</span>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="px-6 py-8 border-b border-gray-200">
        <div class="flex item-center justify-between">
            <h2 class="text-2xl font-semibold">Top Albums</h2>
            <a href="#" class="text-sm text-blue-500 hover:text-blue-700 transition-colors">View all</a>
        </div>
        
        <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-6 mt-6">
            <a href="#" class="group block">
                <div class="overflow-hidden rounded-md aspect-square bg-gray-200">
                    <img src="https://placehold.co/600x600/e5e7eb/111111?text=Album+1" alt="" class="w-full h-full object-cover transition-all duration-500 group-hover:scale-105">
                </div>
                <div class="mt-3">
                    <p class="text-sm text-gray-500">Jazz &bull; 2015</p>
                    <h3 class="text-lg font-semibold mt-1">Midnight Jazz Sessions</h3>
                </div>
            </a>
            <a href="#" class="group block">
                <div class="overflow-hidden rounded-md aspect-square bg-gray-200">
                    <img src="https://placehold.co/600x600/e5e7eb/111111?text=Album+1" alt="" class="w-full h-full object-cover transition-all duration-500 group-hover:scale-105">
                </div>
                <div class="mt-3">
                    <p class="text-sm text-gray-500">Jazz &bull; 2015</p>
                    <h3 class="text-lg font-semibold mt-1">Midnight Jazz Sessions</h3>
                </div>
            </a>
            <a href="#" class="group block">
                <div class="overflow-hidden rounded-md aspect-square bg-gray-200">
                    <img src="https://placehold.co/600x600/e5e7eb/111111?text=Album+1" alt="" class="w-full h-full object-cover transition-all duration-500 group-hover:scale-105">
                </div>
                <div class="mt-3">
                    <p class="text-sm text-gray-500">Jazz &bull; 2015</p>
                    <h3 class="text-lg font-semibold mt-1">Midnight Jazz Sessions</h3>
                </div>
            </a>
            <a href="#" class="group block">
                <div class="overflow-hidden rounded-md aspect-square bg-gray-200">
                    <img src="https://placehold.co/600x600/e5e7eb/111111?text=Album+1" alt="" class="w-full h-full object-cover transition-all duration-500 group-hover:scale-105">
                </div>
                <div class="mt-3">
                    <p class="text-sm text-gray-500">Jazz &bull; 2015</p>
                    <h3 class="text-lg font-semibold mt-1">Midnight Jazz Sessions</h3>
                </div>
            </a>
        </div>
    </section>

    <section class="px-6 py-8 border-b border-gray-200">
            <div class="flex items-center justify-between">
                <h2 class="text-2xl font-semibold">Popular tracks</h2>
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
                         <p class="text-xs text-gray-500 mt-1">from Cecilia Kara Armelia</p>
                     </div>
                    <div class="col-span-3 text-right text-gray-500">3:42</div>
                </div>
                <div class="grid grid-cols-12 items-center px-4 py-4 text-sm hover:bg-gray-50 transition-colors border-t border-gray-100">
                    <div class="col-span-1 text-gray-500">2</div>
                     <div class="col-span-8">
                         <p class="font-medium">Blue Horizon</p>
                         <p class="text-xs text-gray-500 mt-1">from Cecilia Kara Armelia</p>
                     </div>
                    <div class="col-span-3 text-right text-gray-500">3:42</div>
                </div>
                <div class="grid grid-cols-12 items-center px-4 py-4 text-sm hover:bg-gray-50 transition-colors border-t border-gray-100">
                    <div class="col-span-1 text-gray-500">3</div>
                     <div class="col-span-8">
                         <p class="font-medium">Blue Horizon</p>
                         <p class="text-xs text-gray-500 mt-1">from Cecilia Kara Armelia</p>
                     </div>
                    <div class="col-span-3 text-right text-gray-500">3:42</div>
                </div>
                <div class="grid grid-cols-12 items-center px-4 py-4 text-sm hover:bg-gray-50 transition-colors border-t border-gray-100">
                    <div class="col-span-1 text-gray-500">4</div>
                     <div class="col-span-8">   
                         <p class="font-medium">Blue Horizon</p>
                         <p class="text-xs text-gray-500 mt-1">from Cecilia Kara Armelia</p>
                     </div>
                    <div class="col-span-3 text-right text-gray-500">3:42</div>
                </div>
                <div class="grid grid-cols-12 items-center px-4 py-4 text-sm hover:bg-gray-50 transition-colors border-t border-gray-100">
                    <div class="col-span-1 text-gray-500">5</div>
                     <div class="col-span-8">
                         <p class="font-medium">Blue Horizon</p>
                         <p class="text-xs text-gray-500 mt-1">from Cecilia Kara Armelia</p>
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