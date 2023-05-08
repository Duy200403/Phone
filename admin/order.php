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
    <script src="js/lumino.glyphs.js"></script>


</head>

<body>
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><span>Sneaker</a>
                <ul class="user-menu">
                    <li class="dropdown pull-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user">
                                <use xlink:href="#stroked-male-user"></use>
                            </svg> Admin <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#"><svg class="glyph stroked male-user">
                                        <use xlink:href="#stroked-male-user"></use>
                                    </svg> Hồ sơ</a></li>
                            <li><a href="#"><svg class="glyph stroked cancel">
                                        <use xlink:href="#stroked-cancel"></use>
                                    </svg> Đăng xuất</a></li>
                        </ul>
                    </li>
                </ul>
            </div>

        </div><!-- /.container-fluid -->
    </nav>

    <div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">

        </form>
        <ul class="nav menu">
            <li><a href="admin.php"><svg class="glyph stroked dashboard-dial">
                        <use xlink:href="#stroked-dashboard-dial"></use>
                    </svg> Dashboard</a></li>
            <li><a href="user.php"><svg class="glyph stroked male user ">
                        <use xlink:href="#stroked-male-user" />
                    </svg>Quản lý thành viên</a></li>
            <li><a href="category.php"><svg class="glyph stroked clipboard with paper">
                        <use xlink:href="#stroked-clipboard-with-paper"/>
                    </svg>Quản lý danh mục</a></li>
            <li ><a href="product.php"><svg class="glyph stroked bag">
                        <use xlink:href="#stroked-bag"></use>
                    </svg>Quản lý sản phẩm</a></li>
            <li class="active"><a href="order.php"><svg class="glyph stroked two messages">
                        <use xlink:href="#stroked-two-messages" />
                    </svg> Quản lý khách hàng</a></li>
        </ul>

    </div>
    <!--/.sidebar-->

    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="#"><svg class="glyph stroked home">
                            <use xlink:href="#stroked-home"></use>
                        </svg></a></li>
                <li class="active">Quản lý khách hàng</li>
            </ol>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Quản lý khách hàng</h1>
            </div>
        </div>
        <!--/.row-->
        <div id="toolbar" class="btn-group">
            <a href="add_product.php" class="btn btn-primary">
                <i class="glyphicon glyphicon-plus"></i> Thêm đơn hàng
            </a>
        </div>
        <!--/.row-->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <table data-toolbar="#toolbar" class="table" data-toggle="table">
                            <thead>
                                <tr>
                                    <th data-field="id" data-sortable="true">STT</th>
                                    <th data-field="name" data-sortable="true">Khách hàng</th>
                                    <th data-field="price" data-sortable="true">Điện thoại</th>
                                    <th>Sản phẩm</th>
                                    <th>Số lượng</th>
                                    <th>Tổng tiền</th>
                                    <th>Tình trạng</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Nguyễn Tiến Duy</td>
                                    <td>0974498396</td>
                                    <td>Nike</td>
                                    <td>3</td>
                                    <td>50000000 VNG</td>
                                    <td style="color:blue;">Hoàn Thành</td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Nguyễn Tiến Duy</td>
                                    <td>0974498396</td>
                                    <td>Nike</td>
                                    <td>3</td>
                                    <td>50000000 VNG</td>
                                    <td style="color:blue;">Hoàn Thành</td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Nguyễn Tiến Duy</td>
                                    <td>0974498396</td>
                                    <td>Nike</td>
                                    <td>3</td>
                                    <td>50000000 VNG</td>
                                    <td style="color:red;" >Chưa hoàn thành</td>
                                </tr>
                            </tbody>

    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-table.js"></script>
</body>

</html>