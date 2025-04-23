<div id="delete-employee-modal" tabindex="-1"
  class="fixed inset-0 z-50 hidden bg-gray-500 bg-opacity-50 flex items-center justify-center" aria-hidden="true">
  <div class="relative bg-white rounded-lg shadow-sm dark:bg-gray-700 flex justify-center p-6">
    <form action="" class="mx-4 space-y-6 md:w-[70vw] lg:w-[35vw]" id="delete-employee-form" method="POST">
      @csrf
      @method('DELETE')
      <div class="flex flex-col items-center justify-center">
        <label class="text-white" id="delete-employee-label" for=""></label>
        <br />
        <div class="flex flex-row gap-x-4">
          <button id="delete-employee-button" class="bg-red-500 hover:bg-red-700 text-white py-2 px-4 rounded-md"
            type="submit" for-employee="">Delete</button>
          <button id="cancel-employee-button" type="button"
            class="bg-white hover:bg-gray-300 text-black py-2 px-4 rounded-md">Cancel</button>
        </div>
      </div>
    </form>
  </div>
</div>