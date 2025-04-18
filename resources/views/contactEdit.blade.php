<x-layout>

    <x-slot:title>
        Edit | Contact
    </x-slot:title>

    <x-slot:MainContent>
        <div class="">
            <h1 class="text-4xl font-bold mb-4"> Contact Edit</h1>


            <div class="flex items-center justify-between mb-4">
                <div class="flex items-center">
                    <button
                        class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 inline-block" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 6V4m0 2a2 2 0 012 2v1h.5a.5.5 0 01.5.5v1h-.5a.5.5 0 01-.5.5v1h-1a.5.5 0 01-.5-.5v-1h-.5a.5.5 0 01-.5-.5v-1a2 2 0 012-2m0 2h1m-2 1v-1a2 2 0 00-2-2H7a2 2 0 00-2 2v6a2 2 0 002 2h6a2 2 0 002-2v-1m-2-1H9m2-2V9m-2 1h1m-2-2h3m-2-1H8m2 5h2M7 12h1m-1 2h1m-1-3h1" />
                        </svg>
                        Filter
                    </button>
                    <input type="text"
                        class="shadow appearance-none border rounded w-auto py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline ml-2"
                        placeholder="Search by keyword">
                </div>
            </div>

            <table class="mt-6 w-full border-collapse">
                <thead class="bg-purple-500 text-black">
                    <tr>
                        <th class="border border-gray-300 p-2 text-left">ID</th>
                        <th class="border border-gray-300 p-2 text-left">First Name</th>
                        <th class="border border-gray-300 p-2 text-left">Last Name</th>
                        <th class="border border-gray-300 p-2 text-left">Position</th>
                        <th class="border border-gray-300 p-2 text-left">Email</th>
                        <th class="border border-gray-300 p-2 text-left">Phone</th>
                        <th class="border border-gray-300 p-2 text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @for ($i = 1; $i <= 14; $i++)
                        <tr>
                            <td class="border border-gray-300 p-2">{{ $i }}</td>
                            <td class="border border-gray-300 p-2"></td>
                            <td class="border border-gray-300 p-2"></td>
                            <td class="border border-gray-300 p-2"></td>
                            <td class="border border-gray-300 p-2"></td>
                            <td class="border border-gray-300 p-2"></td>
                            <td class="border border-gray-300 p-2 text-center">
                                <span>&#9776;</span>
                            </td>
                        </tr>
                    @endfor
                </tbody>
            </table>
        </div>
    </x-slot:MainContent>

</x-layout>
