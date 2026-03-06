<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your musical tastes</title>
    <link rel="icon" href="{{ asset('/build/assets/aurtunelogo.png') }}">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#f2f2f2] min-h-screen">
<div class="mx-auto max-w-6xl bg-white">

    <nav class="pt-1 pr-3 pl-3">
        <div class="r mx-auto flex items-center justify-between">
            <a href="#"><img src="{{ asset('/build/assets/Aurtune-tagline.png') }}" alt="Aurtune Logo" class="w-44 h-28"></a>
            <div >
                <a href="#" class="font-semibold text-black hover:text-blue-300 px-5">Albums</a>
                <a href="#" class="font-semibold text-black hover:text-blue-500 px-5">Songs</a>
                <a href="#" class="font-semibold text-black hover:text-blue-500 px-5">Artists</a>
                <a href="#" class="font-semibold text-black hover:text-blue-500 px-5">About us</a>
                <a href="#" class="font-semibold text-black hover:text-blue-500 px-5">My account</a>
            </div>
        </div>
    </nav>
    <hr>

    <section>
        <div class=" mx-auto flex items-center gap-5 px-6">
            <p class="p-3 font-bold">Categories :</p> 
            <div class="gap-none">
                <button class="px-3 py-1 transition-all duration-100 hover:font-bold">Jazz</button> 
                <button class="px-3 py-1 transition-all duration-100 hover:font-bold">Rock</button> 
                <button class="px-3 py-1 transition-all duration-100 hover:font-bold">Pop</button> 
                <button class="px-3 py-1 transition-all duration-100 hover:font-bold">Hip-Hop</button> 
                <button class="px-3 py-1 transition-all duration-100 hover:font-bold">Classical</button>
            </div>
            <form action="/search" method="GET" class="ml-auto">
                <div class="relative">
                    <input type="text" name="q" placeholder="Search songs, albums, g... " class="w-full rounded-full border border-gray-300 bg-white py-2 pl-10 pr-24 text-sm outline-none focus:border-black">
                    <button type="submit" class="absolute right-1 top-1/2 -translate-y-1/2 rounded-full bg-black px-4 py-1.5 text-sm text-white transition-all duration-300 hover:bg-gray-800">Search</button>
                </div>
            </form>
        </div>
    </section>
    <hr>
    <div class="mx-auto max-w-6xl bg-white px-6 py-6">
          
        <section class="flex flex-col gap-6 border-b pb-12 w-full">
            <img src="{{ asset('/build/assets/aurtunelogo.png') }}" alt="Aurtune Logo" class="w-32 h-32 mx-auto mt-10">
            <h1 class="text-4xl font-bold text-center mt-4">Discover-Music</h1>
            <p class="text-gray-600 text-center mt-1">Explore albums, artists, and tracks—smartly.</p>
        </section>
        
        <section class="pt-8">
            <div class=" mx-auto ">
                <div class="flex items-center justify-between">
                    <h2 class="text-xl font-semibold">Featured</h2>
                    <a href="#" class="text-gray-500 text-sm hover:text-black">View all</a>
                </div>
            </div>
                <div class="mt-4 rounded-2xl border p-6 bg-gray-50 flex flex-col md:flex-row md:items-center md:justify-between gap-6">
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
                   <h1 class="text-[#C8A24A]">Indonesian Albums</h1>
                </div>
            </section>
    </div>
</div>
</body>
</html>