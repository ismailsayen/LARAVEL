@props(['publication'])
<div class="max-w-sm p-1  my-3 bg-gray-500 border border-gray-700 rounded-lg shadow ">
    <div class="w-full flex  justify-end relative">
        <span class="font-bold p-1 rounded-full cursor-pointer" type="button" id="dropdownMenuButton1"
            data-bs-toggle="dropdown" aria-expanded="false">
            ...
        </span>
        <ul class="dropdown-menu absolute hidden bg-white border rounded-md shadow-md text-center"
            aria-labelledby="dropdownMenuButton1">

            <li>
                <form action="{{ route('publications.edit', $publication->id) }}" method="GET">
                    @csrf
                    <button class="inline-block py-2 text-blue-400 rounded-full text-sm font-semibold">
                        Modifier
                    </button>
                </form>
            </li>
            <li>
                <a class="dropdown-item" href="#">
                    <form action="{{ route('publications.destroy', $publication->id) }}" method="POST">
                        @method('delete')
                        @csrf
                        <button onclick="return confirm('vous etes sur de le supprimer')" class="inline-block py-2  rounded-full text-sm font-semibold text-red-700">
                            Supprimer
                        </button>
                    </form>
                </a>
            </li>
        </ul>
    </div>

    <h5 class="mb-2 text-2xl  font-semibold tracking-tight text-white">{{ $publication->title }}</h5>

    <p class="mb-2 text-justify font-normal text-neutrale-400 overflow-hidden ">
        {{$publication->description }}</p>
    <div class="w-full flex justify-between mt-3">

    </div>
    <hr>
    @if ($publication->image)
    <img class="w-full h-1/2 rounded-lg " src="{{ asset('storage/' . $publication->image) }}"
    alt="{{ $publication->title }}">
    @else

    @endif
    <small class="float-right"> Publiée :{{ $publication->created_at }}</small>
</div>
