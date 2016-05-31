<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Portfolio</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/robkerrhtml.css">
</head>
<body class="container-fluid portfolio">
<!-- beginning of navbar -->
    <nav class="navbar navbar-default">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-2">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/robkerrwebsite/landingpage.php">Robert Kerr</a>
        </div>
    
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-collapse-2">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="/robkerrwebsite/robkerr.html">Home</a></li>
            <li class="active"><a href="/robkerrwebsite/portfolio.php">Portfolio</a></li>
            <li><a href="/robkerrwebsite/contactform.php">Contact</a></li>
            <li><a href="/robkerrwebsite/register.php">Register</a></li>
            <li>
              <a class="btn btn-default btn-outline btn-circle collapsed"  data-toggle="collapse" href="#nav-collapse2" aria-expanded="false" aria-controls="nav-collapse2">Sign in</a>
            </li>
          </ul>
          <div class="collapse nav navbar-nav nav-collapse slide-down" id="nav-collapse2">
            <form class="navbar-form navbar-right form-inline" role="form">
              <div class="form-group">
                <label class="sr-only" for="Email">Email</label>
                <input type="email" class="form-control" id="Email" placeholder="Email" autofocus required />
              </div>
              <div class="form-group">
                <label class="sr-only" for="Password">Password</label>
                <input type="password" class="form-control" id="Password" placeholder="Password" required />
              </div>
              <button type="submit" class="btn btn-success">Sign in</button>
            </form>
          </div>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container -->
    </nav><!-- /.navbar -->
    <!-- end of navbar -->
    <h2>Portfolio</h2>
	<div class="container">
	    <div id="main_area">
	        <!-- Slider -->
	        <div class="row">
	            <div class="col-sm-6" id="slider-thumbs">
	                <!-- Bottom switcher of slider -->
	                <ul class="hide-bullets">
	                    <li class="col-sm-3">
	                        <a class="thumbnail" id="carousel-selector-0">
	                            <img src="http://placehold.it/150x150&text=zero">
	                        </a>
	                    </li>

	                    <li class="col-sm-3">
	                        <a class="thumbnail" id="carousel-selector-1"><img src="http://placehold.it/150x150&text=1"></a>
	                    </li>

	                    <li class="col-sm-3">
	                        <a class="thumbnail" id="carousel-selector-2"><img src="http://placehold.it/150x150&text=2"></a>
	                    </li>

	                    <li class="col-sm-3">
	                        <a class="thumbnail" id="carousel-selector-3"><img src="http://placehold.it/150x150&text=3"></a>
	                    </li>

	                    <li class="col-sm-3">
	                        <a class="thumbnail" id="carousel-selector-4"><img src="http://placehold.it/150x150&text=4"></a>
	                    </li>

	                    <li class="col-sm-3">
	                        <a class="thumbnail" id="carousel-selector-5"><img src="http://placehold.it/150x150&text=5"></a>
	                    </li>
	                    <li class="col-sm-3">
	                        <a class="thumbnail" id="carousel-selector-6"><img src="http://placehold.it/150x150&text=6"></a>
	                    </li>

	                    <li class="col-sm-3">
	                        <a class="thumbnail" id="carousel-selector-7"><img src="http://placehold.it/150x150&text=7"></a>
	                    </li>

	                    <li class="col-sm-3">
	                        <a class="thumbnail" id="carousel-selector-8"><img src="http://placehold.it/150x150&text=8"></a>
	                    </li>

	                    <li class="col-sm-3">
	                        <a class="thumbnail" id="carousel-selector-9"><img src="http://placehold.it/150x150&text=9"></a>
	                    </li>
	                    <li class="col-sm-3">
	                        <a class="thumbnail" id="carousel-selector-10"><img src="http://placehold.it/150x150&text=10"></a>
	                    </li>

	                    <li class="col-sm-3">
	                        <a class="thumbnail" id="carousel-selector-11"><img src="http://placehold.it/150x150&text=11"></a>
	                    </li>

	                    <li class="col-sm-3">
	                        <a class="thumbnail" id="carousel-selector-12"><img src="http://placehold.it/150x150&text=12"></a>
	                    </li>

	                    <li class="col-sm-3">
	                        <a class="thumbnail" id="carousel-selector-13"><img src="http://placehold.it/150x150&text=13"></a>
	                    </li>
	                    <li class="col-sm-3">
	                        <a class="thumbnail" id="carousel-selector-14"><img src="http://placehold.it/150x150&text=14"></a>
	                    </li>

	                    <li class="col-sm-3">
	                        <a class="thumbnail" id="carousel-selector-15"><img src="http://placehold.it/150x150&text=15"></a>
	                    </li>
	                </ul>
	            </div>
	            <div class="col-sm-6">
	                <div class="col-xs-12" id="slider">
	                    <!-- Top part of the slider -->
	                    <div class="row">
	                        <div class="col-sm-12" id="carousel-bounding-box">
	                            <div class="carousel slide" id="myCarousel">
	                                <!-- Carousel items -->
	                                <div class="carousel-inner">
	                                    <div class="active item" data-slide-number="0">
	                                        <img src="http://placehold.it/470x480&text=zero"></div>

	                                    <div class="item" data-slide-number="1">
	                                        <img src="http://placehold.it/470x480&text=1"></div>

	                                    <div class="item" data-slide-number="2">
	                                        <img src="http://placehold.it/470x480&text=2"></div>

	                                    <div class="item" data-slide-number="3">
	                                        <img src="http://placehold.it/470x480&text=3"></div>

	                                    <div class="item" data-slide-number="4">
	                                        <img src="http://placehold.it/470x480&text=4"></div>

	                                    <div class="item" data-slide-number="5">
	                                        <img src="http://placehold.it/470x480&text=5"></div>
	                                    
	                                    <div class="item" data-slide-number="6">
	                                        <img src="http://placehold.it/470x480&text=6"></div>
	                                    
	                                    <div class="item" data-slide-number="7">
	                                        <img src="http://placehold.it/470x480&text=7"></div>
	                                    
	                                    <div class="item" data-slide-number="8">
	                                        <img src="http://placehold.it/470x480&text=8"></div>
	                                    
	                                    <div class="item" data-slide-number="9">
	                                        <img src="http://placehold.it/470x480&text=9"></div>
	                                    
	                                    <div class="item" data-slide-number="10">
	                                        <img src="http://placehold.it/470x480&text=10"></div>
	                                    
	                                    <div class="item" data-slide-number="11">
	                                        <img src="http://placehold.it/470x480&text=11"></div>
	                                    
	                                    <div class="item" data-slide-number="12">
	                                        <img src="http://placehold.it/470x480&text=12"></div>

	                                    <div class="item" data-slide-number="13">
	                                        <img src="http://placehold.it/470x480&text=13"></div>

	                                    <div class="item" data-slide-number="14">
	                                        <img src="http://placehold.it/470x480&text=14"></div>

	                                    <div class="item" data-slide-number="15">
	                                        <img src="http://placehold.it/470x480&text=15"></div>
	                                </div>
	                                <!-- Carousel nav -->
	                                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
	                                    <span class="glyphicon glyphicon-chevron-left"></span>
	                                </a>
	                                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
	                                    <span class="glyphicon glyphicon-chevron-right"></span>
	                                </a>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	            <!--/Slider-->
	        </div>

	    </div>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script src="/scripts/carousel.js"></script>
</body>
</html>