<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Application List') }}
        </h2>
    </x-slot>
    

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">
                <div class="flex flex-col">
                    <div class="flex justify-between">
                        <div class="flex-auto text-2xl mb-4 ">Application List</div>
                        <a class="hover:text-blue-700" href="{{url('/addapplication')}}">+ Add New Application</a>
                        
                    </div>

                    <div class="flex flex-col">
                        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                            <div class="overflow-hidden">
                              <table class="min-w-full">
                                <thead class="border-b">
                                  <tr>
                                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                      Created/Updated At
                                    </th>
                                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                      Name
                                    </th>
                                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                      Email
                                    </th>
                                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                      Contact
                                    </th>
                                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                      Location
                                    </th>
                                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                      Package ID
                                    </th>
                                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                      Message
                                    </th>
                                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                      Remarks
                                    </th>
                                  </tr>
                                </thead>
                                <tbody>
                                    @foreach ($Application->reverse() as $application)
                                  <tr class="border-b">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{$application['updated_at']}}</td>
                                    <td class="text-sm text-gray-900 font-light px-6 py-2 whitespace-nowrap">
                                        {{$application['name']}}
                                    </td>
                                    <td class="text-sm text-gray-900 font-light px-6 py-2 whitespace-nowrap">
                                        {{$application['email']}}
                                    </td>
                                    <td class="text-sm text-gray-900 font-light px-6 py-2 whitespace-nowrap">
                                        {{$application['contact']}}
                                    </td>
                                    <td class="text-sm text-gray-900 font-light px-6 py-2 whitespace-nowrap">
                                        {{$application['location']}}
                                    </td>
                                    <td class="text-sm text-gray-900 font-light px-6 py-2 whitespace-nowrap">
                                        {{$application['package_id']}}
                                    </td>
                                    <td class="text-sm text-gray-900 font-light px-6 py-2 min-w-[20rem] h-10 overflow-y-hidden break-words">
                                        {{$application['message']}}
                                    </td>
                                    <td class="text-sm text-gray-900 font-light px-6 py-2 whitespace-nowrap">
                                      {{$application['remark']}}
                                    </td>
                                    <td class="text-sm text-gray-900 font-light px-6 pr-1 py-2 ">
                                        <a href="{{"addremark/".$application['id']}}" name="edit">
                                            <button  class="bg-green-500 hover:bg-green-800 hover:text-gray-100 py-1 px-4 rounded-lg font-bold ">Add Remarks</button>
                                        </a>
                                    </td>
                                    <td class="text-sm text-gray-900 font-light px-1 py-4 whitespace-nowrap">
                                        <a href="{{"deleteapplication/".$application['id']}}" name="delete">

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
