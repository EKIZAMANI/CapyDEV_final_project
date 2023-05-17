@extends('layouts.navigation')
@section('title')
    CapyType | Typing
@endsection
@section('content')
    <!-- awal typing section -->
    <div class="flex justify-center mx-20 my-10">
        <div class="flex items-center px-8 py-2 font-mono text-base font-medium text-justify bg-gray-900 rounded-lg"
            style="color:#526777">
            <button id="custom-words-btn" onclick="custom()"><a>#custom-words</a></button>
            <div id="custom-words-popup" style="display: none;">
                <input type="text" id="custom-words-input">
                <button id="custom-words-submit">Submit</button>
            </div>
            <button id="time-btn" onclick="changeColor(this)">
                <div class="flex items-center"><img src="{{ asset('assets/img/clock.png') }}" alt="time" class="ml-4"
                        width="22" height="23"
                        style="filter: invert(38%) sepia(13%) saturate(808%) hue-rotate(164deg) brightness(95%) contrast(85%);"><span><span
                            class="ml-2 time">time</span></div>
            </button>
            <button id="words-btn" onclick="changeColor(this)">
                <div class="flex items-center"><img src="{{ asset('assets/img/A.png') }}" alt="A" class="ml-4"
                        width="22" height="20"
                        style="filter: invert(38%) sepia(13%) saturate(808%) hue-rotate(164deg) brightness(95%) contrast(85%);"><span
                        class="ml-2">words</span>
            </button>
            <div class="flex items-center ml-4">
                <button class="ml-2" id="btn-15" onclick="changeColor(this)">15</button>
                <button class="ml-2" id="btn-30" onclick="changeColor(this)">30</button>
                <button class="ml-2" id="btn-60" onclick="changeColor(this)">60</button>
                <button class="ml-2" id="btn-120" onclick="changeColor(this)">120</button>
            </div>
        </div>
    </div>

    <button id="language-btn" class="flex items-center justify-center mx-auto">
        <img src="{{ asset('assets/img/earth.png') }}" alt="" class="mr-2" width="18" height="16"
            style="filter: invert(38%) sepia(13%) saturate(808%) hue-rotate(164deg) brightness(95%) contrast(85%);">
        <span class="ml-1 font-mono text-sm font-medium text-gray-600">Indonesia</span>
    </button>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <div class="flex items-center justify-center mx-auto">
        <div class="font-mono wrapper">
            <div class="mt-8 mb-3 content">
                <ul class="mx-16 my-10 result-details" style="color:#2ABA86">
                    <li class="time" id="times">
                        <p>Time Left:</p>
                        <span><b>60</b>s</span>
                    </li>
                    <li class="mistake">
                        <p>Mistakes:</p>
                        <span>0</span>
                    </li>
                    <li class="wpm">
                        <p>WPM:</p>
                        <span>0</span>
                    </li>
                    <li class="cpm">
                        <p>CPM:</p>
                        <span>0</span>
                    </li>
                    <li class="accuracy">
                        <p>Accuracy:</p>
                        <span>0%</span>
                    </li>
                </ul>
            </div>
            <input type="text" class="input-field">
            <div class="content-box">
                <div class="typing-text">
                    <p></p>
                </div>
                <div class="flex justify-center mx-20 mt-8">
                    <button class="refresh"><img src="{{ asset('assets/img/refresh-arrow.png') }}" alt=""
                            style="filter: invert(62%) sepia(49%) saturate(637%) hue-rotate(107deg) brightness(90%) contrast(82%);"
                            width="35" height="35"></button>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src={{ asset('js/paragraphs.js') }}></script>
    <script src={{ asset('js/script.js') }}></script>
    <div style="padding-bottom: 300px;">

    </div>
@endsection
