<!DOCTYPE html>
<head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <title>Using MySQL and PHP with Google Maps</title>
    <style>
        /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
        #map {
            height: 100%;
        }
        /* Optional: Makes the sample page fill the window. */
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }
    </style>
    <link rel="stylesheet" href="{{asset('css/main.css')}}"></link>
</head>

<body>
<div class="background">
    @include('layouts.navmap')
    @yield('content')
    @include('layouts.footer')
</div>

</body>
</html>