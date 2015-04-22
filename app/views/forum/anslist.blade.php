<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Answer</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
</head>


<body>
<div class="navbar navbar-inverse navbar-fixed-top" style="height:10px">
    <div class="navbar-inner">
        <div class="container">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <a class="navbar-brand" href="#" style="margin-top:10px">Demo Application</a>


            <ul class="nav navbar-nav navbar-right" style="margin-top:10px">
                <li><a href="/register">Register</a></li>
               
            </ul>



        </div>
    </div>
</div>
 
<br><br>  <br><br>    
<div class="container-fluid"><br>
  <div class="row">
      <div class="col-md-12">
          <div class="panel panel-primary">
              <div class="panel-body">
                  <div class="panel panel-default" style="width:300px;margin:20px;cursor:pointer;background-color:#00334C;box-shadow:7px 7px 7px #474747">
                    <div class="panel-body"><a href="/askques">Ask Questions</a></div>
                  </div>
                    <div class="panel panel-default" style="width:300px; margin:20px;cursor:pointer;background-color:#00334C;box-shadow:7px 7px 7px #474747">    
                      <div class="panel-body"><a href="/logout">Logout</a></div>
                    </div> 
                        <div class="col-md-8 col-md-offset-4" style="margin-top:-150px">
                          <div class="panel panel-primary">
                              <div class="panel-body" style="background-color:#D4D8D1;">
                                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                       
                                    </div>
                            
                         
<div class="form-group">
<?php 
                $qid = $_GET['qid'];
                $question = Questions::find($qid);
                if($question){
                  echo $question->question;
                }

             $answers = Answer::where('q_id','=',$qid)->get();   
?>


          <div class="panel-heading"><h2>view all answers</h2></div><br>    
          <div class="form-group">
@foreach($answers as $answer)
             <ul class="list-group">
                 <li class="list-group-item">
                 {{$answer->ans}} 
                  <small>Posted by</small> <b>{{User::find($answer->user_id)->username}}</b>
                 <small> on </small>{{$answer->created_at; }}
                 </a>
                
                 </li> 
             </ul>  
 @endforeach 
          </div>
</div>
{{ Form::close()}}
 </div>   
   </div>    
      </div>
     
   </div>
</div>

    <div class="cleaner">&nbsp;</div>
 </div>
</div>
</div> 

</body>
</html>
