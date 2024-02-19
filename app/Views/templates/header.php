<!-- application/views/templates/header.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vernalis Orion Community</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/alpinejs" defer></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
</head>

<body class="bg-gray-100">


    <!-- Navbar -->
    <nav class="bg-white p-2 shadow-md sticky top-0 z-50">
        <div class="container mx-auto flex justify-center items-center">
            <div class="flex flex-col md:flex-row items-center justify-between w-full">
                <!-- Increased size of the logo -->
                <img src="<?= base_url('images/vior.png'); ?>" alt="vior Logo" class="mb-4 md:mb-0 h-16"
                    style="vertical-align: middle; width: 75px; height: auto">
                <div class="flex-grow">
                    <div class="flex justify-center space-x-4">
                        <!-- Add scale and shadow on hover for menu items -->
                        <a href="/"
                            class="text-[#65b3e5]  font-bold px-3 py-2 rounded text-xl transition-transform duration-200 ease-in-out hover:scale-110 hover:shadow-md">Home</a>
                        <a href="/academy"
                            class="text-[#65b3e5] font-bold px-3 py-2 rounded text-xl transition-transform duration-200 ease-in-out hover:scale-110 hover:shadow-md">Academy</a>
                        <a href="/events"
                            class="text-[#65b3e5] font-bold px-3 py-2 rounded text-xl transition-transform duration-200 ease-in-out hover:scale-110 hover:shadow-md">Events</a>

                        <div class="relative" x-data="{ open: false }">
                            <!-- Trigger for dropdown -->
                            <a href="#"
                                class="text-[#65b3e5] font-bold px-3 py-2 rounded text-xl transition-transform duration-200 ease-in-out hover:scale-110 flex items-center"
                                @mouseover="open = true" @mouseleave="open = false">
                                About
                                <!-- Dropdown Icon -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>
                            <!-- Dropdown Menu -->
                            <div x-show="open"
                                class="absolute left-0 mt-1 bg-white shadow-lg rounded-md z-50 overflow-hidden border border-gray-200"
                                @mouseover="open = true" @mouseleave="open = false">
                                <a href="<?= site_url('/about-vior'); ?>"
                                    class="block px-4 py-2 text-sm text-[#65b3e5] hover:bg-blue-500 hover:text-white transition-colors duration-150">About
                                    VIOR</a>
                                <a href="/management"
                                    class="block px-4 py-2 text-sm text-[#65b3e5] hover:bg-blue-500 hover:text-white transition-colors duration-150">Management
                                </a>
                            </div>

                        </div>


                        <div class="relative" x-data="{ open: false }">
                            <!-- Trigger for dropdown -->
                            <a href="#"
                                class="text-[#65b3e5] font-bold px-3 py-2 rounded text-xl transition-transform duration-200 ease-in-out hover:scale-110 flex items-center"
                                @mouseover="open = true" @mouseleave="open = false">
                                Teams
                                <!-- Dropdown Icon -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>
                            <!-- Dropdown Menu -->
                            <div x-show="open"
                                class="absolute left-0 mt-1 bg-white shadow-lg rounded-md z-50 overflow-hidden border border-gray-200"
                                @mouseover="open = true" @mouseleave="open = false" style="min-width: 120px;">
                                <!-- Adjust the minimum width as necessary -->
                                <a href="<?= site_url('/teams#omnia'); ?>"
                                    class="block px-4 py-2 text-sm text-[#65b3e5] hover:bg-blue-500 hover:text-white transition-colors duration-150">VIOR
                                    Omnia</a>
                                <a href="/teams#geki"
                                    class="block px-4 py-2 text-sm text-[#65b3e5] hover:bg-blue-500 hover:text-white transition-colors duration-150">VIOR
                                    X GEKI
                                </a>
                                <a href="/teams#vernalis"
                                    class="block px-4 py-2 text-sm text-[#65b3e5] hover:bg-blue-500 hover:text-white transition-colors duration-150">VIOR
                                    Vernalis
                                </a>
                            </div>

                        </div>


                    </div>
                </div>
            </div>
        </div>
    </nav>