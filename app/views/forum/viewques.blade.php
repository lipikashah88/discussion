<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Answer</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
<script type="text/javascript">
 
</script>
  

</head>
<body>

 
   
       
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
{{Form::open(array('action'=>'ViewController@read','id'=>'contactform','file'=>true,'method' => 'post'))}}
    <div class="input-group">
{{Form::select('subject', array('0' => 'Select Subject','1' => 'Maths', '2' => 'Science', '3' => 'English' ))}}&nbsp;&nbsp;
<?php
$subjects=array("Maths","Science","English");


if (array_key_exists(1,$subjects))
   {
   echo "Key exists!";
   }
else
   {
   echo "Key does not exist!";
   } ?>
{{ Form::submit('Click Me!')}}
      </div> 
    </div>


 </div>
  </div>
   </div>
    </div>
     </div>
</body>
</html>



