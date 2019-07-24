<!doctype html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
  </head>
  <body class="font-sans antialiased text-black leading-tight flex flex-wrap justify-center">
    <div id="app" class="w-full md:w-2/3 lg:w-1/2 my-8 mx-4">
      @yield('body')
    </div>

    <footer class="w-full flex flex-wrap mt-16">
      <section class="w-full flex justify-center">
        <img src="{{ asset('storage/ceo.jpg') }}" 
          class="w-full md:w-1/3 lg:w-1/5" />
      </section>

      <p class="w-full block text-center">
        Copyright Murica 2019
      </p>
    </footer>
    
    <script src="{{ mix('js/app.js') }}"></script>
  </body>
</html>
