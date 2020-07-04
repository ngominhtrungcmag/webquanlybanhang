<?php
session_start();

if (isset($_SESSION['role']) && $_SESSION['role'] != 'admin') {

    echo "<script>window.open('login.php','_self')</script>";
} else {

?>

<?php include 'includes/db.php';
    ?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: "Lato", sans-serif;
}

/* Fixed sidenav, full height */
.sidenav {
  height: 100%;
  width: 200px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  padding-top: 20px;
}

/* Style the sidenav links and the dropdown button */
.sidenav a, .dropdown-btn {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 20px;
  color: #818181;
  display: block;
  border: none;
  background: none;
  width: 100%;
  text-align: left;
  cursor: pointer;
  outline: none;
}

/* On mouse-over */
.sidenav a:hover, .dropdown-btn:hover {
  color: #f1f1f1;
}

/* Main content */
.main {
  margin-left: 200px; /* Same as the width of the sidenav */
  font-size: 20px; /* Increased text to enable scrolling */
  padding: 0px 10px;
}

/* Add an active class to the active dropdown button */
.active {
  background-color: green;
  color: white;
}

/* Dropdown container (hidden by default). Optional: add a lighter background color and some left padding to change the design of the dropdown content */
.dropdown-container {
  display: none;
  background-color: #262626;
  padding-left: 8px;
}

/* Optional: Style the caret down icon */
.fa-caret-down {
  float: right;
  padding-right: 8px;
}

/* Some media queries for responsiveness */
@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
</head>
<body>
 <div class="navigation-bar">
            <div class="logo">
                <a href="/tiembanhnew/index.php"><img src="images/logos/logo.jpg" alt="Cake"></a>
            </div>

            <div class="name-cakes">
                <h3>Tiệm bánh hoàng tử lớn</h3>
            </div>

        </div>
		
<div class="sidenav">
  <button class="dropdown-btn">Sản phẩm <i class="fa fa-caret-down"></i></button>
  <div class="dropdown-container">
    <a href="index.php?action=add_pro">Thêm sản phẩm</a>
    <a href="index.php?action=view_pro">Xem sản phẩm</a>
  </div>
  <button class="dropdown-btn">Nhóm sản phẩm<i class="fa fa-caret-down"></i></button>
  <div class="dropdown-container">
    <a href="index.php?action=add_cat">Thêm nhóm</a>
    <a href="index.php?action=view_cat">Xem nhóm</a>
  </div>
  <button class="dropdown-btn">Tài khoản<i class="fa fa-caret-down"></i></button>
  <div class="dropdown-container">
    <a href="index.php?action=add_nhanvien">Thêm nhân viên</a>
    <a href="index.php?action=view_nhanvien">Danh sách nhân viên</a>
	    <a href="index.php?action=view_users">Danh sách người dùng</a>
  </div>
  <button class="dropdown-btn">Đơn hàng<i class="fa fa-caret-down"></i></button>
  <div class="dropdown-container">
    <a href="index.php?action=check_cart">Duyệt đơn hàng</a>
  </div>

</div> <!-- /.End sidenav -->


<div class="main">
<div class="page-wrapper">
                <div class="">

                </div>

                <!-- -->
                <!--Profile Card-->
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
                <!-- -->


            </div>
</div>

<script>
/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
  this.classList.toggle("active");
  var dropdownContent = this.nextElementSibling;
  if (dropdownContent.style.display === "block") {
  dropdownContent.style.display = "none";
  } else {
  dropdownContent.style.display = "block";
  }
  });
}
</script>

</body>
</html> 

<?php } // End else 
?>
