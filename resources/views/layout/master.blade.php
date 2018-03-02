<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Angela's website practice</title>

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <link href="css/app.css" rel="stylesheet">
  </head>

  <body>

    <div class="container">
      @include('layouts.app')
      @include('layout.nav')
    </div> 

  <main role="main" class="container">
    <div class="row">

    @yield('content')  

    @include('layout.side')

    </div><!-- /.row -->
  </main><!-- /.container -->   

    @include('layout.footer')

 
  </body>
</html>
