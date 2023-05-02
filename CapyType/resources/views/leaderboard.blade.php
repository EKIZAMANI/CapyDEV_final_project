@extends('layouts.navigation')
@section('content')

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
                <tr style="border-radius: 20px;">
                    <td class="no">1</td>
                    <td class="name"><img src="assets/img/pictlogo.png" alt="icon" style="width: 20px; padding-right: 20px;">Mr.Pudidi</td>
                    <td class="wpm">156</td>
                    <td class="accuracy">98.12%</td>
                </tr>
                <tr>
                    <td class="no">2</td>
                    <td class="name"><img src="assets/img/pictlogo.png" alt="icon" style="width: 20px; padding-right: 20px;">ijal</td>
                    <td class="wpm">143</td>
                    <td class="accuracy">97.14%</td>
                </tr>
                <tr>
                    <td class="no">3</td>
                    <td class="name"><img src="assets/img/pictlogo.png" alt="icon" style="width: 20px; padding-right: 20px;">furqan</td>
                    <td class="wpm">141</td>
                    <td class="accuracy">98.41%</td>
                </tr>
                <tr>
                    <td class="no">4</td>
                    <td class="name"><img src="assets/img/pictlogo.png" alt="icon" style="width: 20px; padding-right: 20px;">budy</td>
                    <td class="wpm">137</td>
                    <td class="accuracy">94.52%</td>
                </tr>
                <tr>
                    <td class="no">5</td>
                    <td class="name"><img src="assets/img/pictlogo.png" alt="icon" style="width: 20px; padding-right: 20px;">asep</td>
                    <td class="wpm">125</td>
                    <td class="accuracy">93.32%</td>
                </tr>
                <tr>
                    <td class="no">6</td>
                    <td class="name"><img src="assets/img/pictlogo.png" alt="icon" style="width: 20px; padding-right: 20px;">ardy</td>
                    <td class="wpm">119</td>
                    <td class="accuracy">99.12%</td>
                </tr>
                <tr>
                    <td class="no">7</td>
                    <td class="name"><img src="assets/img/pictlogo.png" alt="icon" style="width: 20px; padding-right: 20px;">riyan</td>
                    <td class="wpm">112</td>
                    <td class="accuracy">98.31%</td>
                </tr>
                <tr>
                    <td class="no">8</td>
                    <td class="name"><img src="assets/img/pictlogo.png" alt="icon" style="width: 20px; padding-right: 20px;">siti</td>
                    <td class="wpm">98</td>
                    <td class="accuracy">96.12%</td>
                </tr>
                <tr>
                    <td class="no">9</td>
                    <td class="name"><img src="assets/img/pictlogo.png" alt="icon" style="width: 20px; padding-right: 20px;">fichi</td>
                    <td class="wpm">87</td>
                    <td class="accuracy">99.12%</td>
                </tr>
                <tr>
                    <td class="no">10</td>
                    <td class="name"><img src="assets/img/pictlogo.png" alt="icon" style="width: 20px; padding-right: 20px;">cekdo</td>
                    <td class="wpm">85</td>
                    <td class="accuracy" >91.32%</td>
                </tr>
                </tbody>
        </table>
        </div>
    </div>
</body>
@endsection