<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>kraftiny</title>

   <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" />
    <!-- <link rel="stylesheet" type="text/css" href="/media/css/bootstrap.min.css">-->

    <!--JQuery UI CSS-->
    <link href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" type="text/css" rel="stylesheet">
    <!--<link rel="stylesheet" type="text/css" href="/media/css/jquery-ui-base-1.8.20.css"> -->

    <!-- Style CSS -->
    <link rel="stylesheet" type="text/css" href="css/simple.css">
  
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Bootstrap JS -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
 <script type="text/javascript">
$(document).ready(function(){
                $(".contactLink").click(function(){
                    if ($("#contactForm").is(":hidden")){
                        $("#contactForm").slideDown("slow");
                    }
                    else{
                        $("#contactForm").slideUp("slow");
                    }
                });
            });
            function closeForm(){
                $("#messageSent").show("slow");
                setTimeout('$("#messageSent").hide();$("#contactForm").slideUp("slow")', 2000);
           }

$(document).ready(function() {
  function filterPath(string) {
    return string
      .replace(/^\//,'')
      .replace(/(index|default).[a-zA-Z]{3,4}$/,'')
      .replace(/\/$/,'');
  }
  $('a[href*=#]').each(function() {
    if ( filterPath(location.pathname) == filterPath(this.pathname)
    && location.hostname == this.hostname
    && this.hash.replace(/#/,'') ) {
      var $targetId = $(this.hash), $targetAnchor = $('[name=' + this.hash.slice(1) +']');
      var $target = $targetId.length ? $targetId : $targetAnchor.length ? $targetAnchor : false;
       if ($target) {
         var targetOffset = $target.offset().top;
         $(this).click(function() {
           $('html, body').animate({scrollTop: targetOffset}, 400);
           var d = document.createElement("div");
        d.style.height = "101%";
        d.style.overflow = "hidden";
        document.body.appendChild(d);
        window.scrollTo(0,scrollToM);
        setTimeout(function() {
        d.parentNode.removeChild(d);
            }, 10);
           return false;
         });
      }
    }
  });
});

</script>

</head>

<body id="page-top" class="index">
<nav class="navbar navbar-default navbar-fixed-top">
<div class="header1">
    <div class="container">
        <div class="navbar-header page-scroll1">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            
            <a class="navbar-brand" style="color:black" href="#">KraftInY</a>
        </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right" id="top-nav">
                    <li class="hidden">
                        <a href="#page-top"></a>    
                    </li>

                    <li class="page-scroll" id="scrollup">
                        <a href="#portfolio" style="font-weight:bold;color:black">Portfolio</a>
                    </li>
                    <li class="page-scroll" id="scrollup">
                        <a href="#about" style="font-weight:bold;color:black">About Us</a>
                    </li>
                    <li class="page-scroll" id="scrollup">
                        <a href="#contact" style="font-weight:bold;color:black">Contact</a>
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
            </div>
    </div>
</div>
</nav>
 <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                  <div class="intro-text">
                        <span class="name">KraftInY</span>
                        <hr class="star-light">
                       
                    </div>
                </div>
            </div>
        </div>
    </header>


<div class="wrapper">
 <section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                        <h1>Portfolio</h1>
                       
                                <hr class="star-primary">

                            </div>
                        </div>
                        <div class="row">
                <div class="col-lg-10 col-lg-offset-2">
                    <p>We have entered the age of digital technology. Computer exists everywhere from a small kiosk to giant corporate house. Amongst all the sectors, information technology is following and will pave a path for faster growth. Infact e-business is becoming the most favored word with corporate as it took over from traditional business practices. 
A clear perception of the growing requirement of the corporate world in the area of IT has enabled Pragya Net to develop programs of specific relevance for the present and the future. 
</p>  

<div class="content">
  <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
  
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      
    </ol>

  
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="images/Lighthouse.jpg"  width="460" height="345">
      </div>

      <div class="item">
        <img src="images/Penguins.jpg"  width="460" height="345">
      </div>
    
      <div class="item">
        <img src="images/Tulips.jpg"  width="460" height="345">
      </div>

     
    </div>

<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>    
</div>
 </div>
</section>


 <section class="success" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1 >About Us</h1>
                    <hr class="star-light">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-lg-offset-2">
                    <p>Our success is built on continuous innovation.An informal, entrepreneurial work environment.  And a reputation as one of the leading innovators in the forecasting and planning software industry.
                    If that sounds like the kind of team you'd like to join, we are always interested in talented and motivated professionals in software applications programming.</p>
                </div>
                <div class="col-lg-4">
                    <p> For further details contact Mr.Chintan Parekh<br>Ph no.9769398129<br>Email-id:parekhchintan30@kraftiny.com</p>
                </div>
                <div class="col-lg-8 col-lg-offset-2 text-center">
                  
                </div>
            </div>
        </div>
</section>


<section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1 >Contact Me</h1>
                    <hr class="star-primary">
                </div>
            </div>
        </div>
</section>


         <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Name</label>
                                <input type="text" class="form-control" placeholder="Name" id="name" required data-validation-required-message="Please enter your name.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Email Address</label>
                                <input type="email" class="form-control" placeholder="Email Address" id="email" required data-validation-required-message="Please enter your email address.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Phone Number</label>
                                <input type="tel" class="form-control" placeholder="Phone Number" id="phone" required data-validation-required-message="Please enter your phone number.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Message</label>
                                <textarea rows="5" class="form-control" placeholder="Message" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <br>
                        <div id="success"></div>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <button type="submit" class="btn btn-success btn-lg">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
 





<footer class="text-center">
        <div class="footer-above">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-md-4">
                        <h3>Location</h3>
                        <p>Shop No. M-54[4],Survey No.327<br>Pestom Sagar Road No.4,<br>Opp.Ambaji Niketan,Chembur.<br>Mumbai-400089</p>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>Around the Web</h3>
                        
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>About KraftInY</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12" style="color:black;font-weight:bold">
                        Copyright &copy; KraftInY 2015
                    </div>
                </div>
            </div>
        </div>
</footer>
</body>
</html>