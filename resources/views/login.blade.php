<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aurtune - Login</title>
    <link rel="icon" href="{{ asset('/build/assets/aurtunelogo.png') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-[#f2f2f2] min-h-screen">

    <div class="flex justify-center mb-16 pt-10">
        <img src="{{ asset('/build/assets/aurno.png') }}" alt="Aurtune Logo" class="w-44 h-28">
    </div>
    <div class="mx-auto max-w-xl bg-white">

        <div class="bg-white rounded-md px-16 py-8 shadow-sm">
            @if ($errors->any())
            <div class="mb-4 rounded-md bg-red-50 p-4 text-sm text-red-600">
                <ul class="space-y-1">
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <form action="/login " method="POST" class="space-y-6">
                @csrf
                @error('email')
                <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
                <div>
                    <input
                        type="email"
                        name="email"
                        placeholder="Email"
                        class="w-full border border-gray-300 rounded-md px-4 py-3 outline-none focus:border-black text-sm">
                </div>
                @error('password')
                <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
                <div class="relative">
                    <input
                        type="password"
                        name="password"
                        placeholder="Password"
                        id="password"
                        class="w-full border border-gray-300 rounded-md px-4 py-3 pr-12 outline-none focus:border-black text-sm">

                    <button
                        type="button"
                        id="togglePassword"
                        class="absolute right-4 top-1/2 -translate-y-1/2 text-gray-400 text-sm">
                        <span class="fas fa-lock" id="password-lock"></span>
                    </button>
                </div>

                <div class="flex items-center justify-between text-sm">
                    <label class="flex items-center gap-2 text-gray-600">
                        <input type="checkbox" name="remember" class="rounded border-gray-300">
                        Remember me
                    </label>

                    <a href="#" class="text-gray-500 hover:text-black underline underline-offset-2">
                        Forgot your password?
                    </a>
                </div>

                <button
                    type="submit"
                    class="w-full bg-black text-white rounded-md py-3 font-semibold hover:bg-gray-800 transition-colors">
                    Sign in
                </button>
            </form>

            <p class="text-center text-sm text-gray-600 mt-10">
                Not registered yet?
                <a href="/register" class="font-semibold text-black underline underline-offset-2 hover:text-gray-700">
                    Register here
                </a>
            </p>

        </div>
    </div>
    </div>
    <script>
        const togglePassword = document.getElementById('togglePassword');
        const passwordInput = document.getElementById('password');
        const passwordLock = document.getElementById('password-lock');

        togglePassword.addEventListener('click', function() {
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                passwordLock.className = 'fas fa-unlock';
            } else {
                passwordInput.type = 'password';
                passwordLock.className = 'fas fa-lock';
            }
        });
    </script>
</body>

</html>