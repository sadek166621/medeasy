<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Medic</title>

    <!-- favicon -->
    <link rel="shortcut icon" href="{{ asset('FrontEnd') }}/assect/img/logo/logo.png" type="image/x-icon">

    {{-- <----- End Favicon ------> --}}

{{-- ----------------------Style----------------------- --}}

    @include('FrontEnd.include.style')

    {{-- ---------------End Style ------------------ --}}


</head>

<body>

    <!-- Header Part Start -->
    @include('FrontEnd.include.header')
    <!-- Header Part End -->

    <!-- Body Part Start -->
    <main>
        @yield('content')
    </main>
    <!-- Body Part End -->

    <!-- Footer Start -->
    @include('FrontEnd.include.footer')
    <!-- Footer End -->

    {{-- ---------------- Js ----------------- --}}

    @include('FrontEnd.include.script')
    @stack('js')

    {{-- ----------------Js End ------------- --}}

</body>

</html>
