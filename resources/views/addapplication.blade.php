<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-lg text-gray-800 leading-tight">
            {{ __('Add New Application') }}
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">
        
        
        <h1 class="text-blue-900 text-3xl font-extrabold text-center py-2">
            Add New Application
        </h1>

            

{{-- Apply Form --}}
        
            <form action="/addapplication" method="POST" class="flex flex-col justify-center p-4">
                @csrf


                <div class="flex space-x-4">
                    <div class="flex flex-col w-full">
                    <div class="flex md:flex-row flex-col w-full justify-between">
                        <div class="flex flex-col w-full px-4">
                            <label class="text-xl mt-2 md:mt-3 text-blue-900 font-extrabold">Name</label>
                            <input class="mb-2 px-3 py-2 border rounded-lg" type="text" name='name' placeholder="name" value="{{old('name')}}">

                        </div>
                        <div class="flex flex-col w-full px-4">
                            <label class="text-xl mt-2 md:mt-3 text-blue-900 font-extrabold">Email</label>
                            <input class="mb-2 px-3 py-2 border rounded-lg" type="text" name='email' placeholder="email" value="{{old('email')}}">

                        </div>
                    </div>

                    <div class="flex md:flex-row flex-col w-full justify-between">
                        <div class="flex flex-col w-full px-4">
                            <label class="text-xl mt-2 md:mt-3 text-blue-900 font-extrabold">Location</label>
                            <input class="mb-2 px-3 py-2 border rounded-lg" type="text" name='location' placeholder="location" value="{{old('location')}}">
                            
                        </div>
                        <div class="flex flex-col w-full px-4">
                            <label class="text-xl mt-2 md:mt-3 text-blue-900 font-extrabold">Contact</label>
                            <input class="mb-2 px-3 py-2 border rounded-lg" type="text" name='contact' placeholder="contact" value="{{old('contact')}}">
                        </div>
                    </div>


                    <div class="flex md:flex-row flex-col w-full justify-between">
                        <div class="flex flex-col w-full px-4">
                            <label class="text-xl mt-2 md:mt-3 text-blue-900 font-extrabold">Package_id</label>
                        <input class="mb-2 px-3 py-2 border rounded-lg" type="text" name='package_id' placeholder="package_id" value="{{old('package_id')}}">
                        
                        </div>
                        <div class="flex flex-col w-full px-4">
                            <label class="text-xl mt-2 md:mt-3 text-blue-900 font-extrabold">Message</label>
                        <input class="mb-2 px-3 py-2 border rounded-lg" type="text" name='message' placeholder="message" value="{{old('message')}}">
                        </div>
                    </div>
                        <div class="flex flex-col w-full px-4">
                            <label class="text-xl mt-2 md:mt-3 text-blue-900 font-extrabold">Remark</label>
                            <input class="mb-2 px-3 py-2 border rounded-lg" type="text" name='remark' placeholder="remark" value="{{old('remark')}}">
                        </div>
                    </div>
                </div>
                {{-- error message --}}
                <div class="px-4 flex flex-col items-end justify-end">
                    <div class="w-full">
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                    </div>
                {{-- end error message --}}

                    <button
                        class="bg-[#40c706] rounded-md mt-3 px-7 py-2 text-white hover:text-black hover:bg-blue-400 hover:scale-95 duration-300 font-extrabold"
                        >ADD
                    </button>
                </div>
            </form>
        </div>
                
        <script src="{{ mix('/js/app.js') }}"></script>
        </div>
        </div>
        </div>
</x-app-slot>
