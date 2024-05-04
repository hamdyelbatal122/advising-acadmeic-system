
<!DOCTYPE html>
<html lang="en">

<head>
    <!--=====================================
                META-TAG PART START
    =======================================-->
    <!-- REQUIRED META -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        @yield('title')
    </title>
    <!-- FAVICON -->
    <link rel="SHORTCUT ICON" href="{{asset('assets/images/fav.png')}}">
    <!-- FONTS -->

    <link rel="stylesheet" href="{{asset('assets/css/opensans.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">

    <!-- CUSTOM -->
    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/login.css')}}">
    <!--=====================================
                CSS LINK PART END
    =======================================-->
</head>

<body> 

    @yield('content')

</body>

</html>