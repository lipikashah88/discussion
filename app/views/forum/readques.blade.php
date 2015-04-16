<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Answer</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
</head>
<body>

@if(!isset($sub_id))
<div style="color:red">Displaying questions for all subject</div>
@endif 

<?php 
if(!isset($sub_id)){
$questions = Questions::where('user_id','!=',Auth::getUser()->id)->get();
}else{
$questions = Questions::where('user_id','!=',Auth::getUser()->id)->where('sub_id','=',$sub_id)->get();  
}

?>

    <div class="container-fluid"  >
        <br>
         <div class="row">
        <div class="col-md-12">
      
     <div class="panel panel-primary">
      <div class="panel-body">

          

          <div class="col-md-12">
       <div class="panel panel-primary">
      <div class="panel-body" style="background-color:#D4D8D1;">
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right" id="top-nav">
                    <li class="hidden">
                        <a href="#page-top"></a>    
                    </li>
                     <li>
                           <a href="/logout" style="font-weight:bold;color:black"><span class="glyphicon glyphicon-log-out"></span> Logout</a>
                    </li>
                   
                     <li>
                           <a href="/askques" style="font-weight:bold;color:black">Ask Questions</a>
                    </li>
                </ul>
               

            </div>

    <div class="panel-heading"><h2>Answer a Question</h2></div><br>
     <div class="form-group">
@foreach($questions as $question)
    <ul class="list-group">
        <li class="list-group-item"> <a href="/ansques?qid={{$question->id}}">{{$question->question }} </a></li>
        <small>Posted by</small><span class="badge"> {{ User::find($question->user_id)->username }}</span><small> on </small>{{$question->created_at; }}</p>
         {{ Form::button('View all answers!',array('id'=>'button','class'=>'btn btn-primary', 'onClick'=>'showAnswer('.$question->id.')'))}}
    </ul>
   @endforeach

 </div>
  </div>
   </div>
    </div>
     </div>
</body>
</html>
<script>
function showAnswer(questionId){
  window.open("/anslist?qid="+questionId);
}
</script>
