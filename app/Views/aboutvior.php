<?php include('templates/header.php'); ?>

<div class="flex flex-col min-h-screen">

    <!-- Content #1 Section -->
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
            <h1 class="text-5xl font-extrabold text-gray-900 uppercase tracking-tighter mb-4 fade-in">Elevate Your Rank
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


    <!-- Content #2: Our History with specified background color -->
    <div class="py-12" style="background-color: #373f44;">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <!-- History Title -->
            <div class="text-center mb-8">
                <h2 class="text-3xl md:text-4xl font-bold text-[#FDC855] mb-4">Our History</h2>
            </div>


            <!-- History Image and Text -->
            <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-12">
                <div class="flex flex-col lg:flex-row justify-between gap-8">
                    <!-- Image Container -->
                    <div class="lg:flex-initial lg:w-3/5">
                        <img src="<?= base_url('images/methoxic.png'); ?>" alt="Our Team"
                            class="w-full h-auto object-cover rounded-lg shadow-lg">
                    </div>
                    <!-- Text Container -->
                    <div class="lg:flex-initial lg:w-2/5 text-lg md:text-xl text-white p-4">
                        <p>
                            In 2021, HaruMiz embarked on an ambitious venture by launching a Valorant coaching session
                            by
                            the
                            support of his overseas friends. As time
                            progressed, HaruMiz sought to demonstrate his expertise and skills. In 2022, together with
                            his
                            newly
                            made friends,
                            he participated in a Vtuber Tournament under the team name 'Methoxic.' Their dedication and
                            talent shone
                            through as they emerged as champions of the tournament.
                        </p>
                        <p class="mt-4">
                            Regrettably, Team Methoxic disbanded as each member pursued their individual life goals.
                            However, this was not the end for HaruMiz. After a year of proving his mettle and coaching
                            over
                            70 students, HaruMiz, alongside his newly formed network of friends and former students,
                            established a community/academy.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <?php include('templates/footer.php'); ?>