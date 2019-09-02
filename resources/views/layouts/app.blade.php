<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    
    @include('partials.header')

</head>
<body>
    <div id='app' class="page-layout">
    
        @yield('content')
    
        @include('partials.footer')
    </div>
</body>
</html>
