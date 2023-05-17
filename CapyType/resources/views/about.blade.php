    <!-- awal navbar -->
    @extends('layouts.navigation')
    @section('title')
    CapyType | About
    @endsection
    <!-- akhir navbar -->
      @section('content')
     <!-- awal about -->
     <div class="p-5 mx-36">
        <p class="pt-10" style="color: #526777; font-size: 32;" >about</p>
            <p class="flex pt-5 font-bold" style="color: #E5F7EF">CapyType is a minimalistic typing test.
                It features many test modes, an account system to save your typing speed history, and user
                -configurable features such as themes and more. CapyType attempts to emulate the experience
                of natural keyboard typing during a typing test, by unobtrusively presenting the text prompts
                and displaying typed characters in-place, providing straightforward, real-time feedback on typos,
                speed, and accuracy.</p>
            <p class="flex pt-5 font-bold" style="color: #E5F7EF">CapyType is currently in the development
                stage and will be released at a later date. it is possible that existing features will be added
                and modified to make it look better. We will release more features and will fix some bugs for it,
                so we ask users to always support us by giving feedback and letting us know of features and bugs
                that may bother users. Thank You</p>
            <p class="flex pt-10" style="color: #526777 ">bug report or feature request</p>
            <p class="flex pt-2 font-bold" style="color: #E5F7EF">If you encounter a bug, or have a feature request
                - join the Discord server, send me an email, or send the comment on Telegram channel.</p>

            <!-- awal support -->
            <div>
                <p class="pt-10" style="color: #526777; font-size: 32;" >Support</p>
                <p class="flex pt-2 font-bold" style="color: #E5F7EF">Thanks to everyone who has supported this project. It would not be possible without you and your continued support.</p>
                <div class="mt-5">
                    <button class="flex justify-center w-full py-8 mx-auto font-bold rounded-lg " onclick="window.location.href='https://saweria.co/capytype2023/'"  style="background-color: #1F232C; font-size: 32px; color: #E5F7EF;">
                        <img src="{{ asset('assets/img/money.png') }}" alt="Icon"
                        class="w-16 pr-4" style="filter: invert(94%) sepia(11%) saturate(219%) hue-rotate(95deg) brightness(104%) contrast(94%);">
                        <p class="pt-3">Support</p>
                    </button>
                </div>
            </div>
            <!-- akhir support -->

                <p class="pt-10" style="color: #526777; font-size: 32;" >contact</p>
                <p class="font-bold flexs" style="color: #E5F7EF">If you encounter a bug, have a feature request or just want to say hi -
                        here are the different ways you can contact me directly..</p>
                <div class="flex justify-between pt-5">
                    <button class="flex justify-center font-bold rounded-lg py-7" onclick="window.location.href='mailto:capytype@gmail.com'" style="background-color: #1F232C; font-size: 32px; color: #E5F7EF; width: 32%;">
                        <img src="{{ asset('assets/img/envelope.png') }}" alt="Icon"
                        class="w-16 pr-4" style="filter: invert(94%) sepia(11%) saturate(219%) hue-rotate(95deg) brightness(104%) contrast(94%);">
                        <p class="pt-3">Mail</p>
                    </button>
                    <button class="flex justify-center font-bold rounded-lg py-7" onclick="window.location.href='https://discord.gg/RRRTQTby/'" style="background-color: #1F232C; font-size: 32px; color: #E5F7EF; width: 32%">
                        <img src="{{ asset('assets/img/discord.png') }}" alt="Icon"
                        class="w-16 pr-4" style="filter: invert(94%) sepia(11%) saturate(219%) hue-rotate(95deg) brightness(104%) contrast(94%);">
                        <p class="pt-3">Discord</p>
                    </button>
                    <button class="flex justify-center font-bold rounded-lg py-7" onclick="window.location.href='https://t.me/capytype/'" style="background-color: #1F232C; font-size: 32px; color: #E5F7EF; width: 32%">
                        <img src="{{ asset('assets/img/telegram.png') }}" alt="Icon"
                        class="w-16 pr-4" style="filter: invert(94%) sepia(11%) saturate(219%) hue-rotate(95deg) brightness(104%) contrast(94%);">
                        <p class="pt-3">Telegram</p>
                    </button>
                </div>
            </div>
            <!-- akhir about -->
        @endsection

