<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Setting</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="public/css/setting.css">
</head>
<body class="bg-color">
    <div class="flex-container">
        <img src="{{asset('assets/img/logocapy.png')}}" alt="Icon" class="logo-icon" />
        <h1>CapyType</h1>
        <a href=""><img src="{{asset('assets/img/keyboard.png')}}" alt="Icon" class="icon-keyboard" /></a>
        <a href=""><img src="{{asset('assets/img/crown.png')}}" alt="Icon" class="icon-crown" /></a>
        <a href=""><img src="{{asset('assets/img/information.png')}}" alt="Icon" class="icon-information" /></a>
        <a href=""><img src="{{asset('assets/img/setting.png')}}" alt="Icon" class="icon-setting" /></a>
        <a href="" class="sign-btn">register/login</a>
    </div>
    <div class="setting">
        <div>
            <div class="sub-heading-text"><img src="setting.png" alt="icon" class="sub-icon">setting</div>
        </div>
        <div>
            <div class="setting-item">
                <img src="{{asset('assets/img/speedometercolor.png')}}" alt="icon" class="setting-icon">
                <div>live wpm</div>
            </div>
            <div class="setting-description">Display a live WPM speed during the test.
                <button class="live-wpm-hide">hide</button>
                <button class="live-wpm-show">show</button>
            </div>

            <div class="setting-item">
                <img src="{{asset('assets/img/speedometercolor.png')}}" alt="icon" class="setting-icon">
                <div>live accuracy</div>
            </div>
            <div class="setting-description">Display a live accuracy during the test.
                <button class="live-accuracy-hide">hide</button>
                <button class="live-accuracy-show">show</button>
            </div>
            <div class="setting-item">
                <img src="{{asset('assets/img/speedometercolor.png')}}" alt="icon" class="setting-icon">
                <div>timer/progress</div>
            </div>
            <div class="setting-description">Display a live timer for time test.
                <button class="live-timer-hide">hide</button>
                <button class="live-timer-show">show</button>
            </div>
            <div class="setting-item">
                <img src="{{asset('assets/img/Aa.png')}}" alt="icon" class="setting-icon">
                <div>font</div>
            </div>
                <div class="setting-description">Change font for typing and view.
                <select id="fontselect" onchange="changeFont()" class="font-change">
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
            <div class="setting-item">
                <img src="{{asset('assets/img/fontsize.png')}}" alt="icon" class="setting-icon">
                <div>font-size</div>
            </div>
            <div class="setting-description">Change font size for typing and view.
            <select id="fontsize" onchange="changeFont()" class="fontsize">
                    <option value="28">28</option>
                    <option value="32">32</option>
                    <option value="36">36</option>
                    <option value="40">40</option>
                    </select>
                    <script>
                        function toggleFontSelect() {
                            var fontSize = document.getElementById("fontsize");
                            fontSize.style.display = (fontSize.style.display === "none") ? "block" : "none";
                        }

                        function changeFont() {
                            var fontSize = document.getElementById("fontsize");
                            var selectedFont = fontSize.options[fontSize.selectedIndex].value;
                            document.body.style.fontFamily = selectedFont;
                        }
                    </script>
            </div>
        </div>
    </div>
    <footer>
        <div class="footer">
            <a class="ft1" href="https://mail.google.com" target="_blank">
                <img src="{{asset('assets/img/ftcontactbtn.png')}}" alt="icon" class="contact-icon">contact
            </a>
            <a class="ft2" href="https://discord.gg/utKDsSNv" target="_blank">
                <img src="{{asset('assets/img/ftdcbtn.png')}}" alt="icon" class="contact-icon">discord
            </a>
            <a class="ft2" href="https://t.me/capybara" target="_blank">
                <img src="{{asset('assets/img/fttelebtn.png')}}" alt="icon" class="contact-icon">telegram</a>
            <a class="ft2" href="">
                <img src="{{asset('assets/img/ftsupbtn.png')}}" alt="icon" class="contact-icon">support</a>
        </div>
    </footer>
</body>
</html>
