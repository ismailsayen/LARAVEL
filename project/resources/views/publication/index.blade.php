<x-master location="Publications">

        <div class=" w-11/12 bg-gray-700 flex flex-col items-center mx-auto my-3">
            @foreach ($publications as $publication)
                <x-pub-card :publication="$publication" />
            @endforeach
        </div>


</x-master>
