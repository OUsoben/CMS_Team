<x-layout>
    <x-slot:title>Employee Details</x-slot:title>

    <x-slot:MainContent>
        <div class="p-6">
            <h1 class="text-2xl font-semibold mb-4">Employee Details</h1>

            <!-- Search Box -->
            <div class="mb-6 flex justify-between items-center">
                <form method="GET" action="{{ url('/contactlist') }}" class="flex space-x-4">
                    <input type="text" name="search" placeholder="Search ..." value="{{ request()->query('search') }}" class="py-2 px-4 border border-gray-300 rounded-md shadow-sm">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white py-2 px-4 rounded-md">Search</button>
                </form>
            </div>

            <!-- Employee Data Table -->
            <div class="overflow-x-auto">
                <table class="min-w-full bg-white border border-gray-200 shadow rounded-lg">
                    <thead class="bg-gray-100 text-gray-700 uppercase text-sm">
                        <tr>
                            <th class="py-3 px-4 border-b">#</th>
                            <th class="py-3 px-4 border-b text-left">First Name</th>
                            <th class="py-3 px-4 border-b text-left">Last Name</th>
                            <th class="py-3 px-4 border-b text-left">Gender</th>
                            <th class="py-3 px-4 border-b text-left">Department</th>
                            <th class="py-3 px-4 border-b text-left">Position</th>
                            <th class="py-3 px-4 border-b text-left">Email</th>
                            <th class="py-3 px-4 border-b text-left">Phone</th>
                            <th class="py-3 px-4 border-b text-left">Hire Date</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-600">
                        @foreach ($employees as $index => $employee)
                            <tr class="hover:bg-gray-50">
                                <td class="py-3 px-4 border-b text-center">{{ $index + 1 }}</td>
                                <td class="py-3 px-4 border-b">{{ $employee->first_name }}</td>
                                <td class="py-3 px-4 border-b">{{ $employee->last_name }}</td>
                                <td class="py-3 px-4 border-b">{{ ucfirst($employee->gender) }}</td>
                                <td class="py-3 px-4 border-b">{{ $employee->department->name ?? 'No Department' }}</td>
                                <td class="py-3 px-4 border-b">{{ $employee->position->title ?? 'No Position' }}</td>
                                <td class="py-3 px-4 border-b">{{ $employee->email }}</td>
                                <td class="py-3 px-4 border-b">{{ $employee->phone }}</td>
                                <td class="py-3 px-4 border-b">{{ \Carbon\Carbon::parse($employee->hire_date)->format('M d, Y') }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </x-slot:MainContent>
</x-layout>
