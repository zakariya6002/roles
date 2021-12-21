<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin') }}
        </h2>
    </x-slot>

    <div class="py-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-9">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="md:grid md:grid-cols-1 md:gap-6">
                    <div class="mt-5 md:mt-0 md:col-span-2">
                        <form action="{{url('/addmanager')}}" method="POST">
                            @csrf
                            <div class="shadow sm:rounded-md sm:overflow-hidden">
                                <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                                    <div class="grid grid-cols-3 gap-6">
                                        <div class="col-span-3 sm:col-span-2">
                                            <label for="company-website" class="block text-sm font-medium text-gray-700">
                                                Name
                                            </label>
                                            <div class="mt-1 flex rounded-md shadow-sm">
                                                <input type="text" name="name" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-md sm:text-sm border-gray-300" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid grid-cols-3 gap-6">
                                        <div class="col-span-3 sm:col-span-2">
                                            <label for="company-website" class="block text-sm font-medium text-gray-700">
                                                Email
                                            </label>
                                            <div class="mt-1 flex rounded-md shadow-sm">
                                                <input type="email" name="email" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-md sm:text-sm border-gray-300" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid grid-cols-3 gap-6">
                                        <div class="col-span-3 sm:col-span-2">
                                            <label for="company-website" class="block text-sm font-medium text-gray-700">
                                                Password
                                            </label>
                                            <div class="mt-1 flex rounded-md shadow-sm">
                                                <input type="password" name="password" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-md sm:text-sm border-gray-300" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex justify-center">
                                        <div class="mb-3 xl:w-96">
                                            <select name="role" class="form-select appearance-none block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding bg-no-repeat border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" aria-label="Default select example">
                                              @foreach($roles as $r)
                                            <option value="{{$r->id}}">{{$r->name}}</option>
                                            @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                                    <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                        Save
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>