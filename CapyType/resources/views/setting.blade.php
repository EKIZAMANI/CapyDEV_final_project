<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CapyType</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="public/css/setting.css">
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
        <div style="justify-content: left; display: flex; margin-left: 115px; margin-bottom: 20px;">
            <div style=" margin-left: 55px; margin-top: 80px; margin-bottom: 10px; color: #526777; font-size: 18px; font-family: Roboto Mono; font-size: 28px; background-color: transparent; display: flex; justify-content: left; align-items: center; width: 110px; color: #526777;"><img src="{{asset('assets/img/setting.png')}}" alt="icon" style="width: 40px; margin-right: 15px;">setting</div>
        </div>


        <div style="font-size: 20; color: #526777; justify-content: left; display: flex; align-items: center; margin-left: 115px;">
            <img src="{{asset('assets/img/speedometercolor.png')}}" alt="icon" style="width: 50px; margin-left: 55px; margin-right: 15px;">live wpm
        </div>
        <div style="font-size: 20px; justify-content: center; display: flex; color: #e5f7ef; align-items: flex-end;">Display a live WPMspeed during the test.
        <button class="live-wpm-hide" style="font-size: 20px; margin-left: 65px; background-color: #2aba86; color: #262a33;">hide</button>
        <button class="live-wpm-show" style="font-size: 20px; margin-left: 20px; background-color: #1f232c; color: #526777;">show</button>
        </div>


        <div style="font-size: 20; color: #526777; justify-content: left; display: flex; align-items: center; margin-left: 115px; margin-top: 30px;">
            <img src="{{asset('assets/img/speedometercolor.png')}}" alt="icon" style="width: 50px; margin-left: 55px; margin-right: 15px;">live accuracy
        </div>
        <div style="font-size: 20px; justify-content: center; display: flex; color: #e5f7ef; align-items: flex-end;">Display a live accuracy during the test.
        <button class="live-wpm-hide" style="font-size: 20px; margin-left: 65px; background-color: #2aba86; color: #262a33;">hide</button>
        <button class="live-wpm-show" style="font-size: 20px; margin-left: 20px; background-color: #1f232c; color: #526777;">show</button>
        </div>


        <div style="font-size: 20; color: #526777; justify-content: left; display: flex; align-items: center; margin-left: 115px; margin-top: 30px;">
            <img src="{{asset('assets/img/speedometercolor.png')}}" alt="icon" style="width: 50px; margin-left: 55px; margin-right: 15px;">timer/progress
        </div>
        <div style="font-size: 20px; justify-content: center; display: flex; color: #e5f7ef; align-items: flex-end;">Display a live timer for time test.
        <button id="hidebutton3" onclick="toggleButtons()" class="live-wpm-hide" style="font-size: 20px; margin-left: 130px; background-color: #1f232c; color: #526777;">hide</button>
        <button id="showbutton3" onclick="toggleButtons()" class="live-wpm-show" style="font-size: 20px; margin-left: 20px; background-color: #2aba86; color: #262a33;">show</button>
        </div>

        <div style="font-size: 20; color: #526777; justify-content: left; display: flex; align-items: center; margin-left: 115px; margin-top: 30px;">
            <img src="{{asset('assets/img/Aa.png')}}" alt="icon" style="width: 50px; margin-left: 55px; margin-right: 15px;">font
        </div>
        <div style="font-size: 20px; justify-content: center; display: flex; color: #e5f7ef; align-items: flex-end;">Change font for typing and view.
        <select id="fontselect" onchange="changeFont()" style="font-size: 20px; margin-left: 170px; background-color: #1f232c; color: #526777; width: 390px; height: 62px; border-radius: 8px; border: none; font-weight: 900; padding-left: 15px; cursor: pointer;">
            <option value="Roboto Mono">Roboto Mono</option>
            <option value="Arial">Arial</option>
            <option value="Helvetica">Helvetica</option>
            <option value="Times New Roman">Times New Roman</option>
        </select>
        <script>
            function toggleFontSelect() {
                var fontSelect = document.getElementById("fontselect");
                fontSelect.style.display = (fontSelect.style.display === "none") ? "block" : "none";
            }

            function changeFont() {
                var fontSelect = document.getElementById("fontselect");
                var selectedFont = fontSelect.options[fontSelect.selectedIndex].value;
                document.body.style.fontFamily = selectedFont;
            }
        </script>
        </div>


        <div style="font-size: 20; color: #526777; justify-content: left; display: flex; align-items: center; margin-left: 115px; margin-top: 30px;">
            <img src="{{asset('assets/img/fontsize.png')}}" alt="icon" style="width: 50px; margin-left: 55px; margin-right: 15px;">font-size
        </div>
        <div style="font-size: 20px; justify-content: center; display: flex; color: #e5f7ef; align-items: flex-end;">Change font size for typing and view.
        <button id="hide-button" class="live-wpm-hide-fontsize" style="font-size: 20px; margin-left: 380px; background-color: #1f232c; color: #526777;">28</button>
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
    </div>
</body>
</html>
