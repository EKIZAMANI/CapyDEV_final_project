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
    <div class="flex flex-wrap items-center justify-between mx-28    " style="padding-top: 30px;">
        <div class="flex items-center ml-10">  <img src="{{asset('assets/img/logocapy.png')}}" class=" mr-3 alt="Logo" width="65"/>
            <span class="self-center text-3xl font-bold" style="font-size: 40px; color: 
            #E5F7EF;">CapyType</span>
            <div class="flex items-center  pl-10" > 
                <img src="{{asset('assets/img/keyboard.png')}}"  class=" mr-3 alt= pr-2"Logo" width="54" />
                <img src="{{asset('assets/img/crown.png')}}" class=" mr-3 pr-2" alt="Logo" width="45"/>
                <img src="{{asset('assets/img/information.png')}}" class=" mr-3 alt= pr-2"Logo" width="35"/>
                <img src="{{asset('assets/img/setting.png')}}" class=" mr-3 alt= pr-2"Logo" width="35"/>
            </div>
        </div>
           
        <button class="rounded-lg px-5 py-3 font-bold mr-10" style="background-color: #1F232C; font-size: 16px; color: #526777;">register/login</button>
    </div>
    <!-- akhir navbar -->

    <!-- awal description -->
    <div class="flex items-center justify-around  mt-10 mx-5 " style="padding-top: 30px; font-size: 20;">
        <div class=" w-2/5">
            <p class=" font-bold" style="font-size: 71px; color: 
                #E5F7EF;">CapyType
            </p>
            <p class="pt-10 font-bold" style="color: #2ABA86">test your typing skill here</p>
            <p class="flex pt-8" style="color: #526777;">CapyType is a minimalistic typing test. It 
                features many test modes, an account system 
                to save your typing speed history, and user-
                configurable features such as themes and 
                more.</p>

                <div class="pt-10">
                    <button class="rounded-full px-6 py-2 font-bold " style="background-color: #2ABA86; font-size: 16px; color: #1F232C;">TYPE NOW</button>
                    <button class="rounded-full outline px-6 py-2 font-bold " style="background-color: #262A33; font-size: 16px; color: #2ABA86;">SEE MORE</button>
                </div>

        </div >
    
        <img src="{{asset('assets/gif/capygift.gif')}}"  width="500" />

    </div>
    <!-- akhir description -->
    
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
            <div>
                <p class="pt-10" style="color: #526777; font-size: 32;" >Support</p>
                <p class="flex pt-2 font-bold" style="color: #E5F7EF">If you encounter a bug, or have a feature request 
                - join the Discord server, send me an email, or send the comment on Telegram channel.</p>

                <!-- support -->
                <div class="mt-5">
                    <button class=" flex justify-center mx-auto rounded-lg w-full py-8 font-bold " style="background-color: #1F232C; font-size: 32px; color: #E5F7EF;">
                        <img src="{{ asset('assets/img/money.png') }}" alt="Icon"
                        class="pr-4 w-12" style="filter: invert(94%) sepia(11%) saturate(219%) hue-rotate(95deg) brightness(104%) contrast(94%);">
                        <p>Support</p>
                    </button>
                </div>
                
            
            </div>
            
    </div>
    <!-- akhir about -->

    <!-- awal footer -->
    <footer class="flex justify-center pb-3" style="font-size: 20;" >
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
