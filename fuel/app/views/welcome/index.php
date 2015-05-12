
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
.carousel .item {
	background: #fff;
}
.btn-block{
margin-bottom:27px;
}
.btn-danger:hover{
background:#f2dede;
color:#a94442;
}
a {color:#a94442;}
</style>
</head>
<!-- NAVBAR
================================================== -->
<body>
	<div class="container">

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
					<img class="first-slide" src="assets/img/slide1.jpg"
						alt="First slide">
					<div class="container">
						<div class="carousel-caption">
							<h1>Example headline.</h1>
							<p>
								Note: If you're viewing this page via a
								<code>file://</code>
								URL, the "next" and "previous" Glyphicon buttons on the left and
								right might not load/display properly due to web browser
								security rules.
							</p>
							<p>
								<a class="btn btn-lg btn-danger" href="#" role="button">Sign up
									today</a>
							</p>
						</div>
					</div>
				</div>
				<div class="item">
					<img class="second-slide" src="assets/img/slide2.jpg"
						alt="Second slide">
					<div class="container">
						<div class="carousel-caption">
							<h1>Another example headline.</h1>
							<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam.
								Donec id elit non mi porta gravida at eget metus. Nullam id
								dolor id nibh ultricies vehicula ut id elit.</p>
							<p>
								<a class="btn btn-lg btn-danger" href="#" role="button">Learn
									more</a>
							</p>
						</div>
					</div>
				</div>
				<div class="item">
					<img class="third-slide" src="assets/img/slide3.jpg"
						alt="Third slide">
					<div class="container">
						<div class="carousel-caption">
							<h1>One more for good measure.</h1>
							<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam.
								Donec id elit non mi porta gravida at eget metus. Nullam id
								dolor id nibh ultricies vehicula ut id elit.</p>
							<p>
								<a class="btn btn-lg btn-danger" href="#" role="button">Browse
									gallery</a>
							</p>
						</div>
					</div>
				</div>
			</div>
			<a class="left carousel-control" href="#myCarousel" role="button"
				data-slide="prev"> <span class="glyphicon glyphicon-chevron-left"
				aria-hidden="true"></span> <span class="sr-only">Previous</span>
			</a> <a class="right carousel-control" href="#myCarousel"
				role="button" data-slide="next"> <span
				class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
		<!-- /.carousel -->


	</div>





	<!-- Marketing messaging and featurettes
    ================================================== -->
	<!-- Wrap the rest of the page in another container to center all the content. -->

	<div class="container marketing">
		<div id="#main-content">
			<div class="row">
			<!-- start left menu -->
				<div class="col-md-4">
					<a href="ca-nhan"><button type="button" class="btn btn-danger btn-lg btn-block">Quản lý tài khoản</button></a>
					<a href=""><button type="button" class="btn btn-danger btn-lg btn-block">Giới thiệu doanh nghiệp</button></a>
					<a href=""><button type="button" class="btn btn-danger btn-lg btn-block">Liên hệ đại lý</button></a>
					<a href=""><button type="button" class="btn btn-danger btn-lg btn-block">Góp ý xây dựng</button></a>
				</div>
				<!-- end left menu -->
				
				<!-- start login form -->
				<div class="col-md-4">
					<div class="panel panel-danger">
						<div class="panel-heading danger">
							<b>Đăng nhập</b>
						</div>
						<div class="panel-body">
							<form class="form-horizontal">
								<div class="form-group">
									<label for="inputEmail3" class="col-sm-3 control-label">Email</label>
									<div class="col-sm-9">
										<input type="email" class="form-control" id="inputEmail3"
											placeholder="Email">
									</div>
								</div>
								<div class="form-group">
									<label for="inputPassword3" class="col-sm-3 control-label">Password</label>
									<div class="col-sm-9">
										<input type="password" class="form-control"
											id="inputPassword3" placeholder="Password">
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-offset-3 col-sm-9">
										<div class="checkbox">
											<label> <input type="checkbox"> Remember me
											</label>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-offset-3 col-sm-9">
										<a href=""><button type="submit" class="btn btn-danger">Sign in</button></a> | <a href="">Đăng ký tài khoản</a>
									</div>
								</div>
							</form>

						</div>

					</div>
				</div>
				<!-- end login form -->
				
				<!-- start right menu -->
				<div class="col-md-4">
					<a href=""><button type="button" class="btn btn-danger btn-lg btn-block right">Tin tức</button></a>
					<a href=""><button type="button" class="btn btn-danger btn-lg btn-block right">Hướng dẫn</button></a>
					<a href=""><button type="button" class="btn btn-danger btn-lg btn-block right">Khuyến mãi</button></a>
					<a href=""><button type="button" class="btn btn-danger btn-lg btn-block right">Tuyển dụng</button></a>
				</div>
				<!-- end right menu -->
			</div>
		</div>

		<!-- FOOTER -->
		<footer>
			<p class="pull-right">
				<a href="#">Back to top</a>
			</p>
			<p>
				&copy; 2015 V Company, Inc. &middot; <a href="#">Privacy</a>
				&middot; <a href="#">Terms</a>
			</p>
		</footer>

	</div>
	<!-- /.container -->


	<!-- Bootstrap core JavaScript
    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script
		src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <?php echo Asset::js('bootstrap.min.js')?>
    <script src="../../dist/js/bootstrap.min.js"></script>
	<!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <?php echo Asset::js('vendor/holder.js')?>
    <?php echo Asset::js('ie10-viewport-bug-workaround.js')?>
    
  </body>
</html>
