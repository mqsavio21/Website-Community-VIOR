<!-- application/views/index.php -->
<?php include('templates/header.php'); ?>


<div class="flex flex-col min-h-screen">
    <!-- Content #1: Image Section with Slideshow Effect -->
    <div>
        <style>
            @keyframes slideOut {
                0% {
                    transform: translateX(0);
                    opacity: 1;
                }

                100% {
                    transform: translateX(-100%);
                    opacity: 0;
                }
            }

            @keyframes slideIn {
                0% {
                    transform: translateX(100%);
                    opacity: 0;
                }

                100% {
                    transform: translateX(0);
                    opacity: 1;
                }
            }

            .slideshow-container {
                overflow: hidden;
                /* Hide any overflow during animation */
            }

            .bg-image {
                /* Ensuring the image covers the container and is positioned to fill the entire div */
                background-size: cover;
                background-position: center center;
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
            }

            .slide-out {
                animation: slideOut 1s forwards;
            }

            .slide-in {
                animation: slideIn 1s forwards;
            }


            .overlay {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: rgba(0, 0, 0, 0.8);
                /* Black with 50% opacity */
            }

            .text-container {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                padding: 4rem 1rem;
                text-align: center;
            }
        </style>

        <div class="relative slideshow-container" style="height: 500px;">
            <!-- The first background image -->
            <div class="bg-image"
                style="background: url('<?= base_url('images/orion.png'); ?>') no-repeat center center / cover;"></div>

            <!-- The overlay div -->
            <div class="overlay"></div>

            <!-- The text container -->
            <div class="text-container">
                <h1 class="text-5xl font-bold text-white mb-6">Welcome to VERNALIS ORION!</h1>
                <h2 class="text-2xl font-semibold text-blue-200 mt-4">Join Our Community</h2>
            </div>
        </div>

        <script>
            // Array of images to cycle through
            const images = [
                '<?= base_url('images/valorant.jpg'); ?>',
                '<?= base_url('images/valorant2.jpg'); ?>',
                '<?= base_url('images/valorant3.jpg'); ?>',
                '<?= base_url('images/orion.png'); ?>'
            ];

            let currentImageIdx = 0;
            const slideshowContainer = document.querySelector('.slideshow-container');

            // Function to change the background image
            function changeImage() {
                // Create a new div to hold the next image
                const nextImageDiv = document.createElement('div');
                nextImageDiv.classList.add('bg-image', 'slide-in');
                nextImageDiv.style.backgroundImage = `url('${images[currentImageIdx]}')`;
                nextImageDiv.style.zIndex = -1; // Ensure the new image is behind the current image

                // Append the new div to the container
                slideshowContainer.appendChild(nextImageDiv);

                // If there's more than one '.bg-image', remove the first one (the current image)
                if (slideshowContainer.children.length > 3) { // because we have 3 elements now: 2 images + text container
                    const currentImageDiv = document.querySelectorAll('.bg-image')[0];
                    currentImageDiv.classList.add('slide-out');
                    // Remove the old image div after the animation
                    currentImageDiv.addEventListener('animationend', () => currentImageDiv.remove());
                }

                // Update the index for the next image
                currentImageIdx = (currentImageIdx + 1) % images.length;
            }

            // Initial call to set up the first transition after 5 seconds
            setTimeout(() => {
                changeImage();
                // Subsequent transitions at 5-second intervals
                setInterval(changeImage, 5000);
            }, 5000);
        </script>
    </div>



    <!-- Content #2: Colored Background Section with Logo and Text -->
    <div>
        <style>
            @keyframes fadeIn {
                from {
                    opacity: 0;
                }

                to {
                    opacity: 1;
                }
            }

            @keyframes fadeInOut {

                0%,
                100% {
                    opacity: 0;
                }

                50% {
                    opacity: 1;
                }
            }

            .ml12 {
                font-weight: 200;
                font-size: 1.8em;
            }

            .ml12 .letter {
                display: inline-block;
                line-height: 1em;
                opacity: 0;
                /* Start with letters invisible */
            }

            .ml12 .word {
                display: inline-block;
                line-height: 1em;
                opacity: 0;
            }

            .fade-in {
                animation: fadeIn ease-in 1s;
                animation-fill-mode: forwards;
            }

            .delayed-fade-in {
                animation: fadeIn ease-in 1s;
                animation-delay: 0.5s;
                /* Delayed start */
                animation-fill-mode: forwards;
            }

            .neon-button {
                position: relative;
                display: inline-block;
                padding: 15px 30px;
                color: #2196f3;
                text-transform: uppercase;
                letter-spacing: 4px;
                text-decoration: none;
                font-size: 24px;
                overflow: hidden;
                transition: 0.2s;
            }

            .neon-button:hover {
                color: #255784;
                background: #2196f3;
                box-shadow: 0 0 5px #2196f3, 0 0 10px #2196f3, 0 0 15px #2196f3;
                transition-delay: 1s;
            }

            .neon-button span {
                position: absolute;
                display: block;
            }

            .neon-button span:nth-child(1) {
                top: 0;
                left: -100%;
                width: 100%;
                height: 2px;
                background: linear-gradient(90deg, transparent, #2196f3);
            }

            .neon-button:hover span:nth-child(1) {
                left: 100%;
                transition: 1s;
            }

            .neon-button span:nth-child(3) {
                bottom: 0;
                right: -100%;
                width: 100%;
                height: 2px;
                background: linear-gradient(270deg, transparent, #2196f3);
            }

            .neon-button:hover span:nth-child(3) {
                right: 100%;
                transition: 1s;
                transition-delay: 0.5s;
            }

            .neon-button span:nth-child(2) {
                top: -100%;
                right: 0;
                width: 2px;
                height: 100%;
                background: linear-gradient(180deg, transparent, #2196f3);
            }

            .neon-button:hover span:nth-child(2) {
                top: 100%;
                transition: 1s;
                transition-delay: 0.25s;
            }

            .neon-button span:nth-child(4) {
                bottom: -100%;
                left: 0;
                width: 2px;
                height: 100%;
                background: linear-gradient(360deg, transparent, #2196f3);
            }

            .neon-button:hover span:nth-child(4) {
                bottom: 100%;
                transition: 1s;
                transition-delay: 0.75s;
            }
        </style>

        <div class="py-10" style="background-color: #F5F7F8;">
            <!-- Container centered with flexbox -->
            <div class="container mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <div class="p-2 rounded-lg flex flex-col items-center">

                    <!-- Image/Logo centered below the title text -->
                    <div class="flex justify-center w-full">
                        <img src="<?= base_url('images/vior.png'); ?>" alt="Company Logo"
                            class="h-100 w-100 md:h-60 md:w-60 my-2 fade-in">
                    </div>

                    <!-- Paragraph Text Centered below the image/logo -->
                    <div class="text-center mt-8">
                        <div class="ml12">
                            <p>
                                A thriving community and academy dedicated to elevating the Valorant gaming experience
                                for
                                aspiring VStreamers in Indonesia
                            </p>
                        </div><br>
                    </div>


                    <!-- Hyperlink Centered below the paragraph -->
                    <br> <a href="/about-vior" class="neon-button">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        Learn More About Us!
                    </a>
                </div>
            </div>


        </div>
        <script>
            var textWrapper = document.querySelector('.ml12 p');
            textWrapper.innerHTML = textWrapper.textContent.replace(/([^\x00-\x80]|\w+)/g, "<span class='word'>$&</span>");

            anime.timeline({ loop: true })
                .add({
                    targets: '.ml12 .word',
                    translateX: [40, 0],
                    translateZ: 0,
                    opacity: [0, 1],
                    easing: "easeOutExpo",
                    duration: 1200,
                    delay: (el, i) => 500 + 30 * i
                }).add({
                    targets: '.ml12 .word',
                    translateX: [0, -30],
                    opacity: [1, 0],
                    easing: "easeInExpo",
                    duration: 1100,
                    delay: (el, i) => 100 + 30 * i
                });
        </script>
    </div>



    <!-- Content #3: Colored Background Section with Achievements -->
    <div class="relative bg-gray-900 text-white py-24"
        style="background-image: url('images/valorant.jpg'); background-size: cover; background-position: center;">
        <!-- Overlay with a specific color and transparency -->
        <div class="absolute inset-0 bg-black opacity-80"></div>

        <!-- Container for content -->
        <div class="container mx-auto px-4 z-10 relative">
            <!-- Add relative and z-index to lift the container above the overlay -->
            <!-- Text container with left alignment -->
            <div>
                <!-- Main title with white text aligned to the left -->
                <h2 class="text-white text-5xl font-bold mb-3 text-left pl-4 md:pl-12">Our Achievements</h2><br>

                <!-- Achievements row -->
                <div class="flex flex-wrap -mx-4 justify-center md:justify-start">
                    <!-- Individual achievement container -->
                    <div class="w-full md:w-1/3 px-4 mb-6">
                        <div class="rounded-lg p-4 flex flex-col items-center shadow-lg">
                            <img src="<?= base_url('images/achieve/valo.png'); ?>"
                                class="object-contain h-32 w-full mb-4">
                            <h3 class="text-[#F8CC3D] text-xl font-bold mb-2">26/06/2022</h3>
                            <p class="text-white">1st Place</p>
                            <p class="text-white text-sm">Radna Games Valorant Edition</p>
                        </div>
                    </div>
                    <!-- Repeat for other achievements -->
                    <div class="w-full md:w-1/3 px-4 mb-6">
                        <div class="rounded-lg p-4 flex flex-col items-center shadow-lg">
                            <img src="<?= base_url('images/achieve/valo.png'); ?>"
                                class="object-contain h-32 w-full mb-4">
                            <h3 class="text-[#F8CC3D] text-xl font-bold mb-2">20/09/2022</h3>
                            <p class="text-white">1st Place</p>
                            <p class="text-white text-sm">Yorukaze 17AN VALORANT 2022</p>
                        </div>
                    </div>
                    <!-- Repeat for other achievements -->
                    <div class="w-full md:w-1/3 px-4 mb-6">
                        <div class="rounded-lg p-4 flex flex-col items-center shadow-lg">
                            <img src="<?= base_url('images/achieve/valo.png'); ?>"
                                class="object-contain h-32 w-full mb-4">
                            <h3 class="text-[#F8CC3D] text-xl font-bold mb-2">02/04/2023</h3>
                            <p class="text-white">2nd Place</p>
                            <p class="text-white text-sm">Inari Shrine VALORANT Fun Match</p>
                        </div>
                    </div>
                    <!-- Repeat for other achievements -->
                    <div class="w-full md:w-1/3 px-4 mb-6">
                        <div class="rounded-lg p-4 flex flex-col items-center shadow-lg">
                            <img src="<?= base_url('images/achieve/valo.png'); ?>"
                                class="object-contain h-32 w-full mb-4">
                            <h3 class="text-[#F8CC3D] text-xl font-bold mb-2">21/05/2023</h3>
                            <p class="text-white">3rd Place</p>
                            <p class="text-white text-sm">VALORANT Premier Beta Div 9</p>
                        </div>
                    </div>
                    <!-- Repeat for other achievements -->
                    <div class="w-full md:w-1/3 px-4 mb-6">
                        <div class="rounded-lg p-4 flex flex-col items-center shadow-lg">
                            <img src="<?= base_url('images/achieve/valo.png'); ?>"
                                class="object-contain h-32 w-full mb-4">
                            <h3 class="text-[#F8CC3D] text-xl font-bold mb-2">13/08/2023</h3>
                            <p class="text-white">3rd Place</p>
                            <p class="text-white text-sm">VALORANT Premier Ignition Div 18</p>
                        </div>
                    </div>

                    <div class="w-full md:w-1/3 px-4 mb-6">
                        <div class="rounded-lg p-4 flex flex-col items-center shadow-lg">
                            <img src="<?= base_url('images/achieve/valo.png'); ?>"
                                class="object-contain h-32 w-full mb-4">
                            <h3 class="text-[#F8CC3D] text-xl font-bold mb-2">13/08/2023</h3>
                            <p class="text-white">3th Place</p>
                            <p class="text-white text-sm">VALORANT Premier Launch Advanced 5</p>
                        </div>
                    </div>

                    <div class="w-full md:w-1/3 px-4 mb-6">
                        <div class="rounded-lg p-4 flex flex-col items-center shadow-lg">
                            <img src="<?= base_url('images/achieve/valo.png'); ?>"
                                class="object-contain h-32 w-full mb-4">
                            <h3 class="text-[#F8CC3D] text-xl font-bold mb-2">19/02/2023</h3>
                            <p class="text-white">2nd Place</p>
                            <p class="text-white text-sm">SerafioZ VALORANT Fun Match</p>
                        </div>
                    </div>

                    <div class="w-full md:w-1/3 px-4 mb-6">
                        <div class="rounded-lg p-4 flex flex-col items-center shadow-lg">
                            <img src="<?= base_url('images/achieve/valo.png'); ?>"
                                class="object-contain h-32 w-full mb-4">
                            <h3 class="text-[#F8CC3D] text-xl font-bold mb-2">17/12/2023</h3>
                            <p class="text-white">2nd Place</p>
                            <p class="text-white text-sm">VALORANT Premier EP7ACTIII Advanced 5</p>
                        </div>
                    </div>

                    <div class="w-full md:w-1/3 px-4 mb-6">
                        <div class="rounded-lg p-4 flex flex-col items-center shadow-lg">
                            <img src="<?= base_url('images/achieve/apex.png'); ?>"
                                class="object-contain h-32 w-full mb-4">
                            <h3 class="text-[#F8CC3D] text-xl font-bold mb-2">25/11/2023</h3>
                            <p class="text-white">8th Place</p>
                            <p class="text-white text-sm">Vtuber Rally MCL Series</p>
                        </div>
                    </div>


                </div>


            </div>
        </div>
    </div>



    <!-- Content #4: Colored the founder -->
    <div>
        <style>
            .neon-button {
                position: relative;
                display: inline-block;
                padding: 15px 30px;
                color: #2196f3;
                text-transform: uppercase;
                letter-spacing: 4px;
                text-decoration: none;
                font-size: 24px;
                overflow: hidden;
                transition: 0.2s;
            }

            .neon-button:hover {
                color: #255784;
                background: #2196f3;
                box-shadow: 0 0 5px #2196f3, 0 0 10px #2196f3, 0 0 15px #2196f3;
                transition-delay: 1s;
            }

            .neon-button span {
                position: absolute;
                display: block;
            }

            .neon-button span:nth-child(1) {
                top: 0;
                left: -100%;
                width: 100%;
                height: 2px;
                background: linear-gradient(90deg, transparent, #2196f3);
            }

            .neon-button:hover span:nth-child(1) {
                left: 100%;
                transition: 1s;
            }

            .neon-button span:nth-child(3) {
                bottom: 0;
                right: -100%;
                width: 100%;
                height: 2px;
                background: linear-gradient(270deg, transparent, #2196f3);
            }

            .neon-button:hover span:nth-child(3) {
                right: 100%;
                transition: 1s;
                transition-delay: 0.5s;
            }

            .neon-button span:nth-child(2) {
                top: -100%;
                right: 0;
                width: 2px;
                height: 100%;
                background: linear-gradient(180deg, transparent, #2196f3);
            }

            .neon-button:hover span:nth-child(2) {
                top: 100%;
                transition: 1s;
                transition-delay: 0.25s;
            }

            .neon-button span:nth-child(4) {
                bottom: -100%;
                left: 0;
                width: 2px;
                height: 100%;
                background: linear-gradient(360deg, transparent, #2196f3);
            }

            .neon-button:hover span:nth-child(4) {
                bottom: 100%;
                transition: 1s;
                transition-delay: 0.75s;
            }

            /* Card specific styles */
            @media (max-width: 768px) {
                #meet-the-founder .grid {
                    grid-template-columns: repeat(1, 1fr);
                    /* Stack the cards on smaller screens */
                }
            }

            #content-four .grid {
                display: grid;
                grid-template-columns: repeat(3, 25vw);
                /* 25% of the viewport width for each card */
                grid-gap: 1rem;
                justify-content: center;
                align-items: center;
                padding: 1rem;
                /* If you want to ensure the grid container doesn't exceed certain limits, you can use max-width */
                max-width: 1200px;
                /* Adjust this value as needed */
                margin: auto;
                /* This will center the grid in the middle of the page */
            }

            #content-four .card {
                aspect-ratio: 1 / 1;
                background-size: cover;
                display: grid;
                grid-template-columns: repeat(2, 1fr);
                grid-template-rows: repeat(2, 1fr);
                gap: 0.5rem;
                padding: 0.5rem;
                position: relative;
                cursor: pointer;
                overflow: hidden;
                transition: transform 0.3s ease-in-out;
                background: linear-gradient(145deg, #003366, #0066CC, #FFD700);
                /* Dark blue to light blue to yellow */
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
                /* Shadow for depth */
            }

            .card-img {
                background-size: cover;
                background-position: center;
                width: 100%;
                height: 100%;
                position: absolute;
                transition: all 0.6s cubic-bezier(0.165, 0.84, 0.44, 1), filter 0.3s;
            }

            /* More card-img variations based on nth-child can be added here if necessary */

            .card:hover .card-img {
                transform: scale(0.9);
                /* Slightly larger scale on hover */
                filter: brightness(0.8);
                /* Dim the image to focus on text */
            }

            .card-box {
                padding: 1.2rem;
                /* Increase padding for larger box size */
                background-color: rgba(0, 0, 0, 0.75);
                backdrop-filter: blur(10px);
                transition: opacity 0.5s cubic-bezier(0.19, 1, 0.22, 1), transform 0.5s cubic-bezier(0.19, 1, 0.22, 1);
                position: relative;
                z-index: 2;
                opacity: 1;
                display: flex;
                flex-direction: column;
                align-items: center;
                /* Center align items for better layout */
                color: #E0FFFF;
            }

            /* Positioning the Boxes */
            .box-1 {
                grid-column: 1 / 2;
                grid-row: 1 / 2;
                justify-self: start;
                align-self: start;
            }

            .box-2 {
                grid-column: 2 / 3;
                grid-row: 1 / 2;
                justify-self: end;
                align-self: start;
            }

            .box-3 {
                grid-column: 1 / 2;
                grid-row: 2 / 3;
                justify-self: start;
                align-self: end;
            }

            .box-4 {
                grid-column: 2 / 3;
                grid-row: 2 / 3;
                justify-self: end;
                align-self: end;
            }

            /* Offsetting the Boxes */
            .top-left,
            .top-right,
            .bottom-right,
            .bottom-left {
                transition: transform 0.5s cubic-bezier(0.19, 1, 0.22, 1);
            }

            .top-left {
                transform: translate(-105%, -105%);
            }

            .top-right {
                transform: translate(105%, -105%);
            }

            .bottom-right {
                transform: translate(105%, 105%);
            }

            .bottom-left {
                transform: translate(-105%, 105%);
            }

            .card:hover .top-left,
            .card:hover .top-right,
            .card:hover .bottom-right,
            .card:hover .bottom-left {
                transform: translate(0, 0);
                opacity: 1;
                /* Ensure opacity is set to 1 on hover */
            }

            /* Clip paths for the boxes */
            .box-1,
            .box-4 {
                clip-path: polygon(0 0,
                        calc(100% - 20px) 0,
                        100% 20px,
                        100% 100%,
                        20px 100%,
                        0 calc(100% - 20px));
            }

            .box-2,
            .box-3 {
                clip-path: polygon(20px 0,
                        100% 0,
                        100% calc(100% - 20px),
                        calc(100% - 20px) 100%,
                        0 100%,
                        0 20px);
            }

            /* Styling the content inside the box */
            .card-box>p {
                font-size: 14px;
                /* Increase font size for paragraphs */
                text-transform: uppercase;
                font-weight: bold;
                color: #FFD700;
                margin-bottom: 0.5rem;
                /* Add some space between text lines */

            }

            .card-box>h3 {
                font-size: 18px;
                /* Increase font size for headings, if present */
                color: #E0FFFF;
                margin-bottom: 0.5rem;
            }
        </style>

        <div class="py-8 bg-[#F5F7F8]" id="content-four">
            <h2 class="text-5xl font-bold text-left text-black mb-8 pl-4 md:pl-12 mt-10 md:mt-12">Our Founders</h2>
            <div class="grid" id="meet-the-founder">
                <!-- Card 1 -->
                <div class="card">
                    <div class="card-img" style="background-image: url('images/haru.png');"></div>
                    <div class="card-box box-1 top-left">
                        <p>Haruki "HaruMiz" Mizuhashi</p>
                    </div>
                    <div class="card-box box-2 top-right">
                        <p>Firm and Innovative Leader</p>
                    </div>
                    <div class="card-box box-3 bottom-left">
                        <p>Chief Executive Officer</p>
                    </div>
                    <div class="card-box box-4 bottom-right">
                        <p>Artful Individual</p>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="card">
                    <div class="card-img" style="background-image: url('images/vio.png');"></div>
                    <div class="card-box box-1 top-left">
                        <p>Ovio "Birdy" Damion</p>
                    </div>
                    <div class="card-box box-2 top-right">
                        <p>Clutch Master</p>
                    </div>
                    <div class="card-box box-3 bottom-left">
                        <p>Chief Operating Officer</p>
                    </div>
                    <div class="card-box box-4 bottom-right">
                        <p>Process Innovator</p>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="card">
                    <div class="card-img" style="background-image: url('images/roffi.png');"></div>
                    <div class="card-box box-1 top-left">
                        <p>Roffi Daijoubu</p>
                    </div>
                    <div class="card-box box-2 top-right">
                        <p>Lurk Every Round</p>
                    </div>
                    <div class="card-box box-3 bottom-left">
                        <p>Chief Technology Officer</p>
                    </div>
                    <div class="card-box box-4 bottom-right">
                        <p>Strategic Planner</p>
                    </div>
                </div>


            </div>


            <br>

            <div class="mt-2 md:mt-4 text-center">
                <a href="/management" class="neon-button">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    Check Out Our Staff!
                </a>
            </div>
        </div>
    </div>



    <!-- Content #5: academy -->
    <div>
        <style>
            .image-container {
                height: 20rem;
                /* Adjust the height as needed */
            }

            .info-container {
                min-height: 6rem;
                /* Adjust the min-height as needed */
            }

            .neon-button {
                position: relative;
                display: inline-block;
                padding: 15px 30px;
                color: #2196f3;
                text-transform: uppercase;
                letter-spacing: 4px;
                text-decoration: none;
                font-size: 18px;
                font-weight: bold;
                overflow: hidden;
                transition: 0.2s;
            }

            .neon-button:hover {
                color: #255784;
                background: #2196f3;
                box-shadow: 0 0 5px #2196f3, 0 0 10px #2196f3, 0 0 15px #2196f3;
                transition-delay: 1s;
            }

            .neon-button span {
                position: absolute;
                display: block;
            }

            .neon-button span:nth-child(1) {
                top: 0;
                left: -100%;
                width: 100%;
                height: 2px;
                background: linear-gradient(90deg, transparent, #2196f3);
            }

            .neon-button:hover span:nth-child(1) {
                left: 100%;
                transition: 1s;
            }

            .neon-button span:nth-child(3) {
                bottom: 0;
                right: -100%;
                width: 100%;
                height: 2px;
                background: linear-gradient(270deg, transparent, #2196f3);
            }

            .neon-button:hover span:nth-child(3) {
                right: 100%;
                transition: 1s;
                transition-delay: 0.5s;
            }

            .neon-button span:nth-child(2) {
                top: -100%;
                right: 0;
                width: 2px;
                height: 100%;
                background: linear-gradient(180deg, transparent, #2196f3);
            }

            .neon-button:hover span:nth-child(2) {
                top: 100%;
                transition: 1s;
                transition-delay: 0.25s;
            }

            .neon-button span:nth-child(4) {
                bottom: -100%;
                left: 0;
                width: 2px;
                height: 100%;
                background: linear-gradient(360deg, transparent, #2196f3);
            }

            .neon-button:hover span:nth-child(4) {
                bottom: 100%;
                transition: 1s;
                transition-delay: 0.75s;
            }

            .ml9 {
                position: relative;
            }

            .ml9 .text-wrapper {
                position: relative;
                display: inline-block;
                padding-top: 0.2em;
                padding-right: 0.05em;
                padding-bottom: 0.1em;
                overflow: hidden;
            }

            .ml9 .letter {
                display: inline-block;
                line-height: 1em;
                transform-origin: 50% 100%;
            }
        </style>

        <div class="relative bg-gradient-to-r from-blue-400 via-yellow-300 to-white">
            <div class="container mx-auto px-6 py-12 grid grid-cols-1 md:grid-cols-2 items-center gap-8">

                <!-- left side image with blur effect -->
                <div class="relative flex justify-center items-center">
                    <div class="overflow-hidden rounded-lg">
                        <!-- The pseudo-element for the blur effect -->
                        <div
                            class="absolute inset-0 bg-gradient-to-r from-blue-400 via-yellow-300 to-white opacity-75 filter blur-xl">
                        </div>
                        <img class="relative object-contain max-w-full max-h-120 z-10" src="images/acad.png"
                            alt="Academy Image">
                    </div>
                </div>

                <!-- right side content -->
                <div>
                    <div class="ml9">
                        <span class="text-wrapper">
                            <h1 class="letters text-4xl font-bold mb-8 ml-8 text-black">Learn & Gain Experiences</h1>
                        </span>
                    </div>


                    <p class="letters mb-6 ml-8 text-2xl text-gray-800">
                        Our academy provides session and important materials for you to improve with guidances from
                        experienced Vtubers Valorant Players
                    </p>




                    <a href="/academy" class="neon-button ml-8">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        Join Our Academy!
                    </a>
                </div>


            </div>

            <!-- Bottom three sections -->
            <div class="container mx-auto px-6 py-12">
                <div class="flex justify-center space-x-4 md:space-x-8">
                    <!-- Section 1 with added padding -->
                    <div class="text-center flex-1 px-4 md:px-6">
                        <h3 class="text-xl text-black font-semibold">70+ Students</h3>
                        <p class="text-gray-800">Indonesia Prominent Vtubers</p>
                    </div>

                    <!-- Vertical Divider -->
                    <div class="hidden md:block border-r border-black border-opacity-50"></div>

                    <!-- Section 2 -->
                    <div class="text-center flex-1 px-4 md:px-6">
                        <h3 class="text-xl text-black font-semibold">100+ Sessions</h3>
                        <p class="text-gray-800">Private / Group Teaching</p>
                    </div>

                    <!-- Vertical Divider -->
                    <div class="hidden md:block border-r border-black border-opacity-50"></div>

                    <!-- Section 3 with added padding -->
                    <div class="text-center flex-1 px-4 md:px-6">
                        <h3 class="text-xl text-black font-semibold">10+ Topic Materials</h3>
                        <p class="text-gray-800">Average per course</p>
                    </div>
                </div>
            </div>

        </div>

        <script>
            // Wrap every letter in a span, preserving white space
            var textWrapper = document.querySelector('.ml9 .letters');
            textWrapper.innerHTML = textWrapper.textContent.replace(/(\S)/g, "<span class='letter'>$&</span>");

            anime.timeline({ loop: true })
                .add({
                    targets: '.ml9 .letter',
                    scale: [0, 1],
                    duration: 1500,
                    elasticity: 600,
                    delay: (el, i) => 45 * (i + 1)
                }).add({
                    targets: '.ml9',
                    opacity: 0,
                    duration: 1000,
                    easing: "easeOutExpo",
                    delay: 1000
                });
        </script>
    </div>





    <!-- Content #6: Partners -->
    <div class="py-8 bg-[#F5F7F8]">
        <div class="container mx-auto px-6 mb-6 md:mb-12">
            <h2 class="text-5xl font-bold text-left text-black mb-8 pl-4 md:pl-12">Our Partners</h2>
            <div class="flex justify-center items-center mt:4 md:mt-8 space-x-16 md:space-x-32">
                <!-- Partner Logo 2 -->
                <img class="object-contain h-24" src="images/agency/geki.png" alt="Partner Logo 2">
                <!-- Partner Logo 3 -->
                <img class="object-contain h-24" src="images/agency/vustadz.png" alt="Partner Logo 3">
                <!-- Partner Logo 4 -->
                <img class="object-contain h-24" src="images/agency/atelier.png" alt="Partner Logo 4">
            </div>
        </div>
    </div>


    <!-- scroll top button -->
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