<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Blog</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    {{--<link rel="stylesheet" href="css/bootstrap.min.css">--}}
    {{--<link rel="stylesheet" href="css/bootstrap.css">--}}

    <!-- Custom styles for this     template -->
    @yield('css')
    <link href="/css/blog.css" rel="stylesheet">

</head>

<body>

@include('layouts.nav');
        <div class="container">
            @yield('content')
        </div>
@yield('scripts')
@include('layouts.footer');

</body>
</html>
