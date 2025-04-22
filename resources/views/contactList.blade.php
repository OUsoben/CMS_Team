<x-layout>
    <x-slot:title>
        Contact | List
    </x-slot:title>

    <x-slot:MainContent>
        <div class="p-6">
            <h1 class="text-3xl font-semibold text-center mb-8">Contact List</h1>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
                @foreach($departments as $department) <!-- Correct foreach syntax -->
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden transform transition duration-300 hover:scale-105">
                        <div class="flex justify-center mt-4">
                            <img src="https://cdn0.iconfinder.com/data/icons/business-545/512/business_people-512.png" alt="Department" class="w-32 h-32 object-cover rounded-full border-4 border-blue-500">
                        </div>
                        <div class="p-4 text-center">
                            <h2 class="text-2xl font-semibold text-gray-800 mb-3">{{ $department->name ?? 'No Department' }}</h2>
                             <hr>
                             <br>
                            <a href="/contactlist/{{$department->id}}" class="bg-blue-500 hover:bg-blue-700 text-white font-semibold py-2 px-6 rounded-lg transition duration-300 transform hover:scale-105">
                                View Details
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="flex justify-center items-center mt-6">
            {{-- {{ $employees->links() }} --}}
        </div>

    </x-slot:MainContent>
</x-layout>
