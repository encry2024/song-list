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
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
</head>
<body class="bg-primary">

    @yield('content')

    <script src={{ asset('/assets/startbootstrap-sb-admin-gh-pages/dist/js/scripts.js') }} type="text/javascript"></script>
</body>
</html>