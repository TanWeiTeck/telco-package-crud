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
    <body class="max-w-full overflow-auto flex justify-center m-auto">
        <div id="app" class="max-w-screen-2xl">
            {{-- success submitted message --}}
            @if(Session::has('success'))
                <div class="alert alert-success text-center">
                {{Session::get('success')}}
                </div>
            @endif 
            {{-- success submitted message --}}
            
            @include('partials/header')
            
            

{{-- Apply Form --}}
        
            <form action="/apply" method="POST" class="flex flex-col justify-center p-4">
                @csrf
                
                <div class="flex space-x-4">
                    <div class="flex flex-col w-full">
                        <label class="text-xl mt-4 text-blue-900 font-extrabold">MaxisONE Home Fibre Package (required)*</label>
                        <select class="px-3 py-2 border rounded-lg" type="text" name="package_id">
                            @foreach ($TelcoPackage as $package)
                                <option value="{{$package['package_id']}}">Maxis Home Fibre {{$package['internet_speed']}} - RM{{$package['price']}}</option>
                            @endforeach
                        {{-- <option value="--">--</option>
                        <option value="mx030089">Maxis Home Fibre 30 Mbps - RM89</option>
                        <option value="mx100129">Maxis Home Fibre 100 Mbps - RM129</option>
                        <option value="mx300149">Maxis Home Fibre 300 Mbps - RM149</option>
                        <option value="mx500219">Maxis Home Fibre 500 Mbps - RM219</option>
                        <option value="mx800299">Maxis Home Fibre 800 Mbps - RM299</option> --}}
                        </select>
                        <label class="text-xl mt-4 text-blue-900 font-extrabold">Contact Details (required)*</label>

                        <input class="mb-2 px-3 py-2 border rounded-lg" type="text" name='name' placeholder="Your Name">
                        <input class="mb-2 px-3 py-2 border rounded-lg" type="email" name='email' placeholder="Your Email">
                        <input class="mb-2 px-3 py-2 border rounded-lg" type="text" name='location' placeholder="Location">
                        <input class="mb-2 px-3 py-2 border rounded-lg" type="text" name='contact' placeholder="Contact Number">
                    </div>
                </div>
                {{-- error message --}}
                @if ($errors->any())
                <div class="alert alert-danger text-sm text-red-600">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                {{-- end error message --}}
                <div class="flex flex-col">
                    <label class="text-xl mt-4 text-blue-900 font-extrabold">Message (optional)</label>
                    <textarea class="px-3 py-2 h-[150px] w-full border rounded-lg " name="message"></textarea>
                </div>

                <button
                class="bg-[#40c706] rounded-md mt-3 px-7 py-2 text-white hover:text-black hover:bg-blue-400 hover:scale-95 duration-300 font-extrabold"
                >SUMMIT</button>
            </form>
            @include('partials/footer')
        </div>
                
        <script src="{{ mix('/js/app.js') }}"></script>
    </body>
</html>
