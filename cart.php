<?php
include "functions/functions.php";
include "functions/db.php";
session_start();
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
    <link rel="stylesheet" type="text/css" href="styles/style.css">
    <link rel="stylesheet" type="text/css" href="styles/style_shoppingcart.css" media="all">
    <title>Tiệm bánh</title>
</head>

<body>
    <div class="main-wrapper">
        <div class="navigation-bar">
            <div class="logo">
                <a href="/quanlybanhang/index.php"><img src="images/logos/logo.jpg" alt="Cake"></a>
            </div>

            <div class="name-cakes">
                <h3>Tiệm bánh hoàng tử lớn</h3>
            </div>

            <div class="user">
                <div class="actionhotline">
                    <i class="fas fa-mobile"> </i> <span class="phone-number"> Đặt hàng: 0986775750 </span>
                </div>
            </div>
        </div>

        <div class="side-nav">
            <ul>
                <?php
                if (!isset($_SESSION['user_id'])) {
                    echo "
                    <li><a href='login.php'><i class='far fa-user'></i>Đăng nhập</a></li>
                    ";
                } else {
                    echo "
                    <li><a href='logout.php'><i class='far fa-user'></i>Đăng xuất</a></li>
                    ";
                }
                ?>
                <li><a href="cart.php"><i class="fas fa-cube"></i>Giỏ hàng</a></li>
                <li><a href="my_order.php"><i class="fas fa-money-bill"></i>Đơn hàng của tôi</a></li>
                <li><a href="index.php"><i class="fas fa-align-justify"></i>Tất cả sản phẩm</a></li>
                <li><a href="#"><i class="far fa-address-card"></i>Liên hệ</a></li>
            </ul>

        </div>

        <div class="page-container">
            <div class="page-wrapper">
                <div class="">
                    <div class="collapse navbar-collapse" id="bs-main-navbar-collapse-1" style="position: relative;">
                        <ul class="topbar">
                            <?php
                            getCats();
                            ?>
                        </ul>
                        <div class="right-banner-desktop" style="float:right;height: 32px;">
                        </div>
                    </div>
                </div>

                <!-- -->
                <h1>Giỏ hàng</h1>
                <div class="cart-shopping">

                    <div class="all-cart">
                        <!--  -->

                        <!--  -->
                        <?php
                        get_cart();
                        ?>
                    </div>
                    <div class="container">
                        <div class="payment">
                            <?php
                            total_price();
                            ?>
                            <form method='get' action=''>
                                <input type="hidden" name="dathang" value="dathang">
                                <input type="submit" class="btn btn-primary btn-lg button-dathang" value="Đặt hàng">
                            </form>
                            <?php
                            if (isset($_GET['dathang'])) {
                                dathang();
                                echo " <script>window.open('cart.php','_self');</script>";
                            }
                            if (isset($_POST['inscrea'])) {
                                update_cart($_POST['input-soluong'] + 1, $_POST['cart_MSHH']);
                                echo " <script>window.open('cart.php','_self');</script>";
                            }
                            if (isset($_POST['descrea'])) {
                                update_cart($_POST['input-soluong'] - 1, $_POST['cart_MSHH']);
                                echo " <script>window.open('cart.php','_self');</script>";
                            }
                            if (isset($_POST['del_cart'])) {
                                update_cart_del($_POST['cart_MSHH']);
                                echo " <script>window.open('cart.php','_self');</script>";
                            }
                            ?>

                        </div>
                    </div>
                </div>

                <!-- -->


            </div>
        </div>
        <!-- End page container -->
    </div> <!-- End main_wrapper-->
    <!-- Footer -->
    <footer class="footer">
        <!-- Copyright -->
        <div class="footer-copyright text-center p-4 footer-div">© 2020 Copyright:
            <a href="/quanlybanhang/index.php">ngominhtrung</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->
</body>

</html>