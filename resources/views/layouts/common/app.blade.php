<!DOCTYPE html>

<!-- Head -->
@include('layouts.common.head')

<body>
    <main id="app">
        <!-- Navbar -->
        @include('layouts.user.navbar')

        <!-- Main -->
        @yield('main')
    </main>

    <!-- Scripts -->
    @include('layouts.common.scripts')
</body>

</html>