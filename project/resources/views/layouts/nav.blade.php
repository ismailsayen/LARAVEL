<nav class="bg-custom-gray border-gray-200  dark:bg-gray-900">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <img src="https://e7.pngegg.com/pngimages/764/304/png-clipart-laravel-black-logo-tech-companies.png"
            class=" w-[150px]" alt="Flowbite Logo" />
        <button data-collapse-toggle="navbar-default" type="button"
            class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
            aria-controls="navbar-default" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M1 1h15M1 7h15M1 13h15" />
            </svg>
        </button>
        <div class="hidden w-full md:block md:w-auto" id="navbar-default">
            <ul
                class="font-medium flex items-center flex-col  md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-200 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-gray-menu dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                <li class="p-3">
                    <a href="{{ route('publications.index') }}"
                        class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white md:dark:text-blue-500"
                        aria-current="page">Home</a>
                </li>
                <li class="p-3">
                    <a href="{{ route('profiles.index') }}"
                        class="block py-2 px-3 text-neutral-200 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Tous
                        les Profiles</a>
                </li>
                <li class="p-3">
                    <a href="{{ route('publications.create') }}"
                    class="block py-2 px-3 text-neutral-200 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">
                    Ajouter une Publication
                </a>
                </li>
                <li class="p-3">
                    <a href="#"
                        class="block py-2 px-3 text-neutral-200 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Pricing</a>
                </li>
                @auth
                    <div class="dropdown p-3">
                        <button class="btn bg-slate-400 flex items-center dropdown-toggle" type="button"
                            id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            <p>{{ auth()->user()->name }}</p>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li class="text-center">
                                <a href="{{ route('login.logout') }}" class="text-red-600">
                                    Se déconnecter
                                </a>
                            </li>
                        </ul>
                    </div>
                @endauth
                @guest
                    <li class="p-3">
                        <a href="{{ route('login') }}"
                            class="block p-2 text-neutral-200 bg-red-600 rounded hover:bg-red-700 hover:text-white">
                            Se connecter
                        </a>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
