<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>

</head>

<body class="font-mono text-xl aspect-video" style="background-color: 262A33;" width="1920" height="1080">
    
    <!-- awal navbar -->
    <div class="flex flex-wrap items-center justify-between mx-auto    " style="padding-top: 30px;">
        <div class="flex items-center ml-10">  <img src="<?php echo e(asset('assets/img/logocapy.png')); ?>" class=" mr-3 alt="Kupitilizer Logo" width="65"/>
            <span class="self-center text-3xl font-bold" style="font-size: 40px; color: 
            #E5F7EF;">CapyType</span>
            <div class="flex items-center  pl-10" > 
                <img src="<?php echo e(asset('assets/img/keyboard.png')); ?>"  class=" mr-3 alt= pr-2"Kupitilizer Logo" width="54" />
                <img src="<?php echo e(asset('assets/img/crown.png')); ?>" class=" mr-3 pr-2"Kupitilizer Logo" width="45"/>
                <img src="<?php echo e(asset('assets/img/information.png')); ?>" class=" mr-3 alt= pr-2"Kupitilizer Logo" width="35"/>
                <img src="<?php echo e(asset('assets/img/setting.png')); ?>" class=" mr-3 alt= pr-2"Kupitilizer Logo" width="35"/>
            </div>
        </div>
           
        <button class="rounded-lg px-5 py-3 font-bold mr-10" style="background-color: #1F232C; font-size: 16px; color: #526777;">register/login</button>
    </div>
    <!-- akhir navbar -->

    <!-- awal description -->
    <div class="flex items-center justify-around mx-auto mt-10 " style="padding-top: 30px; font-size: 20;">
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
        <!-- <img src="<?php echo e(asset('assets/img/particle.png')); ?>" width="500"/> -->
        <video width="550" loop autoplay muted preload="">
            <source src="<?php echo e(asset('assets/gif/capyvideo.mp4')); ?>" type="video/mp4">
            Your browser does not support the video tag.
        </video>

    </div>
    <!-- akhir description -->
    
    <!-- awal footer -->
    <footer class="ml-10 absolute bottom-5 ">
        <div class="flex flex-wrap">
            <a href="" class="flex items-center justify-center">
                <img src="<?php echo e(asset('assets/img/envelope.png')); ?>" alt="Icon" class="pr-2" width="37">
                <p class="mr-2 text-sm text-gray-500">contact</p>
            </a>
            <a href="" class="flex items-center justify-center"><img src="<?php echo e(asset('assets/img/discord.png')); ?>" alt="Icon"
                    class="pr-2" width="35">
                <p class="mr-2 text-sm text-gray-500">discord</p>
            </a>

            <a href="" class="flex items-center justify-center"><img src="<?php echo e(asset('assets/img/telegram.png')); ?>" alt="Icon"
                    class="pr-2" width="30">
                <p class="mr-2 text-sm text-gray-500">telegram</p>
            </a>

            <a href="" class="flex items-center justify-center"><img src="<?php echo e(asset('assets/img/money.png')); ?>" alt="Icon"
                    class="pr-2" width="30">
                <p class="mr-2 text-sm text-gray-500">support</p>
            </a>

        </div>
    </footer>
    <!-- akhir footer -->

</body>

</html>
<?php /**PATH /home/zaki/Documents/pbw/SpeedTypingTest-CapyType-/CapyType/resources/views/index.blade.php ENDPATH**/ ?>