<html >
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Admin Login</title>
    <meta name="viewport" content="width=device-width,initial-scale=1" />


{{ HTML::style('http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css') }}
{{ HTML::style('css/style.css') }}
{{ HTML::script('http://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js') }}
{{ HTML::script('http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js') }}
   
<link href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" type="text/css" rel="stylesheet">
<script src="/media/js/jquery.js"></script>
<script src="/media/js/jquery-ui.min.js"></script>
  
</head>
<body>
<h1>Academic Education</h1>
<nav class="navbar navbar-inverse">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Brand</a>
    </div>

   
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Academics</a></li>
        <li><a href="#">Faculties</a></li>
        <li class="dropdown "><a href="#" id="drop1" data-toggle="dropdown" class="dropdown-toggle" role="button">About <b class="caret"></b></a>
            <ul role="menu" class="dropdown-menu" aria-labelledby="drop1">
                <li role="presentation"><a href="#" role="menuitem">Overview</a></li>
                <li role="presentation"><a href="#" role="menuitem">Team Bios</a></li>
                <li role="presentation"><a href="#" role="menuitem">Customers</a></li>
                <li role="presentation"><a href="#" role="menuitem">Careers</a></li>
            </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="register"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
  </div>
</nav>
<div class="container">
<div class="row">
    <div class="col-md-3">
      @include('posting.acc') 
    </div>
    <div class="col-md-6"> 
    <div class="wrapper">
    <img src="images/images2.jpg" width="500px";alt="400px">
      <p>The University of Mumbai (known earlier as University of Bombay) is one of the oldest and premier Universities in India. It was established in 1857 consequent upon "Wood's Education Dispatch", and it is one amongst the first three Universities in India. 
     As a sequel to the change in the name of the city from Bombay to Mumbai, the name of the University has been changed from "University of Bombay" to "University of Mumbai", vide notification issued by the Government of Maharashtra and published in the Government Gazette dated 4th September, 1996.
</p>
</div>
    </div>
    <div class="col-md-3"> 
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
    </div>
</div>
</div>
</body>
</html>
