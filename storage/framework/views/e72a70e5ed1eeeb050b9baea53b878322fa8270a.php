
<!doctype html>

<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width-device-width, initial-scale-1">

        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

        <title>LARAVEL</title>

        <!--Vuetify CSS-->

        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/vuetify@2.x/dist/vuetify.min.css" rel="stylesheet">
        <link href="<?php echo e(asset('css/app.css')); ?>"/>

    </head>

    <body>

        <div id="app">
          <Layout></Layout>
        </div>

    <script src="/js/app.js"></script>   

    </body>
</html>
<?php /**PATH /home/cyberun-2/Projet/CRM/resources/views/app.blade.php ENDPATH**/ ?>