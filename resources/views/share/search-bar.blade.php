   <div class="mb-6 flex justify-between items-center">
                <form  class="flex space-x-4" method="GET" action="{{ url()->current() }}">
                    <input type="text" name="search" placeholder="Search ..."
                        class="py-2 px-4 border border-gray-300 rounded-md shadow-sm">
                    <button type="submit"
                        class="bg-blue-500 hover:bg-blue-700 text-white py-2 px-4 rounded-md">Search</button>
                </form>
            </div>
