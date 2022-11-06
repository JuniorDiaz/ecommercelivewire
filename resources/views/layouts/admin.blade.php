<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titleHead')</title>
    <link rel="stylesheet" href="{{ asset('admin/assets/css/base.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/addons.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/addons.css') }}" type="text/css">
    @vite(['node_modules/@fortawesome/fontawesome-free/css/all.css', 'resources/views/layouts/partials/admin/assets/css/style.css', 'node_modules/jquery-toast-plugin/src/jquery.toast.css'])
    <!-- endinject -->
    <link rel="shortcut icon" href="#" />
    @livewireStyles
</head>

<body>
    <!DOCTYPE html>
    <html lang="en">


    <div class="container-scroller">
        <!-- navbar.html -->
        @livewire('admin.partials.nav-bar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:config -->
            @livewire('admin.partials.configs')
            <!-- partial -->
            <!-- links -->
            @livewire('admin.partials.links')
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    @yield('content')
                </div>
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                <footer class="footer">
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2018.
                            All rights reserved.</span>
                        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made
                            with <i class="far fa-heart text-danger"></i></span>
                    </div>
                </footer>
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->

    </div>
    <!-- container-scroller -->

    <!-- plugins:js -->
    <script src="{{ asset('admin/assets/js/base.js') }}" type="application/javascript"></script>
    <script src="{{ asset('admin/assets/js/vendor.bundle.addons.js') }}" type="application/javascript"></script>
    @vite(['resources/views/layouts/partials/admin/assets/js/off-canvas.js', 'resources/views/layouts/partials/admin/assets/js/hoverable-collapse.js', 'resources/views/layouts/partials/admin/assets/js/misc.js', 'resources/views/layouts/partials/admin/assets/js/settings.js', 'resources/views/layouts/partials/admin/assets/js/dashboard.js', 'node_modules/jquery-toast-plugin/src/jquery.toast.js'])
    <script>
        window.addEventListener('toast', event => {
            $.toast({
                heading: event.detail.tipo,
                text: event.detail.texto,
                icon: event.detail.tipo,
                position: 'top-right',
                loader: true
            })
        });
    </script>
    @livewireScripts
    @stack('scripts')
    @yield('script')
</body>

</html>
