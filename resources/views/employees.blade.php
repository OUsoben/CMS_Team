<x-layout>
    <x-slot:title>Employee Details</x-slot:title>

    <x-slot:MainContent>
        <div class="p-6">
            <h1 class="text-2xl font-semibold mb-4">Employee Details</h1>
            <!-- Search Box -->

            @include('share.search-bar')
            <!-- Employee Data Table -->
            @include('share.employees-data-table')

    </x-slot:MainContent>
</x-layout>
