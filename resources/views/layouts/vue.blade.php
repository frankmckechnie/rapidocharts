<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    
    @include('partials.header')

</head>
<body>
    <div id="rapido" class="container rela-block">
        @yield('content')
    </div>

    @include('partials.footer')

</body>
</html>
