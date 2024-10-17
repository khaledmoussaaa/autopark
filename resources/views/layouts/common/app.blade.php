<!DOCTYPE html>

<!-- Head -->
@include('layouts.common.head')

<body>
    <main id="app">
        <!-- Navbar -->
        @include('layouts.user.navbar')

        <!-- Main -->
        @yield('main')

        <!-- Footer -->
        @include('layouts.user.footer')
    </main>

    <!-- Scripts -->
    @include('layouts.common.scripts')
</body>

</html>