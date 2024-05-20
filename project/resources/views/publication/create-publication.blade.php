<x-master location="Ajouter Pub">
    @if ($errors->any())
        <x-alert text="red">
            <h6>Errors: 😢</h6>
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </x-alert>
    @endif
    <div class="flex w-full flex-col items-center justify-center h-screen dark">
        <h2 class="text-2xl font-bold text-gray-200 mb-7">Ajouter une nouvelle Publication</h2>
        <div class="w-full max-w-md bg-gray-800 rounded-lg shadow-md p-6 border  border-neutral-200">
            <form class="flex flex-col" method="POST" action="{{ route('publications.store') }}" enctype="multipart/form-data">
                @csrf
                <input
                    class=" text-gray-200 border-0 rounded-md p-2 my-7 focus:bg-gray-600 focus:outline-none focus:ring-1 focus:ring-blue-500 transition ease-in-out duration-150"
                    type="file" name="image" />

                    <div class="flex space-x-4 mb-7">
                    <input placeholder="title"
                        class="bg-gray-700 text-gray-200 border-0 rounded-md p-2 w-full focus:bg-gray-600 focus:outline-none focus:ring-1 focus:ring-blue-500 transition ease-in-out duration-150"
                        type="text" name="title" value="{{ old('title') }}" />
                </div>

                <textarea name="description" rows="4"
                    class="block p-2.5 w-full text-sm text-neutral-300 bg-gray-700 rounded-lg border border-gray-600 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Write a description About youre Pub...">{{ old('description') }}</textarea>

                <button
                    class="bg-gradient-to-r from-indigo-500 to-blue-500 text-white font-bold py-2 px-4 rounded-md mt-4 hover:bg-indigo-600 hover:to-blue-600 transition ease-in-out duration-150"
                    type="submit">
                    Ajouter
                </button>
            </form>
        </div>
    </div>

</x-master>
