<!DOCTYPE html>
<html lang="en" class="h-full overflow-auto">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ $title }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</head>

<body class="bg-gray-100 font-sans h-full overflow-auto">

    <div class="flex h-full overflow-auto">
        <!-- Sidebar -->
        <div
            class="relative flex h-full overflow-auto w-full max-w-[20rem] flex-col bg-white bg-clip-border p-4 text-gray-700 shadow-xl shadow-blue-gray-900/5">
            <div class="p-4 mb-2">
                <h5
                    class="block font-sans text-xl antialiased font-semibold leading-snug tracking-normal text-blue-gray-900">
                    CONTACT MANAGEMENT SYSTEM
                </h5>
            </div>
            <nav class="flex min-w-[240px] flex-col gap-1 p-2 font-sans text-base font-normal text-blue-gray-700">
                <x-nav-link href="/" :active="request()->is('/')">
                    <div class="grid mr-4 place-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            aria-hidden="true" class="w-5 h-5">
                            <path fill-rule="evenodd"
                                d="M2.25 2.25a.75.75 0 000 1.5H3v10.5a3 3 0 003 3h1.21l-1.172 3.513a.75.75 0 001.424.474l.329-.987h8.418l.33.987a.75.75 0 001.422-.474l-1.17-3.513H18a3 3 0 003-3V3.75h.75a.75.75 0 000-1.5H2.25zm6.04 16.5l.5-1.5h6.42l.5 1.5H8.29zm7.46-12a.75.75 0 00-1.5 0v6a.75.75 0 001.5 0v-6zm-3 2.25a.75.75 0 00-1.5 0v3.75a.75.75 0 001.5 0V9zm-3 2.25a.75.75 0 00-1.5 0v1.5a.75.75 0 001.5 0v-1.5z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    Dashboard
                </x-nav-link>
                <x-nav-link href="/addcontact" :active="request()->is('addcontact')">
                    <div class="grid mr-4 place-items-center">
                        <i class="fa-solid fa-phone"></i>
                        </svg>
                    </div>
                    Add Contact
                </x-nav-link>
                {{-- <x-nav-link href="/editcontact" :active="request()->is('editcontact')">
                    <div class="grid mr-4 place-items-center">
                        <i class="fa-solid fa-pen-to-square"></i>
                        </svg>
                    </div>
                    Edit Contact
                </x-nav-link> --}}
                <x-nav-link href="/contactlist" :active="request()->is('contactlist')">
                    <div class="grid mr-4 place-items-center">
                        <i class="fa-solid fa-address-book"></i>
                    </div>
                    Contact List
                    <div class="grid ml-auto place-items-center justify-self-end">
                        <div
                            class="relative grid items-center px-2 py-1 font-sans text-xs font-bold uppercase rounded-full select-none whitespace-nowrap bg-blue-gray-500/20 text-blue-gray-900">
                            <span>{{ $departmentCount }}</span>
                        </div>
                    </div>
                </x-nav-link>
                <x-nav-link href="/profile" :active="request()->is('profile')">
                    <div class="grid mr-4 place-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            aria-hidden="true" class="w-5 h-5">
                            <path fill-rule="evenodd"
                                d="M18.685 19.097A9.723 9.723 0 0021.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 003.065 7.097A9.716 9.716 0 0012 21.75a9.716 9.716 0 006.685-2.653zm-12.54-1.285A7.486 7.486 0 0112 15a7.486 7.486 0 015.855 2.812A8.224 8.224 0 0112 20.25a8.224 8.224 0 01-5.855-2.438zM15.75 9a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    Profile
                </x-nav-link>
                <div>
                    <form class="flex gap-x-4 px-3 pt-2 items-center" method="POST" action="{{ url('logout')}}">
                        @csrf
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                        aria-hidden="true" class="w-5 h-5">
                        <path fill-rule="evenodd"
                            d="M12 2.25a.75.75 0 01.75.75v9a.75.75 0 01-1.5 0V3a.75.75 0 01.75-.75zM6.166 5.106a.75.75 0 010 1.06 8.25 8.25 0 1011.668 0 .75.75 0 111.06-1.06c3.808 3.807 3.808 9.98 0 13.788-3.807 3.808-9.98 3.808-13.788 0-3.808-3.807-3.808-9.98 0-13.788a.75.75 0 011.06 0z"
                            clip-rule="evenodd"></path>
                    </svg>
                        <a class=" " href="http://contact_management_system.test/logout" onclick="event.preventDefault();
                                            this.closest('form').submit();">Log Out</a>
                    </form>
                </div>

            </nav>
        </div>
        <!-- Main Content -->
        <main class="flex-1 ">
            <div>
                <div class="flex flex-col flex-1 overflow-hidden ">
                    <nav class="flex items-center justify-between p-4 bg-white shadow-lg h-20">
                        <i class="fa-solid fa-bars"></i>
                        <div class="relative w-72">
                            <input type="text" placeholder="Search..."
                                class="w-full px-4 py-2 pr-10 rounded-full border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500" />
                            <i
                                class="fa-solid fa-magnifying-glass absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-500"></i>
                        </div>
                </div>
                <div class="p-8">{{ $MainContent }}</div>
            </div>

            <main />


    </div>


</body>

</html>
