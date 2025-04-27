<x-layout>
    <x-slot:title>
        Dashboard
    </x-slot:title>

    <x-slot:MainContent>
        <h2 class="text-xl  mb-6 ">Dashboard</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 text-white">
          <div class="bg-indigo-700 rounded-lg p-6 shadow hover:shadow-lg">
            <div class="flex justify-between">
                    <p class="text-lg">Total Employees</p>

                        <i class="fa-solid fa-users text-xl"></i>


            </div>
            <p class="text-3xl mt-4 font-bold">{{ $employeeCount }}</p>
          </div>
          <div class="bg-cyan-500 rounded-lg p-6 shadow hover:shadow-lg">
            <div  class="flex justify-between">
                <p class="text-lg">Total Departments</p>

                    <i class="fa-solid fa-building text-xl"></i>


            </div>


            <p class="text-3xl mt-4 font-bold">{{ $departmentCount }}</p>
          </div>
          <div class="bg-green-600 rounded-lg p-6 shadow hover:shadow-lg">
            <div class="flex justify-between">
                <p class="text-lg">Total Positions</p>

                    <i class="fa-solid fa-briefcase text-xl"></i>


            </div>


            <p class="text-3xl mt-4 font-bold">{{ $positionCount }}</p>
          </div>
        </div>
    </x-slot:MainContent>
</x-layout>
