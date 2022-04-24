<!DOCTYPE html>
<html lang="en">

<head>
  @include('frontend.includes.header')

</head>

<body>

  <!-- ======= Header ======= -->
  @include('frontend.includes.navbar')
  <!-- End Header -->

  @yield('content')

  

  <!-- ======= Footer ======= -->
 @include('frontend.includes.footer')

</body>

</html>