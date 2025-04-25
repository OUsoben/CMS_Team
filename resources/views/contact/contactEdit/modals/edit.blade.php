@php
  $departments = App\Models\Departments::all();
  $positions = App\Models\Positions::all();
@endphp

<div id="exampleWrapper" class="flex justify-center">
</div>

<div id="edit-employee-modal" tabindex="-1"
  class="fixed inset-0 z-50 hidden bg-gray-500 bg-opacity-50 flex items-center justify-center" aria-hidden="true">
  <div class="relative bg-white rounded-lg shadow-sm flex justify-center p-6">
    <form action="" class="mx-4 space-y-6 md:w-[70vw] lg:w-[35vw]" id="edit-employee-form" method="POST">
      @csrf
      @method('PUT')
      <input type="hidden" name="employee_id" id="employee_id" value="" />
      <input type="text" name="employee_department_id" id="employee_department_id" value="" hidden />
      <input type="text" name="employee_position_id" id="employee_position_id" value="" hidden />
      <div class="grid md:grid-cols-3 md:gap-6">
        <div class="relative z-0 w-full group">
          <input name="employee_first_name" id="employee_first_name"
            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
            placeholder=" " />
          <label for="employee_first_name"
            class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">First
            name</label>
        </div>
        <div class="relative z-0 w-full group">
          <input name="employee_last_name" id="employee_last_name"
            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
            placeholder=" " />
          <label for="employee_last_name"
            class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Last
            name</label>
        </div>
        <div class="relative z-0 w-full group">
          <div class="mt-2 grid grid-cols-1">
            <select id="employee_gender" name="employee_gender" autocomplete="employee_gender-name"
              class="col-start-1 row-start-1 w-full appearance-none rounded-md bg-white py-1.5 pr-8 pl-3 text-base text-black outline-1 -outline-offset-1 outline-gray-300 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6 border-0 border-b-2 border-gray-300 focus:outline-none focus:ring-0 focus:border-blue-600 peer">
              <option value="m">Male</option>
              <option value="f">Female</option>
              <option value="o">Other</option>
            </select>
            <svg
              class="pointer-events-none col-start-1 row-start-1 mr-2 size-5 self-center justify-self-end text-gray-500 sm:size-4"
              viewBox="0 0 16 16" fill="currentColor" aria-hidden="true" data-slot="icon">
              <path fill-rule="evenodd"
                d="M4.22 6.22a.75.75 0 0 1 1.06 0L8 8.94l2.72-2.72a.75.75 0 1 1 1.06 1.06l-3.25 3.25a.75.75 0 0 1-1.06 0L4.22 7.28a.75.75 0 0 1 0-1.06Z"
                clip-rule="evenodd" />
            </svg>
          </div>
          <label for="employee_gender"
            class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Gender
          </label>
        </div>
      </div>

      {{-- <div class="grid md:grid-cols-2 md:gap-6">
        <div class="relative z-0 w-full group">
          <input name="employee_department" id="employee_department"
            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
            placeholder=" " />
          <label for="employee_department"
            class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Department</label>
        </div>
        <div class="relative z-0 w-full group">
          <input name="employee_position" id="employee_position"
            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
            placeholder=" " />
          <label for="employee_position"
            class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Position</label>
        </div>
      </div> --}}

      <div class="grid md:grid-cols-2 md:gap-6">
        <div class="relative z-2 w-full group">
          <label for="department_search" class="block text-sm/6 font-medium text-gray-900">Departments</label>
          <div class="mt-2 relative">
            <!-- Input field for typing -->
            <input type="text" id="department_search" name="department_search"
              class="w-full appearance-none rounded-md bg-white py-1.5 pr-8 pl-3 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6 border-0 border-b-2 border-gray-300 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
              placeholder="Search departments..." autocomplete="off" />
            {{-- <input type="text"> --}}
            <!-- Dropdown list -->
            <ul id="department_list"
              class="absolute z-10 mt-1 w-full bg-white border border-gray-300 rounded-md shadow-lg max-h-60 overflow-auto hidden">
              <div>
                <button id="openAddDepartmentModal" type="button"
                  class="w-full px-3 py-2 text-gray-900 hover:bg-indigo-600 hover:text-white cursor-pointer text-left">
                  + Add a department
                </button>
              </div>
              @foreach ($departments as $department)
          <li class="px-3 py-2 text-gray-900 hover:bg-indigo-600 hover:text-white cursor-pointer"
          data-value="{{ $department->id }}">{{ $department->name }}</li>
        @endforeach
            </ul>
          </div>
        </div>

        <div class="relative z-2 w-full group">
          <label for="position_search" class="block text-sm/6 font-medium text-gray-900">Positions</label>
          <div class="mt-2 relative">
            <!-- Input field for typing -->
            <input type="text" id="position_search" name="position_search"
              class="w-full appearance-none rounded-md bg-white py-1.5 pr-8 pl-3 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6 border-0 border-b-2 border-gray-300 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
              placeholder="Search positions..." autocomplete="off" />
            {{-- <input type="text"> --}}
            <!-- Dropdown list -->
            <ul id="position_list"
              class="absolute z-10 mt-1 w-full bg-white border border-gray-300 rounded-md shadow-lg max-h-60 overflow-auto hidden">
              <div>
                <button id="openAddPositionModal" type="button"
                  class="w-full px-3 py-2 text-gray-900 hover:bg-indigo-600 hover:text-white cursor-pointer text-left">
                  + Add a position
                </button>
              </div>
              @foreach ($positions as $position)
          <li class="px-3 py-2 text-gray-900 hover:bg-indigo-600 hover:text-white cursor-pointer"
          data-value="{{ $position->id }}">{{ $position->title }}</li>
        @endforeach
            </ul>
          </div>
        </div>
      </div>

      <div class="relative z-0 w-full group">
        <input name="employee_email" id="employee_email"
          class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
          placeholder=" " required />
        <label for="employee_email"
          class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Email</label>
      </div>

      <div class="relative z-0 group">
        <input name="employee_phone" id="employee_phone"
          class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none  focus:outline-none focus:ring-0 focus:border-blue-600 peer"
          placeholder=" " />
        <label for="employee_phone"
          class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Phone
          Number</label>
      </div>
      <div class="relative z-0 group">
        <input name="employee_address" id="employee_address"
          class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none  focus:outline-none focus:ring-0 focus:border-blue-600 peer"
          placeholder=" " />
        <label for="employee_address"
          class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Address</label>
      </div>
      <div class="relative z-0 w-full group">
        <input id="employee_hired_date" name="employee_hired_date" inline-datepicker data-date="02-25-2024"
          class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
          placeholder="" required />
        <label for="employee_hired_date"
          class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Hired
          Date</label>
      </div>
      <button id="submit-employee-button"
        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center"
        onclick="this.form.submit()">Submit</button>
    </form>
  </div>
