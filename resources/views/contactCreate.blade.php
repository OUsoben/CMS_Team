<x-layout>

    <x-slot:title>
        Add | Contact
    </x-slot:title>

    <x-slot:MainContent>

        <form action="/addcontact" method="POST" id="mainForm">
            @csrf

            <div class="border-b border-gray-900/10 pb-12">
                <h1 class="font-semibold text-gray-900 text-lg">Personal Information</h1>
                <p class="mt-1 text-sm/6 text-gray-600">Use a permanent address where you can receive mail.</p>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-2">
                        <label for="first_name" class="block text-sm/6 font-medium text-gray-900">First name</label>
                        <div class="mt-2">
                            <input type="text" name="first_name" id="first_name" autocomplete="given-name"
                                alue="Nipanha"
                                class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6 drop-shadow-lg">
                        </div>
                    </div>

                    <div class="sm:col-span-2">
                        <label for="last_name" class="block text-sm/6 font-medium text-gray-900">Last name</label>
                        <div class="mt-2">
                            <input type="text" name="last_name" id="last_name" autocomplete="family-name" alue="Sameth"
                                class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6 drop-shadow-lg">
                        </div>
                    </div>

                    <div class="sm:col-span-2">
                        <label for="gender" class="block text-sm/6 font-medium text-gray-900">Select Gender</label>
                        <div class="mt-2 grid grid-cols-1 drop-shadow-lg">
                            <select id="gender" name="gender" autocomplete="gender-name"
                                class="col-start-1 row-start-1 w-full appearance-none rounded-md bg-white py-1.5 pr-8 pl-3 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                                <option value="m">Male</option>
                                <option value="f">Female</option>
                                <option value="o">Other</option>
                            </select>
                            <svg class="pointer-events-none col-start-1 row-start-1 mr-2 size-5 self-center justify-self-end text-gray-500 sm:size-4"
                                viewBox="0 0 16 16" fill="currentColor" aria-hidden="true" data-slot="icon">
                                <path fill-rule="evenodd"
                                    d="M4.22 6.22a.75.75 0 0 1 1.06 0L8 8.94l2.72-2.72a.75.75 0 1 1 1.06 1.06l-3.25 3.25a.75.75 0 0 1-1.06 0L4.22 7.28a.75.75 0 0 1 0-1.06Z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                    </div>

                    <div class="sm:col-span-2 sm:col-start-1">
                        <label for="department_search"
                            class="block text-sm/6 font-medium text-gray-900">Departments</label>
                        <div class="mt-2 relative">
                            <!-- Input field for typing -->
                            <input type="text" id="department_search" name="department_search"
                                class="w-full appearance-none rounded-md bg-white py-1.5 pr-8 pl-3 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6 drop-shadow-lg"
                                placeholder="Search departments..." autocomplete="off"  />
                            <ul id="department_list"
                                class="absolute z-10 mt-1 w-full bg-white border border-gray-300 rounded-md shadow-lg max-h-60 overflow-auto hidden">
                                <div>
                                    <button id="openAddDepartmentModal" type="button"
                                        class="w-full px-3 py-2 text-gray-900 hover:bg-indigo-600 hover:text-white cursor-pointer text-left">
                                        + Add a department
                                    </button>
                                </div>
                                @foreach ($departments as $department)
                                    <li class="px-3 py-2 text-gray-900 hover:bg-indigo-600 hover:text-white cursor-pointer"
                                        data-value="{{ $department->id }}">{{ $department->name }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                    <div class="sm:col-span-2">
                        <label for="position_search" class="block text-sm/6 font-medium text-gray-900">Positions</label>
                        <div class="mt-2 relative">
                            <!-- Input field for typing -->
                            <input type="text" id="position_search" name="position_search"
                                class="w-full appearance-none rounded-md bg-white py-1.5 pr-8 pl-3 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6 drop-shadow-lg"
                                placeholder="Search positions..." autocomplete="off" />
                            <ul id="position_list"
                                class="absolute z-10 mt-1 w-full bg-white border border-gray-300 rounded-md shadow-lg max-h-60 overflow-auto hidden">
                                <div>
                                    <button id="openAddPositionModal" type="button"
                                        class="w-full px-3 py-2 text-gray-900 hover:bg-indigo-600 hover:text-white cursor-pointer text-left">
                                        + Add a position
                                    </button>
                                </div>
                                @foreach ($positions as $position)
                                    <li class="px-3 py-2 text-gray-900 hover:bg-indigo-600 hover:text-white cursor-pointer"
                                        data-value="{{ $position->id }}">{{ $position->title }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                    <div class="sm:col-span-4">
                        <label for="email" class="block text-sm/6 font-medium text-gray-900">Email address</label>
                        <div class="mt-2">
                            <input id="email" name="email" type="email" autocomplete="email"
                                class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6 drop-shadow-lg">
                        </div>
                    </div>

                    <div class="sm:col-span-2 sm:col-start-1">
                        <label for="phone_number" class="block text-sm/6 font-medium text-gray-900">Phone
                            Number</label>
                        <div class="mt-2">
                            <input type="text" name="phone_number" id="phone_number" autocomplete="address-level1"
                                alue="012-345-678"
                                class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6 drop-shadow-lg">
                        </div>
                    </div>

                    <div class="sm:col-span-2">
                        <label for="hired_date" class="block text-sm/6 font-medium text-gray-900">Hired Date</label>
                        <div class="mt-2 grid grid-cols-1">

                            <input datepicker id="default-datepicker" type="text"
                                class="col-start-1 row-start-1 block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6 drop-shadow-lg"
                                placeholder="Select date" datepicker-orientation="top left" name="hired_date" />
                            <svg class="pointer-events-none col-start-1 row-start-1 mr-2 size-5 self-center justify-self-end text-gray-500 sm:size-4"
                                viewBox="0 0 16 16" fill="currentColor" aria-hidden="true" data-slot="icon">
                                <path fill-rule="evenodd"
                                    d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>

                    </div>
                </div>

                <div class="sm:col-span-4 mt-5">
                    <label for="address" class="block text-sm/6 font-medium text-gray-900">Address</label>
                    <div class="mt-2">
                        <input id="address" name="address" type="text" autocomplete="address" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1
                            -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2
                            focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6 drop-shadow-lg">
                    </div>
                </div>

            </div>

            <div class="mt-6 flex items-center justify-end gap-x-6">
                <button type="button" class="text-sm/6 font-semibold text-gray-900">Cancel</button>
                <button type="submit"
                    class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
            </div>


        </form>

        @include('contact.contactCreate.modals.addToEmployeeColumn', ['name' => 'department'])
        @include('contact.contactCreate.modals.addToEmployeeColumn', ['name' => 'position'])



        <script>

            /* window.addEventListener('load', function () {
              const datepicker = document.querySelector('.datepicker');
              const datepicker_input = document.querySelector('#default-datepicker');
          
              const datepicker_input_pos = datepicker_input.getBoundingClientRect();
              // const computedStyle = window.getComputedStyle(datepicker_input);
          
              datepicker_input.addEventListener('click', function () {
          
                datepicker.classList.replace('absolute', 'relative');
          
                datepicker.style.top = -datepicker_input_pos.height - datepicker_input_pos.top + 'px';
                datepicker.style.left = datepicker_input_pos.left + 'px';
              });
            }); */

        </script>

        @vite('resources/js/app.js')

    </x-slot:MainContent>
</x-layout>