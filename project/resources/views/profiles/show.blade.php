<x-master location='Profile'>
    <div class="max-w-sm p-6 bg-gray-500 border border-gray-700 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <h5 class="mb-2 text-2xl font-semibold tracking-tight text-white">{{ $profile->name }}</h5>
        <img class="w-full h-1/2 rounded-lg " src="{{ asset('storage/' . $profile->image) }}" alt="{{ $profile->name }}">
        <p class="my-2 font-normal text-neutrale-400 text-justify">{{ $profile->bio }}</p>
        <p class="mb-3 font-bold text-neutral-900">{{ $profile->email }}</p>
        <div class="flex justify-between">
            <p>Le: {{ $profile->created_at->format('d-m-y') }}</p>
            <p>Le: {{ $profile->updated_at->format('d-m-y') }}</p>
        </div>
        <a href="{{ route('profiles.index') }}"
            class="inline-flex font-medium items-center text-blue-400 hover:underline">
            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="20" height="20" viewBox="0 0 50 50">
                <path
                    d="M 24.962891 1.0546875 A 1.0001 1.0001 0 0 0 24.384766 1.2636719 L 1.3847656 19.210938 A 1.0005659 1.0005659 0 0 0 2.6152344 20.789062 L 4 19.708984 L 4 46 A 1.0001 1.0001 0 0 0 5 47 L 18.832031 47 A 1.0001 1.0001 0 0 0 19.158203 47 L 30.832031 47 A 1.0001 1.0001 0 0 0 31.158203 47 L 45 47 A 1.0001 1.0001 0 0 0 46 46 L 46 19.708984 L 47.384766 20.789062 A 1.0005657 1.0005657 0 1 0 48.615234 19.210938 L 41 13.269531 L 41 6 L 35 6 L 35 8.5859375 L 25.615234 1.2636719 A 1.0001 1.0001 0 0 0 24.962891 1.0546875 z M 25 3.3222656 L 44 18.148438 L 44 45 L 32 45 L 32 26 L 18 26 L 18 45 L 6 45 L 6 18.148438 L 25 3.3222656 z M 37 8 L 39 8 L 39 11.708984 L 37 10.146484 L 37 8 z M 20 28 L 30 28 L 30 45 L 20 45 L 20 28 z">
                </path>
            </svg>

        </a>
    </div>
</x-master>