</div>

<script>

  var departmentId;
  var positionId;

  document.addEventListener('DOMContentLoaded', () => {
    function comboBox(name) {
      const searchInput = document.getElementById(name + '_search');
      const dropdown = document.getElementById(name + '_list');
      const options = dropdown.querySelectorAll('li');

      if (options.length == 0) {
        searchInput.addEventListener('focus', () => {
          dropdown.style.display = 'block';
        });
        document.addEventListener('click', (event) => {
          if (!dropdown.contains(event.target) && event.target !== searchInput) {
            dropdown.style.display = 'none';
          }
        });
        return;
      }

      searchInput.value = options[0].textContent;
      if (name === 'department') {
        departmentId = options[0].getAttribute('data-value');
      } else if (name === 'position') {
        positionId = options[0].getAttribute('data-value');
      }

      searchInput.addEventListener('focus', () => {

        options.forEach(option => {
          option.style.display = 'block';
        });

        dropdown.style.display = 'block';
      });

      searchInput.addEventListener('input', () => {
        const query = searchInput.value.toLowerCase();
        let hasVisibleOptions = false;

        options.forEach(option => {
          const text = option.textContent.toLowerCase();
          if (text.includes(query)) {
            option.style.display = 'block';
            hasVisibleOptions = true;
          } else {
            option.style.display = 'none';
          }
        });

        dropdown.style.display = hasVisibleOptions ? 'block' : 'none';
      });

      options.forEach(option => {
        option.addEventListener('click', () => {
          // searchInput.value = option.textContent;
          searchInput.value = option.textContent;
          if (name === 'department') {
            departmentId = option.getAttribute('data-value');
          } else if (name === 'position') {
            positionId = option.getAttribute('data-value');
          }
          dropdown.style.display = 'none';
        });
      });

      document.addEventListener('click', (event) => {
        if (!dropdown.contains(event.target) && event.target !== searchInput) {
          dropdown.style.display = 'none';
        }
      });
    }

    comboBox('department');
    comboBox('position');

    const mainForm = document.querySelector('#edit-employee-form');

    mainForm.addEventListener('submit', (event) => {
      document.querySelector('input[name="department_search"]').value = departmentId;
      document.querySelector('input[name="position_search"]').value = positionId;
    });

  });
</script>