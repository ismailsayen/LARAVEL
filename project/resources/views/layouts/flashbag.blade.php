@if (session()->has('success'))
<x-alert text="blue">
    {{session('success')}}
</x-alert>
@endif
