<!DOCTYPE html>
<html lang="en">

<head>
	<title>Login</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="css/font-awesome.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
  
	<link rel="stylesheet" href="css/style.css">  
  
	<link rel="stylesheet" href="css/course-details-style.css">
  
	<link rel="stylesheet" href="css/duy.css">
  
	<link rel="stylesheet" href="css/switcher.css">
  
	<link rel="stylesheet" href="css/responsive.css">
	<link rel="stylesheet" class="js-glass-style" href="css/glass.css" disabled>
	
	<link rel="stylesheet" class="js-color-style" href="css/colors/color-2.css">
	
</head>

<body class="t-dark">
	  <!-- page loader start -->
	  <div class="page-loader js-page-loader">
		<div></div>
	  </div>
	  <!-- page loader end -->
	<!-- main start -->
    <!-- header start -->
    <header class="header">
		<div class="container d-flex justify-content-between align-items-center">
  
		  <div class="header-logo b">
			<a href="index.php"><span>Uni</span>Cou</a>
		  </div>
		  
		  <button type="button" class="header-hamburger-btn js-header-menu-toggler">
			<span><i class="fa-solid fa-bars" style="font-size: 28px;color:var(--black-70);"></i></span>
		  </button>
  
		  <div class="header-backdrop js-header-backdrop"></div>
  
		  <nav class="header-menu js-header-menu">
			<button type="button" class="header-close-btn js-header-menu-toggler">
			  <i class="fas fa-times"></i>
			</button>
			<ul class="menu">
			  <li class="menu-item"><a href="index.php">Home</a></li>
			  <li class="menu-item menu-item-has-children">
				<a href="#" class="js-toggle-sub-menu">Chuyên ngành <i class="fas fa-chevron-down"></i></a>
				<ul class="sub-menu js-sub-menu">
  
				  <li class="sub-menu-item text-center"><a href="">AD</a></li>
				  <li class="sub-menu-item text-center"><a href="courses.php">DA</a></li>
				  <li class="sub-menu-item text-center"><a href="">NS</a></li>
				  <li class="sub-menu-item text-center"><a href="">BA</a></li>
  
				</ul>
			  </li>
			  <li class="menu-item"><a href="contact.php">Liên hệ</a></li>
			  <li class="menu-item menu-item-has-children">
				<a href="#" class="js-toggle-sub-menu">Tài khoản <i class="fas fa-chevron-down"></i></a>
				<ul class="sub-menu js-sub-menu">
				  <li class="sub-menu-item"><a href="log-in.php">Đăng Nhập</a></li>
				  <li class="sub-menu-item"><a href="sign-up.php">Đăng kí</a></li>
				</ul>
			  </li>
			</ul>
		  </nav>
  
		</div>
  
	  </header>
	  <!-- header end -->

	<!--breadcrumn start -->
	<div class="breadcrumb-nav">
		<div class="container">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb mb-0">
					<li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
					<li class="breadcrumb-item" aria-current="page">Đăng kí</li>
				</ol>
			</nav>
		</div>
	</div>
	<!--breadcrumn end -->
	<!--sign section start -->
	<section class="signup section-padding">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-7 col-lg-6 col-xl-5">
				<div class="signup-form box">
					<h2 class="form-title text-center">Tạo tài khoản</h2>
					<form action="">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Họ và Tên">
						</div>
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Email">
						</div>
						<div class="form-group">
							<input type="password" class="form-control" placeholder="Mật khẩu">
						</div>
						<button type="submit" class="btn btn-block btn-theme btn-form">Đăng kí</button>
						<p class="text-center mt-4 mb-4">Đã có tài khoản ? <a href="log-in.php">Đăng nhập</a></p>
					</form>
				</div>
			</div>
		</div>
	</div>
	</section>
	<!--sign section end -->
	<!-- footer start -->
	<footer class="footer">
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-sm-6 col-lg-3">
						<div class="footer-item">
							<h3 class="footer-logo"><span>Uni</span>Cou - khoá học chuẩn Đại học</h3>
							<ul>
								<li>Điện thoại: <a href="">0236.3667.117</a></li>
								<li>Email: <a href="">de@vku.udn.vn</a></li>
								<li class="mb-1">Địa chỉ: 470 Trần Đại Nghĩa, Khu Đô Thị Đại Học, Quận Ngũ Hành Sơn, Tp
									Đà Nẵng</li>

								<li><a href=""><img src="img/dmca-protected.png" alt=""></a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6 col-lg-3">
						<div class="footer-item">
							<h3 class="footer-logo">Về Unicou</h3>
							<ul>
								<li><a href="">Giới thiệu</a></li>
								<li><a href="">Liên hệ</a></li>
								<li><a href="">Điều khoản</a></li>
								<li><a href="">Bảo mật</a></li>
								<li><a href="">Cơ hội việc làm</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6 col-lg-3">
						<div class="footer-item">
							<h3 class="footer-logo">Sản phẩm</h3>
							<ul>
								<li><a href="#">Game Nester</a></li>
								<li><a href="#">Game CSS Diner</a></li>
								<li><a href="#">Game CSS Selectors</a></li>
								<li><a href="#">Game Froggy</a></li>
								<li><a href="#">Game Froggy Pro</a></li>
								<li><a href="#">Game Scoops</a></li>

							</ul>
						</div>
					</div>

					<div class="col-sm-6 col-lg-3">
						<div class="footer-item">
							<h3 class="footer-logo">Trường Đại học CNTT và truyền thông Việt-Hàn</h3>
							<ul>
								<li>Mã số thuế: 0109922902</li>
								<li>Ngày thành lập: 04/03/2022</li>
								<li>Lĩnh vực: Công nghệ, giáo dục, lập trình</li>
								<li>VKU: Nhân bản - Phụng sự - Khai phóng</li>

							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-bottom">
			<div class="container">
				<p class="m-0 py-4 text-center">Copyright &copy; 2023 Lorem</p>
			</div>
		</div>
	</footer>
	<!-- footer end -->

	<!-- main end -->


      <!--style switcher start -->
	  <div class="style-switcher js-style-switcher">
		<div class="style-switcher-toggler js-style-switcher-toggler">
		  <i class="fa fa-cog"></i>
		</div>
		<h3>Chuyển đổi phong cách</h3>
		<div class="style-switcher-item">
		  <p class="mb-2">Màu chủ đề</p>
		   theme colors 
		  <div class="theme-color js-theme-colors">
			<button type="button" data-js-theme-color="color-1" class="js-theme-color-item color-1">
			</button>
			<button type="button" data-js-theme-color="color-2" class="js-theme-color-item color-2">
			</button>
			<button type="button" data-js-theme-color="color-3" class="js-theme-color-item color-3">
			</button>
			<button type="button" data-js-theme-color="color-4" class="js-theme-color-item color-4">
			</button>
			<button type="button" data-js-theme-color="color-5" class="js-theme-color-item color-5">
			</button>
		  </div>
		</div>
		<div class="style-switcher-item">
		  <div class="form-check form-switch">
			<input class="form-check-input js-dark-mode" type="checkbox" role="switch" id="dark-mode">
			<label class="form-check-label" for="dark-mode">Chế độ tối</label>
		  </div>
		</div>
		<div class="style-switcher-item">
		  <div class="form-check form-switch">
			<input class="form-check-input js-glass-effect" type="checkbox" role="switch" id="glass-effect">
			<label class="form-check-label" for="glass-effect">Hiệu ứng thủy tinh</label>
		  </div>
		</div> 
	  </div>
	  <!--style switcher end -->
		<script src="js/switcher.js"></script>
		<script src="js/bootstrap.bundle.min.js"></script>
		<script src="js/main.js"></script>
	</body>
	</html>