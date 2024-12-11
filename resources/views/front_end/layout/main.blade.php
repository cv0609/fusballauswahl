<!DOCTYPE html>
<html lang="de">
@include('front_end.layout.head')
<body>
@include('front_end.layout.header')
@yield('content')
@include('front_end.layout.footer')
@include('front_end.layout.script')
@yield('custom-script')
</body>
</html>


