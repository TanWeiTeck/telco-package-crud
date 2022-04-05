<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-lg text-gray-800 leading-tight">
            {{ __('Add New Package') }}
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">
        
        <h1 class="text-blue-900 text-3xl font-extrabold text-center py-2">
            Add New Package
        </h1>

            

{{-- Apply Form --}}
        
            <form action="/addpackage" method="POST" class="flex flex-col justify-center p-4">
                @csrf
                
                <div class="flex space-x-4">
                    <div class="flex flex-col w-full">
                    <div class="flex md:flex-row flex-col w-full justify-between">
                        <div class="flex flex-col w-full px-4">
                            <label class="text-xl mt-2 md:mt-3 text-blue-900 font-extrabold">Service Provider</label>
                            <select class="px-3 py-2 border rounded-lg" type="text" value="{{old('service_provider')}}" name="service_provider">
                                <option value="maxis">Maxis</option>
                                <option value="unifi">Unifi</option>
                                <option value="time">Time</option>
                            </select>
                        </div>
                        <div class="flex flex-col w-full px-4">
                            <label class="text-xl mt-2 md:mt-3 text-blue-900 font-extrabold">Package ID</label>
                            <input class="mb-2 px-3 py-2 border rounded-lg" type="text" name='package_id' value="{{old('package_id')}}" placeholder="eg:(mx300149)">
                        </div>
                    </div>

                    <div class="flex md:flex-row flex-col w-full justify-between">
                        <div class="flex flex-col w-full px-4">
                            <label class="text-xl mt-2 md:mt-3 text-blue-900 font-extrabold">Internet Speed</label>
                            <input class="mb-2 px-3 py-2 border rounded-lg" type="text" name='internet_speed' value="{{ old('internet_speed')}}" placeholder="internet speed">
                            
                        </div>
                        <div class="flex flex-col w-full px-4">
                            <label class="text-xl mt-2 md:mt-3 text-blue-900 font-extrabold">Price (RM)</label>
                            <input class="mb-2 px-3 py-2 border rounded-lg" type="text" name='price' value="{{old('price')}}" placeholder="price">
                        </div>
                    </div>


                    <div class="flex md:flex-row flex-col w-full justify-between">
                        <div class="flex flex-col w-full px-4">
                            <label class="text-xl mt-2 md:mt-3 text-blue-900 font-extrabold">Discount (%)</label>
                        <input class="mb-2 px-3 py-2 border rounded-lg" type="text" name='discount(%)' value="{{old('discount(%)')}}" placeholder="discount(%)">
                        
                        </div>
                        <div class="flex flex-col w-full px-4">
                            <label class="text-xl mt-2 md:mt-3 text-blue-900 font-extrabold">Discounted Price (RM)</label>
                        <input class="mb-2 px-3 py-2 border rounded-lg" type="text" name='discounted_price' value="{{old('discounted_price')}}" placeholder="discounted price">
                        </div>
                    </div>
                        <div class="flex flex-col w-full px-4">
                            <label class="text-xl mt-2 md:mt-3 text-blue-900 font-extrabold">Description</label>
                            <input class="mb-2 px-3 py-2 border rounded-lg" type="text" name='description' value="{{old('description')}}" placeholder="description">
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
                
        </div>
        </div>
        </div>

</x-app-layout>
