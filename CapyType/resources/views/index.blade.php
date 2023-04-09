<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')

</head>

<body class="font-mono text-xl aspect-video" style="background-color: 262A33;">
    <!-- awal navbar -->
    <div class="flex flex-wrap items-center justify-around mx-auto " style="padding-top: 30px;">
        <div class="flex items-center"> <img src="{{ asset('assets/img/logocapy.png') }}" class="mr-3" alt="Icon"
                width="65" />
            <span class="self-center text-3xl font-bold"
                style="font-size: 40px; color: 
                #E5F7EF;">CapyType</span>
            <div class="flex items-center pl-10">
                <a href=""><img src="{{ asset('assets/img/keyboard.png') }}" class="pr-2 mr-3" alt="Icon"
                        width="54" /></a>
                <a href=""><img src="{{ asset('assets/img/crown.png') }}" class="pr-2 mr-3"alt="Icon"
                        width="45" /></a>
                <a href=""><img src="{{ asset('assets/img/information.png') }}" class="pr-2 mr-3" alt="Icon"
                        width="35" /></a>
                <a href=""><img src="{{ asset('assets/img/setting.png') }}" class="pr-2 mr-3" alt="Icon"
                        width="35" /></a>
            </div>
        </div>

        <a href=""  class="px-5 py-3 font-bold rounded-lg "
            style="background-color: #1F232C; font-size: 16px; color: #526777;">register/login</a>
    </div>
    <!-- akhir navbar -->

    <!-- awal main section -->

    <!-- akhir main section -->

    <!-- awal footer -->
    <footer class="px-20 py-4 mx-20">
        <div class="flex flex-wrap">
            <a href="" class="flex items-center justify-center">
                <img src="{{ asset('assets/img/envelope.png') }}" alt="Icon" class="pr-2" width="37">
                <p class="mr-2 text-sm text-gray-500">contact</p>
            </a>
            <a href="" class="flex items-center justify-center"><img src="{{ asset('assets/img/discord.png') }}" alt="Icon"
                    class="pr-2" width="35">
                <p class="mr-2 text-sm text-gray-500">discord</p>
            </a>

            <a href="" class="flex items-center justify-center"><img src="{{ asset('assets/img/telegram.png') }}" alt="Icon"
                    class="pr-2" width="30">
                <p class="mr-2 text-sm text-gray-500">telegram</p>
            </a>

            <a href="" class="flex items-center justify-center"><img src="{{ asset('assets/img/money.png') }}" alt="Icon"
                    class="pr-2" width="30">
                <p class="mr-2 text-sm text-gray-500">support</p>
            </a>

        </div>
    </footer>

    <!-- akhir footer -->
</body>

</html>
