
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Cbuy bank - ngan hang dien tu</title>

    <!-- Bootstrap core CSS -->    
	<?php echo Asset::css('bootstrap.min.css');?>
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    
	<?php echo Asset::js('ie-emulation-modes-warning.js');?>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    
    <?php echo Asset::css('style.css');?>
    <style>
    	.carousel .item{
    		
    		background:#fff;
    	}
    	#myCarousel{
    		width : 70%;
    		float:right;
    		border-radius: 4px;
    	}
    	.panel-danger{
			width:29%;
			float:left;    	
			height:300px;
    	}
    	.col-lg-4 p {
    		text-align:left;
    	}
    	
    	
    	
    </style>
  </head>
<!-- NAVBAR
================================================== -->
  <body>
    <div class="navbar-wrapper">
      <div class="container">

        <nav class="navbar navbar-inverse navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <!-- <a class="navbar-brand" href="#">Project name</a>-->
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li><a href="#">Trang chủ</a></li>
                <li><a href="#about">Giới thiệu</a></li>
                <li><a href="#contact">Liên hệ đại lý</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Hướng dẫn sử dụng <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Đăng kí</a></li>
                    <li><a href="#">Nạp thẻ</a></li>
                    <li><a href="#">Thanh toán</a></li>
                    <li class="divider"></li>
                    <li class="dropdown-header">Quản lý hóa đơn</li>
                    <li><a href="#">Quản lý thông tin cá nhân</a></li>
                    <li><a href="#">Tích lũy Cbuy</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </nav>

      </div>
    </div>
    <div class="container main-top">
		<div class="panel panel-danger">
			<div class="panel-heading danger">
			<b>Đăng nhập</b>		
			</div>
			  <div class="panel-body">
			  <form class="form-horizontal">
					  <div class="form-group">
					    <label for="inputEmail3" class="col-sm-3 control-label">Email</label>
					    <div class="col-sm-9">
					      <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
					    </div>
					  </div>
					  <div class="form-group">
					    <label for="inputPassword3" class="col-sm-3 control-label">Password</label>
					    <div class="col-sm-9">
					      <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
					    </div>
					  </div>
					  <div class="form-group">
					    <div class="col-sm-offset-3 col-sm-9">
					      <div class="checkbox">
					        <label>
					          <input type="checkbox"> Remember me
					        </label>
					      </div>
					    </div>
					  </div>
					  <div class="form-group">
					    <div class="col-sm-offset-3 col-sm-9">
					      <button type="submit" class="btn btn-danger">Sign in</button>
					    </div>
					  </div>
				</form>
			   
			</div>
			
		</div>		
			
			
			<!-- Carousel
    ================================================== -->
					    <div id="myCarousel" class="carousel slide" data-ride="carousel">
					      <!-- Indicators -->
					      <ol class="carousel-indicators">
					        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					        <li data-target="#myCarousel" data-slide-to="1"></li>
					        <li data-target="#myCarousel" data-slide-to="2"></li>
					      </ol>
					      
					      <div class="carousel-inner" role="listbox">
					      
					        <div class="item active">
					          <img class="first-slide" src="assets/img/slide1.jpg" alt="First slide">
					          <div class="container">
					            <div class="carousel-caption">
					              <h1>Example headline.</h1>
					              <p>Note: If you're viewing this page via a <code>file://</code> URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p>
					              <p><a class="btn btn-lg btn-danger" href="#" role="button">Sign up today</a></p>
					            </div>
					          </div>
					        </div>
					        <div class="item">
					          <img class="second-slide" src="assets/img/slide2.jpg" alt="Second slide">
					          <div class="container">
					            <div class="carousel-caption">
					              <h1>Another example headline.</h1>
					              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
					              <p><a class="btn btn-lg btn-danger" href="#" role="button">Learn more</a></p>
					            </div>
					          </div>
					        </div>
					        <div class="item">
					          <img class="third-slide" src="assets/img/slide3.jpg" alt="Third slide">
					          <div class="container">
					            <div class="carousel-caption">
					              <h1>One more for good measure.</h1>
					              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
					              <p><a class="btn btn-lg btn-danger" href="#" role="button">Browse gallery</a></p>
					            </div>
					          </div>
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
					    </div><!-- /.carousel -->
			
			
	
	</div>
	
    


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
      <!-- start thong tin -->
      <div class="col-lg-4">
          <h2 style="text-align:left">Tin tức khuyến mãi</h2>
          <p>Khuyến mãi lớn cuối tháng khi nạp thẻ cào Cbuybank</p>
          <p>Nạp thẻ nhanh chóng để được tặng thêm 20%</p>
        </div><!-- /.col-lg-4 -->
      <!-- end thong tin div -->
        <div class="col-lg-4">
         
         <h2 style="text-align:left">Hướng dẫn sử dụng</h2>
          <p>Đăng kí tài khoản</p>
          <p>Đăng kí tài khoản</p>
          <p>Đăng kí tài khoản</p>
          <p>Đăng kí tài khoản</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
       	  <h2>Liên kết site</h2>	 	 
          <a href="http://datmang.net"><img class="img-square" src="assets/img/datmang.png" alt="Generic placeholder image" width="170" height="170"></a>
          <a href="http://daugiahcm.net"><img class="img-square" src="assets/img/daugia.jpg" alt="Generic placeholder image" width="170" height="170"></a>
         
        </div><!-- /.col-lg-4 -->
        
      </div><!-- /.row -->


      <!-- START THE FEATURETTES -->
		<!-- 
      <hr class="featurette-divider"> 
      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It'll blow your mind.</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7 col-md-push-5">
          <h2 class="featurette-heading">Oh yeah, it's that good. <span class="text-muted">See for yourself.</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-5 col-md-pull-7">
          <img class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">
		-->
      <!-- /END THE FEATURETTES -->


      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2015 V Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <?php echo Asset::js('bootstrap.min.js')?>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <?php echo Asset::js('vendor/holder.js')?>
    <?php echo Asset::js('ie10-viewport-bug-workaround.js')?>
    
  </body>
</html>
