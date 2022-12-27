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
                        <a class="btn btn-outline-primary border-2 active"  href="product.php">IPhone</a>
                    
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
                        <a class="btn btn-outline-primary border-2 "  href="Ipod-product.php">Ipod</a>
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
                        
                        if ($value['loai_id'] == 1) {
                            echo "<div class='col-xl-3 col-lg-4 col-md-6 wow fadeInUp' data-wow-delay='0.1s'>";
                            echo "   <div class='product-item'>";
                            echo "     <div class='position-relative bg-light overflow-hidden'>";
                            echo "        <img class='img-fluid w-100' src='img/{$value['images']}' alt='>";
                            echo "<div class='bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3'>s</div>";
                            echo "</div>";
                            echo "<div class='text-center p-4'>";
                            echo "<a class = 'd-block h5 mb-2' href = ''>{$value['name']}</a>";
                            echo "<span class='text-primary me-1'>{$value['price']}</span>"; //<span style = "color: ".getColor($price)."">".$price."</span>";
                            // echo "<span class = 'text-body text-decoration-line-through'>$2.100.00</span>";
                            echo "</div>";
                            echo "<div class = 'd-flex border-top'>";
                            echo "<small class='w-50 text-center border-end py-2'>";
                            echo "<a class = 'text-body' href = 'detail-product.php?id={$value['id']}'><i class = 'fa fa-eye text-primary me-2'></i>Xem chi tiết</a>";
                            echo "</small>";
                            echo "<small class = 'w-50 text-center py-2'>";
                            echo "<a class='text-body' href=''><i class='fa fa-shopping-bag text-primary me-2'></i>Thêm vào giỏ</a>";
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