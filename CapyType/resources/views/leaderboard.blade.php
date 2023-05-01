<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CapyType</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="public/assets/css/leaderboard.css">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{ asset('assets/css/leaderboard.css') }}">
</head>
<body style="background-color: #262a33;" class="font-mono">
    <!-- awal navbar -->
    @include('layouts.navbar')
    <!-- akhir navbar -->
    <div>
        <div style="justify-content: left; display: flex; align-items: center; margin-left: 115px; margin-bottom: 20px;">
            <div style="color: #526777; display: flex; padding-left: 300px; margin-left: 60px; margin-top: 80px; font-size: 28px;" ><img src="{{asset('assets/img/crown.png')}}" alt="icon" style="width: 40px; margin-right: 15px;">top leaderboard</div>
        </div>
        <table class="tabel">
                <thead style="font-size: 28px;">
                    <tr style="background-color: transparent;">
                        <td class="no">#</td>
                        <td class="name">name</td>
                        <td class="wpm">wpm</td>
                        <td class="accuracy">accuracy</td>
                    </tr>
                </thead>
                <tbody style="font-size: 24px;">
                <tr style="border-radius: 20px;">
                    <td class="no">1</td>
                    <td class="name"><img src="{{asset('assets/img/pictlogo.png')}}" style="width: 20px; padding-right: 20px;" font-zi>Mr.Pudidi</td>
                    <td class="wpm">156</td>
                    <td class="accuracy">98.12%</td>
                </tr>
                <tr>
                    <td class="no">2</td>
                    <td class="name"><img src="{{asset('assets/img/pictlogo.png')}}" style="width: 20px; padding-right: 20px;" font-zi>ijal</td>
                    <td class="wpm">143</td>
                    <td class="accuracy">97.14%</td>
                </tr>
                 <tr style="border-radius: 20px;">
                    <td class="no">3</td>
                    <td class="name"><img src="{{asset('assets/img/pictlogo.png')}}" style="width: 20px; padding-right: 20px;" font-zi>furqan</td>
                    <td class="wpm">120</td>
                    <td class="accuracy">95.11%</td>
                </tr>
                <tr>
                    <td class="no">4</td>
                    <td class="name"><img src="{{asset('assets/img/pictlogo.png')}}" style="width: 20px; padding-right: 20px;" font-zi>fanul</td>
                    <td class="wpm">120</td>
                    <td class="accuracy">93.97%</td>
                </tr>
                </tbody>
        </table>
    </div>
    <!-- awal footer -->
    <div class="pt-10">
        @include('layouts.footer')
    </div>
    
    <!-- akhir footer -->
</body>
</html>