<!DOCTYPE html>
<html lang="en">
@include('layout/head')

<body>
    @include('/layout/navbar')
    @yield('content')
    @include('layout/footer')
</body>

</html>
