@php
    $faker = \Faker\Factory::create();
@endphp

<x-layout>

    <x-slot:title>
        Add | Contact
    </x-slot:title>

    <x-slot:MainContent>
        {{-- <div class="">
            <h1 class="text-4xl font-bold mb-4">Add Contact</h1>
            <p class="text-lg">This is a simple add contact layout using Blade components.</p>
        </div> --}}

        <form action="/addcontact" method="POST">
            @csrf
            <div class="space-y-12">

                <div class="border-b border-gray-900/10 pb-12">
                    <h1 class="font-semibold text-gray-900 text-lg">Personal Information</h1>
                    <p class="mt-1 text-sm/6 text-gray-600">Use a permanent address where you can receive mail.</p>

                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <div class="sm:col-span-2">
                            <label for="first_name" class="block text-sm/6 font-medium text-gray-900">First name</label>
                            <div class="mt-2">
                                <input type="text" name="first_name" id="first_name" autocomplete="given-name" value="Nipanha"
                                    class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                            </div>
                        </div>

                        <div class="sm:col-span-2">
                            <label for="last_name" class="block text-sm/6 font-medium text-gray-900">Last name</label>
                            <div class="mt-2">
                                <input type="text" name="last_name" id="last_name" autocomplete="family-name" value="Sameth"
                                    class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                            </div>
                        </div>

                        <div class="sm:col-span-2 sm:col-start-1">
                            <label for="department_name" class="block text-sm/6 font-medium text-gray-900">Department</label>
                            <div class="mt-2">
                                <input type="text" name="department_name" id="department_name" autocomplete="address-level2" value="IT"
                                    class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                            </div>
                        </div>

                        <div class="sm:col-span-2">
                            <label for="position_name" class="block text-sm/6 font-medium text-gray-900">Position</label>
                            <div class="mt-2">
                                <input type="text" name="position_name" id="position_name" autocomplete="address-level1" value="Web Developer"
                                    class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                            </div>
                        </div>

                        <div class="sm:col-span-4">
                            <label for="email" class="block text-sm/6 font-medium text-gray-900">Email address</label>
                            <div class="mt-2">
                                <input id="email" name="email" type="email" autocomplete="email" value={{ $faker->unique()->safeEmail }}
                                    class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                            </div>
                        </div>

                        <div class="sm:col-span-2 sm:col-start-1">
                            <label for="phone_number" class="block text-sm/6 font-medium text-gray-900">Phone Number</label>
                            <div class="mt-2">
                                <input type="text" name="phone_number" id="phone_number" autocomplete="address-level1" value="012-345-678"
                                    class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                            </div>
                        </div>

                        <div class="sm:col-span-2">
                            <label for="hired_date" class="block text-sm/6 font-medium text-gray-900">Hired Date</label>
                            <div class="mt-2">
                                <input type="text" name="hired_date" id="hired_date" autocomplete="address-level1" value="2025-01-01"
                                    class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                            </div>
                        </div>

                    </div>
                </div>

            </div>

            <div class="mt-6 flex items-center justify-end gap-x-6">
                <button type="button" class="text-sm/6 font-semibold text-gray-900">Cancel</button>
                <button type="submit"
                    class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
            </div>
        </form>


    </x-slot:MainContent>
</x-layout>