<div id="add{{ ucfirst($name) }}Modal"
  class="fixed inset-0 z-50 hidden bg-gray-800 bg-opacity-50 flex items-center justify-center !mt-0">
  <div class="bg-white rounded-lg shadow-lg w-1/3">
    <div class="px-4 py-3 border-b border-gray-300 flex justify-between items-center">
      <h2 class="text-lg font-medium text-gray-900">Add a {{ $name }}</h2>
      <button type="button" id="closeAdd{{ ucfirst($name) }}Modal" class="text-gray-500 hover:text-gray-700">&times;</button>
    </div>
    <div class="p-4">
      <form id="add{{ ucfirst($name) }}Form" action="/add{{ $name }}" method="POST">
        @csrf
        <label for="{{ $name }}_name" class="block text-sm font-medium text-gray-700 mb-2*">{{ $name}}
          Name</label>
        <input type="text" id="{{ $name }}_name" name="{{ $name }}_name"
          class="w-full appearance-none rounded-md bg-white py-1.5 pr-8 pl-3 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"
          placeholder="Enter {{ $name }} name" required>
        <div class="mt-4 flex justify-end">
          <button type="button" id="cancelAdd{{ ucfirst($name) }}Modal"
            class="mr-2 px-4 py-2 bg-gray-300 text-gray-700 rounded-md hover:bg-gray-400">Cancel</button>
          <button type="submit" form="add{{ ucfirst($name) }}Form"
            class="px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700">Add</button>
        </div>
      </form>
    </div>
  </div>
</div>