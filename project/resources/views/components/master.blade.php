@props(['location'])
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Social Network | {{$location}} </title>
    @vite('resources/css/app.css')
</head>
<style>
    body {
        background-color: #131316;
    }
</style>

<body class="text-neutral-100 ">
    @include('layouts.nav')
    <main class="bg-master w-[98%] mx-auto my-2 p-2  rounded-xl">
        <div>
            @include('layouts.flashbag')
        </div>
        {{ $slot }}
    </main>
    @include('layouts.footer')
</body>

</html>
