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


    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <h1 class="display-3 mb-3 animated slideInDown">Products</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a class="text-body" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-body" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-dark active" aria-current="page">Products</li>
                </ol>
            </nav>
        </div>
    </div>
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-0 gx-5 align-items-end">
            <div class="col-lg-6">
                <div class="section-header text-start mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                    <h1 class="display-5 mb-3">Sản phẩm</h1>
                    <!-- <p>Tempor ut dolore lorem kasd vero ipsum sit eirmod sit. Ipsum diam justo sed rebum vero dolor duo.</p> -->
                </div>
            </div>
            <div class="col-lg-6 text-start text-lg-end wow slideInRight" data-wow-delay="0.1s">
                <ul class="nav nav-pills d-inline-flex justify-content-end mb-5">
                    <li class="nav-item me-2">
                        <a class="btn btn-outline-primary border-2 "  href="product.php">IPhone</a>
                    
                    <li class="nav-item me-2">
                        <a class="btn btn-outline-primary border-2 "  href="Ipad_product.php">Ipad</a>
                    </li>
                    <li class="nav-item me-2">
                        <a class="btn btn-outline-primary border-2 "  href="macbook-product.php">MacBook</a>
                    </li>
                    <li class="nav-item me-2">
                        <a class="btn btn-outline-primary border-2 "  href="applewatch-product.php">Apple Watch</a>
                    </li>
                    <li class="nav-item me-0">
                        <a class="btn btn-outline-primary border-2 active"  href="Ipod-product.php">Ipod</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="tab-content">
            <div id='tab-1' class='tab-pane fade show p-0 active'>
                <div class='row g-4'>
                    <?php
                    include_once "backend/Util/ConnectDb.php";
                    // include_once "../Model/Product.php";
                    // include_once "../Model/Category.php";

                    $dbConn = new ConnectDb('', '', '', '');

                    $sql = "select * from sanpham";

                    $data = $dbConn->getAllData($sql);
                    foreach ($data as $value) {
                        
                        if ($value['loai_id'] == 5) {
                            echo "<div class='col-xl-3 col-lg-4 col-md-6 wow fadeInUp' data-wow-delay='0.1s'>";
                            echo "   <div class='product-item'>";
                            echo "     <div class='position-relative bg-light overflow-hidden'>";
                            echo "        <img class='img-fluid w-100' src='img/{$value['images']}' alt='>";
                            echo "<div class='bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3'>New</div>";
                            echo "</div>";
                            echo "<div class='text-center p-4'>";
                            echo "<a class = 'd-block h5 mb-2' href = ''>{$value['name']}</a>";
                            echo "<span class='text-primary me-1'>{$value['price']}</span>"; //<span style = "color: ".getColor($price)."">".$price."</span>";
                            // echo "<span class = 'text-body text-decoration-line-through'>$2.100.00</span>";
                            echo "</div>";
                            echo "<div class = 'd-flex border-top'>";
                            echo "<small class='w-50 text-center border-end py-2'>";
                            echo "<a class = 'text-body' href = ''><i class = 'fa fa-eye text-primary me-2'></i>View detail</a>";
                            echo "</small>";
                            echo "<small class = 'w-50 text-center py-2'>";
                            echo "<a class='text-body' href=''><i class='fa fa-shopping-bag text-primary me-2'></i>Add to cart</a>";
                            echo "</small>";
                            echo "</div>";
                            echo "</div>";
                        }
                    }
                    ?>
                </div>

            </div>
        </div>
    </div>
</div>

<!--  Visit Shop Start -->
<?php
        include './visit shop/visitshop.php';
    ?>
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