
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

    
    
    <div style="padding-left: 570px; ">
        <form class="bg-white m-10 p-10 rounded-md outline w-1/2 border-collapse" style="background-color: 262A33; color: 526777;">
          <label for="custom-word " class="font text-lg">custom-word:</label>
          <div class="">
            <input id="custom-word" name="custom-word" type="text" class="w-full p-2 border rounded-md " placeholder="Type your custom word..." style="background-color: 262A33; color: 526777;">
            <div style="padding-left: 475px; padding-top: 20px;">
                <button type="submit" class="ml-2 py-2 px-4 bg-gray-700 rounded-md hover:bg-gray-800 focus:outline-none focus:ring-2 " style="color: 2ABA86;">Submit</button>
            </div>
          </div>
        </form>
    </div>

    <!-- awal footer -->
    <div >
        @include('layouts.footer')
    </div>
    <!-- akhir footer -->

</body>

</html>