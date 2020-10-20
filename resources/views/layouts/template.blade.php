{{-- Blade template --}}
<html lang="en" dir="ltr">
  <head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
   <link rel="stylesheet" href="{{asset('/css/app.css')}}">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.28.0/moment.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.28.0/moment-with-locales.min.js"></script>
   <title>@yield('title')</title>
  </head>
{{-- star body --}}
  <body>
{{-- include header --}}
   @include('partials.header')
{{-- end header --}}
{{-- yield main content --}}
   @yield('main_content')
{{-- end main content --}}
{{-- include footer --}}
   @include('partials.footer')
{{-- end footer --}}
  </body>
{{-- end body --}}
</html>
{{-- end html --}}
