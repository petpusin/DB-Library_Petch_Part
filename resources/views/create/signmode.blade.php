
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Sign Mode</title>

  <!-- Bootstrap core CSS -->
  <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="{{ asset('css/blog-master.css')}}" rel="stylesheet">
  <link href="{{ asset('css/signmode.css')}}" rel="stylesheet">

  <!-- FROM GOOGLE FONT -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">

</head>

<body>
 
<div class="container">

<div class="cate-box d-flex align-items-center justify-content-center">
<div class="catepreview">
  <a href="{{ route('admin.login') }}">
    <img src="/img/CUSTO-ICON.png"  alt="">
    <hr>
    <div class ="namepd"><a href="{{ route('admin.login') }}">FOR CUSTOMER</div>
  </a>
  </div>

  
<div class="catepreview">
  <a href="{{ route('register') }}">
    <img src="/img/EMPLO-ICON.png" alt="">
    <hr>
    <div class ="namepd"><a href="{{ route('register') }}">FOR EMPLOYEE</div>
  </a>
  </div>
  </div>
 
</body>

</html>
