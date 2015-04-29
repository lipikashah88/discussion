

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

<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <a class="navbar-brand" href="#">Demo Application</a></a>


            <ul class="nav navbar-nav navbar-right">
                <li><a href="/register">Register</a></li>
               
            </ul>



        </div>
    </div>
</div>
<div id="content">
    <div class="container-fluid">
        <div class="row">

            <br><br><br>
            <div class="col-md-4 col-md-offset-4">
      @if (Session::has('flash_error'))
               <div class="alert alert-danger">Your username/password combination was incorrect.</div>
            @endif
                <div class="center span4 well">
                    <legend>login</legend>

                    {{Form::open(array('action'=>'UserController@postLogin2','id'=>'contactform','file'=>true,'method' => 'post'))}}
                    <div class="form-group @if ($errors->has('username')) has-error @endif">
                        <div class="input-group">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                            {{ Form::text('username',null,array('id'=>'username','class'=>'form-control','placeholder'=>'Username')) }}
                        </div> @if ($errors->has('username')) <p class="help-block">{{ $errors->first('username') }}</p> @endif</div>
                    <div class="form-group @if ($errors->has('password')) has-error @endif">
                        <div class="input-group">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                            {{ Form::password('password',array('id'=>'password','class'=>'form-control','placeholder'=>'Password')) }}
                        </div> @if ($errors->has('password')) <p class="help-block">{{ $errors->first('password') }}</p> @endif</div>
                    {{ Form::submit('Login!',array('id'=>'submit','class'=>'btn btn-primary btn-block')) }}
                    {{ Form::close() }}
                </div>
            </div>
        </div>
</body>
