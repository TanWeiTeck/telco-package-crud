
    <div class="flex items-center justify-between p-4 h-20 md:h-24">
            <img
                class="h-full bg-yellow-400 object-contain"
                src="https://www.maxis-fibreinternet.com.my/wp-content/uploads/2021/10/maxis_logo-1.jpg"
                alt="maxislogo"
            />
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


    
