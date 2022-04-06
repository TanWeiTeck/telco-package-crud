<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Package List') }}
        </h2>
    </x-slot>
    

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">
                <div class="flex flex-col">
                    <div class="flex justify-between">
                        <div class="flex-auto text-2xl mb-4 ">Package List</div>
                        <a class="hover:text-blue-700" href="{{url('/addpackage')}}">+ Add New Package</a>
                        
                    </div>

                    <div class="flex flex-col">
                        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                            <div class="overflow-hidden">
                              <table class="min-w-full">
                                <thead class="border-b">
                                  <tr>
                                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                      Package ID
                                    </th>
                                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                      Service Provider
                                    </th>
                                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                      Speed
                                    </th>
                                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                      Price(RM)
                                    </th>
                                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                      Discount(RM)
                                    </th>
                                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                      Discounted Price(RM)
                                    </th>
                                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                      Description
                                    </th>
                                  </tr>
                                </thead>
                                <tbody>
                                    @foreach ($TelcoPackage as $package)
                                  <tr class="border-b">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{$package['package_id']}}</td>
                                    <td class="text-sm text-gray-900 font-light px-6 py-2 whitespace-nowrap">
                                        {{$package['service_provider']}}
                                    </td>
                                    <td class="text-sm text-gray-900 font-light px-6 py-2 whitespace-nowrap">
                                        {{$package['internet_speed']}}
                                    </td>
                                    <td class="text-sm text-gray-900 font-light px-6 py-2 whitespace-nowrap">
                                        {{$package['price']}}
                                    </td>
                                    <td class="text-sm text-gray-900 font-light px-6 py-2 whitespace-nowrap">
                                        {{$package['discount']}}
                                    </td>
                                    <td class="text-sm text-gray-900 font-light px-6 py-2 whitespace-nowrap">
                                        {{$package['discounted_price']}}
                                    </td>
                                    <td class="text-sm text-gray-900 font-light px-6 py-2 whitespace-nowrap">
                                        {{$package['description']}}
                                    </td>
                                    <td class="text-sm text-gray-900 font-light px-6 pr-1 py-2 ">
                                        <a href="{{"edit/".$package['id']}}" name="edit">
                                            <button  class="bg-green-500 hover:bg-green-800 hover:text-gray-100 py-1 px-4 rounded-lg font-bold ">Edit</button>
                                        </a>
                                    </td>
                                    <td class="text-sm text-gray-900 font-light px-1 py-4 whitespace-nowrap">
                                        <a href="{{"deletepackage/".$package['id']}}" name="delete">

                                            <button class="bg-red-400 hover:bg-red-800 hover:text-gray-100 py-1 px-3 rounded-lg font-bold">Delete</button>
                                        </a>
                                    </td>
                                  </tr>
                                  @endforeach
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
                </div>
                </div>
                </div>
                </div>
                </div>


</x-app-layout>
