
    <div class="flex items-center justify-between p-4 h-20 md:h-24">
            <a class="h-full object-contain" href="{{ url("/home") }}">
                <img
                class="h-full object-contain"
                src="https://www.maxis-fibreinternet.com.my/wp-content/uploads/2021/10/maxis_logo-1.jpg"
                alt="maxislogo"
            /></a>

            
            <div
                class="text-blue-900 font-extrabold hidden lg:block">
                <a class="border-gray-800 px-2 py-3 hover:text-[#40c706] {{ (request()->is('home')) ? 'text-[#40c706]' : 'nothing' }} " href="{{ url("/home") }}"
                    >HOME</a
                >
                <a
                    class="border-gray-800 px-2 py-3 hover:text-[#40c706] {{ (request()->is('apply')) ? 'text-[#40c706]' : '' }}"
                    href="/apply"
                    >APPLY NOW</a
                >
                <a
                    class="border-gray-800 px-2 py-3 hover:text-[#40c706]"
                    href="{{ url("/home#fibreplan") }}"
                    >MAXIS FIBRE PLANS</a
                >
                <a
                    class="border-gray-800 px-2 py-3 hover:text-[#40c706]"
                    href="{{ url("/home#coverage") }}"
                    >COVERAGE CHECK</a
                >
                <a
                    class="border-gray-800 px-2 py-3 text-white"
                    href="tel:0123367xxxx"
                >
                    <btn>012-3367xxxx</btn>
                </a>

                <a
                    class="border-gray-800 px-2 py-3 text-white"
                    href="tel:0123367xxxx"
                >
                    <btn>TECHNICAL:123</btn>
                </a>
            </div>   
            <div class="lg:hidden">
                    <maxissidemenu></maxissidemenu>
            </div>

        </div>
        
        @if(Route::is('home') )
        
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
        
        @endif

        @if(Route::is('apply') )
        <div class="relative min-h-[10rem] bg-yellow-300 tracking-tighter">
            <img
                class="object-fill w-screen max-h-[20rem]"
                src="https://assignmentwritinghelp-65.webself.net/file/si444887/writing-background-cover-letter-writing-service-background-fi7123716.jpg"
                alt="bannerapply"
            />

        
            <h1 class="absolute top-0 bg-black/25 min-w-full min-h-full flex items-center justify-center text-3xl text-white font-extrabold sm:text-4xl lg:text-6xl">
                    Apply Now
            </h1>
            
        </div>

        @endif
