<x-master>
    @empty($profiles)
        <x-alert text="red">
            error alert!
        </x-alert>
    @else
        <div class="flex justify-between items-center">

            <nav aria-label="Page navigation example">
                <ul class="flex items-center -space-x-px h-10 text-base">
                    <li>
                        @if ($profiles->previousPageUrl())
                            <a href="{{ $profiles->previousPageUrl() }}"
                                class="flex items-center justify-center px-4 h-10 ms-0 leading-tight text-gray-500 bg-gray-800 border border-e-0 border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                <span class="sr-only">Previous</span>
                                <svg class="w-3 h-3 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 1 1 5l4 4" />
                                </svg>
                            </a>
                        @endif
                    </li>

                    <li>
                        @if ($profiles->nextPageUrl())
                            <a href="{{ $profiles->nextPageUrl() }}"
                                class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-gray-800 border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                <span class="sr-only">Next</span>
                                <svg class="w-3 h-3 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="m1 9 4-4-4-4" />
                                </svg>
                            </a>
                        @endif
                    </li>
                </ul>
            </nav>
            <a href="{{route('profiles.create')}}">
                <button class="bg-gray-800 border border-neutral-200  text-neutral-400 p-3 my-2  hover:bg-gray-400 hover:text-neutral-700"> ajouter +</button>
            </a>
        </div>
        <div class="grid grid-cols-4 gap-5">
            @foreach ($profiles as $item)
                <x-profile-card :profile="$item" />
            @endforeach
        </div>


    @endempty
</x-master>
