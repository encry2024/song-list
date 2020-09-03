<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>StunnerYPP - Song List</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/startbootstrap-sb-admin-gh-pages/dist/css/styles.css') }}">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/fixedheader/3.1.7/css/fixedHeader.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.5/css/responsive.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</head>
<body class="sb-nav-fixed">

    @include('includes.nav')

    <div id="layoutSidenav">
        @include('includes.side-nav')

        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    @if (request()->session()->has('flash_success'))
                        <div class="alert alert-success mt-5" role="alert">{{ request()->session()->get('flash_success') }}</div>
                    @endif
                    @yield('content')
                </div>
            </main>
        </div>
    </div>
    @yield('script')
    <script src="{{ asset('/assets/startbootstrap-sb-admin-gh-pages/dist/js/scripts.js') }}" type="text/javascript"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
</body>
</html>