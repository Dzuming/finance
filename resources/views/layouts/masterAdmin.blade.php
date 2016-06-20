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
        @section('sidebar')
        <nav class="navbar navbar-default">
           <div class="container-fluid">
               <div class="navbar-header"><a class="navbar-brand" href="#"><img alt="Brand" src="..."></a></div>
           </div>
       </nav>
       <div class="col-sm-2 col-md-1 sidebar">
           <ul class="nav nav-pills nav-stacked">
               <li><a href="Profit">Profit <span class="sr-only">(current)</span></a></li>
               <li><a href="Spending?Date={{date('Y-m')}}">Spending <span class="sr-only">(current)</span></a></li>
               <li><a href="insertCash">Insert Cash</a></li> 
           </ul>
       </div>
       @show
       <div class="container">
           <h2>@yield('title')</h2>
           @yield('content')
       </div>
       @section('footer')
       <div class="panel panel-default">
           <div class="panel-footer"> ver 1.0 </div> 
       </div>
       {!! HTML::script('//code.jquery.com/jquery-1.11.3.min.js') !!}
       {!! HTML::script('//code.jquery.com/jquery-migrate-1.2.1.min.js') !!}
       {!! HTML::script('js/default.js') !!}
    </body>
</html>