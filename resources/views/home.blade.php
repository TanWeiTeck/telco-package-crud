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
    <body class="max-w-screen overflow-y-auto flex justify-center m-auto">
        <div id="app" class="max-w-screen-2xl">
            {{-- header --}}
            @include('partials/header')
            {{-- end header --}}

            {{-- hero --}}
            <div class="relative min-h-[10rem] tracking-tighter z-0">
                <img class="object-cover min-h-[10rem]"
                    src="https://www.maxis-fibreinternet.com.my/wp-content/uploads/2021/10/banner-450-edited-latest.png"
                    alt="bannerfibre"
                />
                <div class="absolute top-4 md:top-10 max-w-xs p-4 origin-top-left sm:scale-125 md:scale-150">
                    <h1 class="text-xl xl:text-3xl font-extrabold">
                        The next-gen Wifi 6 certified router is here
                    </h1>
                    <p class="text-xs">
                        Bring home the greatest home upgrade for you and your family.
                    </p>
                </div>
            </div>
            {{-- end hero --}}

            {{-- services --}}
            {{-- services section 'a' --}}
            <div class="p-3">
                <h1 class="text-blue-900 text-3xl font-extrabold text-center py-4">
                    Register Now with MaxisONE Home Fibre Plans
                </h1>
                {{-- service cards a--}}
                <div class="flex flex-wrap lg:space-x-14 md:space-x-7 justify-center">
                    {{-- service card a1 --}}
                    <div class="py-3 lg:max-w-sm max-w-md flex flex-col space-y-3 items-center">
                        <img
                        class="rounded-xl"
                        src="https://www.maxis-fibreinternet.com.my/wp-content/uploads/2021/11/registration-1024x683.jpg"
                        alt=""
                        />
                        <h1 class="text-blue-900 font-extrabold text-2xl">
                            Registration
                        </h1>
                        <p class="text-center">
                            Fill in the application form so we can check the coverage in
                            your area. Our customer service will give you a call upon
                            registration.
                        </p>
                    </div>
                    {{-- end service card a1 --}}
                    {{-- service card a2 --}}
                    <div class="py-3 lg:max-w-sm max-w-md flex flex-col space-y-3 items-center">
                        <img
                            class="rounded-xl"
                            src="https://www.maxis-fibreinternet.com.my/wp-content/uploads/2021/11/Pick-a-date-pict-1024x683.jpg"
                            alt=""
                        />
                        <h1 class="text-blue-900 font-extrabold text-2xl">
                            Pick a Date
                        </h1>
                        <p class="text-center">
                            Confirm your installation date with us during the call, and
                            we will handle the rest. Just make sure someone who is 18
                            years old or older is home during the appointment.
                        </p>
                    </div>
                    {{-- end service card a2 --}}
                    {{-- service card a3 --}}
                    <div class="py-3 lg:max-w-sm max-w-md flex flex-col space-y-3 items-center">
                        <img
                            class="rounded-xl"
                            src="https://www.maxis-fibreinternet.com.my/wp-content/uploads/2021/11/maxis-installation-and-connection-test-pict-1024x683.jpg"
                            alt=""
                        />
                        <h1 class="text-blue-900 font-extrabold text-2xl text-center">
                            Installation and Connection Test
                        </h1>
                        <p class="text-center">
                            During the installation, Maxpert - our dedicated team of
                            internet experts will help you put together the ultimate
                            home fibre broadband experience.
                        </p>
                    </div>
                    {{-- end service card a3 --}}
                </div>
                {{-- end service cards a --}}
            </div>
            {{-- end services section 'a' --}}

            {{-- services section 'b' --}}
            <div class="p-3 bg-gray-200">
                <h1 class="text-blue-900 text-3xl font-extrabold text-center p-4">
                    Level up at life, work and play with the right fibre plan
                </h1>
                <!-- service cards b -->
                <div
                    class="flex flex-wrap m-auto justify-center lg:space-x-10 sm:space-x-4"
                >
                    <!-- service card b1 -->
                    <div class="py-3 flex flex-col space-y-3 items-center sm:w-44">
                        <img
                            src="https://www.maxis-fibreinternet.com.my/wp-content/uploads/2021/10/Setting_Icon.png"
                            alt=""
                        />
                        <h1 class="text-blue-900 font-extrabold text-2xl text-center">
                            Improved WiFi Coverage
                        </h1>
                        <p class="text-center">
                            Strong WiFi in every room with mesh WiFi.
                        </p>
                    </div>
                    <!-- end service card b1 -->
                    <!-- service card b2 -->
                    <div class="py-3 flex flex-col space-y-3 items-center sm:w-44">
                        <img
                            src="https://www.maxis-fibreinternet.com.my/wp-content/uploads/2021/10/Wifi_Icon.png"
                            alt=""
                        />
                        <h1 class="text-blue-900 font-extrabold text-2xl text-center">
                            Dual-band router
                        </h1>
                        <p class="text-center">
                            2.4Ghz and 5Ghz channels to minimise congestion and signal
                            interference..
                        </p>
                    </div>
                    <!-- end service card b2 -->
                    <!-- service card b3 -->
                    <div class="py-3 flex flex-col space-y-3 items-center sm:w-44">
                        <img
                            src="https://www.maxis-fibreinternet.com.my/wp-content/uploads/2021/10/Speed_Icon.png"
                            alt=""
                        />
                        <h1 class="text-blue-900 font-extrabold text-2xl text-center">
                            Superfast speeds up to 800Mbp
                        </h1>
                        <p class="text-center">
                            Smooth streaming for Ultra HD TV and for using multiple
                            devices at the same time.
                        </p>
                    </div>
                    <!-- end service card b3 -->
                    <!-- service card b4 -->
                    <div class="sm:flex">
                    <div class="py-3 flex flex-col space-y-3 items-center sm:w-44">
                        <img
                            src="https://www.maxis-fibreinternet.com.my/wp-content/uploads/2021/10/Unlimited_data_Icon.png"
                            alt=""
                        />
                        <h1 class="text-blue-900 font-extrabold text-2xl text-center">
                            Unlimited data
                        </h1>
                        <p class="text-center">
                            Surf and stream all day without quota.
                        </p>
                    </div>
                    <!-- end service card b4 -->
                    <!-- service card b5 -->
                    <div class="py-3 flex flex-col space-y-3 items-center sm:w-44">
                        <img
                            src="https://www.maxis-fibreinternet.com.my/wp-content/uploads/2021/10/Home_wifi_Icon.png"
                            alt=""
                        />
                        <h1 class="text-blue-900 font-extrabold text-2xl text-center">
                            Maxperts Installation
                        </h1>
                        <p class="text-center">
                            Professional diagnostics and set-up ensure optimal WiFi
                            experience in every room.
                        </p>
                    </div>
                    </div>
                    <!-- end service card b5 -->
                </div>
            </div>
            {{-- end services section 'b' --}}
            {{-- end services --}}

            {{-- maxis fibre plans --}}
            <h1 id="fibreplan" class="text-blue-900 text-3xl font-extrabold text-center py-4">
                MaxisONE Home Fibre Plans
            </h1>
            <div class="flex max-h-max w-screen overflow-x-auto md:flex-wrap md:justify-center snap-x snap-mandatory">
                @foreach ($TelcoPackage as $package)
                <div class="my-4 mx-3 bg-white border-2 min-w-[20rem] sm:max-w-[20rem] lg:max-w-[24rem] overflow-hidden min-h-[370px] border-blue-800 hover:border-blue-500 rounded-2xl shadow-md hover:shadow-lg hover:shadow-blue-400 duration-500 snap-center">
                    <div class="text-blue-900 p-5 bg-gray-100">
                        <h1 class="text-xl">Maxis Home Fibre</h1>
                        <p class="text-3xl font-extrabold">{{$package['internet_speed']}}</p>
                    </div>
                    <div class="bg-white text-gray-900 px-5 py-3">
                        <h1 class="text-xl font-b">Recommended For</h1>
                        <ul class="">
                            <li class=""><span class="text-blue-800 text-xl font-extrabold">&#9737;</span>  {{$package['description']}}</li>
                        </ul>
                        <p class="text-[0.6rem]">* Existing customer who change rate plan is not eligible for free DECT phone.</p>
                        <hr class="text-blue-800 border-8 my-3">
                        <div class="flex justify-between items-center">
                            <h1><span class="text-xl font-extrabold">RM {{$package['price']}}</span>/month</h1>
                            <a href="{{url('/apply')}}">
                                <button 
                                class="bg-[#40c706] rounded-full px-7 py-2 text-white hover:text-black hover:bg-blue-400 hover:scale-105 duration-300 font-extrabold"
                                >Apply Now</button>
                            </a>
                            
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            {{--end maxis fibre plans --}}

            
            {{-- benefits --}}
            <div class="bg-gray-100">
                <h1 class="p-3 text-blue-900 text-3xl font-extrabold text-center py-4">
                    Better home broadband starts from optimizing the setup for best wifi
                    experience
                </h1>
                <!-- cards -->
                <div
                    class="flex flex-col m-auto justify-center max-w-screen-2xl border"
                >
                    <!-- card 1 -->
                    <div
                        class="p-3 flex flex-col space-y-3 items-center lg:flex-row lg:justify-around"
                    >
                        <img
                            src="https://www.maxis-fibreinternet.com.my/wp-content/uploads/2021/11/MaxisOne-promotion-maxpert.png"
                            alt=""
                            width="180px"
                        />
                        <div class="max-w-[50rem]">
                            <h1
                                class="text-blue-900 font-extrabold text-2xl text-center"
                            >
                                Amazing Internet Speed
                            </h1>
                            <p class="text-center">
                                Maxperts is our dedicated team of internet experts
                                that’ll help you put together the ultimate home fibre
                                broadband experience. It’s not just about putting a
                                router in your house and leaving it there. Expect a
                                total broadband set-up so you get consistently fast
                                Wi-Fi everywhere you need it to be.
                            </p>
                        </div>
                    </div>
                    <!-- end card 1 -->
        
                    <!-- card 2 -->
                    <div
                        class="p-3 flex flex-col space-y-3 items-center lg:flex-row lg:justify-around"
                    >
                        <img
                            src="https://www.maxis-fibreinternet.com.my/wp-content/uploads/2021/11/MaxisOne-promotion-maxpert.png"
                            alt=""
                            width="180px"
                        />
                        <div class="max-w-[50rem]">
                            <h1
                                class="text-blue-900 font-extrabold text-2xl text-center"
                            >
                            Unlimited Data Usage
                            </h1>
                            <p class="text-center">
                                SCAN different rooms and living spaces in your home to detect possible signal interferences and understand your family’s internet device need
                            </p>
                        </div>
                    </div>
                    <!-- end card 2 -->
        
                    <!-- card 3 -->
                    <div
                        class="p-3 flex flex-col space-y-3 items-center lg:flex-row lg:justify-around"
                    >
                        <img
                            src="https://www.maxis-fibreinternet.com.my/wp-content/uploads/2021/11/MaxisOne-promotion-maxpert.png"
                            alt=""
                            width="180px"
                        />
                        <div class="max-w-[50rem]">
                            <h1
                                class="text-blue-900 font-extrabold text-2xl text-center"
                            >
                                Amazing Internet Speed
                            </h1>
                            <p class="text-center">
                                OPTIMISE your WiFi signal by recommending the best router placement and solutions to increase signal strength and coverage throughout the house for consistently fast int
                            </p>
                        </div>
                    </div>
                    <!-- end card 3 -->
        
                    <!-- card 4 -->
                    <div
                        class="p-3 flex flex-col space-y-3 items-center lg:flex-row lg:justify-around"
                    >
                        <img
                            src="https://www.maxis-fibreinternet.com.my/wp-content/uploads/2021/11/MaxisOne-promotion-maxpert.png"
                            alt=""
                            width="180px"
                        />
                        <div class="max-w-[50rem]">
                            <h1
                                class="text-blue-900 font-extrabold text-2xl text-center"
                            >
                                Unlimited Data Usage
                            </h1>
                            <p class="text-center">
                                SOLVE your Internet needs with the necessary cabling and installations. Once it’s done, enjoy a stable high-speed Internet surfing experience on multiple devices, all around your home.
                            </p>
                        </div>
                    </div>
                    <!-- end card 4 -->
        
                </div>
            </div>
            {{-- end benefits --}}
    
            {{-- check coverage form --}}
            <div id="coverage" class=" p-4">
                <h1 class="text-blue-900 text-3xl font-extrabold text-center py-4">
                Check Your Coverage
                </h1>
                <form action="/apply" method="POST" class="flex flex-col justify-center">
                @csrf
                
                <select class="hidden" type="text" name="package">
                    <option value="CheckCoverage">-</option>
                </select>
                <div class="flex sm:space-x-4 flex-col sm:flex-row">
                    <div class="flex flex-col w-full">
                        <label class="text-xl mt-4 text-blue-900 font-extrabold" >Name</label>
                        <input class="px-3 py-2 border rounded-lg" type="text" name='name'placeholder="Your name" required>
                        <label class="text-xl mt-4 text-blue-900 font-extrabold">Contact Number</label>
                        <input class="px-3 py-2 border rounded-lg" type="text" name='contact'placeholder="Your contact number" required>
                    </div>
                    <div class="flex flex-col w-full">
                        <label class="text-xl mt-4 text-blue-900 font-extrabold">Email</label>
                        <input class="px-3 py-2 border rounded-lg" type="email" name='email' placeholder="Your email" required>
                        <label class="text-xl mt-4 text-blue-900 font-extrabold">Location</label>
                        <input class="px-3 py-2 border rounded-lg" type="text" name='location'placeholder="Location" required>
                    </div>
                </div>
                <div class="flex flex-col">
                    <label class="text-xl mt-4 text-blue-900 font-extrabold">Message</label>
                    <textarea class="px-3 py-2 h-[150px] w-full border rounded-lg" name='message' placeholder="message">Message here..</textarea>
                </div>
                <button
                class="bg-[#40c706] rounded-md mt-3 px-7 py-2 text-white hover:text-black hover:bg-blue-400 hover:scale-95 duration-300 font-extrabold"
                >SUMMIT</button>
                </form>
            </div>
            {{-- End Check Coverage Form --}}

            <div class="fixed bottom-0 right-0 m-2 sm:m-5">
                <a href="https://wa.me/+60165216995">
                    <img src="https://img.icons8.com/ios/50/26e07f/whatsapp--v1.png"/>
                </a>
            </div>

            @include('partials/footer')
            </div>
        </div>
                
        <script src="{{ mix('/js/app.js') }}"></script>
    </body>
</html>
