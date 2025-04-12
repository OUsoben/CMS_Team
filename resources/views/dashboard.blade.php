<x-layout>
    <x-slot:title>
        Dashbaord
    </x-slot:title>

    <x-slot:MainContent>
        <h2 class="text-3xl font-bold mb-6 text-center">CONTACT MANAGEMENT</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 text-white">
          <div class="bg-indigo-700 rounded-lg p-6 shadow hover:shadow-lg">
            <p class="text-lg">All Contacts</p>
            <p class="text-sm underline mt-1">Visit Contacts</p>
            <p class="text-3xl mt-4 font-bold">0</p>
          </div>
          <div class="bg-cyan-500 rounded-lg p-6 shadow hover:shadow-lg">
            <p class="text-lg">All Groups</p>
            <p class="text-sm underline mt-1">Visit Groups</p>
            <p class="text-3xl mt-4 font-bold">0</p>
          </div>
          <div class="bg-green-600 rounded-lg p-6 shadow hover:shadow-lg">
            <p class="text-lg">Followers</p>
            <p class="text-sm">People Interested</p>
            <p class="text-3xl mt-4 font-bold">46%</p>
          </div>
        </div>

    </x-slot:MainContent>
</x-layout>
