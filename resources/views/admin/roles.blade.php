<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin') }}
        </h2>
    </x-slot>
    
    <div class="py-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-9">
            <div class="overflow-hidden shadow-l sm:rounded-lg">
                <div class="md:grid md:gap-6">
                <a href="{{ route('roles.create')}}"type="submit" class="inline-flex justify-center w-20 py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            add
                        </a>
                    <div class="mt-5 md:mt-5 md:col-span-1">
                        

                        <!-- This example requires Tailwind CSS v2.0+ -->
                        <div class="flex flex-col">

                            <div class="-my-1 overflow-x-auto sm:-mx-6 lg:-mx-8">
                                <div class="py-1 align-middle inline-block w-full sm:px-6 lg:px-8">
                                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                        <table class="w-full divide-y divide-gray-200">

                                            <thead class="bg-gray-100">
                                                
                                                <tr>
                                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                        Role
                                                    </th>
                                                    <th scope="col" class="relative text-right  py-1">
                                                        <span class="sr-only">Actions</span>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody class="bg-white divide-y divide-gray-200">
                                            @foreach ($roles as $r)
                                                <tr>
                                             
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                        {{$r->name}}
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                        <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                                    </td>
                                                     <td class="text-sm font-medium">
                                                        <a href="#" class="text-indigo-600 hover:text-indigo-900">Delete</a>
                                                    </td>

                                                </tr>
                                            @endforeach
                                                <!-- More people... -->
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