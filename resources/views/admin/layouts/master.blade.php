
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Blog Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="/css/blog.css" rel="stylesheet">
</head>

<body>
@include('admin.layouts.nav')



<div class="blog-header">
    <div class="container">
        <h1 class="blog-title">ADMIN PANEL</h1>
        <p class="lead blog-description">Hello super-mega admin!</p>
    </div>
</div>

<div class="container">

    <div class="row">

        @yield('content')

        @include('admin.layouts.sidebar')


    </div><!-- /.row -->

</div><!-- /.container -->

@include('admin.layouts.footer')


</body>
</html>
