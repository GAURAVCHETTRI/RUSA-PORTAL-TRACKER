<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rusa Progress Tracker</title>
    <!-- Include Flowbite CSS -->
    <link href="https://cdn.jsdelivr.net/npm/flowbite/css/flowbite.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/flowbite/css/flowbite.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Custom Styles */
        /* Navbar */
        .navbar {
            background-color: #174105;
        }

        /* Footer */
        .footer {
            background-color: #054303;
            color: #cbd5e0;
        }

        /* Hero Section */
        .hero-section {
            background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('https://source.unsplash.com/random');
            background-size: cover;
            background-position: center;
            color: #fff;
            padding-top: 100px;
            padding-bottom: 100px;
        }

        /* Feature Section */
        .feature-section {
            padding-top: 50px;
            padding-bottom: 50px;
        }

        /* Button */
        .btn-primary {
            background-color: #4a90e2;
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #357bd8;
        }
    </style>
</head>
 
<body class="font-sans antialiased bg-gray-100">
    <!-- Navbar -->
    

    <nav class="bg-white dark:bg-gray-900 fixed w-full z-20 top-0 start-0 border-b border-gray-200 dark:border-gray-600">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
    <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
        <img src="https://upload.wikimedia.org/wikipedia/commons/9/9a/Emblem_of_India_%28Gold%29.svg" class="h-8" alt="Rusa Logo">
        <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Rusa Progress Tracker</span>
    </a>
    <!-- <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
        <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Admin Login</button>
        <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
            </svg>
        </button>
    </div> -->
    <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
    <a href="http://127.0.0.1:8000/admin/login" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Admin Login</a>
    <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
        </svg>
    </button>
    </div>

    <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
        <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
        <li>
            <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">About</a>
        </li>
        <li>
            <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Services</a>
        </li>
        <li>
            <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
        </li>
        </ul>
    </div>
    </div>
    </nav>

    

    <!-- Hero Section -->   
    <section class="bg-center bg-no-repeat bg-[url('https://flowbite.s3.amazonaws.com/docs/jumbotron/conference.jpg')] bg-gray-700 bg-blend-multiply">
        <div class="px-4 mx-auto max-w-screen-xl text-center py-24 lg:py-56">
            <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl">Welcome to Rusa Progress Tracker</h1>
            <p class="mb-8 text-lg font-normal text-gray-300 lg:text-xl sm:px-16 lg:px-48"><i>This project aims to create an online portal for monitoring the physical progress of infrastructure projects at Model Degree Colleges (MDCs), Professional Colleges, and Girls Hostels funded by the Rashtriya Uchchatar Shiksha Abhiyan (RUSA) initiative.</i></p>
            <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0">
                <a href="#" class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                    Get started
                    <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                </a>
                <a href="#" class="inline-flex justify-center hover:text-gray-900 items-center py-3 px-5 sm:ms-4 text-base font-medium text-center text-white rounded-lg border border-white hover:bg-gray-100 focus:ring-4 focus:ring-gray-400">
                    Learn more
                </a>  
            </div>
        </div>
    </section>


    <!-- second hero section -->
    <section class="hero-section">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Box 1: MDC -->
                <div class="bg-blue-500 bg-opacity-75 p-8 rounded-lg text-center">
                    <h2 class="text-2xl font-bold mb-4">MDC</h2>
                    <hr>
                    <p class="text-lg">Quality of Work</p>
                    <p class="text-lg">Physical Progress</p>
                    <br>
                    <div class="text-center">
                     <a href="#" class="btn-primary inline-block">Click Here</a>
                    </div>
                </div>
                <!-- Box 2: Proff Colleges -->
                <div class="bg-green-500 bg-opacity-75 p-8 rounded-lg text-center">
                    <h2 class="text-2xl font-bold mb-4">Proffessional Colleges</h2>
                    <!-- <p class="text-lg">Professional Colleges</p> -->
                    <hr>
                    <p class="text-lg">Quality of Work</p>
                    <p class="text-lg">Physical Progress</p>
                    <br>
                    <div class="text-center">
                     <a href="#" class="btn-primary inline-block">Click Here</a>
                    </div>
                </div>
                <!-- Box 3: Girls Hostel -->
                <div class="bg-purple-500 bg-opacity-75 p-8 rounded-lg text-center">
                    <h2 class="text-2xl font-bold mb-4">Girls Hostel</h2>
                    <hr>
                    <p class="text-lg">Quality of Work</p>
                    <p class="text-lg">Physical Progress</p>
                    <br>
                    <div class="text-center">
                     <a href="#" class="btn-primary inline-block">Click Here</a>
                    </div>
                </div>
            </div>
            <!-- Feature Line -->
            <div class="my-8 border-b border-gray-200"></div>
            <h2 class="text-3xl font-bold text-center text-white">Our Features</h2>
            <p class="text-lg text-center text-white mb-8">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis auctor mauris a diam volutpat, ut pharetra enim ultrices.</p>
            <!-- Click Here Button -->
            <div class="text-center">
                <a href="#" class="btn-primary inline-block">Click Here</a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer py-8">
        <div class="container mx-auto px-4 flex justify-between items-center">
            <div>
                <p class="text-lg">Rusa Progress Tracker</p>
                <p class="text-sm">&copy; 2024 All rights reserved.</p>
            </div>
            <div>
                <!-- Logo -->
                <img src="logo.png" alt="Logo" class="h-10">
            </div>
        </div>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>

</html>
