<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name', 'pss') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 text-gray-800 font-sans">
    <header class="bg-gray-800 shadow-md">
        @if (Route::has('login'))
            <nav class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
                @auth
                    <a href="{{ url('/dashboard') }}" class="text-white hover:text-gray-300 font-semibold">
                        Dashboard
                    </a>
                @else
                    <div class="flex space-x-6">
                        <a href="{{ route('login') }}" class="text-white hover:text-gray-300 font-semibold">
                            Log in
                        </a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="text-white hover:text-gray-300 font-semibold">
                                Register
                            </a>
                        @endif
                    </div>
                @endauth
            </nav>
        @endif
    </header>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-lg sm:rounded-lg">
                <div class="p-6">
                    <h1 class="bg-gray-200 p-6 text-2xl font-bold text-gray-900">Pest Surveillance Program - Data Collection Program</h1>

                    <h2 class="bg-gray-100 p-5 text-xl font-semibold underline">Objectives</h2>
                    <p class="p-5 text-justify leading-relaxed">
                        The system provides understanding of the Plant Protection Service's requirements for
                        creation of new smart phone app for data collection for pest surveillance purpose.

                        The main purpose of the pest surveillance data collection mobile app is to record the
                        density of the targets pests in the selected location throughout the cropping season on a regular basis.

                        As an initial step, proposed mobile app for Pest Surveillance Program launch for seven
                        districts, namely Hambantota, Ampara, Batticaloa, Polonnaruwa, Anuradhapura, Mannar and Kurunegala
                        focusing on six major insect pests of rice.
                    </p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
