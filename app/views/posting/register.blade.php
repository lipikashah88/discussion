<html>
<html >
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>University</title>
    <meta name="viewport" content="width=device-width,initial-scale=1" />



{{ HTML::style('http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css') }}
{{ HTML::style('css/style.css') }}
{{ HTML::script('http://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js') }}
{{ HTML::script('http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js') }}
<script src="https://code.jquery.com/jquery.js"></script>
<link href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" type="text/css" rel="stylesheet">
<body>

 <center>
 @include('posting.header')
 <div id="content">
    <div class="container-fluid">
        <div class="row">

            <br><br><br>
            <div class="col-md-4 col-md-offset-4">
                <div class="center span4 well">
                    <legend>Register</legend>

                    {{Form::open(array('action'=>'UserController@postRegister','id'=>'contactform','file'=>true,'method' => 'post'))}}
                    <div class="form-group  @if ($errors->has('name')) has-error @endif">
                        <div class="input-group">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                            {{ Form::text('name',null,array('id'=>'name','class'=>'form-control','placeholder'=>'Enter your full Name')) }}
                        </div>  @if ($errors->has('name')) <p class="help-block">{{ $errors->first('name') }}</p> @endif</div>
                    <div class="form-group  @if ($errors->has('username')) has-error @endif">
                        <div class="input-group">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                            {{ Form::text('username',null,array('id'=>'username','class'=>'form-control','placeholder'=>'Username')) }}
                        </div> @if ($errors->has('username')) <p class="help-block">{{ $errors->first('username') }}</p> @endif</div>
                    <div class="form-group  @if ($errors->has('password')) has-error @endif">
                        <div class="input-group">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                            {{ Form::password('password',array('id'=>'password','class'=>'form-control','placeholder'=>'Password')) }}
                        </div> @if ($errors->has('password')) <p class="help-block">{{ $errors->first('password') }}</p> @endif</div>
                    <div class="form-group  @if ($errors->has('password_confirmation')) has-error @endif">
                        <div class="input-group">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                            {{ Form::password('password_confirmation',array('id'=>'password','class'=>'form-control','placeholder'=>'Confirm-Password')) }}
                        </div> @if ($errors->has('password_confirmation')) <p class="help-block">{{ $errors->first('password_confirmation') }}</p> @endif</div>
                    {{ Form::submit('Register',array('id'=>'submit','class'=>'btn btn-primary')) }}
                </div>
                @if (Session::has('message'))
               <div class="alert alert-success">Success! Well done its submitted</div>
            @endif
            </div>  

            {{ Form::close() }}
        
        </div>
    </div>


</center>
</body>
</html>