<x-master location="Modifier profile">
    @if ($errors->any())
    <x-alert text="red">
            <h6>Errors: 😢</h6>
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </x-alert>
    @endif
<div class="flex w-full flex-col items-center justify-center h-screen dark">
    <h2 class="text-2xl font-bold text-gray-200 mb-7">Modifier Profile</h2>
    <div class="w-full max-w-md bg-gray-800 rounded-lg shadow-md p-6 border  border-neutral-200">
        <form class="flex flex-col" method="POST" action="{{ route('edit') }}">
            @method("PUT")
            @csrf
            <div class="flex space-x-4 mb-7">
                <input placeholder="Name"
                    class="bg-gray-700 text-gray-200 border-0 rounded-md p-2 w-full focus:bg-gray-600 focus:outline-none focus:ring-1 focus:ring-blue-500 transition ease-in-out duration-150"
                    type="text" name="name" value="{{$profile->name}}"/>
            </div>

            <input placeholder="Email"
                class="bg-gray-700 text-gray-200 border-0 rounded-md p-2 mb-7 focus:bg-gray-600 focus:outline-none focus:ring-1 focus:ring-blue-500 transition ease-in-out duration-150"
                type="email" name='email' value="{{$profile->email}}"/>

            <input placeholder="Password"
                class="bg-gray-700 text-gray-200 border-0 rounded-md p-2 mb-7 focus:bg-gray-600 focus:outline-none focus:ring-1 focus:ring-blue-500 transition ease-in-out duration-150"
                type="password" name="password"/>
            <input placeholder="Confirmer votre Password"
                class="bg-gray-700 text-gray-200 border-0 rounded-md p-2 mb-7 focus:bg-gray-600 focus:outline-none focus:ring-1 focus:ring-blue-500 transition ease-in-out duration-150"
                type="password" name="password_confirmation" />

            <textarea name="bio" rows="4"
                class="block p-2.5 w-full text-sm text-neutral-300 bg-gray-700 rounded-lg border border-gray-600 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Write your thoughts here...">{{$profile->bio}}</textarea>

            <button
                class="bg-gradient-to-r from-indigo-500 to-blue-500 text-white font-bold py-2 px-4 rounded-md mt-4 hover:bg-indigo-600 hover:to-blue-600 transition ease-in-out duration-150"
                type="submit">
                Modifier
            </button>
        </form>
    </div>
</div>

</x-master>
