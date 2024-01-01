<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        @vite('resources/css/app.css')


    </head>
    <body class="flex flex-col justify-center items-center">
        <section id="navbar" class="flex justify-between w-full p-4 fixed top-0">
            <div><img src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/logo-qw-light.webp" alt="qwords" class="pl-4"></div>
            <div class="flex pt-2">
                <p class="p-2 cursor-pointer hover:text-[#ff6d0b] font-bold">Cloud Hosting</p>
                <p class="p-2 ml-2 cursor-pointer hover:text-[#ff6d0b] font-bold">Server</p>
                <p class="p-2 ml-2 cursor-pointer hover:text-[#ff6d0b] font-bold">Domain</p>
                <p class="p-2 ml-2 cursor-pointer hover:text-[#ff6d0b] font-bold">Email Suite</p>
                <p class="p-2 ml-2 cursor-pointer hover:text-[#ff6d0b] font-bold">Services</p>
                <p class="p-2 ml-2 cursor-pointer hover:text-[#ff6d0b] font-bold">Internet Access</p>
                <p class="p-2 ml-2 cursor-pointer hover:text-[#ff6d0b] font-bold">Promo</p>
            </div>
            <div class=" font-bold cursor-pointer text-[#ff6d0b] border-2 justify-center items-center p-2 border-[#ff6d0b] rounded-lg hover:text-[#fff] hover:bg-[#ff6d0b]">
                <p>log  in</p>
            </div>
        </section>


        <section id="banner" class="max-w-5xl mt-24 flex justify-center items-center flex-col h-[100vh]">
            <h1 class="text-6xl font-bold p-8">Cloud Hosting untuk Kesuksesan <span class="text-[#ff6d0b]">Websitemu!</span></h1>
            <p class="p-8 pt-0">Qwords menawarkan layanan Cloud Hosting Akses Cepat, Standar Keamanan Tinggi, Uptime Server 99,99%, Fitur Lengkap dan Pelayanan Pelanggan 24 jam untuk memenuhi kebutuhan website Anda. <br>Tersertifikasi ISO 27001 dengan Data Center Tier 3 dan Network Tier 1 </p>
            <div class="w-full flex justify-center items-center">
                <p class="font-bold text-4xl p-8 text-[#ff6d0b]">#QwordYourSuccess</p>
            </div>
            <div class="bg-[#ff6d0b] w-80 h-16 rounded-full flex justify-center cursor-pointer items-center">
                <p class="text-[#fff] font-bold text-lg">Pesan Sekarang</p>
            </div>
        </section>


        <section id="products" class="flex flex-col justify-center items-center">
            <p class="font-bold text-4xl p-8">Cloude Hosting Indonesia <span class="text-[#ff6d0b]">Diskon Hingga 50%</span></p>
            <p class="mb-8">Layanan cloud hosting indonesia terbaik dengan teknologi andal untuk website anda</p>

            <div class="flex w-full max-w-[1600px] justify-center items-center">
                <div class="shadow-[rgba(0,_0,_0,_0.2)_0px_30px_90px] p-6 m-4 rounded-2xl min-w-[300px]">
                    <p>Value Cloud Hosting</p>
                    <strong class="text-xl py-2">VCH1</strong>
                    <del><p>25.500</p></del>
                    <p class="text-[#ff6d0b] font-bold text-4xl">Rp 14.500</p>

                    <div class="flex p-2 items-center justify-start w-full">
                        <img src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/smallicons/disk.webp" alt="Disk">
                        <div class="ml-6">
                            <p>Disk</p>
                            <p class="font-bold">3GB</p>
                        </div>
                    </div>

                    <div class="flex p-2 justify-start items-center w-full">
                        <img src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/smallicons/bandwidth.webp" alt="bandwith">
                        <div class="ml-6">
                            <p>Bandwith</p>
                            <p class="font-bold">Unlimited</p>
                        </div>
                    </div>

                    <div class="flex p-2 items-center justify-start w-full">
                        <img src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/smallicons/cpu.webp" alt="CPU Core">
                        <div class="ml-6">
                            <p>Core CPU</p>
                            <p class="font-bold">0.5 Core</p>
                        </div>
                    </div>

                    <div class="flex items-center p-2 justify-start w-full">
                        <img src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/smallicons/addon.webp" alt="add-on">
                        <div class="ml-6">
                            <p>Addon / parked domain</p>
                            <p class="font-bold">no</p>
                        </div>
                    </div>

                    <div class="flex justify-center items-center pt-4 cursor-pointer">
                        <div class="bg-[#ff6d0b] text-[#fff] p-2 w-full rounded-full justify-center items-center flex">
                            <p class="font-black">Pesan Sekarang</p>
                        </div>
                    </div>

                    

                </div>


                <div class="shadow-[rgba(0,_0,_0,_0.2)_0px_30px_90px] p-6 m-4 rounded-2xl min-w-[300px]">
                    <p>Unlimited Hosting</p>
                    <strong class="text-xl py-2">Signature</strong>
                    <del><p>109.000</p></del>
                    <p class="text-[#ff6d0b] font-bold text-4xl">Rp 89.900</p>

                    <div class="flex p-2 items-center justify-start w-full">
                        <img src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/smallicons/disk.webp" alt="Disk">
                        <div class="ml-6">
                            <p>Disk</p>
                            <p class="font-bold">Unlimited</p>
                        </div>
                    </div>

                    <div class="flex p-2 justify-start items-center w-full">
                        <img src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/smallicons/bandwidth.webp" alt="bandwith">
                        <div class="ml-6">
                            <p>Bandwith</p>
                            <p class="font-bold">Unlimited</p>
                        </div>
                    </div>

                    <div class="flex p-2 justify-start items-center w-full">
                        <img src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/smallicons/cpu.webp" alt="CPU Core">
                        <div class="ml-6">
                            <p>Core CPU</p>
                            <p class="font-bold">1 Core</p>
                        </div>
                    </div>

                    <div class="flex p-2 justify-start items-center w-full">
                        <img src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/smallicons/addon.webp" alt="add-on">
                        <div class="ml-6">
                            <p>Addon / parked domain</p>
                            <p class="font-bold">5 / 5</p>
                        </div>
                    </div>

                    <div class="flex justify-center items-center pt-4 cursor-pointer">
                        <div class="bg-[#ff6d0b] text-[#fff] p-2 w-full rounded-full justify-center items-center flex">
                            <p class="font-black">Pesan Sekarang</p>
                        </div>
                    </div>

                    

                </div>


                <div class="shadow-[rgba(0,_0,_0,_0.2)_0px_30px_90px] p-6 m-4 rounded-2xl min-w-[300px]">
                    <p>High Performance</p>
                    <strong class="text-xl py-2">HPCH Bisnis 1</strong>
                    <del><p>90.000</p></del>
                    <p class="text-[#ff6d0b] font-bold text-4xl">Rp 79.000</p>

                    <div class="flex p-2 justify-start items-center w-full">
                        <img src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/smallicons/disk.webp" alt="Disk">
                        <div class="ml-6">
                            <p>Disk</p>
                            <p class="font-bold">3GB</p>
                        </div>
                    </div>

                    <div class="flex p-2 justify-start items-center w-full">
                        <img src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/smallicons/bandwidth.webp" alt="bandwith">
                        <div class="ml-6">
                            <p>Bandwith</p>
                            <p class="font-bold">Unlimited</p>
                        </div>
                    </div>

                    <div class="flex p-2 justify-start items-center w-full">
                        <img src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/smallicons/cpu.webp" alt="CPU Core">
                        <div class="ml-6">
                            <p>Core CPU</p>
                            <p class="font-bold">1 Core</p>
                        </div>
                    </div>

                    <div class="flex p-2 justify-start items-center w-full">
                        <img src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/smallicons/addon.webp" alt="add-on">
                        <div class="ml-6">
                            <p>Addon / parked domain</p>
                            <p class="font-bold">-</p>
                        </div>
                    </div>

                    <div class="flex justify-center items-center pt-4 cursor-pointer">
                        <div class="bg-[#ff6d0b] text-[#fff] p-2 w-full rounded-full justify-center items-center flex">
                            <p class="font-black">Pesan Sekarang</p>
                        </div>
                    </div>

                    

                </div>


                <div class="shadow-[rgba(0,_0,_0,_0.2)_0px_30px_90px] p-6 m-4 rounded-2xl min-w-[300px]">
                    <p>Cloud VPS KVM SSD</p>
                    <strong class="text-xl py-2">VPS SC1</strong>
                    <del><p>135.000</p></del>
                    <p class="text-[#ff6d0b] font-bold text-4xl">Rp 75.000</p>

                    <div class="flex p-2 justify-start items-center w-full">
                        <img src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/smallicons/disk.webp" alt="Disk">
                        <div class="ml-6">
                            <p>Disk</p>
                            <p class="font-bold">25GB</p>
                        </div>
                    </div>

                    <div class="flex p-2 justify-start items-center w-full">
                        <img src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/smallicons/bandwidth.webp" alt="bandwith">
                        <div class="ml-6">
                            <p>Bandwith</p>
                            <p class="font-bold">Unlimited</p>
                        </div>
                    </div>

                    <div class="flex p-2 justify-start items-center w-full">
                        <img src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/smallicons/cpu.webp" alt="CPU Core">
                        <div class="ml-6">
                            <p>Core Cpu</p>
                            <p class="font-bold">1 Core</p>
                        </div>
                    </div>

                    <div class="flex p-2 justify-start items-center w-full">
                        <img src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/smallicons/addon.webp" alt="add-on">
                        <div class="ml-6">
                            <p>Addon / parked domain</p>
                            <p class="font-bold">Unlimited</p>
                        </div>
                    </div>

                    <div class="flex justify-center items-center pt-4 cursor-pointer">
                        <div class="bg-[#ff6d0b] text-[#fff] p-2 w-full rounded-full justify-center items-center flex">
                            <p class="font-black">Pesan Sekarang</p>
                        </div>
                    </div>

                    

                </div>

            </div>

            <div class="w-full flex flex-col mt-32 items-center justify-center">
                <p class="text-4xl font-bold">Lihat Juga Layanan Kami Yang Lain</p>
                <p class="mb-8">Optimalkan performa website bisnis Anda dengan berbagai layanan berkualitas dari Qwords </p>
                
                
                <div class="flex justify-center items-center max-w-[1350px]">


                    <div class="flex flex-col justify-around shadow-[rgba(0,_0,_0,_0.2)_0px_30px_90px] m-4 p-8 rounded-2xl basis-1/3 min-h-96">
                        <div class="flex justify-start items-center rounded-2xl min-w-[300px]">
                            <img src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/smallicons/ssl.webp" alt="SSL">
                            <p class="font-bold py-4">SSL</p>
                        </div>
                        <p> Jadikan website Anda lebih terpercaya dan disukai oleh search engine dengan menggunakan SSL Certificate. </p>
                        <p class="my-4">Mulai dari</p>
                        <p><span class="text-[#ff6d0b] text-3xl font-bold">Rp. 112.000</span> / tahun </p>
                        <div class="bg-[#ff6d0b] rounded-2xl p-2 flex justify-center items-center mt-8">
                            <p class="font-black text-[#fff]">Pesan Sekarang</p>
                        </div>


                    </div>


                    <div class="flex flex-col justify-around shadow-[rgba(0,_0,_0,_0.2)_0px_30px_90px] m-4 p-8 rounded-2xl basis-1/3 min-h-96">
                        <div class="flex justify-start items-center rounded-2xl min-w-[300px]">
                            <img src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/smallicons/dbstack.webp" alt="Dedicated Server">
                            <p class="font-bold py-4">Dedicated Server</p>
                        </div>
                        <p>Nikmati kelola Dedicated Server sendiri dengan akses remote dari seluruh dunia tanpa batas </p>
                        <p class="my-4">Mulai dari</p>
                        <p><span class="text-[#ff6d0b] text-3xl font-bold">Rp. 499.000</span> / bulan </p>
                        <div class="bg-[#ff6d0b] rounded-2xl p-2 flex justify-center items-center mt-8">
                            <p class="font-black text-[#fff]">Pesan Sekarang</p>
                        </div>


                    </div>



                    <div class=" flex flex-col justify-around shadow-[rgba(0,_0,_0,_0.2)_0px_30px_90px] m-4 p-8 rounded-2xl basis-1/3 min-h-96">
                        <div class="flex justify-start items-center rounded-2xl min-w-[300px]">
                            <img src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/smallicons/disk.webp" alt="Colocation Server">
                            <p class="font-bold py-4">Colocation Server</p>
                        </div>
                        <p>Akses cepat dari seluruh dunia dengan fasilitas 24x7 full monitoring dengan cooling system terbaik serta fire extinguisher </p>
                        <p class="my-4">Mulai dari</p>
                        <p><span class="text-[#ff6d0b] text-3xl font-bold">Rp. 500.000</span> / bulan </p>
                        <div class="bg-[#ff6d0b] rounded-2xl p-2 flex justify-center items-center mt-8">
                            <p class="font-black text-[#fff]">Pesan Sekarang</p>
                        </div>


                    </div>
                </div>
            </div>

        </section>

        <section id="komitmen" class="flex flex-col max-w-[1350px] w-full items-center justify-center">
            <p class="font-black text-4xl mb-4 mt-32">Komitmen Qwords</p>
            <p>Berbagai alasan mengapa pelanggan memilih sewa hosting di Qwords </p>
            
            
            
            <div class="flex flex-wrap max-w-[1800px] justify-center items-center">

                <div class="basis-auto bg-[#ffeee1] p-8 rounded-2xl m-4 max-w-[30%] min-h-[400px] flex flex-col justify-around">
                    <div class="flex justify-start items-center">
                        <img src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/call.webp" alt="layanan-24/7">
                    </div>
                    <div>
                        <p class="font-black text-2xl my-4">Layanan 24/7</p>
                        <p>Tim Technical Support dan Customer Service Qwords siap membantu Anda selama 24 jam, 7 hari. Anda dapat menghubungi melalui Live chat, Call Center, dan Support Ticket. </p>
                    </div>
                </div>

                <div class="basis-auto bg-[#ffeee1] p-8 rounded-2xl m-4 max-w-[30%] min-h-[400px] flex flex-col justify-around">
                    <div class="flex justify-start items-center">
                        <img src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/book.webp" alt="Panduan Manual Lengkap">
                    </div>
                    <div>
                        <p class="font-black text-2xl my-4">Panduan Manual Lengkap</p>
                        <p>Qwords dilengkapi dengan halaman knowledge base berisi tutorial dan tips seputar pengelolaan website dan hosting. Dapat diakses dengan mudah dan solutif </p>
                    </div>
                </div>

                <div class="basis-auto bg-[#ffeee1] p-8 rounded-2xl m-4 max-w-[30%] min-h-[400px] flex flex-col justify-around">
                    <div class="flex justify-start items-center">
                        <img src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/router.webp" alt="Up Time 99.99%">
                    </div>
                    <div>
                        <p class="font-black text-2xl my-4">Up Time 99.99%</p>
                        <p>Uptime Network & Server di atas 99. 99% dengan konfigurasi server yang tepat. Didukung manajemen jaringan dan multiple upstream tier 1 provider network serta multiple peering. </p>
                    </div>
                </div>

                <div class="basis-auto bg-[#ffeee1] p-8 rounded-2xl m-4 max-w-[30%] min-h-[400px] flex flex-col justify-around">
                    <div class="flex justify-start items-center">
                        <img src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/guard.webp" alt="Jaminan Keamanan">
                    </div>
                    <div>
                        <p class="font-black text-2xl my-4">Jaminan Keamanan</p>
                        <p>Keamanan menjadi fokus utama kami di Qwords. Tindakan pemantauan dan pencegahan yang berstandar & berkelanjutan telah menjadi perhatian utama kami. </p>
                    </div>
                </div>

                <div class="basis-auto bg-[#ffeee1] p-8 rounded-2xl m-4 max-w-[30%] min-h-[400px] flex flex-col justify-around">
                    <div class="flex justify-start items-center">
                        <img src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/networkAlt.webp" alt="Clustered DNS">
                    </div>
                    <div>
                        <p class="font-black text-2xl my-4">Clustered DNS</p>
                        <p>DNS Server Cloud Hosting Qwords terhubung satu dengan yang lainnya. Hal ini membuat DNS Server akan selalu dapat di akses karena saling membackup antar server. </p>
                    </div>
                </div>

                <div class="basis-auto bg-[#ffeee1] p-8 rounded-2xl m-4 max-w-[30%] min-h-[400px] flex flex-col justify-around">
                    <div class="flex justify-start items-center">
                        <img src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/diamond.webp" alt="High Enterprise Server">
                    </div>
                    <div>
                        <p class="font-black text-2xl my-4">High Enterprise Server</p>
                        <p>Standar server Qwords adalah server kelas enterprise Dual Xeon Octa Core yang merupakan hardware kelas terbaik. Hardware ini biasa digunakan oleh perusahaan terkemuka. </p>
                    </div>
                </div>

                <div class="basis-auto bg-[#ffeee1] p-8 rounded-2xl m-4 max-w-[30%] min-h-[400px] flex flex-col justify-around">
                    <div class="flex justify-start items-center">
                        <img src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/router.webp" alt="Tier 1 Network">
                    </div>
                    <div>
                        <p class="font-black text-2xl my-4">Tier 1 Network</p>
                        <p>Tier 1 Network merupakan jaringan dunia tanpa transit network, yang membuat jaringan lebih cepat serta jalur routing yang lebih pendek dan ketersediaan backup network. </p>
                    </div>
                </div>

                <div class="basis-auto bg-[#ffeee1] p-8 rounded-2xl m-4 max-w-[30%] min-h-[400px] flex flex-col justify-around">
                    <div class="flex justify-start items-center">
                        <img src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/network.webp" alt="Peering Network">
                    </div>
                    <div>
                        <p class="font-black text-2xl my-4">Peering Network</p>
                        <p>Jaringan di Qwords terhubung langsung ke public peering seperti OpenIXP dan CDIX yang membuat latency atau waktu tunggu pengiriman data semakin kecil. </p>
                    </div>
                </div>

                
            </div>
        </section>




        <section id="partners" class="flex flex-col justify-center items-center mt-32">
            <p class="font-black text-4xl">Telah Dipercaya oleh 45.000+ Pelanggan Aktif</p>
            <div class="flex justify-center items-center my-8">
                <img class="mx-2" width="200" src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/partner-customer/Pelanggan/Cimory.webp" alt="Cimory">
                <img class="mx-2" width="200" src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/partner-customer/Pelanggan/Forisa.webp" alt="forisa">
                <img class="mx-2" width="200" src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/partner-customer/Pelanggan/Elsheskin.webp" alt="Elsheskin">
                <img class="mx-2" width="200" src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/partner-customer/Pelanggan/Icon.webp" alt="Icon+">
                <img class="mx-2" width="200" src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/partner-customer/Pelanggan/Horison.webp" alt="Horison">
                <img class="mx-2" width="200" src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/partner-customer/Pelanggan/MD.webp" alt="MD Pictures">
            </div>

           <div class="flex items-center justify-center">
            <p class="text-[#ff6d0b] font-black mx-4 text-xl">Dan Masih Banyak yang Lainnya</p>
            <img width="20" src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/Right.webp" alt="right arrow">
           </div>



           <p class="font-black text-4xl mt-32">Partner Kami</p>
           <div class="flex justify-center items-center my-8">
                <img class="mx-2" width="200" src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/partner-customer/Partner/Google.webp" alt="Google">
                <img class="mx-2" width="200" src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/partner-customer/Partner/Cpanel.webp" alt="Cpanel">
                <img class="mx-2" width="200" src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/partner-customer/Partner/Idea.webp" alt="Idea">
                <img class="mx-2" width="200" src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/partner-customer/Partner/Archi.webp" alt="Achi">
                <img class="mx-2" width="200" src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/partner-customer/Partner/dotid.webp" alt="Dotid">
            </div>

            <div class="flex items-center justify-center">
                <p class="text-[#ff6d0b] font-black mx-4 text-xl">Lihat Semua Partner</p>
                <img width="20" src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/Right.webp" alt="right arrow">
            </div>



        </section>



        <section id="warranty" class="my-32">


            <div class="bg-[#ffeee1] w-[100vw] flex h-[500px] justify-center items-center">
                <img width="600" src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/illustrations/guarantee.webp" alt="warranty" class="mr-[40px]">
                <div class="flex flex-col justify-center ml-[40px] items-center max-w-[500px]">
                    <p class="text-4xl font-black">Garansi 30 Hari <span class="text-[#ff6d0b]">Uang Kembali</span></p>
                    <p> Untuk menjaga kepuasan pelanggan, kami memberikan garansi uang kembali yang berlaku hingga 30 hari setelah hosting aktif. </p>
                </div>
            </div>

        </section>




        <section id="apa-kata-mereka" class="flex flex-col mt-32 justify-center items-center max-w-[1350px]">
            <p class="text-4xl font-black my-4">Apa Kata Mereka?</p>
            <p class="max-w-[750px] text-center">Apa kata mereka yang sudah menggunakan layanan web hosting Indonesia dari Qwords? Simak pengalaman mereka yang telah membuktikan sendiri fitur dari layanan kami. </p>

            <div class="flex mt-24">
                <div class="flex flex-col max-w-[570px]">
                    <div class="flex my-4">
                        <p class="text-6xl">&ldquo;</p>
                        <p class="flex items-center text-xl"> Semoga Qwords dapat terus bertahan, sehingga kami dan masyarakat Indonesia bisa mendapatkan layanan yang terbaik dari Qwords.</p>
                    </div>
                    <div class="border-l-4 border-[#ff6d0b] px-4">
                        <p class="opacity-50">Kami, ID Cert, merupakan sebuah perusahaan yang bergerak dalam bidang penyedia jasa informasi keamanan di Indonesia. Oleh karena itu, kami membutuhkan Qwords untuk mendukung kebutuhan kami terhadap server dan hosting yang selalu up selama 24 jam.</p>
                    </div>
                    <div class="flex m-4">
                        <p class="font-bold">Budi Raharjo</p>
                        <p class="ml-12 opacity-50">founder ID Cert</p>    
                    </div>                    
                </div>
                <div class="min-w-[650px] flex justify-center items-center">
                    <img  src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/photos/testi1.webp" alt="Budi Raharjo" width="368">
                </div>
            </div>


            <div class="flex flex-row-reverse mt-24">
                <div class="flex flex-col max-w-[570px]">
                    <div class="flex my-4">
                        <p class="text-6xl">&ldquo;</p>
                        <p class="flex items-center text-xl"> Pelayanan Qwords sangat cepat dan responsif, sehingga tidak butuh waktu lama untuk membantu website kami kembali normal. Terbaik pokoknya, mah! </p>
                    </div>
                    <div class="border-l-4 border-[#ff6d0b] px-4">
                        <p class="opacity-50">Sebagai media penyedia kabar seputar kota Bandung, Info BDG menggunakan website sebagai rumah informasi. Website kami yang sempat down kini menunjukkan traffic yang tinggi setelah menggunakan dukungan dari Qwords. </p>
                    </div>
                    <div class="flex m-4">
                        <p class="font-bold">Kuns Kurniawan</p>
                        <p class="ml-12 opacity-50">PR Event Info BDG</p>    
                    </div>                    
                </div>
                <div class="min-w-[650px] flex justify-center items-center">
                    <img  src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/photos/testi2.webp" alt="Kuns Kurniawan" width="368">
                </div>
            </div>


            <div class="flex mt-24">
                <div class="flex flex-col max-w-[570px]">
                    <div class="flex my-4">
                        <p class="text-6xl">&ldquo;</p>
                        <p class="flex items-center text-xl"> Hingga saat ini pula, kami tidak pernah menemukan masalah yang berarti dari layanan yang diberikan Qwords. Layanan Customer Service yang sangat baik, membuat kami tidak ingin berpindah dari Qwords. </p>
                    </div>
                    <div class="border-l-4 border-[#ff6d0b] px-4">
                        <p class="opacity-50">Penjualan Rumah Kopi Temanggung 90% dilakukan secara online, salah satunya menggunakan website. Semenjak tahun 2015 hingga saat ini, kami menggunakan hosting dan domain dari Qwords. </p>
                    </div>
                    <div class="flex m-4">
                        <p class="font-bold">Denden Sofiudin</p>
                        <p class="ml-12 opacity-50">Owner Rumah Kopi Temanggung</p>    
                    </div>                    
                </div>
                <div class="min-w-[650px] flex justify-center items-center">
                    <img  src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/photos/testi3.webp" alt="Denden Sofiudin" width="368">
                </div>
            </div>



        </section> 





        <section id="awards" class="mt-32">
            
            <div class="flex flex-col bg-[#13151b] w-[100vw] justify-center items-center">
                <div class="flex flex-col max-w-[1600px] justify-start items-center w-full p-4">
                    <p class="text-[#f2f2f2] my-8 font-black text-2xl"><span class="text-[#ff6d0b]">Qwords Awards </span>Terdaftar di PSE, ICANN dan partner lainnya</p>
                    <div class="flex justify-center items-center mb-8">
                        <img width="100" src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/code.webp" alt="qrcode" class="mr-8">
                        <img width="100" src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/icann-logo.webp" alt="icann" class="mr-8">
                        <img width="100" src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/badge_litespeed.svg" alt="litespeed" class="mr-8">
                        <img src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/badge_whmadmin.svg" alt="whm admin" width="100" class="mr-8">
                        <img src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/acronis-cloud-tech.webp" alt="acronis cloud tech" width="100" class="mr-8">
                        <img src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/acronis-cloud-sales.webp" alt="acronis cloud sales" width="100">
                    </div>
                </div>
            </div>
        </section>


        
      


    </body>
</html>