<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    
    @include('partials.header')

</head>
<body>
    <div id='app' class="page-layout">
        @yield('content')
    </div>

    @include('partials.footer')

</body>
</html>
