@include('template.inc.header')

<body>
    <div class="page">
        <!-- Navbar -->
        @include('template.inc.menu')
        <div class="page-wrtemplateer">
            <!-- Page body -->
            <div class="page-body">
                <div class="container-xl">
                    @include('template.inc.message')
                </div>
                @yield('content')
            </div>
            @include('template.inc.footer')
        </div>
    </div>
    <!-- Libs JS -->
    <!-- Tabler Core -->
    <script src="{{ asset('assets/dist/js/tabler.min.js') }}" defer></script>
    <script src="{{ asset('assets/dist/js/demo.min.js') }}" defer></script>
</body>

</html>
