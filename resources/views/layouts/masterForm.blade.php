<html>
    <head>
        <title>App Name - @yield('title')</title>
         <!-- Latest compiled and minified CSS -->
{!! HTML::style('css/bootstrap.css') !!}
{!! HTML::style('css/bootstrap-theme.css') !!}
{!! HTML::style('css/custom.css') !!}
<!-- Optional theme -->
    </head>
    <body>
        
        @show

        <div class="container">
            @yield('content')
        </div>      
{!! HTML::script('//www.gstatic.com/charts/loader.js') !!}
{!! HTML::script('//code.jquery.com/jquery-1.11.3.min.js') !!}
{!! HTML::script('//code.jquery.com/jquery-migrate-1.2.1.min.js') !!}

{!! HTML::script('js/default.js') !!}

    </body>
</html>
