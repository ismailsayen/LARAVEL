@props(['profile'])
<div class="max-w-sm p-1 h-[500px]  bg-gray-500 border border-gray-700 rounded-lg shadow ">
    <div class="w-full flex  justify-end relative">
        <span class="font-bold p-1 rounded-full cursor-pointer" type="button" id="dropdownMenuButton1"
            data-bs-toggle="dropdown" aria-expanded="false">
            ...
        </span>
        <ul class="dropdown-menu absolute hidden bg-white border rounded-md shadow-md text-center" aria-labelledby="dropdownMenuButton1">
            <li>
                <a href="{{ route('profiles.show', $profile->id) }}">
                    <span class="inline-block p-3 text-gray-700 rounded-full text-sm font-semibold">
                        Voir tout
                    </span>
                </a>
            </li>
            <li>
                <form action="{{ route('profiles.edit', $profile->id) }}" method="GET">
                    @csrf
                    <button class="inline-block py-2 text-blue-400 rounded-full text-sm font-semibold">
                        Modifier
                    </button>
                </form>
            </li>
            <li>
                <a class="dropdown-item" href="#">
                    <form action="{{ route('profiles.destroy', $profile->id) }}" method="POST">
                        @method('delete')
                        @csrf
                        <button class="inline-block py-2  rounded-full text-sm font-semibold text-red-700">
                            Supprimer
                        </button>
                    </form>
                </a>
            </li>
        </ul>
    </div>

    <img class="w-full h-1/2 rounded-lg " src="{{asset('storage/'.$profile->image)}}" alt="{{$profile->name}}">
    <h5 class="mb-2 text-2xl font-semibold tracking-tight text-white">{{ $profile->name }}</h5>
    <hr>
    <small> Memre depuis: {{ $profile->created_at }}</small>
    <hr>
    <p class="mb-3 text-justify font-normal text-neutrale-400 overflow-hidden h-[90px]">
        {{ Str::limit($profile->bio, 130) }}</p>
    <div class="w-full flex justify-between mt-3">




    </div>
</div>
