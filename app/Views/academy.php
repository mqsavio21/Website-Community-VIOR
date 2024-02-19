<!-- application/views/index.php -->
<?php include('templates/header.php'); ?>


<div class="flex flex-col min-h-screen">

    <!-- Content #1 Section -->
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

            .fade-in {
                animation: fadeIn 1s ease-out;
            }

            #contentheader h1,
            #contentheader h2,
            #contentheader p {
                font-family: 'YourFontFamily', serif;
                /* Replace 'YourFontFamily' with your actual font family */
            }

            .ml16 {
                padding: 20px 0;
                font-weight: 800;
                font-size: 2.25rem;
                /* This is equivalent to text-4xl in Tailwind */
                text-transform: uppercase;
                color: #65b3e5;
                /* Keeping the color from the h2 class */
                overflow: hidden;
            }

            .ml16 .letter {
                display: inline-block;
                line-height: 1em;
                transform: translateY(-100px);
                /* Initial position of the letters */
                opacity: 0;
                /* Start with letters transparent */
            }
        </style>

        <div id="contentheader" class="container mx-auto px-4 py-12">
            <div class="text-center">
                <!-- Large title text -->
                <h1 class="text-5xl font-extrabold text-gray-900 uppercase tracking-tighter mb-4 fade-in">Elevate Your
                    Rank
                </h1>

                <!-- Highlighted title text -->
                <h2 class="ml16 text-4xl font-extrabold uppercase tracking-tighter mb-4 text-[#65b3e5]">Empowerment -
                    Community - Etiquette - Artistry</h2>


                <!-- Paragraph text -->
                <p class="text-lg font-normal text-gray-600 max-w-3xl mx-auto fade-in">
                    VIOR is a thriving community and academy dedicated to elevating the Valorant gaming experience for
                    aspiring VStreamers in Indonesia.
                </p>
            </div>
        </div>
        <script>document.addEventListener('DOMContentLoaded', function () {
                // Wrap every letter in a span
                var textWrapper = document.querySelector('h2.ml16');
                textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

                anime.timeline({ loop: true })
                    .add({
                        targets: 'h2.ml16 .letter',
                        translateY: [-100, 0],
                        easing: "easeOutExpo",
                        duration: 1400,
                        delay: (el, i) => 30 * i,
                        opacity: [0, 1] // Fade in the letters
                    }).add({
                        targets: 'h2.ml16',
                        opacity: 0,
                        duration: 1000,
                        easing: "easeOutExpo",
                        delay: 1000
                    });
            });
        </script>
    </div>


    <!-- Content #2: Colored Background Section with Logo and Text -->
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

    <?php include('templates/footer.php'); ?>