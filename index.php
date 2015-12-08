
<!DOCTYPE html>
<html lang="en">

<head>
    <meta HTTP-EQUIV="refresh" CONTENT="60">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="carousel.css">
    

    
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 70%;
      margin: auto;
  }
  </style>


    <title>Phones are us </title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">

    <!-- Custom Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" type="text/css">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="css/animate.min.css" type="text/css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/creative.css" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top">
     <div class=" text-center">
    <img src="title.png" alt="" style="">
   


    </div> 


    <header>
      <div class="container">

 
  <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>
    

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="yellow.jpg" alt="Yellow" width="460" height="345">
      </div>

      <div class="item">
        <img src="blue.jpg" alt="Blue" width="460" height="345">
      </div>
    
      <div class="item">
        <img src="green.jpg" alt="Green" width="460" height="345">
      </div>

      <div class="item">
        <img src="pink.jpg" alt="Pink" width="460" height="345">
      </div>
    </div>
    
    

    <!-- Left and right controls -->
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
</br>
</br>

<button font color="black" type="button" onclick="loadDoc()">Find out more</button>

<script>
function loadDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
      document.getElementById("demo").innerHTML = xhttp.responseText;
    }
  };
  xhttp.open("GET", "phones.xml", true);
  xhttp.send();
}
</script>

 
<!--<a href="random.html" class="btn btn-primary btn-xl page-scroll">Find Out More</a>-->

    </header>
    

    <section class="bg-primary" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading"><b>Our Phones</b></h2>
                    </br>
                    </br>
                        <?php
                        
                        include 'xslt.php';
?>
                    
                        
                        

					<form  action="ModXML.php" role="form" method="post">
                        <div class="row">
                            
                                <label>Name</label>
                                <input type="text" name="name1" class="form-control">
                                  </br>
                                  </br>
                                <label>Price in euro - €</label>
                                <input type="Price" name="price" class="form-control">
                                   </br>
                                   </br>
                                <label>About</label>
                                <input type="About" name="description" class="form-control">
                                   </br>
                                   </br>
                                <label>Grade</label>
                                <input type="grade" name="grade" class="form-control">
                                    </br>
                                    </br>
                            
                            <div class="clearfix"></div>
                          
                            
                                <input type="hidden" name="save" value="contact">
                                </br>
                                </br>
                                <button type="submit" class="btn btn-default">Submit</button>
                                
                             </div>
                    </form>


                </div>
            </div>
        </div>
    </section>

    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading" >About us! </h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-diamond wow bounceIn text-primary"></i>
                        <h3>History of us </h3>
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                        In eget tellus ultrices, pulvinar risus in, finibus libero. Nunc eu laoreet leo, ut imperdiet risus.
                        Duis pretium urna tristique dolor molestie vehicula. Phasellus quis ipsum non mi aliquet sollicitudin nec eu felis. 
                        Duis ultrices est sed scelerisque sodales.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-paper-plane wow bounceIn text-primary" data-wow-delay=".1s"></i>
                        <h3>iPhones</h3>
                        <p class="text-muted">Apple introduced the original iPhone back in 2007, instantly obsoleting every other smartphone on the planet. 
                        With the iPhone 3G and iPhone 3GS, Apple lowered prices an mainstreamed mobile. 
                        The iPhone 4 and iPhone 4s took the world to Retina and Siri. The iPhone 5 got taller and LTE faster. 
                        And the iPhone 5s and iPhone 5c put the future at our fingertips. The iPhone 6 went thinner and faster than ever before, 
                        and the iPhone 6 Plus was Apple’s first BIG phone. The latest in the arsenal, 
                        the iPhone 6s and iPhone 6s Plus bring new hardware and add 3D Touch — a new pressure sensitive way to interact with your iPhone.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-newspaper-o wow bounceIn text-primary" data-wow-delay=".2s"></i>
                        <h3>Samsung</h3>
                        <p class="text-muted">Founded back in 1969 as Samsung Electric Industries, Suwon,
                        South Korea-headquartered Samsung Electronics today makes everything from televisions to semiconductors. 
                        It released its first Android smartphone in 2009, and can be credited with the launch of the first Android tablet back in 2010.
                        The company is among the biggest players in the smartphone market in the world. 
                        It has recently developed smartphones running Tizen OS, as an alternative to its Android-based smartphones.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-heart wow bounceIn text-primary" data-wow-delay=".3s"></i>
                        <h3>Made with Love</h3>
                        <p class="text-muted">You have to make your websites with love these days!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

     <section class="no-padding" id="portfolio">
       
            <div class="row no-gutter">
              <div class="col-lg-12 col-sm-18">
                    <a href="#" class="portfolio-box">
                        <img src="p.png" class="img-responsive" alt="">
                       
                            
                        </div>
                    </a>
                </div>
                </div>
    </section>


    <aside class="bg-dark">
        <div class="container text-center">
            <div class="call-to-action">
                <h2>Start your journey with us today!</h2>
                <a href="#" class="btn btn-default btn-xl wow tada">Sign Up Now!</a>
            </div>
        </div>
    </aside>

    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Contact us!</h2>
                    <hr class="primary">
                    <p> Interested in our phones? Please give us an email or call </p>
                </div>
                <div class="col-lg-4 col-lg-offset-2 text-center">
                    <i class="fa fa-phone fa-3x wow bounceIn"></i>
                    <p>123-456-6789</p>
                </div>
                <div class="col-lg-4 text-center">
                    <i class="fa fa-envelope-o fa-3x wow bounceIn" data-wow-delay=".1s"></i>
                    <p><a href="mailto:your-email@your-domain.com">phonesourus@ncirl.ie </a></p>
                </div>
                 
            </div>
        </div>
    </section> 
    

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/jquery.fittext.js"></script>
    <script src="js/wow.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/creative.js"></script>

</body>

</html>



