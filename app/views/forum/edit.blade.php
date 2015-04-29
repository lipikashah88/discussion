<html >
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Questions</title>
    <meta name="viewport" content="width=device-width,initial-scale=1" />


{{ HTML::style('http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css') }}
{{ HTML::style('css/simple.css') }}
{{ HTML::script('http://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js') }}
{{ HTML::script('http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js') }}
   
<link href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" type="text/css" rel="stylesheet">
<script src="/media/js/jquery.js"></script>
<script src="/media/js/jquery-ui.min.js"></script>
<script src="tinymce/js/tinymce/tinymce.min.js"></script>
<script type="text/javascript">
tinymce.init({
    selector: "textarea",
    plugins: [
        "advlist autolink lists link image charmap print preview anchor",
        "searchreplace visualblocks code fullscreen",
        "insertdatetime media table contextmenu paste"
    ],
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
});



</script>
</head>
<body>
<div class="navbar navbar-inverse navbar-fixed-top" style="height:10px">
    <div class="navbar-inner">
        <div class="container">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span></a>

                <a class="navbar-brand" href="#" style="margin-top:10px;font-size:20px">Demo Application</a>


            <ul class="nav navbar-nav navbar-right" style="margin-top:10px">
                <li><a href="/register">Register</a></li>
               
            </ul>



        </div>
    </div>
</div>
 
<br><br> 
<div class="container-fluid">
    <div class="row">
    <br><br>
        <div class="col-md-12">
            <div class="panel panel-primary">
                <div class="panel-body">
                    <div class="panel panel-default" style="width:300px;margin:20px;cursor:pointer;background-color:#00334C;box-shadow:7px 7px 7px #474747">
                        <div class="panel-body"><a href="/readques">All Questions</a></div>
                    </div>
                            <div class="panel panel-default" style="width:300px; margin:20px;cursor:pointer;background-color:#00334C;box-shadow:7px 7px 7px #474747">    
                                <div class="panel-body"><a href="/logout">Logout</a></div>
                            </div> 
          
                            <br><br><br>
                                <div class="col-md-7 col-md-offset-4" style="margin-top:-150px">
                                    <div class="center span4 well">
                                        <legend>Questions</legend>
                                            <div class="form-group">
                        {{Form::open(array('action'=>'QuesController@updateQ','id'=>'contactform','file'=>true,'method' => 'post'))}}
                                                <div class="input-group">
                                                {{Form::select('subject', array('0' => 'Select Subject','1' => 'Maths', '2' => 'Science', '3' => 'English'))}}
                                                </div> 

                                            </div>
                        <div class="form-group">
                            <div class="input-group">
                             
                                <textarea name="question"  id="question" style="width:100%">
                            <?php
                           $qid = $_GET['qid'];
                           $ques = Questions::find($qid);
                           echo $ques->question;
                           ?>
                                </textarea> 
                                {{ Form::submit('Post',array('id'=>'submit','class'=>'btn btn-primary btn-block'))}}
                 
                               
                             <input type="hidden" name="Language" id="Language" value= '{{$ques->id}}'>
                        </div>
                           @if (Session::has('message'))
                               <div class="alert alert-success">Your question has been posted</div>
                           @endif


  {{ Form::close()}}
                                    </div>
                                </div>
                </div>
   
            </div>  
        </div>
    </div>
</div>  
</div>
</div>
</div>
</body>
</html>