<x-layout>
    <x-slot:title>
        Dashboard
    </x-slot:title>

    <x-slot:MainContent>
        <h2 class="text-3xl font-bold mb-6 text-center">CONTACT MANAGEMENT</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 text-white">
          <div class="bg-indigo-700 rounded-lg p-6 shadow hover:shadow-lg">
            <p class="text-lg">All Employees</p>
            <p class="text-sm underline mt-1">Visit Employees</p>
            <p class="text-3xl mt-4 font-bold">{{ $employeeCount }}</p>
          </div>
          <div class="bg-cyan-500 rounded-lg p-6 shadow hover:shadow-lg">
            <p class="text-lg">All Departments</p>
            <p class="text-sm underline mt-1">Visit Department</p>
            <p class="text-3xl mt-4 font-bold">{{ $departmentCount }}</p>
          </div>
          <div class="bg-green-600 rounded-lg p-6 shadow hover:shadow-lg">
            <p class="text-lg">All Positions</p>
            <p class="text-sm underline mt-1">Visit position</p>
            <p class="text-3xl mt-4 font-bold">{{ $positionCount }}</p>
          </div>
        </div>
    </x-slot:MainContent>
</x-layout>
