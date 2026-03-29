<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aurtune - Your musical tastes</title>
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

    <nav class="pt-1 pr-3 pl-3">
        <div class="r mx-auto flex items-center justify-between">
            <a href="#"><img src="{{ asset('/build/assets/Aurtune-tagline.png') }}" alt="Aurtune Logo" class="w-44 h-28"></a>
            <div >
                <a href="/home" class="font-semibold text-black hover:text-blue-300 px-5">Home</a>
                <a href="/albums" class="text-black hover:text-blue-300 px-5">Albums</a>
                <a href="/songs" class="text-black hover:text-blue-500 px-5">Songs</a>
                <a href="/artists" class="text-black hover:text-blue-500 px-5">Artists</a>
                <a href="/myaccount" class="text-black hover:text-blue-500 px-5">My account</a>
            </div>
        </div>
    </nav>
    <hr>

    <section class="px-3 py-2">
        <div class=" mx-auto flex items-center gap-5 px-6">
            <p class="p-3 font-bold">Genres :</p> 
            <div class="gap-none">
                <button class="px-3 py-1 transition-all duration-100 hover:font-bold">Jazz</button> 
                <button class="px-3 py-1 transition-all duration-100 hover:font-bold">Rock</button> 
                <button class="px-3 py-1 transition-all duration-100 hover:font-bold">Pop</button> 
                <button class="px-3 py-1 transition-all duration-100 hover:font-bold">Hip-Hop</button> 
                <button class="px-3 py-1 transition-all duration-100 hover:font-bold">Classical</button>
            </div>
            <form action="/search" method="GET" class="ml-auto">
                <div class="relative">
                    <input type="text" name="q" placeholder="Search songs, albums, genr... " class="w-full rounded-md border border-gray-300 bg-white py-2 pl-5 pr-24 text-sm outline-none focus:border-black">
                    <button type="submit" class="absolute right-1 top-1/2 -translate-y-1/2 rounded-md bg-black px-4 py-1.5 text-sm text-white transition-all duration-300 hover:bg-gray-800">Search</button>
                </div>
            </form>
        </div>
    </section>
    <hr>
    <div class="mx-auto max-w-6xl bg-white px-6 py-6">
          
        <section class="flex flex-col gap-6 border-b pb-12 w-full">
            <img src="{{ asset('/build/assets/aurtunelogo.png') }}" alt="Aurtune Logo" class="w-32 h-32 mx-auto mt-10">
            <h1 class="text-4xl font-bold text-center mt-4 font-display">Discover-Music</h1>
            <p class="text-gray-600 text-center mt-1">Explore albums, artists, and tracks—smartly.</p>
        </section>
        
        <section class="pt-8">
            <div class=" mx-auto ">
                <div class="flex items-center justify-between">
                    <h2 class="text-xl font-semibold">Featured</h2>
                    <a href="#" class="text-gray-500 text-sm hover:text-black">View all</a>
                </div>
            </div>
                <div class="mt-4 rounded-md border p-6 bg-gray-50 flex flex-col md:flex-row md:items-center md:justify-between gap-6">
                    <div class="flex items-center gap-5">
                        <div class="h-20 w-20 rounded-xl bg-gray-200"><img src="{{ asset('/build/assets/Hybrid.jpg') }}" alt="Album Cover" class="w-full h-auto rounded-lg"></div>
                            <div>
                                <h3 class="text-sm text-gray-600">Album spotlight</h3>
                                <p class="text-lg font-semibold">Hybrid theory (Bonus Edition)</p>
                                <p class="text-sm text-gray-600">By Linkin Park</p>
                            </div>
                    </div>
                    
                    <div class="flex gap-4">
                        <a href="#"><button class="border rounded-full bg-white text-black px-4 py-2 text-sm transition-all duration-300 hover:bg-black hover:text-white">Details</button></a>
                        <a href="#"><button class="border rounded-full bg-black text-white px-4 py-2 text-sm transition-all duration-300 hover:bg-gray-800">Explore</button></a>
                    </div>
                </div>
            </section>

            <section class="pt-3">

                    <div class="mx-auto flex items-center justify-between">
                        <h2 class="text-xl font-semibold mt-8 mb-4">New Releases</h2>
                        <a href="#" class="text-gray-500 text-sm hover:text-black">View all</a>
                    </div>

                    <div class="mt-4 grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-4">
                        <div class="content">
                            <div class="aspect-square rounded-xl bg-gray-200 transition-all duration-200 group-hover:scale-[1.02]"><img src="{{ asset('/build/assets/charllie.jpg') }}" alt="New Release 1" class="rounded-xl"></div>
                            <p class="mt-2 text-sm font-medium">Nine track mind</p>
                            <p class="text-xs text-gray-600">Charlie Puth</p>
                        </div>
                        <div class="content">
                            <div class="aspect-square rounded-xl bg-gray-200 transition-all duration-200 group-hover:scale-[1.02]"><img src="{{ asset('/build/assets/charllie.jpg') }}" alt="New Release 1" class="rounded-xl"></div>
                            <p class="mt-2 text-sm font-medium">Nine track mind</p>
                            <p class="text-xs text-gray-600">Charlie Puth</p>
                        </div>
                        <div class="content">
                            <div class="aspect-square rounded-xl bg-gray-200 transition-all duration-200 group-hover:scale-[1.02]"><img src="{{ asset('/build/assets/charllie.jpg') }}" alt="New Release 1" class="rounded-xl"></div>
                            <p class="mt-2 text-sm font-medium">Nine track mind</p>
                            <p class="text-xs text-gray-600">Charlie Puth</p>
                        </div>
                        <div class="content">
                            <div class="aspect-square rounded-xl bg-gray-200 transition-all duration-200 group-hover:scale-[1.02]"><img src="{{ asset('/build/assets/charllie.jpg') }}" alt="New Release 1" class="rounded-xl"></div>
                            <p class="mt-2 text-sm font-medium">Nine track mind</p>
                            <p class="text-xs text-gray-600">Charlie Puth</p>
                        </div>
                        <div class="content">
                            <div class="aspect-square rounded-xl bg-gray-200 transition-all duration-200 group-hover:scale-[1.02]"><img src="{{ asset('/build/assets/charllie.jpg') }}" alt="New Release 1" class="rounded-xl"></div>
                            <p class="mt-2 text-sm font-medium">Nine track mind</p>
                            <p class="text-xs text-gray-600">Charlie Puth</p>
                        </div>
                        <div class="content">
                            <div class="aspect-square rounded-xl bg-gray-200 transition-all duration-200 group-hover:scale-[1.02]"><img src="{{ asset('/build/assets/charllie.jpg') }}" alt="New Release 1" class="rounded-xl"></div>
                            <p class="mt-2 text-sm font-medium">Nine track mind</p>
                            <p class="text-xs text-gray-600">Charlie Puth</p>
                        </div>
                    </div>
            </section>

            <section>
                <div class="bg-[#3A3A3A] mt-10 p-6 text-center">
                   <h1 class="text-[#C8A24A] font-display text-xl">Indonesian Albums</h1>
                </div>
                <div class="bg-[#f2f2f2] mx-auto max-w-6xl px-6 py-6">
                   <div class="grid gap-x-10 gap-y-6 md:grid-cols-2 lg:grid-cols-3">
                    <a href="" class="flex items-start gap-4 p-2 -m-2 rounded-lg ">
                        <img src="{{ asset('/build/assets/Hybrid.jpg') }}" class="h-16 w-16 rounded shadow-sm" alt="Aurtune Logo">
                          <div>
                            <p class="text-xs tracking-wider text-gray-600 uppercase">NILS LANDGREN</p>
                            <p class="text-sm font-semibold text-black">Christmas with My Friends VII</p>
                          </div>
                    </a>
                    <a href="" class="flex items-start gap-4 p-2 -m-2 rounded-lg ">
                        <img src="{{ asset('/build/assets/Hybrid.jpg') }}" class="h-16 w-16 rounded shadow-sm" alt="Aurtune Logo">
                          <div>
                            <p class="text-xs tracking-wider text-gray-600 uppercase">NILS LANDGREN</p>
                            <p class="text-sm font-semibold text-black">Christmas with My Friends VII</p>
                          </div>
                    </a>
                    <a href="" class="flex items-start gap-4 p-2 -m-2 rounded-lg ">
                        <img src="{{ asset('/build/assets/Hybrid.jpg') }}" class="h-16 w-16 rounded shadow-sm" alt="Aurtune Logo">
                          <div>
                            <p class="text-xs tracking-wider text-gray-600 uppercase">NILS LANDGREN</p>
                            <p class="text-sm font-semibold text-black">Christmas with My Friends VII</p>
                          </div>
                    </a>
                    <a href="" class="flex items-start gap-4 p-2 -m-2 rounded-lg ">
                        <img src="{{ asset('/build/assets/Hybrid.jpg') }}" class="h-16 w-16 rounded shadow-sm" alt="Aurtune Logo">
                          <div>
                            <p class="text-xs tracking-wider text-gray-600 uppercase">NILS LANDGREN</p>
                            <p class="text-sm font-semibold text-black">Christmas with My Friends VII</p>
                          </div>
                    </a>
                    <a href="" class="flex items-start gap-4 p-2 -m-2 rounded-lg ">
                        <img src="{{ asset('/build/assets/Hybrid.jpg') }}" class="h-16 w-16 rounded shadow-sm" alt="Aurtune Logo">
                          <div>
                            <p class="text-xs tracking-wider text-gray-600 uppercase">NILS LANDGREN</p>
                            <p class="text-sm font-semibold text-black">Christmas with My Friends VII</p>
                          </div>
                    </a>
                    <a href="" class="flex items-start gap-4 p-2 -m-2 rounded-lg ">
                        <img src="{{ asset('/build/assets/Hybrid.jpg') }}" class="h-16 w-16 rounded shadow-sm" alt="Aurtune Logo">
                          <div>
                            <p class="text-xs tracking-wider text-gray-600 uppercase">NILS LANDGREN</p>
                            <p class="text-sm font-semibold text-black">Christmas with My Friends VII</p>
                          </div>
                    </a>
                    <a href="" class="flex items-start gap-4 p-2 -m-2 rounded-lg ">
                        <img src="{{ asset('/build/assets/Hybrid.jpg') }}" class="h-16 w-16 rounded shadow-sm" alt="Aurtune Logo">
                          <div>
                            <p class="text-xs tracking-wider text-gray-600 uppercase">NILS LANDGREN</p>
                            <p class="text-sm font-semibold text-black">Christmas with My Friends VII</p>
                          </div>
                    </a>
                    <a href="" class="flex items-start gap-4 p-2 -m-2 rounded-lg ">
                        <img src="{{ asset('/build/assets/Hybrid.jpg') }}" class="h-16 w-16 rounded shadow-sm" alt="Aurtune Logo">
                          <div>
                            <p class="text-xs tracking-wider text-gray-600 uppercase">NILS LANDGREN</p>
                            <p class="text-sm font-semibold text-black">Christmas with My Friends VII</p>
                          </div>
                    </a>
                    <a href="" class="flex items-start gap-4 p-2 -m-2 rounded-lg ">
                        <img src="{{ asset('/build/assets/Hybrid.jpg') }}" class="h-16 w-16 rounded shadow-sm" alt="Aurtune Logo">
                          <div>
                            <p class="text-xs tracking-wider text-gray-600 uppercase">NILS LANDGREN</p>
                            <p class="text-sm font-semibold text-black">Christmas with My Friends VII</p>
                          </div>
                    </a>
                    <a href="" class="flex items-start gap-4 p-2 -m-2 rounded-lg ">
                        <img src="{{ asset('/build/assets/Hybrid.jpg') }}" class="h-16 w-16 rounded shadow-sm" alt="Aurtune Logo">
                          <div>
                            <p class="text-xs tracking-wider text-gray-600 uppercase">NILS LANDGREN</p>
                            <p class="text-sm font-semibold text-black">Christmas with My Friends VII</p>
                          </div>
                    </a>
                    <a href="" class="flex items-start gap-4 p-2 -m-2 rounded-lg ">
                        <img src="{{ asset('/build/assets/Hybrid.jpg') }}" class="h-16 w-16 rounded shadow-sm" alt="Aurtune Logo">
                          <div>
                            <p class="text-xs tracking-wider text-gray-600 uppercase">NILS LANDGREN</p>
                            <p class="text-sm font-semibold text-black">Christmas with My Friends VII</p>
                          </div>
                    </a>
                    <a href="" class="flex items-start gap-4 p-2 -m-2 rounded-lg ">
                        <img src="{{ asset('/build/assets/Hybrid.jpg') }}" class="h-16 w-16 rounded shadow-sm" alt="Aurtune Logo">
                          <div>
                            <p class="text-xs tracking-wider text-gray-600 uppercase">NILS LANDGREN</p>
                            <p class="text-sm font-semibold text-black">Christmas with My Friends VII</p>
                          </div>
                    </a>
                    <a href="" class="flex items-start gap-4 p-2 -m-2 rounded-lg ">
                        <img src="{{ asset('/build/assets/Hybrid.jpg') }}" class="h-16 w-16 rounded shadow-sm" alt="Aurtune Logo">
                          <div>
                            <p class="text-xs tracking-wider text-gray-600 uppercase">NILS LANDGREN</p>
                            <p class="text-sm font-semibold text-black">Christmas with My Friends VII</p>
                          </div>
                    </a>
                    <a href="" class="flex items-start gap-4 p-2 -m-2 rounded-lg ">
                        <img src="{{ asset('/build/assets/Hybrid.jpg') }}" class="h-16 w-16 rounded shadow-sm" alt="Aurtune Logo">
                          <div>
                            <p class="text-xs tracking-wider text-gray-600 uppercase">NILS LANDGREN</p>
                            <p class="text-sm font-semibold text-black">Christmas with My Friends VII</p>
                          </div>
                    </a>
                   </div>
                </div>
                <div class="bg-[#3A3A3A] p-6 text-center">
                   <h1 class="text-[#C8A24A] font-display text-xl">English Albums</h1>
                </div>
                <div class="bg-[#f2f2f2] mx-auto max-w-6xl px-6 py-6">
                   <div class="grid gap-x-10 gap-y-6 md:grid-cols-2 lg:grid-cols-3">
                    <a href="" class="flex items-start gap-4 p-2 -m-2 rounded-lg ">
                        <img src="{{ asset('/build/assets/Hybrid.jpg') }}" class="h-16 w-16 rounded shadow-sm" alt="Aurtune Logo">
                          <div>
                            <p class="text-xs tracking-wider text-gray-600 uppercase">NILS LANDGREN</p>
                            <p class="text-sm font-semibold text-black">Christmas with My Friends VII</p>
                          </div>
                    </a>
                    <a href="" class="flex items-start gap-4 p-2 -m-2 rounded-lg ">
                        <img src="{{ asset('/build/assets/Hybrid.jpg') }}" class="h-16 w-16 rounded shadow-sm" alt="Aurtune Logo">
                          <div>
                            <p class="text-xs tracking-wider text-gray-600 uppercase">NILS LANDGREN</p>
                            <p class="text-sm font-semibold text-black">Christmas with My Friends VII</p>
                          </div>
                    </a>
                    <a href="" class="flex items-start gap-4 p-2 -m-2 rounded-lg ">
                        <img src="{{ asset('/build/assets/Hybrid.jpg') }}" class="h-16 w-16 rounded shadow-sm" alt="Aurtune Logo">
                          <div>
                            <p class="text-xs tracking-wider text-gray-600 uppercase">NILS LANDGREN</p>
                            <p class="text-sm font-semibold text-black">Christmas with My Friends VII</p>
                          </div>
                    </a>
                    <a href="" class="flex items-start gap-4 p-2 -m-2 rounded-lg ">
                        <img src="{{ asset('/build/assets/Hybrid.jpg') }}" class="h-16 w-16 rounded shadow-sm" alt="Aurtune Logo">
                          <div>
                            <p class="text-xs tracking-wider text-gray-600 uppercase">NILS LANDGREN</p>
                            <p class="text-sm font-semibold text-black">Christmas with My Friends VII</p>
                          </div>
                    </a>
                    <a href="" class="flex items-start gap-4 p-2 -m-2 rounded-lg ">
                        <img src="{{ asset('/build/assets/Hybrid.jpg') }}" class="h-16 w-16 rounded shadow-sm" alt="Aurtune Logo">
                          <div>
                            <p class="text-xs tracking-wider text-gray-600 uppercase">NILS LANDGREN</p>
                            <p class="text-sm font-semibold text-black">Christmas with My Friends VII</p>
                          </div>
                    </a>
                    <a href="" class="flex items-start gap-4 p-2 -m-2 rounded-lg ">
                        <img src="{{ asset('/build/assets/Hybrid.jpg') }}" class="h-16 w-16 rounded shadow-sm" alt="Aurtune Logo">
                          <div>
                            <p class="text-xs tracking-wider text-gray-600 uppercase">NILS LANDGREN</p>
                            <p class="text-sm font-semibold text-black">Christmas with My Friends VII</p>
                          </div>
                    </a>
                    <a href="" class="flex items-start gap-4 p-2 -m-2 rounded-lg ">
                        <img src="{{ asset('/build/assets/Hybrid.jpg') }}" class="h-16 w-16 rounded shadow-sm" alt="Aurtune Logo">
                          <div>
                            <p class="text-xs tracking-wider text-gray-600 uppercase">NILS LANDGREN</p>
                            <p class="text-sm font-semibold text-black">Christmas with My Friends VII</p>
                          </div>
                    </a>
                    <a href="" class="flex items-start gap-4 p-2 -m-2 rounded-lg ">
                        <img src="{{ asset('/build/assets/Hybrid.jpg') }}" class="h-16 w-16 rounded shadow-sm" alt="Aurtune Logo">
                          <div>
                            <p class="text-xs tracking-wider text-gray-600 uppercase">NILS LANDGREN</p>
                            <p class="text-sm font-semibold text-black">Christmas with My Friends VII</p>
                          </div>
                    </a>
                    <a href="" class="flex items-start gap-4 p-2 -m-2 rounded-lg ">
                        <img src="{{ asset('/build/assets/Hybrid.jpg') }}" class="h-16 w-16 rounded shadow-sm" alt="Aurtune Logo">
                          <div>
                            <p class="text-xs tracking-wider text-gray-600 uppercase">NILS LANDGREN</p>
                            <p class="text-sm font-semibold text-black">Christmas with My Friends VII</p>
                          </div>
                    </a>
                    <a href="" class="flex items-start gap-4 p-2 -m-2 rounded-lg ">
                        <img src="{{ asset('/build/assets/Hybrid.jpg') }}" class="h-16 w-16 rounded shadow-sm" alt="Aurtune Logo">
                          <div>
                            <p class="text-xs tracking-wider text-gray-600 uppercase">NILS LANDGREN</p>
                            <p class="text-sm font-semibold text-black">Christmas with My Friends VII</p>
                          </div>
                    </a>
                    <a href="" class="flex items-start gap-4 p-2 -m-2 rounded-lg ">
                        <img src="{{ asset('/build/assets/Hybrid.jpg') }}" class="h-16 w-16 rounded shadow-sm" alt="Aurtune Logo">
                          <div>
                            <p class="text-xs tracking-wider text-gray-600 uppercase">NILS LANDGREN</p>
                            <p class="text-sm font-semibold text-black">Christmas with My Friends VII</p>
                          </div>
                    </a>
                    <a href="" class="flex items-start gap-4 p-2 -m-2 rounded-lg ">
                        <img src="{{ asset('/build/assets/Hybrid.jpg') }}" class="h-16 w-16 rounded shadow-sm" alt="Aurtune Logo">
                          <div>
                            <p class="text-xs tracking-wider text-gray-600 uppercase">NILS LANDGREN</p>
                            <p class="text-sm font-semibold text-black">Christmas with My Friends VII</p>
                          </div>
                    </a>
                    <a href="" class="flex items-start gap-4 p-2 -m-2 rounded-lg ">
                        <img src="{{ asset('/build/assets/Hybrid.jpg') }}" class="h-16 w-16 rounded shadow-sm" alt="Aurtune Logo">
                          <div>
                            <p class="text-xs tracking-wider text-gray-600 uppercase">NILS LANDGREN</p>
                            <p class="text-sm font-semibold text-black">Christmas with My Friends VII</p>
                          </div>
                    </a>
                   </div>
                </div>
            </section>

            <section class="pt-10">
                <div class="flex item-center justify-between">
                    <h2 class="text-xl font-semibold">Popular Artists</h2>
                    <a href="#" class="text-gray-500 text-sm hover:text-black">View all</a>
                </div>

                <div class="mt-4 divide-y rounded-sm border">
                   <div class="flex items-center justify-between px-4 py-3 hover:bg-gray-50 transition-colors">
                    <div class="flex items-center gap-3">
                        <div class="h-10 w-10 rounded-lg bg-gray-200"><img src="{{ asset('/build/assets/hihi.jpg') }}" alt="" class="rounded-lg"></div>
                        <div>
                            <p class="text-sm font-medium">Michael Jackson</p>
                        </div>
                    </div>
                   </div>
                   <div class="flex items-center justify-between px-4 py-3 hover:bg-gray-50 transition-colors">
                    <div class="flex items-center gap-3">
                        <div class="h-10 w-10 rounded-lg bg-gray-200"><img src="{{ asset('/build/assets/hihi.jpg') }}" alt="" class="rounded-lg"></div>
                        <div>
                            <p class="text-sm font-medium">Michael Jackson</p>
                        </div>
                    </div>
                   </div>
                   <div class="flex items-center justify-between px-4 py-3 hover:bg-gray-50 transition-colors">
                    <div class="flex items-center gap-3">
                        <div class="h-10 w-10 rounded-lg bg-gray-200"><img src="{{ asset('/build/assets/hihi.jpg') }}" alt="" class="rounded-lg"></div>
                        <div>
                            <p class="text-sm font-medium">Michael Jackson</p>
                        </div>
                    </div>
                   </div>
                </div>
            </section>      
    </div>
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