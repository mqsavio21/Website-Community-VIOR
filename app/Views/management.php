<?php include('templates/header.php'); ?>


<div class="flex flex-col min-h-screen">


    <div class="relative py-20">
        <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('images/orion.png');"></div>
        <!-- Transparent Overlay using pseudo-element -->
        <div class="absolute inset-0 bg-[#373f44] opacity-95"></div>

        <!-- Container for the content -->
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative">
            <!-- Management Title -->
            <div class="text-center mb-8 h-40 flex justify-center items-center">
                <h1 class="text-4xl md:text-5xl font-bold text-[#FDC855] mb-4">Management</h1>
            </div>
        </div>
    </div>



    <!-- Content #1: Management with specified background color -->
    <style>
        .box {
            position: relative;
            width: 300px;
            height: 300px;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 40px;
            background: #060c21;
            transition: .5s;
        }

        .box:hover {
            height: 400px;
        }

        .image-container {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            box-sizing: border-box;
        }

        .image-container img {
            width: 300px;
            opacity: 0.1;
            transition: 0.5s;
        }

        .box:hover .image-container img {
            opacity: 1;
        }

        .box:before,
        .box:after {
            content: '';
            position: absolute;
            top: -2px;
            left: -2px;
            right: -2px;
            bottom: -2px;
            background: #ffffff;
            z-index: -1;
        }

        .box:after {
            content: '';
            position: absolute;
            top: -2px;
            left: -2px;
            right: -2px;
            bottom: -2px;
            background: #ffffff;
            z-index: -2;
            filter: blur(40px);
        }

        .box:before,
        .box:after {
            background: linear-gradient(225deg, #f3ff00, #010615, #00bcd4);
        }


        .box .glow-box {
            position: absolute;
            bottom: 10px;
            top: 300px;
            left: 10px;
            right: 10px;
            height: 90px;
            background: rgba(0, 0, 0, 0.5);
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            opacity: 0;
            transition: .2s;
        }

        .box:hover .glow-box {
            opacity: 1;
        }

        .box .glow-box h3 {
            font-size: 20px;
            font-weight: 500;
            line-height: 20px;
            letter-spacing: 1px;
        }

        .box .glow-box p {
            font-size: 14px;
            font-weight: 300;
            letter-spacing: 2px;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @keyframes slideIn {
            from {
                transform: translateY(20px);
                opacity: 0;
            }

            to {
                transform: translateY(0);
                opacity: 1;
            }
        }
    </style>
    <div class="py-10 bg-white">
        <div id="contentvior1" class="container mx-auto grid max-w-7xl gap-x-8 gap-y-5 px-6 lg:px-8">
            <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Meet VIOR High Council</h2>
            <p class=" mt-6 text-lg leading-8 text-gray-600">Introducing the VIOR High Council, an assembly of six
                visionary
                leaders, each bringing their unique expertise <br>and unwavering passion to the forefront. This esteemed
                council is the driving force behind our organization,<br> marked by their collective commitment to
                excellence and innovation.</p>
            <!-- grid 1 -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-1">

                <div
                    class="box relative bg-[#CBCBCB] shadow-xl rounded-lg overflow-hidden flex flex-col mx-auto transition-transform hover:scale-105">
                    <div class="image-container">
                        <img src="<?= base_url('images/haru.png'); ?>" class="w-full h-full object-cover">
                    </div>
                    <div class="glow-box flex-grow flex flex-col justify-center items-center p-5 text-center">
                        <h3 class="text-white text-lg font-bold">Haruki "HaruMiz" Mizuhashi</h3>
                        <p class="text-white">Chief Executive Officer</p>
                    </div>
                </div>

                <div
                    class="box relative bg-[#CBCBCB] shadow-xl rounded-lg overflow-hidden flex flex-col mx-auto transition-transform hover:scale-105">
                    <div class="image-container">
                        <img src="<?= base_url('images/vio.png'); ?>" class="w-full h-full object-cover">
                    </div>
                    <div class="glow-box flex-grow flex flex-col justify-center items-center p-5 text-center">
                        <h3 class="text-white text-lg font-bold">Ovio "Birdy" Damion</h3>
                        <p class="text-white">Chief Operating Officer</p>
                    </div>
                </div>


                <div
                    class="box relative bg-[#CBCBCB] shadow-xl rounded-lg overflow-hidden flex flex-col mx-auto transition-transform hover:scale-105">
                    <div class="image-container">
                        <img src="<?= base_url('images/roffi.png'); ?>" class="w-full h-full object-cover">
                    </div>
                    <div class="glow-box flex-grow flex flex-col justify-center items-center p-5 text-center">
                        <h3 class="text-white text-lg font-bold">Roffi Daijoubu</h3>
                        <p class="text-white">Chief Technology Officer</p>
                    </div>
                </div>


            </div>

            <!-- grid 2 -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-1 py-8">

                <div
                    class="box relative bg-[#CBCBCB] shadow-xl rounded-lg overflow-hidden flex flex-col mx-auto transition-transform hover:scale-105">
                    <div class="image-container">
                        <img src="<?= base_url('images/migo.png'); ?>" class="w-full h-full object-cover">
                    </div>
                    <div class="glow-box flex-grow flex flex-col justify-center items-center p-5 text-center">
                        <h3 class="text-white text-lg font-bold">Migo Haswell</h3>
                        <p class="text-white">Academy Director</p>
                    </div>
                </div>


                <div
                    class="box relative bg-[#CBCBCB] shadow-xl rounded-lg overflow-hidden flex flex-col mx-auto transition-transform hover:scale-105">
                    <div class="image-container">
                        <img src="<?= base_url('images/pikscoy.png'); ?>" class="w-full h-full object-cover">
                    </div>
                    <div class="glow-box flex-grow flex flex-col justify-center items-center p-5 text-center">
                        <h3 class="text-white text-lg font-bold">Pikscoy</h3>
                        <p class="text-white">Community Director</p>
                    </div>
                </div>


                <div
                    class="box relative bg-[#CBCBCB] shadow-xl rounded-lg overflow-hidden flex flex-col mx-auto transition-transform hover:scale-105">
                    <div class="image-container">
                        <img src="<?= base_url('images/eli.png'); ?>" class="w-full h-full object-cover">
                    </div>
                    <div class="glow-box flex-grow flex flex-col justify-center items-center p-5 text-center">
                        <h3 class="text-white text-lg font-bold">Meridia "Eli" Elinor</h3>
                        <p class="text-white">Human Resources Director</p>
                    </div>
                </div>


            </div>
        </div>


    </div>

    <!-- staff -->
    <div class="relative py-20">
        <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('images/valorant.jpg');"></div>
        <!-- Transparent Overlay using pseudo-element -->
        <div class="absolute inset-0 bg-[#373f44] opacity-95"></div>

        <!-- Container for the content -->
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative">
            <!-- Management Title -->
            <div class="text-center mb-8">
                <h1 class="text-3xl md:text-4xl font-bold text-[#FDC855] mb-4">Staff</h1>
            </div>
        </div>
    </div>

    <!-- Content #2: staff with specified background color -->
    <style>
        .fade-in {
            animation: fadeIn 1s ease-out;
        }

        .slide-in {
            animation: slideIn 1s ease-out;
        }

        @keyframes tilt {

            0%,
            50%,
            100% {
                transform: rotate(0deg);
            }

            25% {
                transform: rotate(1deg);
            }

            75% {
                transform: rotate(-1deg);
            }
        }

        .glow-effect {
            background: linear-gradient(225deg, #f3ff00, #010615, #00bcd4);
            position: absolute;
            top: -2rem;
            bottom: -2rem;
            left: -2rem;
            right: -2rem;
            filter: blur(2rem);
            border-radius: 9999px;
            opacity: 0;
            transition: opacity .5s ease-in-out;
        }
    </style>
    <div class=" py-24 sm:py-32">
        <div id="contentvior2" class="mx-auto max-w-7xl px-6 lg:px-8 grid grid-cols-1 xl:grid-cols-3 gap-8">

            <div class="max-w-2xl xl:col-span-1 flex flex-col justify-center items-center text-center">
                <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Meet Our Staff</h2>
                <p class="mt-6 text-lg leading-8 text-gray-600">Introducing the VIOR Staff Team, a dedicated and dynamic
                    group of professionals, each bringing a unique blend of skills and enthusiasm to our community. This
                    team is the backbone of our operations, committed to creating an enriching and engaging experience
                    for all members.</p>
            </div>





            <ul role="list" class="grid gap-x-12 gap-y-16 sm:grid-cols-2 sm:gap-y-20 xl:col-span-2 mt-8 pl-12">

                <li class="group">
                    <div class="flex items-center gap-x-8 transition-transform group-hover:scale-105">
                        <div class="relative">
                            <!-- Glow effect -->
                            <div
                                class="absolute -inset-0.5 bg-gradient-to-r from-yellow-400 via-red-500 to-pink-600 rounded-full blur-xl opacity-0 group-hover:opacity-100 transition duration-1000 group-hover:duration-200 animate-tilt">
                            </div>
                            <img class="relative h-24 w-24 rounded-full object-cover" src="images/geki/rey.png">
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold leading-7 tracking-tight text-gray-900">Tsumigi Rey</h3>
                            <p class="text-base font-semibold leading-6 text-indigo-600">Community Assistant Manager</p>
                        </div>
                    </div>
                </li>

                <li class="group">
                    <div class="flex items-center gap-x-8 transition-transform group-hover:scale-105">
                        <div class="relative">
                            <!-- Glow effect -->
                            <div
                                class="absolute -inset-0.5 bg-gradient-to-r from-yellow-400 via-red-500 to-pink-600 rounded-full blur-xl opacity-0 group-hover:opacity-100 transition duration-1000 group-hover:duration-200 animate-tilt">
                            </div>
                            <img class="relative h-24 w-24 rounded-full object-cover" src="images/staff/ahomika.png">
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold leading-7 tracking-tight text-gray-900">Ahomika</h3>
                            <p class="text-base font-semibold leading-6 text-indigo-600">Lead Designer</p>
                        </div>
                    </div>
                </li>

                <li class="group">
                    <div class="flex items-center gap-x-8 transition-transform group-hover:scale-105">
                        <div class="relative">
                            <!-- Glow effect -->
                            <div
                                class="absolute -inset-0.5 bg-gradient-to-r from-yellow-400 via-red-500 to-pink-600 rounded-full blur-xl opacity-0 group-hover:opacity-100 transition duration-1000 group-hover:duration-200 animate-tilt">
                            </div>
                            <img class="relative h-20 w-20 rounded-full object-cover" src="images/staff/tensai.png">
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold leading-7 tracking-tight text-gray-900">Tensai Seiji</h3>
                            <p class="text-base font-semibold leading-6 text-indigo-600">Web / Graphic Designer</p>
                        </div>
                    </div>
                </li>

                <li class="group">
                    <div class="flex items-center gap-x-8 transition-transform group-hover:scale-105">
                        <div class="relative">
                            <!-- Glow effect -->
                            <div
                                class="absolute -inset-0.5 bg-gradient-to-r from-yellow-400 via-red-500 to-pink-600 rounded-full blur-xl opacity-0 group-hover:opacity-100 transition duration-1000 group-hover:duration-200 animate-tilt">
                            </div>
                            <img class="relative h-24 w-24 rounded-full object-cover" src="images/staff/veil.png">
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold leading-7 tracking-tight text-gray-900">Ninomae
                                Ryliasveil</h3>
                            <p class="text-base font-semibold leading-6 text-indigo-600">Head Analyst</p>
                        </div>
                    </div>
                </li>

                <li class="group">
                    <div class="flex items-center gap-x-8 transition-transform group-hover:scale-105">
                        <div class="relative">
                            <!-- Glow effect -->
                            <div
                                class="absolute -inset-0.5 bg-gradient-to-r from-yellow-400 via-red-500 to-pink-600 rounded-full blur-xl opacity-0 group-hover:opacity-100 transition duration-1000 group-hover:duration-200 animate-tilt">
                            </div>
                            <img class="relative h-24 w-24 rounded-full object-cover" src="images/omnia/mengg.png">
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold leading-7 tracking-tight text-gray-900">Menggxd</h3>
                            <p class="text-base font-semibold leading-6 text-indigo-600">Assistant Analyst</p>
                        </div>
                    </div>
                </li>

                <li class="group">
                    <div class="flex items-center gap-x-8 transition-transform group-hover:scale-105">
                        <div class="relative">
                            <!-- Glow effect -->
                            <div
                                class="absolute -inset-0.5 bg-gradient-to-r from-yellow-400 via-red-500 to-pink-600 rounded-full blur-xl opacity-0 group-hover:opacity-100 transition duration-1000 group-hover:duration-200 animate-tilt">
                            </div>
                            <img class="relative h-24 w-24 rounded-full object-cover" src="images/geki/beru.png">
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold leading-7 tracking-tight text-gray-900">Kumamoto Beru</h3>
                            <p class="text-base font-semibold leading-6 text-indigo-600">Web Developer</p>
                        </div>
                    </div>
                </li>

            </ul>
        </div>
    </div>


    <script>
        window.onload = function () {
            var content1 = document.getElementById('contentvior1'); // Selecting Content #1
            var content2 = document.getElementById('contentvior2'); // Selecting Content #2

            content1.classList.add('fade-in'); // Adding fade-in class to Content #1
            content2.classList.add('slide-in'); // Adding slide-in class to Content #2
        }
    </script>

    <?php include('templates/footer.php'); ?>