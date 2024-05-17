@props(['text'])

<div id="alert" class="flex items-center p-4 mb-4 text-sm text-{{$text}}-800 rounded-lg bg-{{$text}}-400 dark:bg-gray-800 dark:text-{{$text}}-400"
    role="alert">
    <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
        viewBox="0 0 20 20">
        <path
            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
    </svg>
    <span class="sr-only">Info</span>
    <div class="flex-1">
        <span class="font-medium">{{ $slot }}</span>
    </div>
    <svg id="closeAlert" class="flex-shrink-0 inline w-4 h-4 cursor-pointer" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
        viewBox="0 0 20 20">
        <path fill-rule="evenodd" d="M10 8.586l4.95-4.95a1 1 0 0 1 1.414 1.414L11.414 10l4.95 4.95a1 1 0 0 1-1.414 1.414L10 11.414l-4.95 4.95a1 1 0 0 1-1.414-1.414L8.586 10 3.636 5.05a1 1 0 0 1 1.414-1.414L10 8.586z" clip-rule="evenodd"/>
    </svg>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const closeAlert = document.getElementById('closeAlert');
        const alert = document.getElementById('alert');

        closeAlert.addEventListener('click', function () {
            alert.style.display = 'none';
        });
    });
</script>
