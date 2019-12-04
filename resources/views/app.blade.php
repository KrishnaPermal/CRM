{{-- {{csrf_token()}}  --}}
<!doctype html>

<html lang="{{ str_replace('_', '-', app()->getLocale())}}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width-device-width, initial-scale-1">

        <meta name="csrf-token" content="{{csrf_token()}}">

        <title>LARAVEL</title>

        <!--Vuetify CSS-->

        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/vuetify@2.x/dist/vuetify.min.css" rel="stylesheet">
        <link href="{{ asset('css/app.css')}}"/>

    </head>

    <body>

        <div id="app">
          <Layout></Layout>
        </div>

    <script src="/js/app.js"></script>   

    </body>
</html>