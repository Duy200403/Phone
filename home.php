<?php 
    include_once("config/database.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phone Store</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />

    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <style>

    </style>
</head>

<body>
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <h4>Phone Store</h4>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                          </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="home.php">
                                <h6>Home</h6>
                            </a>
                        </li>
                        <li>
                            <input type="text" class="search_bar" placeholder="Search">
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="home.php">
                                <h6>Sản Phẩm</h6>
                            </a>
                        </li>
                        <?php
                            $sqlCategory = "SELECT * FROM categories ORDER BY cate_id ASC";
                            $queryCategory = mysqli_query($conn, $sqlCategory);
                        ?>
                         <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="#">
                                <h6>
                                    <ul class="nav" style="margin-top: -77px; margin-left: -40px;">
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                Danh Mục
                                            </a>
                                            
                                            <ul class="dropdown-menu">
                                            <?php
                                                if(mysqli_num_rows($queryCategory) > 0){
                                                    while($cate = mysqli_fetch_assoc($queryCategory)){
                                                        
                                             
                                            ?>
                                                <li><a class="dropdown-item" href="product-category.php?cate_id=<?php echo $cate['cate_id']?>"><?php echo $cate['cate_name']?></a></li>
                                            <?php
                                                  }
                                                } 
                                            ?>
                                            </ul>

                                        </li>
                                    </ul>
                                </h6>   
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="introduct.php">
                                <h6>Giới Thiệu</h6>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="contact.php">
                                <h6>Liên Hệ</h6>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="cart.php">
                                <h6>Giỏ Hàng</h6>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <br>
    <div class="row">
        <div class="col-1"></div>
        <div class="col-md-10">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="images/list3.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="images/list2.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="images/list.png" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
            </div>
        </div>
        <div class="col-1"></div>
    </div> 
    <br><br>
    <!-- Product Iphone -->
    <div class="row">
        <div class="col-2"></div>
        <div class="col-md-8">
            <div class="banner-newproducts">
                <?php 
                    $sqlFeaturedProduct = "SELECT * FROM product WHERE prd_featured = 1  ORDER BY prd_id DESC LIMIT 6"; 
                    $queryFeaturedProduct = mysqli_query($conn, $sqlFeaturedProduct);
                ?>
                <h2>Sản phẩm nổi bật</h2>
            </div>
            <!-- GROUP-1 -->
            <div class="card-group">
            <?php
                    if(mysqli_num_rows($queryFeaturedProduct)){
                        while($prdFeaturedProduct = mysqli_fetch_assoc($queryFeaturedProduct)){
            ?>
            <div class="col-lg-4 col-md-8 col-sm-12 mx-product">
                <div class="card">
                    <a href="product-details.php?prd_id=<?php echo $prdFeaturedProduct['prd_id'] ?>">
                        <img style="width: 150px; height: 150px; " src="images/product/<?php echo $prdFeaturedProduct['prd_ima'] ?>" class="card-img-top" class="img-responsive" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $prdFeaturedProduct['prd_name'] ?></h5>
                            <h3 style="color: red;"><?php echo number_format($prdFeaturedProduct['prd_price'],0,'.','.')  ?>VNG</h3>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                        </div>
                    </a>
                </div>
            </div>  

                <?php
                        }
                    }
                ?>
            </div>
            </div>
        </div>
    <br>
    <br><br> 
    <div class="row">
        <div class="col-2"></div>
        <div class="col-md-8">
            <div class="banner-newproducts">
                <?php 
                    $sqlFeaturedProduct = "SELECT * FROM product WHERE prd_featured = 0  ORDER BY prd_id DESC LIMIT 6"; 
                    $queryFeaturedProduct = mysqli_query($conn, $sqlFeaturedProduct);
                ?>
                <h2>Sản phẩm bán chạy</h2>
            </div>
            <!-- GROUP-1 -->
            <div class="card-group">
            <?php
                    if(mysqli_num_rows($queryFeaturedProduct)){
                        while($prdFeaturedProduct = mysqli_fetch_assoc($queryFeaturedProduct)){
            ?>
            <div class="col-lg-4 col-md-8 col-sm-12 mx-product">
                <div class="card">
                    <a href="product-details.php?prd_id=<?php echo $prdFeaturedProduct['prd_id'] ?>">
                        <img style="width: 150px; height: 150px; " src="images/product/<?php echo $prdFeaturedProduct['prd_ima'] ?>" class="card-img-top" class="img-responsive" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $prdFeaturedProduct['prd_name'] ?></h5>
                            <h3 style="color: red;"><?php echo number_format($prdFeaturedProduct['prd_price'],0,'.','.')  ?>VNG</h3>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                        </div>
                    </a>
                </div>
            </div>  

                <?php
                        }
                    }
                ?>
            </div>
            </div>
        </div>
    <br>
    
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 3,
            spaceBetween: 30,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });
    </script>
</body>
<footer>
    <div class="contaniner">
        <br>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-2">BKC là một công ty chuyên bán điện thoại. Chúng tôi cung cấp các dịch vụ cũng như các mặt hàng như Iphone, các thiết bị Android,...... </div>
            <div class="col-md-2">
                <span>Hotline</span>
                <div class="line"></div>
                <div class="number">
                    <span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                  </svg></span>
                    <span style="margin-top: 10px;" id="phone-number">0974498396</span>
                    <br>
                    <span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                        <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/>
                      </svg></span>
                    <span style="margin-top: 10px;" id="email">nguyentduy200403@gmail.com</span>
                </div>


            </div>
            <div class="col-md-2">
                <span>Address</span>
                <div class="line"></div>
                <div class="address">
                    <span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                        <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                      </svg></span>
                    <span style="margin-top: 10px;" id="address-store">Viet Hung, Long Bien, Ha Noi</span></div>
            </div>
            <div class="col-md-2"><span>Service</span>
                <div class="line"></div>
                <span>Mua hàng trả góp</span>
                <br>
                <span>Chính sách bảo hành</span>
                <br>
                <span>Hỗ trợ kĩ thuật</span>
            </div>
            <div class="col-md-2"></div>
        </div>

    </div>


</footer>

</html>