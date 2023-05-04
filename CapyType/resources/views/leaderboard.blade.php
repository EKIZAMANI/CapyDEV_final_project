@extends('layouts.navigation')
@section('content')
@section('title')
CapyType | Leaderboard
@endsection
<link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@400;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="assets/css/leaderboard.css">
<body style="background-color: #262a33; font-family: Roboto Mono;">
    <div>
        <div style="justify-content: center; display: flex; align-items: center; margin-bottom: 20px;">
            <div style="color: #526777; display: flex; align-items: center; margin-top: 80px; font-size: 28px;"><img src="{{asset('assets/img/crown.png')}}" alt="icon" style="width: 40px; margin-right: 15px;">top leaderboard</div>
        </div>
        <div style="justify-content: center; display: flex; align-items: center;">
        <table class="tabel">
                <thead style="font-size: 28px;">
                    <tr style="background-color: transparent;">
                        <td class="no">#</td>
                        <td class="name">name</td>
                        <td class="wpm">wpm</td>
                        <td class="accuracy">accuracy</td>
                    </tr>
                </thead>
                <tbody style="font-size: 20px;">
                @foreach ($leaderboards as $leaderboard)
                <tr style="border-radius: 20px;">
                    <td class="no">{{ $loop->iteration }} |</td>
                    <td class="name"><img src="assets/img/pictlogo.png" alt="icon" style="width: 20px; padding-left: 30px;"> {{ $leaderboard->name }}</td>
                    <td class="wpm">{{ $leaderboard->wpm }}</td>
                    @if ($leaderboard->accuracy != NULL)
                    <td class="accuracy">{{ $leaderboard->accuracy }}%</td>
                    @else
                    <td class="accuracy">{{ $leaderboard->accuracy }}</td>
                    @endif
                </tr>
                @endforeach
                </tbody>
        </table>
        </div>
    </div>
</body>
@endsection
