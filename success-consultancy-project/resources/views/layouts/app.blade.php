<!DOCTYPE html>
<html lang="en">
<head>
    <!--== META TAGS ==-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    @include('layouts.header_partial')
    <title>@yield('title')</title>

</head>
<body>
    <div class="container-fluid sb1">
        @include('layouts.navbar_partial')
    </div>

    <div class="container-fluid sb2">
        @include('layouts.sidebar_partial')
    </div>



    @include('layouts.footer_partial')
</body>
</html>
