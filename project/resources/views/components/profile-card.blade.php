@props(['profile'])
<div class="max-w-sm h-[500px] p-6 bg-gray-500 border border-gray-700 rounded-lg shadow ">
    <img class="w-full h-1/2  " src="https://picsum.photos/200/300" alt="Sunset in the mountains">
    <h5 class="mb-2 text-2xl font-semibold tracking-tight text-white">{{ $profile->name }}</h5>
    <small> Memre depuis: {{ $profile->created_at }}</small>
    <p class="mb-3 text-justify font-normal text-neutrale-400">{{ $profile->bio }}</p>
    <div class="w-full flex justify-end mt-2">
        <a href="{{ route('profiles.show', $profile->id) }}">
            <span class="inline-block p-3 bg-gray-200 rounded-full text-sm font-semibold text-gray-700 mr-1 mb-1">
                voir tout
            </span>
        </a>
    </div>
</div>
