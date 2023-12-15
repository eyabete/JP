<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JourniPlan - Your Project Name</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
            color: #333;
        }

        header {
            background-color: #6a5acd;
            /* Lavender */
            padding: 20px;
            text-align: center;
            color: #fff;
            /* White */
        }

        section {
            text-align: center;
            padding: 180px 50px;
            background: url('https://cdn.notonthehighstreet.com/fs/bb/2a/b6ee-ba2d-47f7-a9fd-9e3afc2b9239/original_personalised-secret-message-notebook.jpg') center/cover;
        }

        h1 {
            font-size: 50px;
            /* Change the font size as needed */
            font-family: 'Roboto', sans-serif;
        }

        p {
            color: #333;
        }

        footer {
            background-color: #f9fa88;
            /* Yellow */
            padding: 10px;
            text-align: center;
        }

        /* Style for the buttons */
        .auth-button {
            display: inline-block;
            padding: 10px 20px;
            margin: 10px;
            text-decoration: none;
            font-size: 16px;
            font-weight: bold;
            color: black;
            background-color: #f9fa88;
            /* light yellow */
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        /* Style for the login button */
        .login-button {
            background-color: #f9fa88;
            /* Lavender */
        }
    </style>
</head>

<body>
    <!-- 
    <header>
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
            <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                @auth
                <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                @else
                <a href="{{ route('login') }}" class="auth-button login-button">Log in</a>

                @if (Route::has('register'))
                <a href="{{ route('register') }}" class="auth-button">Register</a>
                @endif
                @endauth
            </div>
            @endif

    </header> -->

    <section>

        <h1>Welcome to JourniPlan</h1>
        <h2>Your All-In-One Web-based Planner</h2>

        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
            <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                @auth
                <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                @else
                <a href="{{ route('login') }}" class="auth-button login-button">Log in</a>

                @if (Route::has('register'))
                <a href="{{ route('register') }}" class="auth-button">Register</a>
                @endif
                @endauth
            </div>
            @endif
    </section>

    <footer>
        &copy; 2023 JourniPlan. All rights reserved.
    </footer>

</body>

</html>