@include('layouts.header')

<body class="container">
    @yield('main-content')
    @include('layouts.footer')
    @stack('js')
</body>



</html>