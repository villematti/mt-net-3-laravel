<!DOCTYPE htm>
<html lang="fi">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title>Document</title>
	
	<link rel="stylesheet" href="{{ elixir('css/app.css') }}" type="text/css">
	
	@yield('header')
</head>
 <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Muottinet 3.0</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="/">@lang('messages.home-page')</a></li>
            <li><a href="/projects">@lang('messages.projects-page')</a></li>
			<li class="dropdown">
			              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">@lang('messages.settings-page') <span class="caret"></span></a>
			              <ul class="dropdown-menu">
			                <li><a href="/project-types">@lang('messages.project-types-page')</a></li>
							<li><a href="/project-statuses">@lang('messages.project-statuses-page')</a></li>
							<li><a href="/task-types">@lang('messages.task-types-page')</a></li>
			              </ul>
			            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">
<div class="row">
	<div class="col-md-6 col-md-offset-3">
		@yield('content')
	</div>
</div>
		  


    </div><!-- /.container -->
	
	@yield('footer')
	<script src="{{ elixir('js/app.js') }}"></script>
</body>
</html>