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
	<link href="{$css_asset_url}/bootstrap.min.css" rel="stylesheet">
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    
	<script src="{$js_asset_url}/ie-emulation-modes-warning.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
   
    <script src="{$js_asset_url}/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="{$js_asset_url}/vendor/holder.js"></script>
    <script src="{$js_asset_url}/ie10-viewport-bug-workaround.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    
    <link href="{$css_asset_url}/style.css" rel="stylesheet" />
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
      	<!-- hide nav bar menu -->
		<!--
        <nav class="navbar navbar-inverse navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li><a href="#">Trang chủ</a></li>                
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Tài khoản <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Thông tin chung</a></li>
                    <li><a href="#">Nạp tiền/thẻ cào</a></li>
                    <li><a href="#">Tìm kiếm giao dịch</a></li>                    
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </nav>-->
		<!-- nav tab menu -->
		<div id="rootwizard" class="tabbable tabs-center">
			<ul class="nav nav-tabs">
			  	<li class=""><a href="{$base_url}">Trang chủ</a></li>
				<li class="" id="1"><a href="ca-nhan">Tài khoản</a></li>
				<li class="" id="2"><a href="thanh-toan">Thanh toán</a></li>
				<li class="" id="3"><a href="ho-tro">Hỗ trợ</a></li>
				<li class="" id="4"><a href="#tab3" data-toggle="tab" aria-expanded="true">Tin tức</a></li>
				<li class="" id="5"><a href="#tab3" data-toggle="tab" aria-expanded="true">Hướng dẫn</a></li>
			</ul>
			<!--<div class="tab-content">
			    <div class="tab-pane" id="tab1">
			      
			    </div>
			    <div class="tab-pane active" id="tab2">
			      	
			      
			    </div>
			    <div class="tab-pane" id="tab3">
					
			      	
			    </div>
				<div class="tab-pane" id="tab4">
					4
			    </div>
			    <div class="tab-pane" id="tab5">
					5
			    </div>
				
			</div>	-->
		</div>
		<!-- end nav tab menu -->
      </div>
    </div>
       <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">