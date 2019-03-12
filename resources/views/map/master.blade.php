<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
        <title>
            Laramap
        </title>

    </meta>
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    </link>

</head>
<body>
@yield('content')
    <script crossorigin="anonymous" integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s=" src="https://code.jquery.com/jquery-3.1.0.min.js">
    </script>

<script async="" defer="" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCVE6T2FWRqt4QN-lh-0MAinlEVkQ4rLuY">
</script>
<script src="{{asset('js/script.js')}}"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
</script>

@yield('js')

</body>
</html>