<!-- Navbar -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @vite('resources/css/app.css')
</head>
<body class="font-mono text-xl aspect-video" style="background-color: #262A33;" width="1920" height="1080">
<header>
    <div class="flex flex-wrap items-center justify-between mx-20" style="padding-top: 30px;">
    <div class="flex items-center ml-10">
        <img src="{{ asset('assets/img/logocapy.png') }}" class="mr-3" alt="Logo" width="65">
        <span class="flex self-center text-3xl font-bold" style="font-size: 40px; color: #E5F7EF;"><a href="/">CapyType</a></span>
        <div class="flex items-center pl-10">
            <a href="/typing"><img src="{{ asset('assets/img/keyboard.png') }}" class="flex pr-2 mr-3" alt="Keyboard Icon" width="54"></a>
            <a href="/about"><img src="{{ asset('assets/img/information.png') }}" class="flex pr-2 mr-3" alt="Information Icon" width="35"></a>
            <a href="/leaderboard"><img src="{{ asset('assets/img/crown.png') }}" class="flex pr-2 mr-3" alt="Crown Icon" width="45"></a>
            
            {{-- <a href="/setting"><img src="{{ asset('assets/img/setting.png') }}" class="flex pr-2 mr-3" alt="Settings Icon" width="35"></a> --}}
        </div>
    </div>
            @auth
                <form action="/logout" method="post">
                    @csrf
                    <a href="#"><button class="px-5 py-3 mr-10 font-bold rounded-lg" style="background-color: #1F232C; font-size: 16px; color: #526777;">{{ auth()->user()->name}} -> logout
                </form>
            @else
            <a href="/login"><button class="px-5 py-3 mr-10 font-bold rounded-lg" style="background-color: #1F232C; font-size: 16px; color: #526777;">
                register/login
            @endauth
        </button>
        </a>
    </div>
    <div>
    @yield('content')
    </div>

</header>
<footer class="flex justify-center pb-3" style="font-size: 20;" >
    <div class="flex flex-wrap p-3">
        <a href="mailto:capytype@gmail.com" target="_blank" class="flex items-center justify-center">
            <img src="{{ asset('assets/img/envelope.png') }}" alt="Icon"
            class="pr-2" width="37" style="filter: invert(37%) sepia(26%) saturate(418%) hue-rotate(164deg) brightness(95%) contrast(86%);">
            <p class="mr-2 text-gray-500">contact</p>
        </a>
        <a href="https://discord.gg/RRRTQTby/" target="_blank" class="flex items-center justify-center">
            <img src="{{ asset('assets/img/discord.png') }}" alt="Icon"
                class="pr-2" width="35" style="filter: invert(37%) sepia(26%) saturate(418%) hue-rotate(164deg) brightness(95%) contrast(86%);">
            <p class="mr-2 text-gray-500">discord</p>
        </a>

        <a href="https://t.me/capytype/" target="_blank" class="flex items-center justify-center">
            <img src="{{ asset('assets/img/telegram.png') }}" alt="Icon"
                class="pr-2" width="30" style="filter: invert(37%) sepia(26%) saturate(418%) hue-rotate(164deg) brightness(95%) contrast(86%);">
            <p class="mr-2 text-gray-500">telegram</p>
        </a>

        <a href="https://saweria.co/capytype2023/" target="_blank" class="flex items-center justify-center">
            <img src="{{ asset('assets/img/money.png') }}" alt="Icon"
                class="pr-2" width="30" style="filter: invert(37%) sepia(26%) saturate(418%) hue-rotate(164deg) brightness(95%) contrast(86%);">
            <p class="mr-2 text-gray-500">support</p>
        </a>
    </div>
</footer>
</body>
</html>

