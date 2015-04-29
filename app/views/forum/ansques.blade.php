<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Answer</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

{{ HTML::style('http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css') }}
{{ HTML::style('css/style.css') }}
{{ HTML::script('http://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js') }}
{{ HTML::script('http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js') }}  
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
  function validate() {
            var textarea = tinyMCE.get('answer').getContent(); 
            if (textarea=="")
            {
                    alert("Post body must not be left blank");
                    answer.focus();
                    return false; 
            }

    }


</script>


</head>
<body>
<div class="navbar navbar-inverse navbar-fixed-top" style="height:10px">
    <div class="navbar-inner">
        <div class="container">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <a class="navbar-brand" href="#" style="margin-top:10px;font-size:20px">Demo Application</a>


            <ul class="nav navbar-nav navbar-right" style="margin-top:10px">
                <li><a href="/register">Register</a></li>
               
            </ul>



        </div>
    </div>
</div>
 
<br><br>  <br><br> 
 
         <div class="container">
        <br>
         <div class="row">
        <div class="col-md-12">
      
     <div class="panel panel-primary">
      <div class="panel-body">
        <div class="col-md-12">
       <div class="panel panel-primary" >
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
                           <a href="viewques/create" style="font-weight:bold;color:black">All Questions</a>
                    </li>
                     <li>
                           <a href="askques" style="font-weight:bold;color:black">Ask Questions</a>
                    </li>
                </ul>
              <?php 
                $qid = $_GET['qid'];
                $question = Questions::find($qid);
                if($question){
                  echo $question->question;
                }

              ?>
            </div>


    <div class="panel-heading"><h2>Type your Answer below.</h2></div><br>

            Type your answer
          
            {{Form::open(array('action'=>'AnsController@store','id'=>'answer','file'=>true,'method'=>'post','onClick'=>'return validate()'))}}
        
            <textarea name="answer" id="answer" style="width:100%"></textarea> <br><br>
            <input type="hidden" name="qid" value ={{$qid}}>
            {{ Form::submit('Post your answer!',array('id'=>'submit','class'=>'btn btn-primary')) }}
            {{ Form::close() }}
</div>

 
        </div>
      </div>
     
     
       
      </div>
    </div>
    <div class="cleaner">&nbsp;</div>
  </div>
</div>

</body>
</html>

