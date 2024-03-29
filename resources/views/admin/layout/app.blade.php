<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Spica Admin</title>
    <link rel="stylesheet" href="{{ asset('templateAdmin/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('templateAdmin/vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ asset('templateAdmin/css/style.css') }}">
    <link rel="shortcut icon" href="{{ asset('templateAdmin/images/favicon.png') }}" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat&display=swap">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div id="app">
        <div class="container-scroller d-flex">
            @include('admin.layout.sidebar')
            <div class="container-fluid page-body-wrapper">
                @include('admin.layout.navbar')
                <div class="main-panel">
                    <div class="content-wrapper">
                        <router-view></router-view>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('templateAdmin/vendors/js/vendor.bundle.base.js') }}"></script>
    <script src="{{ asset('templateAdmin/vendors/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('templateAdmin/js/off-canvas.js') }}"></script>
    <script src="{{ asset('templateAdmin/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('templateAdmin/js/template.js') }}"></script>
    <script src="{{ asset('templateAdmin/js/dashboard.js') }}"></script>
</body>

</html>
