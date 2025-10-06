<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
   @include('partials.header')
</head>

<body>

@include('partials.menu')
<div class="main-page">
@yield('content')
@include('partials.footer-menu')
</div>

@include('partials.footer')
   
</body>
</html>