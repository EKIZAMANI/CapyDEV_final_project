<!-- Navbar -->
<div class="flex flex-wrap items-center justify-between mx-20" style="padding-top: 30px;">
    <div class="flex items-center ml-10">
        <img src="{{ asset('assets/img/logocapy.png') }}" class="mr-3" alt="Logo" width="65">
        <span class="flex self-center text-3xl font-bold" style="font-size: 40px; color: #E5F7EF;"><a href="/">CapyType</a></span>
        <div class="flex items-center pl-10">
            <a href="/typing"><img src="{{ asset('assets/img/keyboard.png') }}" class="flex pr-2 mr-3" alt="Keyboard Icon" width="54"></a>
            <a href="/leaderboard"><img src="{{ asset('assets/img/crown.png') }}" class="flex pr-2 mr-3" alt="Crown Icon" width="45"></a>
            <a href="/about"><img src="{{ asset('assets/img/information.png') }}" class="flex pr-2 mr-3" alt="Information Icon" width="35"></a>
            <a href="/setting"><img src="{{ asset('assets/img/setting.png') }}" class="flex pr-2 mr-3" alt="Settings Icon" width="35"></a>
        </div>
            @auth
                <form action="/logout" method="post">
                    @csrf
                    <a href="#"><button class="px-5 py-3 mr-10 font-bold rounded-lg" style="background-color: #1F232C; font-size: 16px; color: #526777;">logout
                </form>
            @else
            <a href="/login"><button class="px-5 py-3 mr-10 font-bold rounded-lg" style="background-color: #1F232C; font-size: 16px; color: #526777;">
                register/login
            @endauth
        </button>
        </a>

    </div>