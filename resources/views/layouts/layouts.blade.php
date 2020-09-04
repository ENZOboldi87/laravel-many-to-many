<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <title>@yield('title')</title>
  </head>
  <body>
    @include('partials.header')
    <main>
        @yield('content')
    </main>
    @include('partials.footer')
    <script src="{{asset('js/app.js')}}" charset="utf-8"></script>
  </body>
</html>
