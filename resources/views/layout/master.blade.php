<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel App</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            font-family: 'Raleway', sans-serif;
            height: 100vh;
            margin: 0;
        }
    </style>

    @yield('styles')
</head>
<body>
    <div class="container-fluid">
     
        <h1 id="app"></h1>

        <div class="container">
            @yield('content')    
            @yield('footer')

            {{--  Load Scripts  --}}
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
            <script src="https://unpkg.com/vue"></script>

            @yield('scripts')
            @yield('vue')

            <script>
                var app = new Vue({
                    el: '#app',
                    data: {
                        message: 'Hello FROM Vue JS!'
                    }
                })
            </script>
        </div><!-- container -->
        
    </div><!-- container-fluid -->
</body>
</html>