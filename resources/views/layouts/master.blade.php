<html>
    <head>
        <title>App Name - @yield('title')</title>
         <!-- Latest compiled and minified CSS -->
{!! HTML::style('css/bootstrap.css') !!}
{!! HTML::style('css/bootstrap-theme.css') !!}
<!-- Optional theme -->
    </head>
    <body>
        @section('sidebar')
            <nav id = "myTab" class="navbar navbar-default">
            <div class="container-fluid">
            <a class="navbar-brand" href="/">Finance</a>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
            <li ><a href="Profit">Profit <span class="sr-only">(current)</span></a></li>
            <li ><a href="Spending?Date={{date('Y-m')}}">Spending <span class="sr-only">(current)</span></a></li>             
            </ul>
      </div>
      </nav>
        @show

        <div class="container">
            @yield('content')
        </div>
        @section('footer')
        <div class="panel panel-default">
  
  @foreach ($Budget as $Budgets)
            <div class="Budget panel-footer"> Budget: {{ $Budgets->Budget }} </div> 
            @endforeach
</div>

{!! HTML::script('//www.gstatic.com/charts/loader.js') !!}
{!! HTML::script('//code.jquery.com/jquery-1.11.3.min.js') !!}
{!! HTML::script('//code.jquery.com/jquery-migrate-1.2.1.min.js') !!}

{!! HTML::script('js/default.js') !!}

    </body>
</html>
