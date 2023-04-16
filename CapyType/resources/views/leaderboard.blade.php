<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CapyType</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="leaderboard.css">
</head>
<body style="background-color: #262a33; font-family: Roboto Mono;">
    <div style="display: flex; align-items: center; margin-left:20px;">
        <img src="{{asset('assets/img/logocapy.png')}}" alt="Icon" style="margin-left: 70px; margin-right: 10px; position: relative;" width="60px" />
        <h1 style="color: #e5f7ef;">CapyType</h1>
        <a href=""><img src="{{asset('assets/img/keyboard.png')}}" alt="Icon" style="margin-left: 55px; margin-top: 10px;" width="50px" /></a>
        <a href="leaderboard.php"><img src="{{asset('assets/img/crown.png')}}" alt="Icon" style="margin-left: 20px; margin-top: 10px;" width="40px" /></a>
        <a href="about.php"><img src="{{asset('assets/img/information.png')}}" alt="Icon" style="margin-left: 20px; margin-top: 10px;" width="35px" /></a>
        <a href="setting.php"><img src="{{asset('assets/img/setting.png')}}" alt="Icon" style="margin-left: 20px; margin-top: 10px;" width="35px" /></a>
        <a href="" class="sign-btn" style="margin-top: 3px; margin-left: 410px">register/login</a>
    </div>
    <div>
        <div style="justify-content: left; display: flex; align-items: center; margin-left: 115px; margin-bottom: 20px;">
            <div style="color: #526777; display: flex; align-items: center; margin-left: 60px; margin-top: 80px; font-size: 28px;"><img src="{{asset('assets/img/crown.png')}}" alt="icon" style="width: 40px; margin-right: 15px;">top leaderboard</div>
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
                <tbody style="font-size: 20px;">
                <tr style="border-radius: 20px;">
                    <td class="no">1</td>
                    <td class="name"><img src="pictlogo.png" alt="icon" style="width: 20px; padding-right: 20px;">Mr.Pudidi</td>
                    <td class="wpm">156</td>
                    <td class="accuracy">98.12%</td>
                </tr>
                <tr>
                    <td class="no">2</td>
                    <td class="name"><img src="pictlogo.png" alt="icon" style="width: 20px; padding-right: 20px;">ijal</td>
                    <td class="wpm">143</td>
                    <td class="accuracy">97.14%</td>
                </tr>
                <tr>
                    <td class="no">3</td>
                    <td class="name"><img src="pictlogo.png" alt="icon" style="width: 20px; padding-right: 20px;">furqan</td>
                    <td class="wpm">141</td>
                    <td class="accuracy">98.41%</td>
                </tr>
                <tr>
                    <td class="no">4</td>
                    <td class="name"><img src="pictlogo.png" alt="icon" style="width: 20px; padding-right: 20px;">budy</td>
                    <td class="wpm">137</td>
                    <td class="accuracy">94.52%</td>
                </tr>
                <tr>
                    <td class="no">5</td>
                    <td class="name"><img src="pictlogo.png" alt="icon" style="width: 20px; padding-right: 20px;">asep</td>
                    <td class="wpm">125</td>
                    <td class="accuracy">93.32%</td>
                </tr>
                <tr>
                    <td class="no">6</td>
                    <td class="name"><img src="pictlogo.png" alt="icon" style="width: 20px; padding-right: 20px;">ardy</td>
                    <td class="wpm">119</td>
                    <td class="accuracy">99.12%</td>
                </tr>
                <tr>
                    <td class="no">7</td>
                    <td class="name"><img src="pictlogo.png" alt="icon" style="width: 20px; padding-right: 20px;">riyan</td>
                    <td class="wpm">112</td>
                    <td class="accuracy">98.31%</td>
                </tr>
                <tr>
                    <td class="no">8</td>
                    <td class="name"><img src="pictlogo.png" alt="icon" style="width: 20px; padding-right: 20px;">siti</td>
                    <td class="wpm">98</td>
                    <td class="accuracy">96.12%</td>
                </tr>
                <tr>
                    <td class="no">9</td>
                    <td class="name"><img src="pictlogo.png" alt="icon" style="width: 20px; padding-right: 20px;">fichi</td>
                    <td class="wpm">87</td>
                    <td class="accuracy">99.12%</td>
                </tr>
                <tr>
                    <td class="no">10</td>
                    <td class="name"><img src="{{asset('assets/img/pictlogo.png')}}" alt="icon" style="width: 20px; padding-right: 20px;">cekdo</td>
                    <td class="wpm">85</td>
                    <td class="accuracy" >91.32%</td>
                </tr>
                </tbody>
        </table>
    </div>
    <footer>
        <div style="display: flex; justify-content: left; width: auto; height: 50px; margin-top: 100px;">
            <a style="margin-left: 60px; margin-top: 10px; margin-bottom: 10px; color: #526777; font-size: 18px; font-family: Roboto Mono; font-weight: 900; background-color: transparent; display: flex; justify-content: left; align-items: center; width: 110px;" href="https://mail.google.com" target="_blank">
                    <img src="{{asset('assets/img/ftcontactbtn.png')}}" style="position: relative; width: 25px; margin-right: 10px;" alt="icon">contact
                </a>
                <a style="margin-left: 30px; margin-top: 10px; margin-bottom: 10px; color: #526777; font-size: 18px; font-family: Roboto Mono; font-weight: 900; background-color: transparent; display: flex; justify-content: left; align-items: center; width: 110px;" href="https://discord.gg/utKDsSNv" target="_blank">
                    <img src="{{asset('assets/img/ftdcbtn.png')}}" style="position: relative; width: 25px; margin-right: 10px;" alt="icon">discord
                </a>
                <a style="margin-left: 30px; margin-top: 10px; margin-bottom: 10px; color: #526777; font-size: 18px; font-family: Roboto Mono; font-weight: 900; background-color: transparent; display: flex; justify-content: left; align-items: center; width: 110px;" href="https://t.me/capybara" target="_blank">
                    <img src="{{asset('assets/img/fttelebtn.png')}}" style="position: relative; width: 25px; margin-right: 10px;" alt="icon">telegram
                </a>
                <a style="margin-left: 30px; margin-top: 10px; margin-bottom: 10px; color: #526777; font-size: 18px; font-family: Roboto Mono; font-weight: 900; background-color: transparent; display: flex; justify-content: left; align-items: center; width: 110px;" href="">
                    <img src="{{asset('assets/img/ftsupbtn.png')}}" style="position: relative; width: 25px; margin-right: 10px;" alt="icon">support
                </a>
            </div>
    </footer>
</body>
</html>
