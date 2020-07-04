<?php
session_start();

if (isset($_SESSION['role']) && $_SESSION['role'] != 'admin') {

    echo "<script>window.open('login.php','_self')</script>";
} else {

?>

<?php include '/includes/db.php';
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="https://kit.fontawesome.com/f724e98ccb.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="styles/style.css" media="all">
    <title>Tiệm bánh</title>
</head>

<body>
    <div class="main-wrapper">
        <div class="navigation-bar">
            <div class="logo">
                <a href="/tiembanhnew/index.php"><img src="images/logos/logo.jpg" alt="Cake"></a>
            </div>

            <div class="search-input">
                <div id="form">
                    <form method="get" action="results.php" enctype="multipart/form-data">
                        <input id="search" type="text" name="user_query" placeholder="     Tìm sản phẩm" />
                        <input id="button" type="submit" name="search" value="Tìm kiếm" />
                    </form>
                </div>
                <!-- Seach form -->
            </div>

            <div class="name-cakes">
                <h3>Tiệm bánh hoàng tử lớn</h3>
            </div>

            <div class="user">
                <div class="actionhotline">
                    <i class="fas fa-mobile"> </i> <span class="phone-number"> Đặt hàng: 012346789 </span>
                </div>
            </div>
        </div>

			<div class="container">
				<div class="header">
					<div class="navbar-header">
						<h3><a class="admin_name">Admin Tiệm bánh</a></h3>
					</div><!-- /.navbar-header -->

					<div class="navbar-right-header">

						<ul class="dropdown-navbar-right">
							<li>
								<a><i class="fa fa-user"></i>&nbsp;<i class="fa fa-caret-down"></i></a>

								<ul class="subnavbar-right">
									<li><a href="logout.php">Logout</a></li>
								</ul>
							</li>
						</ul>

						<ul class="dropdown-navbar-right">
							<li>
								<a><i class="fa fa-bell"></i>&nbsp;<i class="fa fa-caret-down"></i></a>

								<ul class="subnavbar-right">
									<li><a>Notification </a></li>

								</ul>
							</li>
						</ul>

					</div><!-- /.navbar-right-header -->

				</div><!-- /.header -->

				<div class="body_container">
					<div class="left_sidebar">
						<div class="left_sidebar_box">

							<ul class="left_sidebar_first_level">

								<li><a href="../index.php" target="_blank"><i class="fa fa-dashboard"></i> My Site</a></li>

								<li>
									<a href="#"><i class="fa fa-th-large"></i>&nbsp;Sản phẩm <i
											class="arrow fa fa-angle-left"></i></a>

									<ul class="left_sidebar_second_level">
										<li><a href="index.php?action=add_pro">Thêm sản phẩm</a></li>
										<li><a href="index.php?action=view_pro">Xem sản phẩm</a></li>
									</ul><!-- /.left_sidebar_second_level -->
								</li>

								<li>
									<a href="#"><i class="fa fa-plus"></i>&nbsp;Nhóm sản phẩm<i
											class="arrow fa fa-angle-left"></i></a>

									<ul class="left_sidebar_second_level">
										<li><a href="index.php?action=add_cat">Thêm nhóm</a></li>
										<li><a href="index.php?action=view_cat">Xem nhóm</a></li>
									</ul><!-- /.left_sidebar_second_level -->
								</li>

								<li>
									<a href="#"><i class="fa fa-gift"></i>&nbsp;Admin <i
											class="arrow fa fa-angle-left"></i></a>

									<ul class="left_sidebar_second_level">
										<li><a href="index.php?action=add_user">Thêm nhân viên</a></li>
										<li><a href="index.php?action=view_nhanvien">Danh sách nhân viên</a></li>
										<li><a href="index.php?action=view_users">Danh sách người dùng</a></li>
									</ul><!-- /.left_sidebar_second_level -->
								</li>

								<li>
									<a href="#"><i class="fa fa-gift"></i>&nbsp;Đơn hàng <i
											class="arrow fa fa-angle-left"></i></a>

									<ul class="left_sidebar_second_level">
										<li><a href="index.php?action=check_cart">Duyệt đơn hàng</a></li>

									</ul><!-- /.left_sidebar_second_level -->
								</li>

							</ul><!-- /.left_sidebar_first_level -->
						</div><!-- /.left_sidebar_box -->

					</div><!-- /.left_sidebar -->

					<div class="content">
						<div class="content_box">
							<?php
								if (isset($_GET['action'])) {
									$action = $_GET['action'];
								} else {
									$action = '';
								}

								switch ($action) {
									case 'add_pro';
										include 'includes/insert_product.php';
										break;

									case 'view_pro';
										include 'includes/view_products.php';
										break;

									case 'edit_pro';
										include 'includes/edit_product.php';
										break;

									case 'add_cat';
										include 'includes/insert_category.php';
										break;

									case 'view_cat';
										include 'includes/view_categories.php';
										break;

									case 'edit_cat';
										include 'includes/edit_category.php';
										break;

									case 'view_users';
										include 'includes/view_users.php';
										break;
									case 'view_nhanvien';
										include 'includes/view_nhanvien.php';
										break;
									case 'check_cart';
										include 'includes/check_cart.php';
										break;
								}

								?>
						</div><!-- /.content_box -->

					</div><!-- /.content -->

				</div><!-- /.body_container -->

			</div><!-- /.container -->

		</div> <!-- End main_wrapper-->

	</body>

</html>

<?php } // End else 
?>