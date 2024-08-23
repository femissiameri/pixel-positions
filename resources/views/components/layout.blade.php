<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pixel Positions</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    @vite(['resources/js/app.js'])
</head>
<body class="bg-slate-950 text-white font-hanken-grotesk">

<div class="px-10">
    <nav class="flex justify-between items-center py-4 max-w-[986px] mx-auto">
        <div>
            <a href="{{ route('jobs.index') }}">
                <img src="{{ Vite::asset('resources/img/logo.svg') }}" alt="Logo"/>
            </a>
        </div>
        <div class="space-x-6 font-semibold">
            <a href="{{ route('jobs.index') }}">Jobs</a>
            <a href="">Careers</a>
            <a href="">Salaries</a>
            <a href="">Companies</a>
        </div>
        @auth
            <div class="flex space-x-6 font-semibold">
                <a href="/jobs/create">Post a Job</a>

                <form method="post" action="/logout">
                    @csrf
                    @method('DELETE')

                    <button>Log Out</button>
                </form>
            </div>
        @endauth

        @guest
            <div class="space-x-4 font-semibold">
                <a href="{{ route('login') }}">Log In</a>
                <a href="{{ route('register') }}">Sign Up</a>
            </div>
        @endguest
    </nav>

    <x-forms.divider class="max-w-[986px] mx-auto" />

    <main class="max-w-[986px] mx-auto mt-10">
        {{ $slot }}
    </main>
</div>
</body>
</html>
