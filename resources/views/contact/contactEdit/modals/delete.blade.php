<div id="delete-employee-modal" tabindex="-1"
  class="fixed inset-0 z-50 hidden bg-gray-500 bg-opacity-50 flex items-center justify-center" aria-hidden="true">
  <div class="relative bg-white rounded-lg shadow-sm dark:bg-gray-700 flex justify-center p-6">
    <form action="" class="mx-4 space-y-6 md:w-[70vw] lg:w-[35vw]" id="delete-employee-form" method="POST">
      @csrf
      @method('DELETE')
      <label class="text-white" id="delete-employee-label" for=""></label>
      <button id="delete-employee-button" class="bg-red-500 hover:bg-red-700 text-white py-2 px-4 rounded-md" type="submit" for-employee="">Delete</button>
    </form>
  </div>
</div>