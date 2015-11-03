<!DOCTYPE html>
<html lang="es"> 
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">  
        <title></title>
        @include('layout.main.libraries.style')
    </head>
    <body>
    <div class="sec">
        <div id="main" class="main">
            <div class="container">
            @yield('content')
            </div>
        </div>
    </div>
    @include('layout.main.libraries.script')
    </body>
</html>
