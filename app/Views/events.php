<?php include('templates/header.php'); ?>


<div class="flex flex-col min-h-screen">


    <!-- header image transparent -->
    <style>
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

        .fade-in {
            animation: fadeIn 1s ease-out;
        }

        .slide-in {
            animation: slideIn 1s ease-out;
        }
    </style>
    <div class="relative py-20">
        <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('images/orion.png');"></div>
        <!-- Transparent Overlay using pseudo-element -->
        <div class="absolute inset-0 bg-[#373f44] opacity-95"></div>

        <!-- Container for the content -->
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative">
            <!-- Management Title -->
            <div class="text-center mb-8 h-40 flex justify-center items-center">
                <h1 class="text-4xl md:text-5xl font-bold text-[#FDC855]">Events</h1>
            </div>

        </div>
    </div>

    <!-- News Item #1 Container -->
    <style>
        .glowing-neon {
            position: relative;
            background: #fff;
            padding: 16px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            overflow: hidden;
        }

        .glowing-neon::before {
            content: "";
            position: absolute;
            top: -2px;
            left: -2px;
            right: -2px;
            bottom: -2px;
            background: linear-gradient(45deg, #f06, #9f6);
            border-radius: 10px;
            z-index: -1;
            animation: glowing 1.5s linear infinite;
        }

        @keyframes glowing {
            0% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.02);
            }

            100% {
                transform: scale(1);
            }
        }
    </style>

    <div id="content1" class="container mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <!-- News Item -->
        <div class="flex flex-wrap md:flex-nowrap items-center gap-8 bg-white p-6 rounded-lg shadow-lg">

            <!-- Image Container -->
            <div class="w-full md:w-1/2 mb-4 md:mb-0">
                <img src="<?= base_url('images/news/asvsom.png'); ?>" alt="News Image"
                    class="w-full h-auto object-cover rounded-lg">
            </div>

            <!-- Text Container with padding -->
            <div class="w-full md:w-1/2 md:pl-8">
                <h2 class="text-2xl font-bold mb-4">Epic Showdown: VIOR Omnia and VIOR All-Star Battle It Out Across
                    Three Maps</h2>
                <p class="text-gray-600">
                    The esports arena witnessed history on November 13, 2023, as VIOR Omnia clashed with VIOR All-Star
                    across Ascent, Breeze, and Bind. The showcase match concluded with spectacular displays of strategy
                    and skill that captivated fans worldwide. Dive into the highlights, expert insights, and player
                    perspectives on this remarkable event in our News section, where we celebrate the pinnacle of
                    competitive Valorant play.
                </p>

                <!-- Button Container -->
                <div class="mt-4 md:mt-8">
                    <a href="https://www.youtube.com/watch?v=cNjCsesyeBc&t=3481s" target="_blank"
                        rel="noopener noreferrer"
                        class="inline-block bg-blue-500 text-white font-bold py-2 px-6 rounded-full transition duration-300 ease-in-out hover:bg-blue-600 hover:scale-105">
                        Watch the Match Highlights
                    </a>
                </div>

            </div>

        </div>
    </div>


    <!-- News Item #2 Container -->
    <div id="content2" class="container mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <!-- News Item -->
        <div class="flex flex-wrap md:flex-nowrap items-center gap-8 bg-white p-6 rounded-lg shadow-lg">


            <!-- Text Container with padding -->
            <div class="w-full md:w-1/2 md:pl-8">
                <h2 class="text-2xl font-bold mb-4">VIOR's Triumphant Foray into Apex Legends: Scrimmage Champions
                    Eyeing the Trophy</h2>
                <p class="text-gray-600">
                    VIOR's competitive edge shone brightly as they stormed into the Apex Legends arena, clinching 1st
                    place in a heated scrimmage. Their sights are now set on the grand prize in the upcoming VRally Mini
                    Custom Lobby Apex Legends tournament, hosted by Vtuber Rally. With their eyes firmly on the trophy,
                    VIOR is poised to become a formidable force in the Apex
                    Legends esports circuit.
                </p>

                <div class="mt-4 md:mt-8">
                    <a href="https://www.youtube.com/watch?v=DXqvRtTgVqk&t=4556s" target="_blank"
                        rel="noopener noreferrer"
                        class="inline-block bg-blue-500 text-white font-bold py-2 px-6 rounded-full transition duration-300 ease-in-out hover:bg-blue-600 hover:scale-105">
                        Watch the Match Highlights
                    </a>
                </div>
            </div>
            <!-- Image Container -->
            <div class="w-full md:w-1/2 mb-4 md:mb-0">
                <img src="<?= base_url('images/news/viorapex.jpg'); ?>" alt="News Image"
                    class="w-full h-auto object-cover rounded-lg">
            </div>

        </div>
        <!-- Repeat the above block for each news item -->
    </div>

    <!-- News Item #3 Container -->
    <div id="content3" class="container mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <!-- News Item -->
        <div class="flex flex-wrap md:flex-nowrap items-center gap-8 bg-white p-6 rounded-lg shadow-lg">

            <!-- Image Container -->
            <div class="w-full md:w-1/2 mb-4 md:mb-0">
                <img src="<?= base_url('images/news/palopes.jpg'); ?>" alt="News Image"
                    class="w-full h-auto object-cover rounded-lg">
            </div>

            <!-- Text Container with padding -->
            <div class="w-full md:w-1/2 md:pl-8">
                <h2 class="text-2xl font-bold mb-4">Kyris Specter and Ovio Damion Secure 2nd Place Victory at VALOFEST
                    #2: IMMORTAL FRONTIER</h2>
                <p class="text-gray-600">
                    A round of applause is in order for the remarkable duo, Kyris Specter and Ovio Damion, who helped
                    their
                    team RE:FLEX to an impressive 2nd place finish with their team at the prestigious VALOFEST #2:
                    IMMORTAL FRONTIER
                    tournament. This notable achievement is a testament to their skill, strategic acumen, and the
                    seamless teamwork exhibited throughout the competition.
                </p>

            </div>

        </div>
        <!-- Repeat the above block for each news item -->
    </div>


    <script>
        window.onload = function () {
            var content1 = document.getElementById('content1'); // Selecting Content #1
            var content2 = document.getElementById('content2'); // Selecting Content #2
            var content3 = document.getElementById('content3'); // Selecting Content #3

            content1.classList.add('fade-in'); // Adding fade-in class to Content #1
            content2.classList.add('slide-in'); // Adding slide-in class to Content #2
            content3.classList.add('slide-in'); // Adding slide-in class to Content #2
        }
    </script>



    <?php include('templates/footer.php'); ?>