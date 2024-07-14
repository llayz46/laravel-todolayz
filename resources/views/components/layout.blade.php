<!doctype html>
<html lang="en" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $pageTitle }} - {{ config('app.name') }}</title>
    @vite('resources/css/app.css')
</head>
<body class="h-full bg-background transition-colors" data-darkmode-target="body" data-controller="darkmode">
    {{ $slot }}
    @if(session()->has('success'))
        <x-notification></x-notification>
    @endif
    @vite('resources/js/app.js')
</body>
</html>
