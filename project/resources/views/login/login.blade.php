<x-master location="login">
    <div class="flex w-full flex-col items-center justify-center h-screen ">
        <h2 class="text-2xl font-bold text-gray-200 mb-7">Ajouter</h2>
        <div class="w-full max-w-md bg-gray-800 rounded-xl shadow-md p-6 border">
            <form class="flex flex-col" method="POST" action="{{ route('login.store') }}">
                @csrf
                <input placeholder="Email"
                class="bg-gray-700 text-gray-200 border-0 rounded-md p-2 mb-2 focus:bg-gray-600 focus:outline-none focus:ring-1 focus:ring-blue-500 transition ease-in-out duration-150"
                type="email" name='email' value="{{ old('email') }}" />
                @error('email')
                    <p class="font-mono text-red-600">{{$message}}</p>
                @enderror

                <input placeholder="Password"
                    class="bg-gray-700 text-gray-200 border-0 rounded-md p-2 mb-7 focus:bg-gray-600 focus:outline-none focus:ring-1 focus:ring-blue-500 transition ease-in-out duration-150"
                    type="password" name="password" value="{{ old('password') }}" />

                <button
                    class="bg-gradient-to-r from-indigo-500 to-blue-500 text-white font-bold py-2 px-4 rounded-md mt-4 hover:bg-indigo-600 hover:to-blue-600 transition ease-in-out duration-150"
                    type="submit">
                    Yalla!!
                </button>
            </form>
        </div>
    </div>

</x-master>
