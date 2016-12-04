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
								<p>本实验室服务范围：</p>
								<ul>
									<li><a href="javascript:void(0);">网站前端设计</a></li>
									<li><a href="javascript:void(0);">网站后台数据维护</a></li>
									<li><a href="javascript:void(0);">数据库设计</a></li>
									<li><a href="javascript:void(0);">服务器搭建和管理</a></li>
									<li><a href="javascript:void(0);">图片处理</a></li>
									<li><a href="javascript:void(0);">平面设计</a></li>
									<li><a href="javascript:void(0);">校站群网站制作维护</a></li>
									<li><a href="javascript:void(0);">APP接口</a></li>
								</ul>
								<p>注：本实验室所提供服务均为<a href="javascript:void(0);">有偿服务</a>。</p>
							</div> <!-- /.toggle-content -->
							<div class="toggle-content" id="tab2">
								<h2 class="page-title">After-sale service</h2>
								<p><a href="javascript:void(0);">凡是经我实验室制作的产品，本实验室均对其负责。</a></p>
                                <p>一年之内，本实验室在不改变甲方网站原页面风格和模版的前提下无偿为甲方进行网站维护；</p>
                                <p>收到甲方通知后工作日时间，保障在收取资料后3日内完成资料的修改，如甲方提交更新量较大时间往后延迟。</p>
								<p>每次网站维护，甲方应提前将要更新的资料以电子邮件或移动U盘方式交给乙方；明确、清晰的指明更新或维护项目。</p>
								<p>
									因电信部门检修等原因造成服务中断的，双方互不承担责任；因国家政策法规调整、程序过老、自然灾害等不可抗力造成的服务中断，双方互不承担责任。因网站服务器运营商造成的网站问题乙方不承担责任。因甲方操作不当或是误删误改网站源码造成问题乙方不承担责任。
								</p>
							</div> <!-- /.toggle-content -->
							<div class="toggle-content" id="tab3">
								<h2 class="page-title">Notice</h2>
								<p>自2016年12月1日起，由于临近期末考试，本实验室不在接取新项目。直至2017年1月17日恢复正常。</p>
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
										<span>After-sale service</span>
									</a> <!-- /.icon-item -->
								</li>
								<li>
									<a href="#tab3" class="icon-item">
										<i class="fa fa-users"></i>
										<span>Notice</span>
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
                                
								<p>
									<img src="<?php echo base_url();?>/style/images/products/product4.jpg" alt="product 4" class="img-responsive img_left">　　
									107网站工作室，历史可以追溯到2006年，是计算机与信息工程学院下属的工作室，由学生自主管理，所以又名学生自主创新实验室，
									这也是工作室的独特之处。工作室创办之初位于河南大学计算机与信息工程学院107办公室(名字由来)，当时由于房间较小，只能容纳5-6名同学，
									所以最初工作室每年只招两人。到后来由于我工作室对学院做出的突出贡献，受到了院领导以及各位老师的大力支持，有107办公室
									搬至116办公室，实验室规模扩大，与2014年开始扩招。
								</p>
								<ul>
									<li>2006年--2013年 计算机与信息工程学院107办公室</li>
									<li>2013年--2015年 计算机与信息工程学院116办公室</li>
									<li><a href="javascript:void(0);">2015年--2017年 计算机与信息工程学院202办公室</a></li>
								</ul>
							</div> <!-- /.toggle-content -->
							<div class="toggle-content" id="tab5">
								<h2 class="page-title">Our Team</h2>
								<p><img src="<?php echo base_url();?>/style/images/products/product2.jpg" alt="product 2" class="img-responsive img_right">
									我们是一群具有专业技术的在校大学生组成的团队，是一个富有想象力和创造力的团队，每年我们都会吸纳一批优秀的同学加入到我们
									的团队中，以专业的技术、独特的创意和青春的热情为工作室注入源源不断的活力。在这里，你可以结识到各个专业，各个年级的朋友。
									我们不只是一个团队，更像是一个大家庭。每年都会组织一些有趣的活动，一起聚餐，一起唱歌，一起旅行，让你的大学生活更加有意义。
									在这里每个人都是精英。
								</p>
                                <p>
									目前实验室成员分布学院的各个专业，各个班级，主力为大二大三。
								</p>
							</div> <!-- /.toggle-content -->
							<div class="toggle-content" id="tab6">
								<h2 class="page-title">Our Workspace</h2>
								<p>
									<img src="<?php echo base_url();?>/style/images/products/333.jpg" alt="product 6" class="img-responsive img_left">
									目前实验室为202学生自主创新实验室（学院201实验室对面）。
								</p>
                                <p>
									设备是一个计算机专业的人最关心的问题，好的设备，能让我们在日常编程的过程中得心应手，才能让我们过关斩将。
									本实验室的设备是目前学院所有实验室中最好的，每个人都配有新电脑。电脑 CPU ：Inter Core i5-4590 3.30GHz，4GB内存，1T硬盘。实验室内有两台空调，所以同学们完全不用担心冬天冷，夏天热的问题。
									因为实验室受到学院高度重视，每年都会引进一些新设备。
								</p>
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
					<div class="col-md-offset-3 col-md-6">
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
				timeToHide:2000,
				bgColor:"#1abc9c",
				spinner:"spinner6"
			});
		});
	</script>
</body>
</html>