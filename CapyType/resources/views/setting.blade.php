@extends('layouts.navigation')
@section('content')

<link rel="stylesheet" href="assets/css/setting.css">

<body>
    <div class="font-mono setting">
        <div>
            <div class="sub-heading-text"><img src="assets/img/setting.png" alt="" class="sub-icon">setting</div>
        </div>
        <div>
            <div class="setting-item">
                <img src="{{ asset('assets/img/speedometercolor.png') }}" alt="icon" class="setting-icon">
                <div>live wpm</div>
            </div>
            <div class="setting-description">Display a live WPM speed during the test.
                <button class="live-wpm-hide">hide</button>
                <button class="live-wpm-show">show</button>
            </div>

            <div class="setting-item">
                <img src="{{ asset('assets/img/speedometercolor.png') }}" alt="icon" class="setting-icon">
                <div>live accuracy</div>
            </div>
            <div class="setting-description">Display a live accuracy during the test.
                <button class="live-accuracy-hide">hide</button>
                <button class="live-accuracy-show">show</button>
            </div>
            <div class="setting-item">
                <img src="{{ asset('assets/img/speedometercolor.png') }}" alt="icon" class="setting-icon">
                <div>timer/progress</div>
            </div>
            <div class="setting-description">Display a live timer for time test.
                <button class="live-timer-hide">hide</button>
                <button class="live-timer-show">show</button>
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
                <img src="{{ asset('assets/img/fontsize.png') }}" alt="icon" class="setting-icon">
                <div>font-size</div>
            </div>
            <div class="setting-description">Change font size for typing and view.
                <select id="fontsize" onchange="changeFontSize()" class="fontsize">
                    <option value="28">28</option>
                    <option value="32">32</option>
                    <option value="36">36</option>
                    <option value="40">40</option>
                </select>
                <script>
                    function changeFontSize() {
                        var fontSize = document.getElementById("fontsize").value;
                        document.getElementById("typing-area").style.fontSize = fontSize + "px";
                        document.getElementById("view").style.fontSize = fontSize + "px";
                    }
                </script>
            </div>
        </div>
    </div>
</body>
@endsection