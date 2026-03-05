<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your musical tastes</title>
    <link rel="icon" href="{{ asset('/build/assets/aurtunelogo.png') }}">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#f2f2f2] w-8/12 mx-auto h-full">
<div class="bg-white">

    <nav class="pt-2 pr-4 pl-4">
        <div class="container mx-auto flex items-center justify-between">
            <img src="{{ asset('/build/assets/Aurtune-tagline.png') }}" alt="Aurtune Logo" class="w-44 h-28">
            <div >
                <a href="#" class="text-black hover:text-blue-300 px-5">Home</a>
                <a href="#" class="text-black hover:text-blue-500 px-5">About</a>
                <a href="#" class="text-black hover:text-blue-500 px-5">My account</a>
            </div>
        </div>
    </nav>
    <hr>
    <div class="container mx-auto flex items-center gap-4 px-6">
            <p class="p-3 font-bold">Categories :</p> 
            <div class="gap-none">
                <button class="px-3 py-1 hover:text-blue-500">Jazz</button> 
                <button class="px-3 py-1 hover:text-blue-500">Rock</button> 
                <button class="px-3 py-1 hover:text-blue-500">Pop</button> 
                <button class="px-3 py-1 hover:text-blue-500">Hip-Hop</button> 
                <button class="px-3 py-1 hover:text-blue-500">Classical</button>
            </div>
            <form action="/search" method="GET" class="ml-auto">
                <div class="relative">
                    <input type="text" name="q" placeholder="Search songs, albums, g... " class="w-full rounded-full border border-gray-300 bg-white py-2 pl-10 pr-24 text-sm outline-none focus:border-black">
                    <button type="submit" class="absolute right-1 top-1/2 -translate-y-1/2 rounded-full bg-black px-4 py-1.5 text-sm text-white hover:bg-blue-300 hover:delay-100">Search</button>
                </div>
            </form>
    </div>
    <hr>
    <br>
    <div class="">
        <img src="{{ asset('/build/assets/aurtunelogo.png') }}" alt="Aurtune Logo" class="w-32 h-32 mx-auto mt-10">
        <h1 class="text-4xl font-bold text-center mt-4">Discover-Music</h1>
    </div>
     
</div>
<script>
    CKEDITOR.replace('description');
</script>
</body>
</html>