<!doctype html>
<html class="no-js" lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> Study - Academic Website Template for School & College </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @livewireStyles
    <!-- favicon -->
    <x-favicon />
    <x-styles />
    @stack('styles')
</head>

<body>

    <x-header />
    <!-- End of Header Area -->
    {{ $slot }}

    <x-footer />

    @livewireScripts
    <x-scripts />
    @stack('scripts')
</body>

<!-- Mirrored from htmldemo.net/study/study/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 28 Jul 2024 23:48:56 GMT -->

</html>