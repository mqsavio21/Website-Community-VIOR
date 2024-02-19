<?php include('templates/header.php'); ?>


<div class="flex flex-col min-h-screen">


    <!-- Content #1: Omnia Section -->
    <style>
        #omnia .fade-in {
            animation: fadeIn 1s ease-out;
        }

        #omnia .box {
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

        #omnia .box:hover {
            height: 400px;
        }

        #omnia .image-container {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            box-sizing: border-box;
        }

        #omnia .image-container img {
            width: 300px;
            opacity: 0.1;
            transition: 0.5s;
        }

        #omnia .box:hover .image-container img {
            opacity: 1;
        }

        #omnia .box:before,
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

        #omnia .box:after {
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

        #omnia .box:before,
        .box:after {
            background: linear-gradient(225deg, #f3ff00, #010615, #00bcd4);
        }


        #omnia .box .glow-box {
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

        #omnia .box:hover .glow-box {
            opacity: 1;
        }

        #omnia .box .glow-box h3 {
            font-size: 20px;
            font-weight: 500;
            line-height: 20px;
            letter-spacing: 1px;
        }

        #omnia .box .glow-box p {
            font-size: 14px;
            font-weight: 300;
            letter-spacing: 2px;
        }

        #omnia @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }
    </style>
    <div>
        <div class="relative min-h-screen bg-white flex flex-col justify-between" id="omnia">

            <!-- Image Section with Tailwind CSS classes for background image and size -->
            <div class="bg-cover bg-center h-96" style="background-image: url('images/orion.png');"></div>

            <!-- Overlay Container which will contain the text and overlay a part of the image -->
            <!-- Adjust the top margin (mt) to place it half over the image and half over the white background below -->
            <div id="content1"
                class="container w-5/6 mx-auto px-4 sm:px-6 lg:px-8 -mt-32 p-10 text-white rounded-lg shadow-md"
                style="background-image: linear-gradient(225deg, #f3ff00, #010615, #00bcd4)">
                <h2 class="text-3xl md:text-4xl font-bold mb-4 text-[#FDC855]">VIOR Omnia</h2>
                <p class="text-lg md:text-2xl mb-6"> A vibrant collective of Silver to Gold rank
                    Valorant
                    players, each a well-known figure in the Vtubing arena and have made their mark in various Vtuber
                    tournaments, captivating audiences with their unique blend of competitive skill and engaging
                    personas.
                </p>
                <p class="text-lg md:text-2xl mb-6">Many of these adept players have been with VIOR since their early
                    gaming
                    days, benefitting from the
                    academy's comprehensive development programs. This team stands as a shining example of VIOR's
                    dedication
                    to cultivating raw talent into seasoned performers, embodying the fusion of high-level gaming and
                    compelling Vtubing entertainment.</p>
            </div>

            <div class="py-10 bg-white">
                <div id="content2" class="container mx-auto max-w-7xl gap-x-8 gap-y-5 px-6 lg:px-8">
                    <h1 class="text-5xl font-bold tracking-tight text-gray-900 sm:text-5xl mb-10">Players</h1>

                    <div class="grid grid-cols-1 md:grid-cols-4 gap-10 py-4 justify-items-left">
                        <!-- grid 1 -->
                        <div
                            class="box relative bg-[#CBCBCB] shadow-xl rounded-lg overflow-hidden flex flex-col mx-auto transition-transform hover:scale-105">
                            <div class="image-container">
                                <img src="<?= base_url('images/omnia/morza.png'); ?>"
                                    class="w-full h-full object-cover">
                            </div>
                            <div class="glow-box flex-grow flex flex-col justify-center items-center p-5 text-center">
                                <h3 class="text-white text-lg font-bold">Kaedyn Morza</h3>
                                <p class="text-white">Sentinel / IGL</p>
                            </div>
                        </div>

                        <div
                            class="box relative bg-[#CBCBCB] shadow-xl rounded-lg overflow-hidden flex flex-col mx-auto transition-transform hover:scale-105">
                            <div class="image-container">
                                <img src="<?= base_url('images/omnia/raik.png'); ?>" class=" w-full h-full
                                    object-cover">
                            </div>
                            <div class="glow-box flex-grow flex flex-col justify-center items-center p-5 text-center">
                                <h3 class="text-white text-lg font-bold">Raik Januar</h3>
                                <p class="text-white">Initiator</p>
                            </div>
                        </div>

                        <div
                            class="box relative bg-[#CBCBCB] shadow-xl rounded-lg overflow-hidden flex flex-col mx-auto transition-transform hover:scale-105">
                            <div class="image-container">
                                <img src="<?= base_url('images/omnia/chris.png'); ?>"
                                    class="w-full h-full object-cover">
                            </div>
                            <div class="glow-box flex-grow flex flex-col justify-center items-center p-5 text-center">
                                <h3 class="text-white text-lg font-bold">Asakura "Asa" Chris</h3>
                                <p class="text-white">Duelist</p>
                            </div>
                        </div>
                    </div>

                    <!-- grid 2 -->
                    <div class="grid grid-cols-1 md:grid-cols-4 gap-10 py-4">

                        <div
                            class="box relative bg-[#CBCBCB] shadow-xl rounded-lg overflow-hidden flex flex-col mx-auto transition-transform hover:scale-105">
                            <div class="image-container">
                                <img src="<?= base_url('images/omnia/Shelle.png'); ?>"
                                    class="w-full h-full object-cover">
                            </div>
                            <div class="glow-box flex-grow flex flex-col justify-center items-center p-5 text-center">
                                <h3 class="text-white text-lg font-bold">Shelle Rossen</h3>
                                <p class="text-white">Controller</p>
                            </div>
                        </div>


                        <div
                            class="box relative bg-[#CBCBCB] shadow-xl rounded-lg overflow-hidden flex flex-col mx-auto transition-transform hover:scale-105">
                            <div class="image-container">
                                <img src="<?= base_url('images/omnia/dre.png'); ?>" class="w-full h-full object-cover">
                            </div>
                            <div class="glow-box flex-grow flex flex-col justify-center items-center p-5 text-center">
                                <h3 class="text-white text-lg font-bold">Andrew "Dre" Astaken</h3>
                                <p class="text-white">Flex</p>
                            </div>
                        </div>


                        <div
                            class="box relative bg-[#CBCBCB] shadow-xl rounded-lg overflow-hidden flex flex-col mx-auto transition-transform hover:scale-105">
                            <div class="image-container">
                                <img src="<?= base_url('images/omnia/rin.png'); ?>" class=" w-full h-full object-cover">
                            </div>
                            <div class="glow-box flex-grow flex flex-col justify-center items-center p-5 text-center">
                                <h3 class="text-white text-lg font-bold">Kuro Rin</h3>
                                <p class="text-white">Sentinel</p>
                            </div>
                        </div>


                    </div>


                    <!-- grid staff -->
                    <h1 class="text-5xl font-bold tracking-tight text-gray-900 sm:text-5xl mb-10">Staff</h1>
                    <div class="grid grid-cols-1 md:grid-cols-4 gap-10 py-4">
                        <div
                            class="box relative bg-[#CBCBCB] shadow-xl rounded-lg overflow-hidden flex flex-col mx-auto transition-transform hover:scale-105">
                            <div class="image-container">
                                <img src="<?= base_url('images/haru.png'); ?>" class=" w-full h-full object-cover">
                            </div>
                            <div class="glow-box flex-grow flex flex-col justify-center items-center p-5 text-center">
                                <h3 class="text-white text-lg font-bold">Haruki "HaruMiz" Mizuhashi</h3>
                                <p class="text-white">Head Coach</p>
                            </div>
                        </div>

                        <div
                            class="box relative bg-[#CBCBCB] shadow-xl rounded-lg overflow-hidden flex flex-col mx-auto transition-transform hover:scale-105">
                            <div class="image-container">
                                <img src="<?= base_url('images/migo.png'); ?>" class=" w-full h-full object-cover">
                            </div>
                            <div class="glow-box flex-grow flex flex-col justify-center items-center p-5 text-center">
                                <h3 class="text-white text-lg font-bold">Migo Haswell</h3>
                                <p class="text-white">Team Manager</p>
                            </div>
                        </div>
                    </div>
                </div>


            </div>

        </div>
    </div>


    <!-- Content #2: geki Section -->
    <style>
        #geki .fade-in {
            animation: fadeIn 1s ease-out;
        }

        #geki .box {
            position: relative;
            width: 300px;
            height: 300px;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 40px;
            background: #010615;
            transition: .5s;
        }

        #geki .box:hover {
            height: 400px;
        }

        #geki .image-container {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            box-sizing: border-box;
        }

        #geki .image-container img {
            width: 300px;
            opacity: 0.1;
            transition: 0.5s;
        }

        #geki .box:hover .image-container img {
            opacity: 1;
        }

        #geki .box:before,
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

        #geki .box:after {
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

        #geki .box:before,
        .box:after {
            background: linear-gradient(225deg, #ffdb58, #a5a5a5, #85d7ff);
        }


        #geki .box .glow-box {
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

        #geki .box:hover .glow-box {
            opacity: 1;
        }

        #geki .box .glow-box h3 {
            font-size: 20px;
            font-weight: 500;
            line-height: 20px;
            letter-spacing: 1px;
        }

        #geki .box .glow-box p {
            font-size: 14px;
            font-weight: 300;
            letter-spacing: 2px;
        }

        #geki @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }
    </style>
    <div>
        <div class="relative min-h-screen bg-white flex flex-col justify-between" id="geki">

            <!-- Image Section with Tailwind CSS classes for background image and size -->
            <div class="bg-cover bg-center h-96" style="background-image: url('images/orion.png');"></div>

            <!-- Overlay Container which will contain the text and overlay a part of the image -->
            <!-- Adjust the top margin (mt) to place it half over the image and half over the white background below -->
            <div id="content3"
                class="container w-5/6 mx-auto px-4 sm:px-6 lg:px-8 -mt-32 p-10 text-white rounded-lg shadow-md"
                style="background-image: linear-gradient(225deg, #ffdb58, #a5a5a5, #85d7ff)">
                <h2 class="text-3xl md:text-4xl font-bold mb-4 text-black">VIOR x GEKI</h2>
                <p class="text-lg text-black md:text-2xl mb-6"> An ensemble of elite players, each bearing the
                    distinction of
                    Gold to Diamond rank in the Valorant scene. Renowned for their sophisticated strategies and
                    cohesive teamwork, these individuals have risen through the ranks of Haru's rigorous training
                    regimen. With a flair for dramatic play and a penchant for tactical innovation, they've become
                    prominent figures in the competitive circuit.
                </p>
            </div>

            <div class="py-10 bg-white">
                <div id="content4" class="container mx-auto max-w-7xl gap-x-8 gap-y-5 px-6 lg:px-8">
                    <h1 class="text-5xl font-bold tracking-tight text-gray-900 sm:text-5xl mb-10">Players</h1>

                    <div class="grid grid-cols-1 md:grid-cols-4 gap-10 py-4 justify-items-left">
                        <!-- grid 1 -->
                        <div
                            class="box relative bg-[#CBCBCB] shadow-xl rounded-lg overflow-hidden flex flex-col mx-auto transition-transform hover:scale-105">
                            <div class="image-container">
                                <img src="<?= base_url('images/geki/rey.png'); ?>" class="w-full h-full object-cover">
                            </div>
                            <div class="glow-box flex-grow flex flex-col justify-center items-center p-5 text-center">
                                <h3 class="text-white text-lg font-bold">Tsumigi Rey</h3>
                                <p class="text-white">Flex / IGL</p>
                            </div>
                        </div>

                        <div
                            class="box relative bg-[#CBCBCB] shadow-xl rounded-lg overflow-hidden flex flex-col mx-auto transition-transform hover:scale-105">
                            <div class="image-container">
                                <img src="<?= base_url('images/geki/beru.png'); ?>" class=" w-full h-full
                                    object-cover">
                            </div>
                            <div class="glow-box flex-grow flex flex-col justify-center items-center p-5 text-center">
                                <h3 class="text-white text-lg font-bold">Kumamoto Beru</h3>
                                <p class="text-white">Controller</p>
                            </div>
                        </div>

                        <div
                            class="box relative bg-[#CBCBCB] shadow-xl rounded-lg overflow-hidden flex flex-col mx-auto transition-transform hover:scale-105">
                            <div class="image-container">
                                <img src="<?= base_url('images/geki/rzel.png'); ?>" class="w-full h-full object-cover">
                            </div>
                            <div class="glow-box flex-grow flex flex-col justify-center items-center p-5 text-center">
                                <h3 class="text-white text-lg font-bold">Kousei "Rzel" Akira</h3>
                                <p class="text-white">Controller</p>
                            </div>
                        </div>

                        <div
                            class="box relative bg-[#CBCBCB] shadow-xl rounded-lg overflow-hidden flex flex-col mx-auto transition-transform hover:scale-105">
                            <div class="image-container">
                                <img src="<?= base_url('images/geki/kira.png'); ?>" class="w-full h-full object-cover">
                            </div>
                            <div class="glow-box flex-grow flex flex-col justify-center items-center p-5 text-center">
                                <h3 class="text-white text-lg font-bold">Mochizuki "Ren" Akira</h3>
                                <p class="text-white">Duelist</p>
                            </div>
                        </div>
                    </div>

                    <!-- grid 2 -->
                    <div class="grid grid-cols-1 md:grid-cols-4 gap-10 py-4">

                        <div
                            class="box relative bg-[#CBCBCB] shadow-xl rounded-lg overflow-hidden flex flex-col mx-auto transition-transform hover:scale-105">
                            <div class="image-container">
                                <img src="<?= base_url('images/geki/chavi.png'); ?>" class="w-full h-full object-cover">
                            </div>
                            <div class="glow-box flex-grow flex flex-col justify-center items-center p-5 text-center">
                                <h3 class="text-white text-lg font-bold">Chavilla "Chavi" Orvana</h3>
                                <p class="text-white">Sentinel</p>
                            </div>
                        </div>


                        <div
                            class="box relative bg-[#CBCBCB] shadow-xl rounded-lg overflow-hidden flex flex-col mx-auto transition-transform hover:scale-105">
                            <div class="image-container">
                                <img src="<?= base_url('images/geki/malika.png'); ?>"
                                    class="w-full h-full object-cover">
                            </div>
                            <div class="glow-box flex-grow flex flex-col justify-center items-center p-5 text-center">
                                <h3 class="text-white text-lg font-bold">Malika Albino</h3>
                                <p class="text-white">Flex</p>
                            </div>
                        </div>


                        <div
                            class="box relative bg-[#CBCBCB] shadow-xl rounded-lg overflow-hidden flex flex-col mx-auto transition-transform hover:scale-105">
                            <div class="image-container">
                                <img src="<?= base_url('images/pikscoy.png'); ?>" class=" w-full h-full object-cover">
                            </div>
                            <div class="glow-box flex-grow flex flex-col justify-center items-center p-5 text-center">
                                <h3 class="text-white text-lg font-bold">Pikscoy</h3>
                                <p class="text-white">Flex</p>
                            </div>
                        </div>


                    </div>


                    <!-- grid staff -->
                    <h1 class="text-5xl font-bold tracking-tight text-gray-900 sm:text-5xl mb-10">Staff</h1>
                    <div class="grid grid-cols-1 md:grid-cols-4 gap-10 py-4">
                        <div
                            class="box relative bg-[#CBCBCB] shadow-xl rounded-lg overflow-hidden flex flex-col mx-auto transition-transform hover:scale-105">
                            <div class="image-container">
                                <img src="<?= base_url('images/haru.png'); ?>" class=" w-full h-full object-cover">
                            </div>
                            <div class="glow-box flex-grow flex flex-col justify-center items-center p-5 text-center">
                                <h3 class="text-white text-lg font-bold">Haruki "HaruMiz" Mizuhashi</h3>
                                <p class="text-white">Head Coach</p>
                            </div>
                        </div>


                        <div
                            class="box relative bg-[#CBCBCB] shadow-xl rounded-lg overflow-hidden flex flex-col mx-auto transition-transform hover:scale-105">
                            <div class="image-container">
                                <img src="<?= base_url('images/vio.png'); ?>" class=" w-full h-full object-cover">
                            </div>
                            <div class="glow-box flex-grow flex flex-col justify-center items-center p-5 text-center">
                                <h3 class="text-white text-lg font-bold">Ovio "Birdy" Damion</h3>
                                <p class="text-white">Assistant Coach</p>
                            </div>
                        </div>

                        <div
                            class="box relative bg-[#CBCBCB] shadow-xl rounded-lg overflow-hidden flex flex-col mx-auto transition-transform hover:scale-105">
                            <div class="image-container">
                                <img src="<?= base_url('images/geki/sal.png'); ?>" class=" w-full h-full object-cover">
                            </div>
                            <div class="glow-box flex-grow flex flex-col justify-center items-center p-5 text-center">
                                <h3 class="text-white text-lg font-bold">Sal Spam97k</h3>
                                <p class="text-white">Team Manager</p>
                            </div>
                        </div>
                    </div>
                </div>


            </div>

        </div>
    </div>

    <!-- Content #3: vernalis Section -->
    <style>
        #vernalis .fade-in {
            animation: fadeIn 1s ease-out;
        }

        #vernalis .box {
            position: relative;
            width: 300px;
            height: 300px;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 40px;
            background: #010615;
            transition: .5s;
        }

        #vernalis .box:hover {
            height: 400px;
        }

        #vernalis .image-container {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            box-sizing: border-box;
        }

        #vernalis .image-container img {
            width: 300px;
            opacity: 0.1;
            transition: 0.5s;
        }

        #vernalis .box:hover .image-container img {
            opacity: 1;
        }

        #vernalis .box:before,
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

        #vernalis .box:after {
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

        #vernalis .box:before,
        .box:after {
            background: linear-gradient(225deg, #f0e68c, #ffb6c1, #f0e68c);
        }


        #vernalis .box .glow-box {
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

        #vernalis .box:hover .glow-box {
            opacity: 1;
        }

        #vernalis .box .glow-box h3 {
            font-size: 20px;
            font-weight: 500;
            line-height: 20px;
            letter-spacing: 1px;
        }

        #vernalis .box .glow-box p {
            font-size: 14px;
            font-weight: 300;
            letter-spacing: 2px;
        }

        #vernalis @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }
    </style>
    <div>
        <div class="relative min-h-screen bg-white flex flex-col justify-between" id="vernalis">

            <!-- Image Section with Tailwind CSS classes for background image and size -->
            <div class="bg-cover bg-center h-96" style="background-image: url('images/orion.png');"></div>

            <!-- Overlay Container which will contain the text and overlay a part of the image -->
            <!-- Adjust the top margin (mt) to place it half over the image and half over the white background below -->
            <div id="content5"
                class="container w-5/6 mx-auto px-4 sm:px-6 lg:px-8 -mt-32 p-10 text-white rounded-lg shadow-md"
                style="background-image: linear-gradient(225deg, #f0e68c, #ffb6c1, #f0e68c)">
                <h2 class="text-3xl md:text-4xl font-bold mb-4 text-[#103356]">VIOR Vernalis</h2>
                <p class="text-lg md:text-2xl mb-6 text-[#103356]"> A formidable force, with members ranging from the
                    esteemed ranks of
                    Diamond to Immortal in Valorant. These individuals are not just competitors; they are influencers
                    within the Vtubing community, known for their strategic acumen and high-octane gameplay. Their
                    journey through various high-stakes tournaments has been a spectacle of sheer talent and indomitable
                    spirit, earning them a loyal following.
                </p>
            </div>

            <div class="py-10 bg-white">
                <div id="content6" class="container mx-auto max-w-7xl gap-x-8 gap-y-5 px-6 lg:px-8">
                    <h1 class="text-5xl font-bold tracking-tight text-gray-900 sm:text-5xl mb-10">Players</h1>

                    <div class="grid grid-cols-1 md:grid-cols-4 gap-10 py-4 justify-items-left">
                        <!-- grid 1 -->
                        <div
                            class="box relative bg-[#CBCBCB] shadow-xl rounded-lg overflow-hidden flex flex-col mx-auto transition-transform hover:scale-105">
                            <div class="image-container">
                                <img src="<?= base_url('images/haru.png'); ?>" class=" w-full h-full object-cover">
                            </div>
                            <div class="glow-box flex-grow flex flex-col justify-center items-center p-5 text-center">
                                <h3 class="text-white text-lg font-bold">Haruki "HaruMiz" Mizuhashi</h3>
                                <p class="text-white">Flex/ IGL</p>
                            </div>
                        </div>


                        <div
                            class="box relative bg-[#CBCBCB] shadow-xl rounded-lg overflow-hidden flex flex-col mx-auto transition-transform hover:scale-105">
                            <div class="image-container">
                                <img src="<?= base_url('images/vio.png'); ?>" class=" w-full h-full object-cover">
                            </div>
                            <div class="glow-box flex-grow flex flex-col justify-center items-center p-5 text-center">
                                <h3 class="text-white text-lg font-bold">Ovio "Birdy" Damion</h3>
                                <p class="text-white">Flex</p>
                            </div>
                        </div>

                        <div
                            class="box relative bg-[#CBCBCB] shadow-xl rounded-lg overflow-hidden flex flex-col mx-auto transition-transform hover:scale-105">
                            <div class="image-container">
                                <img src="<?= base_url('images/vernalis/sato.png'); ?>"
                                    class="w-full h-full object-cover">
                            </div>
                            <div class="glow-box flex-grow flex flex-col justify-center items-center p-5 text-center">
                                <h3 class="text-white text-lg font-bold">Satokiri "Sato" Kyuga</h3>
                                <p class="text-white">Initiator</p>
                            </div>
                        </div>

                        <div
                            class="box relative bg-[#CBCBCB] shadow-xl rounded-lg overflow-hidden flex flex-col mx-auto transition-transform hover:scale-105">
                            <div class="image-container">
                                <img src="<?= base_url('images/vernalis/nick.png'); ?>"
                                    class="w-full h-full object-cover">
                            </div>
                            <div class="glow-box flex-grow flex flex-col justify-center items-center p-5 text-center">
                                <h3 class="text-white text-lg font-bold">Nick Chishiki</h3>
                                <p class="text-white">Duelist</p>
                            </div>
                        </div>
                    </div>

                    <!-- grid 2 -->
                    <div class="grid grid-cols-1 md:grid-cols-4 gap-10 py-4">

                        <div
                            class="box relative bg-[#CBCBCB] shadow-xl rounded-lg overflow-hidden flex flex-col mx-auto transition-transform hover:scale-105">
                            <div class="image-container">
                                <img src="<?= base_url('images/vernalis/tenma.png'); ?>"
                                    class="w-full h-full object-cover">
                            </div>
                            <div class="glow-box flex-grow flex flex-col justify-center items-center p-5 text-center">
                                <h3 class="text-white text-lg font-bold">Tenma Razhiel</h3>
                                <p class="text-white">Sentinel</p>
                            </div>
                        </div>


                        <div
                            class="box relative bg-[#CBCBCB] shadow-xl rounded-lg overflow-hidden flex flex-col mx-auto transition-transform hover:scale-105">
                            <div class="image-container">
                                <img src="<?= base_url('images/vernalis/kyris.png'); ?>"
                                    class="w-full h-full object-cover">
                            </div>
                            <div class="glow-box flex-grow flex flex-col justify-center items-center p-5 text-center">
                                <h3 class="text-white text-lg font-bold">Kyris Specter</h3>
                                <p class="text-white">Sentinel</p>
                            </div>
                        </div>


                        <div
                            class="box relative bg-[#CBCBCB] shadow-xl rounded-lg overflow-hidden flex flex-col mx-auto transition-transform hover:scale-105">
                            <div class="image-container">
                                <img src="<?= base_url('images/vernalis/hide.png'); ?>"
                                    class=" w-full h-full object-cover">
                            </div>
                            <div class="glow-box flex-grow flex flex-col justify-center items-center p-5 text-center">
                                <h3 class="text-white text-lg font-bold">Hide Verbesten</h3>
                                <p class="text-white">Controller</p>
                            </div>
                        </div>


                    </div>

                </div>


            </div>

        </div>
    </div>



    <script>
        window.onload = function () {
            var content1 = document.getElementById('content1'); // Selecting Content #1
            var content2 = document.getElementById('content2'); // Selecting Content #2
            var content3 = document.getElementById('content3'); // Selecting Content #3
            var content4 = document.getElementById('content4'); // Selecting Content #4
            var content5 = document.getElementById('content5'); // Selecting Content #5
            var content6 = document.getElementById('content6'); // Selecting Content #6

            content1.classList.add('fade-in'); // Adding fade-in class to Content #1
            content2.classList.add('fade-in'); // Adding slide-in class to Content #2
            content3.classList.add('fade-in'); // Adding fade-in class to Content #3
            content4.classList.add('fade-in'); // Adding slide-in class to Content #4
            content5.classList.add('fade-in'); // Adding fade-in class to Content #5
            content6.classList.add('fade-in'); // Adding slide-in class to Content #6
        }
    </script>

    <div>
        <style>
            /* Neon Hover Effect */
            .hover\:neon-effect:hover {
                animation: neon 1s ease infinite alternate;
            }

            @keyframes neon {
                0% {
                    text-shadow: 0 0 5px #00ff00, 0 0 10px #00ff00, 0 0 20px #00ff00;
                }

                100% {
                    text-shadow: 0 0 5px #00ff00, 0 0 10px #00ff00, 0 0 20px #00ff00, 0 0 30px #00ff00, 0 0 40px #00ff00;
                }
            }
        </style>

        <!-- Scroll to Top Button -->
        <button id="scrollToTopButton"
            class="fixed bottom-4 right-4 bg-blue-500 text-white px-4 py-2 rounded-full shadow-md transition duration-300 ease-in-out hidden opacity-80 hover:bg-blue-600 hover:neon-effect">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18">
                </path>
            </svg>
        </button>



        <script>
            // Function to scroll to the top of the page
            function scrollToTop() {
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth' // Smooth scrolling behavior
                });
            }

            // Show the scroll-to-top button when the user scrolls down
            window.addEventListener('scroll', function () {
                const scrollToTopButton = document.getElementById('scrollToTopButton');
                if (window.scrollY > 300) {
                    scrollToTopButton.style.display = 'block';
                } else {
                    scrollToTopButton.style.display = 'none';
                }
            });

            // Add click event listener to the button
            const scrollToTopButton = document.getElementById('scrollToTopButton');
            scrollToTopButton.addEventListener('click', scrollToTop);
        </script>
    </div>


    <?php include('templates/footer.php'); ?>