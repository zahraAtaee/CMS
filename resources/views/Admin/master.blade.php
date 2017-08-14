
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <link rel="stylesheet" type="text/css" href="/css/sweetalert.css">

    <title>وب سایت فروشگاهی لاراول</title>
    <link rel="stylesheet" href="/css/admin.css">
</head>

<body>
<div id="app">
    @include('Admin.section.header');
    @yield('content')
</div>
@include('Admin.section.footer');
@include('sweet::alert');
</body>
</html>
