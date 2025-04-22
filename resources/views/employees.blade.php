<x-layout>
    <x-slot:title>Employee Details</x-slot:title>

    <x-slot:MainContent>
        <div class="p-6">
            <h1 class="text-2xl font-semibold mb-4">Employee Details</h1>

            <!-- Search Box -->
            <div class="mb-6 flex justify-between items-center">
                <form method="GET" action="{{ url('/contactlist') }}" class="flex space-x-4">
                    <input type="text" name="search" placeholder="Search ..." value="{{ request()->query('search') }}"
                        class="py-2 px-4 border border-gray-300 rounded-md shadow-sm">
                    <button type="submit"
                        class="bg-blue-500 hover:bg-blue-700 text-white py-2 px-4 rounded-md">Search</button>
                </form>
            </div>

            <!-- Employee Data Table -->
            <div style="width: 100%" class="overflow-x-auto">
                <table class=" bg-white border border-gray-200 shadow rounded-lg">
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
                            <th class="py-3 px-4 border-b text-left">Address</th>
                            <th class="py-3 px-4 border-b text-left">Actions</th>
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
                                <td class="py-3 px-4 border-b">
                                    {{ \Carbon\Carbon::parse($employee->hire_date)->format('M d, Y') }}
                                </td>
                                <td class="py-3 px-4 border-b line-clamp-">{{ $employee->address }}
                                <td class="py-3 px-4 border-b">
                                    <button
                                    class="edit-task-modal-button bg-blue-500 hover:bg-blue-700 text-white py-2 px-4 rounded-md"
                                    data-modal-toggle="edit-task-modal" for-employee="{{ $employee->id }}">click</button></td>
                                
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
  <div>
    {{ $employees->links() }}
  </div>


        @include('contact.contactEdit.modals.edit')



        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const editTaskModalButtons = document.getElementsByClassName('edit-task-modal-button');
                const editTaskModal = document.getElementById('edit-task-modal');
                const patchForm = document.getElementById('edit-task-form');

                for (let i = 0; i < editTaskModalButtons.length; i++) {
                    editTaskModalButtons[i].addEventListener('click', function () {
                        const employeeId = this.getAttribute('for-employee');
                        fetch(`/employees/${employeeId}`)
                            .then(response => response.json())
                            .then(data => {

                                document.getElementById('employee_id').value = data[0].id;
                                document.getElementById('employee_first_name').value = data[0].first_name;
                                document.getElementById('employee_last_name').value = data[0].last_name;

                                const genderSelect = document.getElementById('employee_gender');
                                const genderOptions = genderSelect.options;
                                
                                for (let i = 0; i < genderOptions.length; i++) {
                                    if (genderOptions[i].value === data[0].gender) {
                                        genderOptions[i].selected = true;
                                        break;
                                    }
                                }
                                // document.getElementById('employee_department').value = data[0].department.name;
                                document.getElementById('employee_department').value = data[0].department.name;
                                document.getElementById('employee_department_id').value = data[0].department_id;
                                document.getElementById('employee_position').value = data[0].position.title;
                                document.getElementById('employee_position_id').value = data[0].position_id;
                                document.getElementById('employee_email').value = data[0].email;
                                document.getElementById('employee_phone').value = data[0].phone;
                                document.getElementById('employee_hired_date').value = data[0].hire_date;
                                document.getElementById('employee_address').value = data[0].address;

                                console.log(data);
                                console.log(data[0].id);
                            });
                        editTaskModal.classList.remove('hidden');
                    });
                }

                window.addEventListener('click', function (event) {
                    if (event.target === editTaskModal) {
                        editTaskModal.classList.add('hidden');
                    }
                });

                patchForm.addEventListener('submit', function (event) {
                    // change this form's action
                    const employeeId = document.getElementById('employee_id').value;
                    patchForm.action = `/employees/${employeeId}`;
                });
            });
        </script>
    </x-slot:MainContent>
</x-layout>