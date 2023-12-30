<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        @vite('resources/css/app.css')


    </head>
    <body class="flex flex-col justify-center items-center">
        <section id="navbar" class="flex justify-between p-4">
            <div><img src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/logo-qw-light.webp" alt="qwords" class="pl-4"></div>
            <div class="flex pt-2">
                <p class="p-2 cursor-pointer hover:text-[#ff6d0b] font-bold">Cloud Hosting</p>
                <p class="p-2 cursor-pointer hover:text-[#ff6d0b] font-bold">Server</p>
                <p class="p-2 cursor-pointer hover:text-[#ff6d0b] font-bold">Domain</p>
                <p class="p-2 cursor-pointer hover:text-[#ff6d0b] font-bold">Email Suite</p>
                <p class="p-2 cursor-pointer hover:text-[#ff6d0b] font-bold">Services</p>
                <p class="p-2 cursor-pointer hover:text-[#ff6d0b] font-bold">Internet Access</p>
                <p class="p-2 cursor-pointer hover:text-[#ff6d0b] font-bold">Promo</p>
            </div>
            <div class=" font-bold cursor-pointer text-[#ff6d0b] border-2 justify-center items-center p-2 border-[#ff6d0b] rounded-lg hover:text-[#fff] hover:bg-[#ff6d0b]">
                <p>log in</p>
            </div>
        </section>


        <section id="banner">
            <h1 class="text-6xl font-bold">Cloud Hosting untuk Kesusksesan Websitemu</h1>
            <p>Qwords merupakan perusahaan teknologi yang menyediakan layanan cloud hosting, data center solution, domain, dan layanan digital lainnya</p>
        </section>


    </body>
</html>
