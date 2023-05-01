<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Typing Page</title>
    @vite('resources/css/app.css')

</head>

<body class="font-mono text-xl " style="background-color: #262A33;" width="1920" height="1080">
    <!-- awal navbar -->
    @include('layouts.navbar')
    <!-- akhir navbar -->

    <!-- awal typing section -->
    <div class="flex justify-center mx-20 my-10">
        <div class="flex items-center px-8 py-2 font-mono text-base font-medium text-justify text-gray-700 bg-gray-900 rounded-lg">
            <button>#custom-words</button>
            <button>
            <div class="flex items-center"><img src="{{ asset('assets/img/clock.png') }}" alt="time" class="ml-4" width="22" height="23" style="filter: invert(62%) sepia(49%) saturate(637%) hue-rotate(107deg) brightness(90%) contrast(82%);">
                <span class="ml-2" style="color: #2ABA86">time</span>
            </div></button>
        <button>
            <div class="flex items-center"><img src="{{ asset('assets/img/A.png') }}" alt="A" class="ml-4" width="22" height="20" style="filter: invert(38%) sepia(13%) saturate(808%) hue-rotate(164deg) brightness(95%) contrast(85%);">
                <span class="ml-2">words</span></button>
            <div class="flex items-center ml-4">
                <button class="ml-2">15</button>
                <button class="ml-2">30</button>
                <button class="ml-2" style="color: #2ABA86">60</button>
                <button class="ml-2">120</button>
            </div>
        </div>
    </div>

    <button class="flex items-center justify-center mx-auto">
        <img src="{{ asset('assets/img/earth.png') }}" alt="" class="mr-2" width="18" height="16" style="filter: invert(38%) sepia(13%) saturate(808%) hue-rotate(164deg) brightness(95%) contrast(85%);">
        <span class="ml-1 font-mono text-sm font-medium text-gray-600" >Indonesia</span>
      </button>
    
    <div class="flex justify-center my-16 mx-28">
        <span class="text-4xl text-center">
            <span class="text-gray-500">astaga asal guna setelah mencoba aku mengatakan tanaman kemudian karena benat </span>sedangkan sungguh habis walaupun bahwa amarah terlalu wajah layangan jarak nama cari rasio macam sekolah kemarin akar saya bahkan menjadi terbang takut hilang
        </span>
    </div>
    <div class="flex justify-center mx-20 mt">
        <button type="reset"><img src="{{ asset('assets/img/refresh-arrow.png') }}" alt="" style="filter: invert(62%) sepia(49%) saturate(637%) hue-rotate(107deg) brightness(90%) contrast(82%);" width="35" height="35"></button>
    </div>
    <!-- akhir typing section -->

    <!-- awal footer -->
        <div class="pt-20">
        @include('layouts.footer')
    </div>
    <!-- akhir footer -->
</body>

</html>