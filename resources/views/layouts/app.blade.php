<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  {{-- <style>
    .active {
        color: rgb(21, 57, 173);
    }
  </style> --}}
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Home</title>
</head>
<body>
    @include('layouts.header')

    {{-- {app-blade.php} --}}
   @yield('content')

     @include('layouts.footer')
</div>
</body>
</html>
