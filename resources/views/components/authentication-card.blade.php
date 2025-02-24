<div class="overflow-hidden relative min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
    @vite('resources/css/app.css')
    <link rel="icon" href="/img/icon.png">
    <div class="z-10 w-[80vh] sm:max-w-md mt-6 px-6 py-10 bg-white shadow-md overflow-hidden sm:rounded-lg">
        <!-- Geser logo ke atas dengan mengurangi margin-top (mt) -->
        <center class="justify-self-center" style="margin-top: 35px; position: relative; top: -25px">
            {{ $logo }}
        </center>
        {{ $slot }}
    </div>
</div>