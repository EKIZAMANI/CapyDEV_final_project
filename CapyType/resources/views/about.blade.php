<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body class="font-mono text-xl aspect-video" style="background-color: 262A33;" width="1920" height="1080">
    <!-- awal navbar -->
    @include('layouts.navbar')
    <!-- akhir navbar -->

     <!-- awal about -->
     <div class="mx-36 p-5">
        <p class="pt-10" style="color: #526777; font-size: 32;" >about</p>
            <p class="flex pt-5 font-bold" style="color: #E5F7EF">CapyType is a minimalistic typing test. 
                It features many test modes, an account system to save your typing speed history, and user
                -configurable features such as themes and more. CapyType attempts to emulate the experience 
                of natural keyboard typing during a typing test, by unobtrusively presenting the text prompts 
                and displaying typed characters in-place, providing straightforward, real-time feedback on typos, 
                speed, and accuracy.</p>
            <p class="flex pt-5 font-bold" style="color: #E5F7EF">CapyType is currently in the development 
                stage and will be released at a later date. it is possible that existing features will be added 
                and modified to make it look better. We will release more features and will fix some bugs for it, 
                so we ask users to always support us by giving feedback and letting us know of features and bugs 
                that may bother users. Thank You</p>
            <p class="flex pt-10" style="color: #526777">bug report or feature request</p>
            <p class="flex pt-2 font-bold" style="color: #E5F7EF">If you encounter a bug, or have a feature request 
                - join the Discord server, send me an email, or send the comment on Telegram channel.</p>

            <!-- awal support -->
            <div>
                <p class="pt-10" style="color: #526777; font-size: 32;" >Support</p>
                <p class="flex pt-2 font-bold" style="color: #E5F7EF">If you encounter a bug, or have a feature request 
                - join the Discord server, send me an email, or send the comment on Telegram channel.</p>

                
                <div class="mt-5">
                    <button class=" flex justify-center mx-auto rounded-lg w-full py-8 font-bold " style="background-color: #1F232C; font-size: 32px; color: #E5F7EF;">
                        <img src="{{ asset('assets/img/money.png') }}" alt="Icon"
                        class="pr-4 w-16" style="filter: invert(94%) sepia(11%) saturate(219%) hue-rotate(95deg) brightness(104%) contrast(94%);">
                        <p class="pt-3">Support</p>
                    </button>
                </div>
                
            </div>
            <!-- akhir support -->

            <div class="">
                <p class="pt-10" style="color: #526777; font-size: 32;" >contact</p>
                <p class="flexs font-bold" style="color: #E5F7EF">If you encounter a bug, have a feature request or just want to say hi -
                        here are the different ways you can contact me directly..</p>
                <div class="flex justify-between pt-5">
                    <button class=" flex justify-center rounded-lg py-7 font-bold  " style="background-color: #1F232C; font-size: 32px; color: #E5F7EF; width: 32%;">
                        <img src="{{ asset('assets/img/envelope.png') }}" alt="Icon"
                        class="pr-4 w-16" style="filter: invert(94%) sepia(11%) saturate(219%) hue-rotate(95deg) brightness(104%) contrast(94%);">
                        <p class="pt-3">Mail</p>
                    </button>
                    <button class=" flex justify-center rounded-lg py-7 font-bold " style="background-color: #1F232C; font-size: 32px; color: #E5F7EF; width: 32%">
                        <img src="{{ asset('assets/img/discord.png') }}" alt="Icon"
                        class="pr-4 w-16" style="filter: invert(94%) sepia(11%) saturate(219%) hue-rotate(95deg) brightness(104%) contrast(94%);">
                        <p class="pt-3">Discord</p>
                    </button>
                    <button class=" flex justify-center rounded-lg py-7 font-bold " style="background-color: #1F232C; font-size: 32px; color: #E5F7EF; width: 32%">
                        <img src="{{ asset('assets/img/telegram.png') }}" alt="Icon"
                        class="pr-4 w-16" style="filter: invert(94%) sepia(11%) saturate(219%) hue-rotate(95deg) brightness(104%) contrast(94%);">
                        <p class="pt-3">Telegram</p>
                    </button>
                </div>
                         
            </div>
            
    </div>
    <!-- akhir about -->

    <!-- awal footer -->
    <footer class="flex justify-center pb-3 pt-6" style="font-size: 20;" >
        <div class="flex flex-wrap   p-3">
            <a href="" class="flex items-center justify-center">
                <img src="{{ asset('assets/img/envelope.png') }}" alt="Icon" 
                class="pr-2" width="37" style="filter: invert(37%) sepia(26%) saturate(418%) hue-rotate(164deg) brightness(95%) contrast(86%);">
                <p class="mr-2 text-gray-500">contact</p>
            </a>
            <a href="https://discord.gg/RRRTQTby" class="flex items-center justify-center">
                <img src="{{ asset('assets/img/discord.png') }}" alt="Icon"
                    class="pr-2" width="35" style="filter: invert(37%) sepia(26%) saturate(418%) hue-rotate(164deg) brightness(95%) contrast(86%);">
                <p class="mr-2 text-gray-500">discord</p>
            </a>

            <a href="" class="flex items-center justify-center">
                <img src="{{ asset('assets/img/telegram.png') }}" alt="Icon"
                    class="pr-2" width="30" style="filter: invert(37%) sepia(26%) saturate(418%) hue-rotate(164deg) brightness(95%) contrast(86%);">
                <p class="mr-2 text-gray-500">telegram</p>
            </a>

            <a href="" class="flex items-center justify-center">
                <img src="{{ asset('assets/img/money.png') }}" alt="Icon"
                    class="pr-2" width="30" style="filter: invert(37%) sepia(26%) saturate(418%) hue-rotate(164deg) brightness(95%) contrast(86%);">
                <p class="mr-2 text-gray-500">support</p>
            </a>
        </div>
    </footer>
    <!-- akhir footer -->
</body>
</html>