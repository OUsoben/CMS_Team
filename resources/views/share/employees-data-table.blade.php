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
                    <td class="py-3 border-b line-clamp-">{{ $employee->address }}
                    <td class="py-3  border-b">
                        <div class="flex justify-end">
                            <button class="edit-employee-modal-button  text-green-800  py-2  mr-2 rounded-md"
                                data-modal-toggle="edit-employee-modal" for-employee="{{ $employee->id }}"><i
                                    class="fa-solid fa-pen-to-square"></i></button>
                            <button class="delete-employee-modal-button  text-red-800 py-2 pl-2 pr-4  rounded-md"
                                data-modal-toggle="delete-employee-modal" for-employee="{{ $employee->id }}"><i
                                    class="fa-solid fa-trash"></i></button>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
</div>
<div class=" flex justify-center">
    {{ $employees->links() }}
</div>


@include('contact.contactEdit.modals.edit')
@include('contact.contactEdit.modals.delete')



<script>
    document.addEventListener('DOMContentLoaded', function () {
        const editEmployeeModalButtons = document.getElementsByClassName('edit-employee-modal-button');
        const editEmployeeModal = document.getElementById('edit-employee-modal');
        const patchForm = document.getElementById('edit-employee-form');

        const deleteEmployeeModalButtons = document.getElementsByClassName('delete-employee-modal-button');
        const deleteEmployeeModal = document.getElementById('delete-employee-modal');
        const deleteEmployeeForm = document.getElementById('delete-employee-form');
        const deleteEmployeeButton = document.getElementById('delete-employee-button');
        const deleteCancelEmployeeButton = document.getElementById('delete-cancel-employee-button')

        for (let i = 0; i < editEmployeeModalButtons.length; i++) {
            editEmployeeModalButtons[i].addEventListener('click', function () {
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
                        // document.getElementById('employee_department').value = data[0].department.name;
                        // document.getElementById('employee_department_id').value = data[0].department_id;
                        // document.getElementById('employee_position').value = data[0].position.title;
                        // document.getElementById('employee_position_id').value = data[0].position_id;

                        document.getElementById('department_search').value = data[0].department.name;
                        document.getElementById('position_search').value = data[0].position.title;

                        document.getElementById('employee_email').value = data[0].email;
                        document.getElementById('employee_phone').value = data[0].phone;
                        document.getElementById('employee_hired_date').value = data[0].hire_date;
                        document.getElementById('employee_address').value = data[0].address;

                    });
                editEmployeeModal.classList.remove('hidden');
            });
        }

        window.addEventListener('click', function (event) {
            if (event.target === editEmployeeModal) {
                editEmployeeModal.classList.add('hidden');
            } else if (event.target === deleteEmployeeModal) {
                deleteEmployeeModal.classList.add('hidden');
            } else if (event.target === deleteCancelEmployeeButton) {
                deleteEmployeeModal.classList.add('hidden');
            }
        });

        for (let i = 0; i < deleteEmployeeModalButtons.length; i++) {
            deleteEmployeeModalButtons[i].addEventListener('click', function () {
                const employeeId = this.getAttribute('for-employee');
                console.log(employeeId);

                fetch(`/employees/${employeeId}`)
                    .then(response => response.json())
                    .then(data => {
                        document.getElementById('delete-employee-label').innerHTML = `Id: ${data[0].id} | Name: ${data[0].first_name} ${data[0].last_name} | Phone Number: ${data[0].phone}`;
                        deleteEmployeeButton.setAttribute('for-employee', employeeId);
                        deleteEmployeeModal.classList.remove('hidden');
                    });

            });
        }

        patchForm.addEventListener('submit', function (event) {
            // change this form's action
            const employeeId = document.getElementById('employee_id').value;
            patchForm.action = `/employees/${employeeId}`;
        });

        deleteEmployeeForm.addEventListener('submit', function (event) {
            // change this form's action
            const employeeId = deleteEmployeeButton.getAttribute('for-employee');

            deleteEmployeeForm.action = `/employees/${employeeId}`;
        });
    });
</script>