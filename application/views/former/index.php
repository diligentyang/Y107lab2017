<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> 
<![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8" lang="en"> 
<![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>

	<title>107网站工作室</title>
    <meta name="keywords" content="" />
	<meta name="description" content="" />
<!-- 
Concept Template 
http://www.templatemo.com/tm-397-concept 
-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">

	<!-- CSS Bootstrap & Custom -->
    <link rel="stylesheet" href="<?php echo base_url("style/css/bootstrap.min.css");?>">
    <link rel="stylesheet" href="<?php echo base_url("style/css/animate.css");?>">
    <link rel="stylesheet" href="<?php echo base_url("style/css/font-awesome.min.css");?>">
	<link rel="stylesheet" href="<?php echo base_url("style/css/templatemo_misc.css");?>">
	<link rel="stylesheet" href="<?php echo base_url("style/css/fakeLoader.css");?>">

	<!-- Main CSS -->
	<link rel="stylesheet" href="<?php echo base_url("style/css/templatemo_style.css");?>">

	<!-- Favicons -->
    <link rel="shortcut icon" href="<?php echo base_url("images/ico/favicon.ico");?>">

</head>
<body>
	<div class="fakeloader"></div>
	<div class="site-header">
		<div class="main-navigation">
			<div class="responsive_menu">
				<ul>
					<li><a class="show-1 templatemo_home" href="#">Gallery</a></li>
					<li><a class="show-2 templatemo_page2" href="#">Products</a></li>
					<li><a class="show-3 templatemo_page3" href="#">Services</a></li>
					<li><a class="show-4 templatemo_page4" href="#">About Us</a></li>
					<li><a class="show-5 templatemo_page5" href="#">Contact Us</a></li>
				</ul>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-md-12 responsive-menu">
						<a href="#" class="menu-toggle-btn">
				            <i class="fa fa-bars"></i>
				        </a>
					</div> <!-- /.col-md-12 -->
					<div class="col-md-12 main_menu">
						<ul>
							<li><a class="show-1 templatemo_home" href="#">Gallery</a></li>
							<li><a class="show-2 templatemo_page2" href="#">Products</a></li>
							<li><a class="show-3 templatemo_page3" href="#">Services</a></li>
							<li><a class="show-4 templatemo_page4" href="#">About Us</a></li>
							<li><a class="show-5 templatemo_page5" href="#">Contact Us</a></li>
						</ul>
					</div> <!-- /.col-md-12 -->
				</div> <!-- /.row -->
			</div> <!-- /.container -->
		</div> <!-- /.main-navigation -->
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<a href="#" class="templatemo_logo">
						<h1>107Lab</h1>
					</a> <!-- /.logo -->
				</div> <!-- /.col-md-12 -->
			</div> <!-- /.row -->
		</div> <!-- /.container -->
	</div> <!-- /.site-header -->
	
	<div id="menu-container">

		<div class="content homepage" id="menu-1">
			<div class="container-fluid">
				<div class="row">
					<?php
						$count = 1;
						$offset = 1;
						foreach($gallery as $value){
					?>
					<div class="col-md-2 col-sm-6 <?php if($count==1||$count==6||$count==10){echo "col-md-offset-$offset";$offset++;}?>">
						<div class="gallery-item">
								<img src="<?php echo base_url($value['imagepath']);?>" alt="image $count">
								<div class="overlay">
									<a href="<?php echo base_url($value['imagepath']);?>" data-rel="lightbox" class="fa fa-expand"></a>
								</div>
							<div class="content-gallery">
								<h3><?php echo $value['title'];?></h3>
							</div>
						</div> <!-- /.gallery-item -->
					</div>
					<?php $count++; } ?>
				</div> <!-- /.row -->
			</div> <!-- /.slide-item -->
		</div> <!-- /.homepage -->

		<div class="content products" id="menu-2">
			<div class="container">
					<div class="row">
						<?php
							$count = 1;
							foreach ($products as $value){
						?>
						<div class="col-md-4 col-sm-6">
							<div class="product-item">
								<img src="<?php echo base_url($value['imagepath']);?>" alt="product $count">
								<a href="<?php echo $value['link']?>" class="product-title"><?php echo $value['title'];?></a>
								<!--<p>This is free <a href="#">HTML5 Template</a> by templatemo and you can use it for any website.</p>-->
							</div> <!-- /.product-item -->
						</div> <!-- /.col-md-4 -->
						<?php $count++; } ?>
					</div> <!-- /.row -->
			</div> <!-- /.slide-item -->
		</div> <!-- /.products -->

		<div class="content services" id="menu-3">
			<div class="container">
				<div class="row">
					<div class="col-md-9 col-sm-10">
						<div class="inner-content">
							<div class="toggle-content" id="tab1">
								<h2 class="page-title">Our Services</h2>
								<p>Proin accumsan, velit at pretium eleifend, lectus neque volutpat tortor, at placerat arcu odio vitae nisl. Curabitur dui ipsum, varius lobortis eros eget, faucibus faucibus nisl. <a href="#">Donec tincidunt</a> est a scelerisque suscipit. Vivamus sit amet purus at ante mollis mattis a at ante. Praesent purus metus, aliquet non porta sit amet, ultrices sit amet purus. Phasellus vitae orci diam. Cras sit amet gravida neque, auctor lobortis nibh.</p>
								<ul>
									<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
									<li>Aliquid, beatae, ea delectus asperiores nostrum tempora nihil facere.</li>
									<li>Consequatur nesciunt dolorem deserunt necessitatibus.</li>
									<li>Iste laboriosam qui pariatur cum sint modi.</li>
								</ul>
								<p>Concept is <a href="#">free responsive template</a> based on <a rel="nofollow" href="http://getbootstrap.com">Bootstrap</a> framework. Gallery page is integrated with <a rel="nofollow" href="https://github.com/duncanmcdougall/Responsive-Lightbox">responsive lightbox</a>. Credit goes to <a rel="nofollow" href="http://unsplash.com">Unsplash</a> for all images featured in this template. This template can be viewed in mobile phones or tablets. Feel free to use this layout for your websites.</p>
							</div> <!-- /.toggle-content -->
							<div class="toggle-content" id="tab2">
								<h2 class="page-title">Our Support</h2>
								<p>Quisque vestibulum sed mauris vel aliquet. Etiam in purus a massa mattis bibendum. Donec dolor odio, porttitor molestie euismod dictum, ultrices vel ipsum. Phasellus id sollicitudin erat. Nullam imperdiet sed metus iaculis dapibus. <a href="#">Duis pharetra</a> feugiat metus in sollicitudin.</p>
                                <p>Proin cursus dapibus ipsum, vel congue tellus malesuada aliquam. Nullam id arcu urna. Donec at velit vel velit ultricies accumsan. Integer commodo dui libero, vitae rhoncus ante porttitor ac. Pellentesque sit amet lectus eros. <a href="#">Aliquam placerat</a> varius quam sed aliquam. Curabitur turpis diam, iaculis sit amet auctor ut, cursus quis velit. Mauris non risus vitae purus sodales rhoncus.</p>
                                <p>Sed feugiat a turpis vitae porttitor. Proin placerat vitae enim ac scelerisque. Cras ac lectus hendrerit, pellentesque metus ut, molestie diam. Nam vitae bibendum velit, eu fermentum dui. In sodales dolor interdum egestas consequat. Integer id dolor nulla. Donec nec ante mauris.</p>
							</div> <!-- /.toggle-content -->
							<div class="toggle-content" id="tab3">
								<h2 class="page-title">Testimonials</h2>
								<p>Duis interdum eros elit, ut semper massa imperdiet vitae. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut pretium vehicula est tristique volutpat. Duis ac felis quis augue dapibus hendrerit. Vivamus pretium, felis sed dignissim commodo, quam turpis commodo ipsum, at varius nisi risus ut dolor. Mauris quam purus, molestie ac urna eu, sagittis sagittis dui.</p>
                                <p><a href="#">Integer risus mauris</a>, fermentum ac risus eu, vehicula tempus augue. Morbi egestas nulla turpis, non sollicitudin justo interdum ac. Pellentesque elementum, urna bibendum semper ullamcorper, lorem justo gravida arcu, ut pellentesque nulla orci in neque. Curabitur in commodo sem, rhoncus lobortis mi. Maecenas sit amet arcu sapien.</p>
                                <p>Phasellus molestie molestie metus quis elementum. Cras dictum rutrum arcu id interdum. Vivamus suscipit suscipit mauris eget feugiat. Sed sagittis enim id tempus vulputate. Aliquam erat volutpat. In quis neque sodales, pulvinar turpis sed, lacinia sem.</p>
							</div> <!-- /.toggle-content -->
						</div> <!-- /.inner-content -->
					</div> <!-- /.col-md-9 -->
					<div class="col-md-3 col-sm-2">
						<div id="icons">
							<ul class="tabs">
								<li>
									<a href="#tab1" class="icon-item">
										<i class="fa fa-cogs"></i>
										<span>Services</span>
									</a> <!-- /.icon-item -->
								</li>
								<li>
									<a href="#tab2" class="icon-item">
										<i class="fa fa-leaf"></i>
										<span>Our Support</span>
									</a> <!-- /.icon-item -->
								</li>
								<li>
									<a href="#tab3" class="icon-item">
										<i class="fa fa-users"></i>
										<span>Testimonials</span>
									</a> <!-- /.icon-item -->
								</li>
							</ul>
						</div> <!-- /.icons -->
					</div> <!-- /.col-md-3 -->
				</div> <!-- /.row -->
			</div> <!-- /.container -->
		</div> <!-- /.services -->

		<div class="content about" id="menu-4">
			<div class="container">
				<div class="row">
					<div class="col-md-9 col-sm-10">
						<div class="about-us-content">
							<div class="toggle-content" id="tab4">
								<h2 class="page-title">Our History</h2>
                                
								<p><img src="<?php echo base_url();?>/style/images/products/product4.jpg" alt="product 4" class="img-responsive img_left">Vivamus eleifend vestibulum auctor. Nam ac leo sed nulla iaculis commodo sit amet a ligula. <a href="#">Proin consequat</a> magna nec sodales hendrerit. Nam commodo mi dolor, quis egestas lectus viverra eu. Cras accumsan ultrices turpis et lacinia. Sed non lobortis purus. Phasellus consequat, magna id rutrum lacinia, magna urna malesuada magna, ut fringilla odio sapien at nunc. <a href="#">Proin nisl purus</a>, semper at fermentum sit amet, vehicula eget dolor. Integer sodales vehicula magna mattis semper. Etiam pellentesque semper mi vitae tempus. Praesent ut metus sed lacus egestas blandit eget gravida enim. Ut rutrum suscipit velit sit amet tempor. Donec rutrum, lacus non blandit rhoncus, nisi orci tempus risus, non vehicula enim lacus et est. In non gravida metus. Duis augue mauris, ullamcorper quis blandit sit amet, laoreet sed dui.</p>
								<ul>
									<li>Cras quis nibh vitae ligula venenatis blandit ut eleifend nunc.</li>
									<li>Morbi imperdiet mauris ut dolor pellentesque egestas.</li>
									<li>Ut ultrices lorem quis tellus malesuada blandit.</li>
									<li>Donec pharetra ante in sodales semper.</li>
                                    <li>Nam vitae bibendum velit, eu fermentum dui.</li>
								</ul>
							</div> <!-- /.toggle-content -->
							<div class="toggle-content" id="tab5">
								<h2 class="page-title">Our Team</h2>
								<p><img src="<?php echo base_url();?>/style/images/products/product2.jpg" alt="product 2" class="img-responsive img_right">Duis purus mauris, tincidunt at consectetur non, tristique sodales ligula. Cras congue cursus risus, nec tempus mi porta eget. Cras ante metus, aliquam tincidunt eros sed, dignissim hendrerit est. Phasellus fringilla sit amet dui eu convallis. Mauris tristique, metus eget auctor tempor, elit odio vehicula mi, ac placerat lectus augue eu arcu. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Mauris eu porta urna, a commodo leo. <a href="#">Phasellus porttitor</a>, nisl vitae molestie euismod, magna lorem porta ante, eu commodo nisl orci ut nisi. Curabitur imperdiet, arcu vitae tincidunt viverra, velit elit aliquam metus, sed ultrices metus odio sed nunc.</p>
                                <p>Etiam lectus tortor, lobortis eu mattis nec, eleifend a nunc. Quisque consequat lectus sed imperdiet vulputate. Vivamus tristique non elit eu faucibus. Nam et arcu vestibulum, bibendum risus vitae, gravida libero. Suspendisse sed lacus neque. Nullam arcu elit, luctus ut enim et, eleifend varius dui. Fusce sit amet convallis lacus. Quisque vel ultricies libero. Morbi at tempor nisi.</p>
							</div> <!-- /.toggle-content -->
							<div class="toggle-content" id="tab6">
								<h2 class="page-title">Our Workspace</h2>
								<p><img src="<?php echo base_url();?>/style/images/products/product6.jpg" alt="product 6" class="img-responsive img_left">Labore, libero itaque quisquam officiis earum. Eaque, facilis, quibusdam, ab, voluptates quaerat dignissimos totam nam consequuntur labore explicabo temporibus atque aliquid asperiores error impedit repudiandae est nemo omnis sequi quae eius quos repellat doloribus cumque nulla sunt maxime ducimus commodi animi placeat quo debitis earum illum numquam inventore aspernatur necessitatibus voluptatum delectus maiores laboriosam magni ex illo quod corporis hic consectetur odio suscipit fugit qui aperiam. Sequi, quos, nam quam debitis architecto doloribus rerum illum magnam culpa ex eius nobis ducimus aspernatur aliquid laborum deleniti distinctio temporibus quae.</p> 
                                <p>Quisque consequat lectus sed imperdiet vulputate. <a href="#">Vivamus tristique</a> non elit eu faucibus. Nam et arcu vestibulum, bibendum risus vitae, gravida libero. Suspendisse sed lacus neque. Nullam arcu elit, luctus ut enim et, eleifend varius dui.</p>
							</div> <!-- /.toggle-content -->
						</div> <!-- /.inner-content -->
					</div> <!-- /.col-md-9 -->
					<div class="col-md-3 col-sm-2">
						<div id="icons-about">
							<ul class="tabs">
								<li>
									<a href="#tab4" class="icon-item">
										<i class="fa fa-umbrella"></i>
										<span>Our History</span>
									</a> <!-- /.icon-item -->
								</li>
								<li>
									<a href="#tab5" class="icon-item">
										<i class="fa fa-camera"></i>
										<span>Our Team</span>
									</a> <!-- /.icon-item -->
								</li>
								<li>
									<a href="#tab6" class="icon-item">
										<i class="fa fa-coffee"></i>
										<span>Our Workspace</span>
									</a> <!-- /.icon-item -->
								</li>
							</ul>
						</div> <!-- /.icons -->
					</div> <!-- /.col-md-3 -->
				</div> <!-- /.row -->
			</div> <!-- /.container -->
		</div> <!-- /.services -->

		<div class="content contact" id="menu-5">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="widget-content">
							<div class="page-title">Contact Us</div>
							<div class="contact-form">
								<fieldset>
									<input id="name" type="text" name="name" placeholder="Name" maxlength="40">
								</fieldset>
								<fieldset>
									<input type="email" name="email" id="email" placeholder="Email" maxlength="30">
								</fieldset>
								<fieldset>
									<input type="text" name="subject" id="subject" placeholder="Subject" maxlength="60">
								</fieldset>
								<fieldset>
									<textarea name="comments" id="comments" placeholder="Message"></textarea>
								</fieldset>
								<fieldset>
									<input type="submit" name="send" value="Send Message" id="submit" class="button">
								</fieldset>
							</div> <!-- /.contact-form -->
						</div> <!-- /.inner-content -->
					</div> <!-- /.col-md-6 -->
					<div class="col-md-6">
						<div class="widget-content">
							<div class="page-title">Our Location</div>

							<div id="templatemo_map"></div>

                            <div class="contact-information">
                            	<div class="row">
                            		<div class="col-md-6 col-sm-6">
                            			<p>120 Digital Studio, Inya Lake, Yangon 10620, Myanmar</p>
                            		</div> <!-- /.col-md-6 -->
                            		<div class="col-md-6 col-sm-6 text-right">
                            			<ul>
                            				<li>Tel: 010-020-0340</li>
                            				<li>Email: info@company.com</li>
                            			</ul>
                            		</div> <!-- /.col-md-6 -->
                            	</div> <!-- /.row -->
                            </div> <!-- /.contact-information -->
						</div> <!-- /.inner-content -->
					</div> <!-- /.col-md-6 -->
				</div> <!-- /.row -->
			</div> <!-- /.container -->
		</div> <!-- /.contact -->

	</div> <!-- /#menu-container -->

	<div id="templatemo_footer">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<p>Copyright &copy; 2017 河南大学107网站工作室</p>
				</div> <!-- /.col-md-12 -->
			</div> <!-- /.row -->
		</div> <!-- /.container -->
	</div> <!-- /.templatemo_footer -->

	<!-- Scripts -->
	<script src="<?php echo base_url("style/javascript/jquery-1.10.2.min.js");?>"></script>
    <script src="<?php echo base_url("style/javascript/jquery-migrate-1.2.1.min.js");?>"></script>
    <script src="<?php echo base_url("style/javascript/modernizr.js");?>"></script>
	<script src="<?php echo base_url("style/javascript/bootstrap.js");?>"></script>
	<script src="<?php echo base_url("style/javascript/tabs.js");?>"></script>
	<script src="<?php echo base_url("style/javascript/jquery.lightbox.js");?>"></script>
	<script src="<?php echo base_url("style/javascript/templatemo_custom.js"); ?>"></script>
	<script src="<?php echo base_url("style/javascript/fakeLoader.min.js"); ?>"></script>
	<script>
		$(document).ready(function(){
			$(".fakeloader").fakeLoader({
				timeToHide:1500,
				bgColor:"#1abc9c",
				spinner:"spinner6"
			});
		});
	</script>
</body>
</html>