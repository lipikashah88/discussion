<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Answer</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
</head>


<body>
<div class="container-fluid"><br>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-primary">
                <div class="panel-body">
                    <div class="col-md-12">
                          <div class="panel panel-primary">
                              <div class="panel-body" style="background-color:#D4D8D1;">
                                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                        <ul class="nav navbar-nav navbar-right" id="top-nav">
                                        <li class="hidden">  <a href="#page-top"></a> </li>   
                                        <li><a href="/logout" style="font-weight:bold;color:black"><span class="glyphicon glyphicon-log-out"></span> Logout</a> </li>
                                        <li><a href="/askques" style="font-weight:bold;color:black">Ask Questions</a></li>
                                         </ul>
                                    </div>
                                </div>     
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
                 {{$answer->ans}}>
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

    <div class="cleaner">&nbsp;</div>
 </div>
</div>
</div> 

</body>
</html>
