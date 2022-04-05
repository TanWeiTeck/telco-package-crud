<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body>
        
    <div class="flex items-center justify-between p-4 h-20 md:h-24">
        <img
            class="h-full bg-yellow-400 object-contain"
            src="https://www.maxis-fibreinternet.com.my/wp-content/uploads/2021/10/maxis_logo-1.jpg"
            alt=""
        />

        <div class="">
            @if (Route::has('login'))
            <div class="text-blue-900 font-extrabold">
                @auth
                <a href="{{ url('/packagelist') }}" class="border-gray-800 px-2 py-3 hover:text-[#40c706]">Dashboard</a>
                @else
                <a href="{{ route('login') }}" class="border-gray-800 px-2 py-3 hover:text-[#40c706]">Log in</a>
                
                @if (Route::has('register'))
                <a href="{{ route('register') }}" class="border-gray-800 px-2 py-3 hover:text-[#40c706]">Register</a>
                @endif
                @endauth
            </div>
            @endif
        </div>
    </div>
        <div class="flex flex-col h-screen items-center mt-52">
            <div>
                <h1 class="text-7xl text-[#40c706]">Welcome to Admin Dashboard</h1>
            </div>
            
        </div>
    </body>
</html>
