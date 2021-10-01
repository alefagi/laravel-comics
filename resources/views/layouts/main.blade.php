<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Laravel Comics | @yield('title')</title>
  <link rel="stylesheet" href="{{ asset('css/app.css')}}">
</head>
<body>
  @include('includes.header')

  <main>
    <div class="jumbo"></div>

    @yield('content')
  </main>
  
  @include('includes.footer')
  
  <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>