<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite("resources/css/app.css")

</head>
<body class="aspect-video font-mono text-xl" style="background-color: 262A33;">
    <!-- awal navbar -->
    <div class="flex flex-wrap items-center justify-around mx-auto    " style="padding-top: 30px;">
            <div class="flex items-center">  <img src="{{asset('assets/img/logocapy.png')}}" class=" mr-3 alt="Kupitilizer Logo" width="65"/>
                <span class="self-center text-3xl font-bold" style="font-size: 40px; color: 
                #E5F7EF;">CapyType</span>
                <div class="flex items-center  pl-10" > 
                    <img src="{{asset('assets/img/keyboard.png')}}"  class=" mr-3 alt= pr-2"Kupitilizer Logo" width="54" />
                    <img src="{{asset('assets/img/crown.png')}}" class=" mr-3 pr-2"Kupitilizer Logo" width="45"/>
                    <img src="{{asset('assets/img/information.png')}}" class=" mr-3 alt= pr-2"Kupitilizer Logo" width="35"/>
                    <img src="{{asset('assets/img/setting.png')}}" class=" mr-3 alt= pr-2"Kupitilizer Logo" width="35"/>
                </div>
            </div>
           
        <button class="rounded-lg px-5 py-3 font-bold " style="background-color: #1F232C; font-size: 16px; color: #526777;">register/login</button>
    </div>
    <!-- akhir navbar -->
</body>
</html>