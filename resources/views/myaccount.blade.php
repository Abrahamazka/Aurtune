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
    body {
        font-family: "Inter", system-ui, -apple-system, Segoe UI, Roboto, Arial, sans-serif;
    }

    .font-display {
        font-family: "Playfair Display", serif;
    }
</style>

<body class="bg-[#f2f2f2] min-h-screen">

    <div class="mx-auto max-w-6xl bg-white">
        <header class="border-b border-gray-200">
            <nav class="pt-1 pr-3 pl-3">
                <div class="r mx-auto flex items-center justify-between">
                    <a href="#"><img src="{{ asset('/build/assets/Aurtune-tagline.png') }}" alt="Aurtune Logo" class="w-44 h-28"></a>
                    <div>
                        <a href="/home" class="text-black hover:text-blue-300 px-5">Home</a>
                        <a href="/albums" class="text-black hover:text-blue-300 px-5">Albums</a>
                        <a href="/songs" class="text-black hover:text-blue-300 px-5">Songs</a>
                        <a href="/artists" class="text-black hover:text-blue-500 px-5">Artists</a>
                        <a href="/account" class="font-semibold text-black hover:text-blue-500 px-5">My account</a>
                    </div>
                </div>
            </nav>
        </header>
        <section class="px-8 py-10 border-b border-gray-200">
            <p class="text-sm text-gray-500">
                <a href="/home" class="hover:text-black transition-colors">Home</a>
                <span class="mx-2">></span>
                <span class="text-black">My Account</span>
            </p>

            <div class="mt-3 flex flex-col md:flex-row md:items-end md:justify-between gap-4">
                <div>
                    <h1 class="text-4xl font-bold tracking-tight font-display">My Account</h1>
                    <p class="text-gray-600 mt-2">Manage your account settings and preferences.</p>
                </div>
            </div>
        </section>


        <section class="px-6 py-10">
            <div class="rounded-md border border-gray-200 bg-white p-8">
                <h2 class="text-2xl font-semibold">Update Account</h2>
                <p class="mt-2 text-sm text-gray-600">
                    Change your profile details and password here.
                </p>
                @if (session('success'))
                <div class="mb-4 rounded-md bg-green-50 px-4 py-3 text-sm text-green-600">
                    {{ session('success') }}
                </div>
                @endif

                @if ($errors->any())
                <div class="mb-4 rounded-md bg-red-50 px-4 py-3 text-sm text-red-600">
                    <ul class="space-y-1">
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form action="{{ route('account.update') }}" method="POST" class="mt-8 space-y-6">
                    @csrf
                    <div>
                        <label class="mb-2 block text-sm font-medium text-gray-700">Full Name</label>
                        <input
                            type="text"
                            name="name"
                            value="{{ old('name', $user->name) }}"
                            class="w-full rounded border border-gray-300 px-4 py-3 text-sm outline-none focus:border-black">
                    </div>

                    <div>
                        <label class="mb-2 block text-sm font-medium text-gray-700">Email Address</label>
                        <input
                            type="email"
                            name="email"
                            value="{{ old('email', $user->email) }}"
                            class="w-full rounded border border-gray-300 px-4 py-3 text-sm outline-none focus:border-black">
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                        <div>
                            <label class="mb-2 block text-sm font-medium text-gray-700">New Password</label>
                            <input
                                type="password"
                                name="password"
                                placeholder="Enter new password"
                                class="w-full rounded border border-gray-300 px-4 py-3 text-sm outline-none focus:border-black">
                        </div>

                        <div>
                            <label class="mb-2 block text-sm font-medium text-gray-700">Confirm Password</label>
                            <input
                                type="password"
                                name="password_confirmation"
                                placeholder="Confirm password"
                                class="w-full rounded border border-gray-300 px-4 py-3 text-sm outline-none focus:border-black">
                        </div>
                    </div>

                    <div class="flex flex-wrap items-center gap-3 pt-2">
                        <button
                            type="submit"
                            class="rounded-md bg-black px-6 py-3 text-sm font-semibold text-white hover:bg-gray-800 transition-colors">
                            Save Changes
                        </button>
                    </div>
                </form>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button
                        type="submit"
                        class="rounded-md border border-red-300 px-6 py-3 text-sm font-semibold text-red-600 hover:bg-red-50 transition-colors">
                        Logout
                    </button>
                </form>
            </div>
        </section>

    </div>

</body>

</html>