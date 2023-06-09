<?php 
    include_once("../config/database.php");
    $sqlAllCategory = "SELECT * FROM categories ORDER BY cate_id ASC";
    $queryAllCategory = mysqli_query($conn, $sqlAllCategory);
    if(isset($_GET['prd_id'])) {
        $prd_id = $_GET['prd_id'];
        $sqlProductEdit = "SELECT * FROM products WHERE prd_id = $prd_id";
        $queryProductEdit = mysqli_query($conn, $sqlProductEdit);
        if(mysqli_num_rows($queryProductEdit) >0){
            $product = mysqli_fetch_assoc($queryProductEdit);
        }else{
            header("Location: product.php");
        }
        //cap nhap thong tin san pham
        if(isset($_POST['sbm'])) {
            $prd_name = $_POST['prd_name'];
            $prd_price = $_POST['prd_price'];
            $prd_new = $_POST['prd_new'];
            $cate_id = $_POST['cate_id'];
            if(isset($_FILES['prd_ima']['name'])){
                $prd_ima = $_FILES['prd_ima']['name'];
                $prd_tmp_img = $_FILES['prd_ima']['tmp_name'];
                move_uploaded_file($prd_tmp_img, "images/".$prd_ima);
            }else{
                $prd_ima = $product['prd_ima'];
            }
        $sqlUpdate = "UPDATE products SET
        cate_id = '$cate_id',
        prd_name = '$prd_name',
        prd_new = '$prd_new',
        prd_price = '$prd_price',
        prd_ima = '$prd_ima'
        WHERE
        prd_id = $prd_id";
        mysqli_query($conn, $sqlUpdate);
        header("Location: product.php");
    // }else{
    //     header("Location: product.php"); 
    }
}
?>



<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Phone Store</title>

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/bootstrap-table.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">

<!--Icons-->
<script src="js/lumino.glyphs.js"></script>

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>

<body>
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#"><span>Phone</span>Store</a>
                        <ul class="user-menu">
                            <li class="dropdown pull-right">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Admin <span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Hồ sơ</a></li>
                                    <li><a href="#"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Đăng xuất</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                                    
                </div><!-- /.container-fluid -->
            </nav>
		
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<!-- <form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form> -->
		<ul class="nav menu">
			<li><a href="admin.php"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Dashboard</a></li>
			<li><a href="user.php"><svg class="glyph stroked male user "><use xlink:href="#stroked-male-user"/></svg>Quản lý thành viên</a></li>
			<li><a href="category.php"><svg class="glyph stroked open folder"><use xlink:href="#stroked-open-folder"/></svg>Quản lý danh mục</a></li>
			<li class="active"><a href="product.php"><svg class="glyph stroked bag"><use xlink:href="#stroked-bag"></use></svg>Quản lý sản phẩm</a></li>
			<!-- <li><a href="comment.html"><svg class="glyph stroked two messages"><use xlink:href="#stroked-two-messages"/></svg> Quản lý bình luận</a></li>
            <li><a href="ads.html"><svg class="glyph stroked chain"><use xlink:href="#stroked-chain"/></svg> Quản lý quảng cáo</a></li>
            <li><a href="setting.html"><svg class="glyph stroked gear"><use xlink:href="#stroked-gear"/></svg> Cấu hình</a></li> -->
		</ul>

	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
                <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
                <li><a href="">Quản lý sản phẩm</a></li>
				<li class="active">Edit Product</li>
			</ol>
		</div><!--/.row-->
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Sản Phẩm</h1>
        </div>
        </div><!--/.row-->
        <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                        <form action="" role="form" method="post" enctype="multipart/form-data">    
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Ảnh sản phẩm</label>
                                            <input required name="prd_ima" type="file" onchange="preview()">
                                            <img id="frame"src="images/<?php echo $product['prd_ima'] ?>">
                                            <br>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <!-- <div class="form-group">
                                        <label>ID</label>
                                        <input required name="prd_id" class="form-control" placeholder="">
                                    </div> -->
                                    <div class="form-group">
                                        <label>Tên sản phẩm</label>
                                        <input required name="prd_name" class="form-control" placeholder="">
                                    </div>
                                                                
                                    <div class="form-group">
                                        <label>Giá sản phẩm</label>
                                        <input required name="prd_price" type="number" min="0" class="form-control">
                                    </div>
<!--                                    <div class="form-group">-->
<!--                                        <label>Tình Trạng</label>-->
<!--                                        <input required name="prd_new" type="text" min="0" class="form-control">-->
<!--                                    </div>-->
<!--                                    <div class="form-group">-->
<!--                                        <label label>Trạng thái</label>-->
<!--                                        <select name="prd_status" class="form-control">-->
<!--                                            <option value=1 selected>Còn hàng</option>-->
<!--                                            <option value=0>Hết hàng</option>-->
<!--                                        </select>-->
<!--                                    </div>-->
                                    <div class="form-group">
                                        <label>Danh mục</label>
                                        <select name="cate_id" class="form-control">
                                            <?php
                                                if(mysqli_num_rows($queryAllCategory)) {
                                                    while($cate = mysqli_fetch_assoc($queryAllCategory)) {
                                            ?>
                                            <option value=<?php echo $cate['cate_id']; ?>><?php echo $cate['cate_name']; ?></option>
                                            <?php
                                                  }
                                                }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Mô tả sản phẩm</label>
                                        <textarea required name="prd_new" class="form-control" rows="3"></textarea>
                                    </div>
<!--                                    <div class="form-group">-->
<!--                                        <label>Sản phảm nổi bật</label>-->
<!--                                        <div class="checkbox">-->
<!--                                            <label>-->
<!--                                                <input name="prd_featured" type="checkbox" --><?php //if($product['prd_featured'] == 1){echo 'checked';} ?><!--
<!--                                            </label>-->
<!--                                        </div>-->
<!--                                    </div>-->
                                    <button name="sbm" type="submit" class="btn btn-success">Thêm mới</button>
                                    <button type="reset" class="btn btn-default">Làm mới</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div><!-- /.col-->
            </div><!-- /.row -->
		
	</div>	<!--/.main-->	
    <script>
        function preview() {
        frame.src=URL.createObjectURL(event.target.files[0]);
        }
    </script>
</body>

</html>
