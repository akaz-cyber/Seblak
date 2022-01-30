<!DOCTYPE html>
<html lang="en">
@include('layouts.head')

<body id="home">

  @include('layouts.header')

   @yield('content')

   @include('layouts.footer')

   @include('layouts.js')
</body>
</html>
