<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description"
        content="ICO Crypto is a modern and elegant landing page, created for ICO Agencies and digital crypto currency investment website.">
    <!-- Fav Icon -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{ asset('images') }}/Keeperlogo.png">
    <!-- Site Title  -->
    <title>KeeperDApp::@yield('title')</title>
    <!-- Vendor Bundle CSS -->
    <link rel="stylesheet" href="{{ asset('assets') }}/css/vendor.bundlee222.css?ver=142">
    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="{{ asset('assets') }}/css/stylee222.css?ver=142">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/theme-orangee222.css?ver=142" id="layoutstyle">
</head>

<body class="io-zinnia" style="overflow-x: unset">
    <nav class="navbar navbar-expand-lg navbar-light text-white" style="background-color: #35b753; color:white">
        <a class="navbar-brand" href="{{ url('/') }}"><span style="color:white">
                <h4><img src="{{ asset('images') }}/Keeperlogo.png" style="width:50px; height: 50px;" />KeeperDapp</h4>
            </span></a>
    </nav>

    @yield('content')

    <div class="gaps size-3x"></div>
    <nav class="navbar navbar-expand-lg navbar-light text-white" style="background-color: #28a745; color:white">
        <a class="navbar-brand" href="{{ url('/') }}"><span style="color:white">
                <h7>KeeperDapp &copy; 2020</h7>
            </span></a>
    </nav>
    <!-- JavaScript (include all script here) -->
    <script src="{{ asset('assets') }}/js/jquery.bundlee222.js?ver=142"></script>
    <script src="{{ asset('assets') }}/js/scripte222.js?ver=142"></script>
</body>

</html>
