<?php
	// include_once('Admin/database_app_shop.php');
	include_once('Admin/model/database_shop.php');
	include_once('Admin/model/m_product.php');
	$products = get_products();
	$productid = filter_input(INPUT_GET, 'productid');
	$product_detail = get_product_by_id($productid);
?>
<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php echo $product_detail['productname'] ;?></title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<link rel="stylesheet" href="./css/assign1detailproduct.css">
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<div class="row">
			<div class="logo col-sm-4"><a href="index.php"><span style="color: yellow; font-weight: bold; font-size: 40px; font-family: arial">myCatalog</span></a>
			</div>
			<div class="search col-sm-4 ">
			<form id="search-form" action="search_product.php" method="GET">
				<input name="value" class="searchinput col-sm-6" type="text">
				<div class="search_btn glyphicon glyphicon-search" onclick="document.getElementById('search-form').submit();">
				
				</div>
			</form>
			</div>
			<div class="order col-sm-4">
				<div class="login"><a class="loginlogo glyphicon glyphicon-log-in" href="login.php"></a><br><a class="loginlabel" href="login.php"><label for="">Login</label></a></div>
				<div class="register"><a class="registerlogo glyphicon glyphicon-user" href="register.php"></a><br><a href="register.php"><label class="label">Register</label></a></div>
				<div class="compare"><a class="comparelogo glyphicon glyphicon-list" href="#"></a><br><a href="#"><label class="label">Compare</label></a></div>
				<div class="cart"><a class="cartlogo glyphicon glyphicon-shopping-cart" href="#"></a><br><a href="#"><label class="label">Cart</label></a></div>
			</div>
		</div>

		<div id="menu">
			<ul>
				<li id="home"><a href="index.php">HOME</a>
					<ul class="sub-menu">
						<li><a class="dropdown-item" href="#">Home 1 - DJ-MediaTools <br> Album in Header</a></li>
						<li><a class="dropdown-item" href="#">Home 2 - DJ-Catalog <br> Frontpage in Header</a></li>
					</ul>
				</li>
				<li><a href="products.php">CATALOG/STORE</a></li>
				<li><a href="#">PAGES</a>
					<!-- <ul class="sub-menu">
						<li>J! CONTENT
							<ul class="sub-menu">
								<li><a href="#">Single Article</a></li>
								<li><a href="#">Blog - 2 columns</a></li>
								<li><a href="#">Blog - 1 columns</a></li>
								<li><a href="#">Category List</a></li>
								<li><a href="#">Tabs</a></li>
								<li><a href="#">According</a></li>
								<li><a href="#">News Feed</a></li>
							</ul>
						</li>
						<li>J! OTHER PAGES
							<ul class="sub-menu">
								<li><a href="#">Registration Form</a></li>
								<li><a href="#">Login Form</a></li>
								<li><a href="#">Search Form</a></li>
								<li><a href="#">Single Contact</a></li>
								<li><a href="#">Error 404</a></li>
								<li><a href="#">Offline Page</a></li>
							</ul>
						</li>
						<li>CUSTOM PAGES
							<ul class="sub-menu">
								<li><a href="#">Gallery</a></li>
								<li><a href="#">Pricing Tables</a></li>
								<li><a href="#">Coming Soon</a></li>
							</ul>	
						</li>
					</ul> -->
				</li>
				<li><a href="#">FEATURES</a>
					<ul class="sub-menu">
						<li><a href="#">Template Parameters</a></li>
						<li><a href="#">All Template's Position</a></li>
						<li><a href="#">Module Suffixes</a></li>
						<li><a href="#">Typography</a></li>
						<li><a href="#">Template Layout</a></li>
						<li><a href="#">Install Demo Copy</a></li>
						<li><a href="#">Joomla Templates</a></li>
					</ul>
				</li>
				<li><a href="#">EXTENSIONS</a>
					<!-- <ul class="sub-menu">
						<li>DJ-MEDIA TOOLS
							<ul class="sub-menu">
								<li><a href="#">Album Grid</a></li>
								<li><a href="#">Gallery Grid</a></li>
								<li><a href="#">Modern Slider</a></li>
								<li><a href="#">Slider</a></li>
								<li><a href="#">Slideshow</a></li>
								<li><a href="#">Slideshow with Thumbnails</a></li>
								<li><a href="#">Tabber</a></li>
								<li><a href="#">Skitter SlideShow</a></li>
								<li><a href="#">Nivo Slider</a></li>
								<li><a href="#">Kwicks Panels</a></li>
								<li><a href="#">Masonry</a></li>
							</ul>
						</li>
						<li>DJ-CATALOG
							<ul class="sub-menu">
								<li><a href="#">Single product</a></li>
								<li><a href="#">List of items (blogs)</a></li>
								<li><a href="#">List of items (table)</a></li>
								<li><a href="#">Producers</a></li>
								<li><a href="#">Single producer</a></li>
								<li><a href="#">User products</a></li>
								<li><a href="#">Product submission</a></li>
								<li><a href="#">Query</a></li>
								<li><a href="#">Cart</a></li>
								<li><a href="#">Archived items</a></li>
								<li><a href="#">Map of products</a></li>
								<li><a href="#">User questions</a></li>
								<li><a href="#">Compare</a></li>
								<li><a href="#">List of orders</a></li>
							</ul>
						</li>
						<li>DJ-TABS
							<ul class="sub-menu">
								<li><a href="#">Tabs Views</a></li>
								<li><a href="#">Accordion View</a></li>
							</ul>
						</li>
					</ul> -->
				</li>
				<li><a href="#">LANGUAGES</a>
					<ul class="sub-menu">
						<li><a href="#">LTR Languages</a></li>
						<li><a href="#">RTL Languges</a></li>
					</ul>
				</li>
				<li><a href="#">STYLE</a>
					<ul class="sub-menu">
						<li><a href="#">Style 1 - Blue</a></li>
						<li><a href="#">Style 2 - Turquoise</a></li>
						<li><a href="#">Style 3 - Red</a></li>
					</ul>
				</li>
				<li><a href="#">CONTACT US</a></li>
				<li class="menulist"><a href="#"><img class="listmenu" src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2c/Ei-navicon.svg/1000px-Ei-navicon.svg.png" alt="" width="30px" height="30px"></a></li>
			</ul>
		</div>
		
		<div class="productdetail">
			<h2><?php echo $product_detail['productname'] ;?></h1>
			<p><span style="font-weight: bold;">Price: $<?php echo $product_detail['price'] ;?></span></p>
			<button class="btn_addtocart"><span class="addtocart">Add to cart</span></button><br><br>
			<p><?php echo $product_detail['description'] ;?></p>
			<h3>LOCATION</h3>
			<p>Manchester Ave, Los Angeles, United States</p>
			<p>Phone: 123 456 789</p>
		</div>
		<div class="productimage">
			<div class="image1">
				<img src="<?php echo $product_detail['image'] ;?>" alt="">
			</div>
		</div>

		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		<script src="Hello World"></script>
	</body>
</html>