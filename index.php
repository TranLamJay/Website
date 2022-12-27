<?php

session_start();


?>

<!DOCTYPE html>
<html lang="en">

<?php
include_once "./header/header.php"
?>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <?php
    include_once "./menu-navbar/menu.php"
    ?>
    <!-- Navbar End -->


    <!-- Welcome Start -->
    <?php
    include_once "./welcome/welcome.php"
    ?>
    <!-- Welcome End -->


    <!-- About Start -->
    <?php
    //include_once "./about/about.php"
    ?>
    <!-- About End -->


    <!-- Feature Start -->
    <?php
    //include './feature/feature.php';
    ?>
    <!-- Feature End -->


    <!-- Product Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-0 gx-5 align-items-end">
                <div class="col-lg-6">
                    <div class="section-header text-start mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                        <h1 class="display-5 mb-3">Danh sách sản phẩm</h1>
                        <!-- <p>Tempor ut dolore lorem kasd vero ipsum sit eirmod sit. Ipsum diam justo sed rebum vero dolor duo.</p> -->
                    </div>
                </div>
                <!-- <div class="col-lg-6 text-start text-lg-end wow slideInRight" data-wow-delay="0.1s">
                <ul class="nav nav-pills d-inline-flex justify-content-end mb-5">
                    <li class="nav-item me-2">
                        <a class="btn btn-outline-primary border-2 active" data-bs-toggle="pill" href="#tab-1">IPhone</a>
                    </li>
                    <li class="nav-item me-2">
                        <a class="btn btn-outline-primary border-2" data-bs-toggle="pill" href="#tab-2">Ipad</a>
                    </li>
                    <li class="nav-item me-2">
                        <a class="btn btn-outline-primary border-2" data-bs-toggle="pill" href="#tab-3">MacBook</a>
                    </li>
                    <li class="nav-item me-2">
                        <a class="btn btn-outline-primary border-2" data-bs-toggle="pill" href="#tab-4">Apple Watch</a>
                    </li>
                    <li class="nav-item me-0">
                        <a class="btn btn-outline-primary border-2" data-bs-toggle="pill" href="#tab-5">Ipod</a>
                    </li>
                </ul>
            </div> -->
            </div>
            <div class="tab-content">
                <div id="tab-1" class="tab-pane fade show p-0 active">
                    <div class="row g-3">
                        <?php

                        include_once "backend/Util/ConnectDb.php";
                        // include '../Model/Product.php';
                        $dbConn = new ConnectDb('', '', '', '');

                        // $pd = new Product("", "", "", "", "", "", "", "");
                        $sql = "select * from sanpham";
                        
                        $data = $dbConn->getAllData($sql);


                        foreach ($data as $value) {
                            echo "<div class='col-xl-3 col-lg-4 col-md-6 wow fadeInUp' data-wow-delay='0.1s'>";
                            echo "   <div class='product-item'>";
                            echo "     <div class='position-relative bg-light overflow-hidden'>";
                            echo "        <img class='img-fluid w-100' src='img/{$value['images']}' alt='>";
                            echo "<div class='bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3'></div>";
                            echo "</div>";
                            echo "<div class='text-center p-4'>";
                            echo "<a class = 'd-block h5 mb-2' href = ''>{$value['name']}</a>";
                            echo "<div class='me-1' style='color:red'>{$value['price']}</div>"; //<span style = "color: ".getColor($price)."">".$price."</span>";
                            // echo "<span class = 'text-body text-decoration-line-through'>$2.100.00</span>";
                            echo "</div>";
                            echo "<div class = 'd-flex border-top'>";
                            echo "<small class='w-50 text-center border-end py-2'>";
                            echo "<a class = 'text-body' href ='detail-product.php?id={$value['id']}'><i class = 'fa fa-eye text-primary me-2'></i>Xem chi tiết</a>";
                            echo "</small>";
                            echo "<small class = 'w-50 text-center py-2'>";
                            echo "<a class='text-body' name= 'order_action' value='add' href='./backend/Controller/OrderController.php'><i class='fa fa-shopping-bag text-primary me-2'></i>Thêm vào giỏ</a>";
                            echo "</small>";
                            echo "</div>";
                            echo "</div>";
                        }
                        ?>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
                        <!-- Product End -->


                        <!--  Visit Shop Start -->
                        <div class="container-fluid bg-primary bg-icon mt-5 py-6">
                            <div class="container">
                                <div class="row g-5 align-items-center">
                                    <div class="col-md-7 wow fadeIn" data-wow-delay="0.1s">
                                        <h1 class="fw-bold text-primary mb-4" style="font-size: 4rem; ">L<span class="text-secondary">am</span>Apple</h1>
                                        <!-- <p class="text-white mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos.</p> -->
                                    </div>
                                    <div class="col-md-5 text-md-end wow fadeIn" data-wow-delay="0.5s">
                                        <a class="btn btn-lg btn-secondary rounded-pill py-3 px-5" href="product.php">Shopping</a>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!--  Visit Shop End -->





                        <!-- Footer Start -->
                        <?php
                        include_once "./footer/footer.php"
                        ?>
                        <!-- Footer End -->


                        <!-- Back to Top -->
                        <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


                        <!-- JavaScript Libraries -->
                        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
                        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
                        <script src="lib/wow/wow.min.js"></script>
                        <script src="lib/easing/easing.min.js"></script>
                        <script src="lib/waypoints/waypoints.min.js"></script>
                        <script src="lib/owlcarousel/owl.carousel.min.js"></script>

                        <!-- Template Javascript -->
                        <script src="js/main.js"></script>
</body>

</html>