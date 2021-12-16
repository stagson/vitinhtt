<!doctype html>
<html class="no-js h-100" lang="en">
  <head>
    <?php 
    include 'layout/check.php';
    include 'layout/head.php';?>
  </head>
  <body class="h-100">
        <?php 
    // include 'layout/accent-color.php';
    ?>
    <div class="container-fluid">
      <div class="row">
        <!-- Main Sidebar -->
        <?php include 'layout/sidebar.php';?>
        <!-- End Main Sidebar -->
        <main class="main-content col-lg-10 col-md-9 col-sm-12 p-0 offset-lg-2 offset-md-3">
          <div class="main-navbar sticky-top bg-white">
            <!-- Main Navbar -->
            <?php include 'layout/navbar.php';?>
            <!-- / .main-navbar -->
          </div>
          <div class="main-content-container container-fluid px-4">
            <!-- Page Header -->
            <div class="page-header row no-gutters py-4">
              <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                <span class="text-uppercase page-subtitle">Quản lý</span>
                <h3 class="page-title">Đơn Hàng</h3>
              </div>
            </div>
            <!-- End Page Header -->
              <div class="col-12">
                <div class="card card-small mb-4">
                  <div class="card-header border-bottom">
                    <div class="row">
                      <div class="col-md-6">
                        <h6 class="m-0">Danh sách đơn hàng</h6>
                      </div>
                      <div class="col-md-6" style="text-align:right">
                        <a href="them-dh.php" class="mb-2 btn btn-success mr-2 btn-font" style="margin:0 !important;"><i class="fas fa-plus"></i> Thêm</a>
                      </div>
                    </div>
                  </div>
                  <div class="table-sp">
                    
                  <div class="card-body p-0 pb-3 text-center">
                    <table class="table mb-0">
                      <thead class="bg-light">
                        <tr>
                          <th scope="col" class="border-0">Mã đơn hàng</th>
                          <th scope="col" class="border-0">Ngày tạo đơn</th>
                          <th scope="col" class="border-0">Tên khách hàng</th>
                          <th scope="col" class="border-0 none">Trạng thái</th>
                          <th scope="col" class="border-0">Thanh toán</th>
                          <th scope="col" class="border-0">Khách phải trả</th>
                          <th scope="col" class="border-0">Tùy chỉnh</th>
                        </tr>
                      </thead>
                      <tbody><?php
                        $arrMaDH=array("DH01","DH02","DH03");
                        $arrNgayTaoDon=array("08/11/2021","08/11/2021","09/11/2021");
                        $arrTenKhachHang=array("Nguyễn Hoàng Tiến","Trương Ngọc Tòn","Trần Khánh Duy");
                        $arrThanhToan=array("Chuyển khoản","Tiền mặt","Tiền mặt");
                        $arrTongGiaDH=array(10000000,25000000,9999999);
                        for($i=0;$i<count($arrMaDH);$i++) {
                          echo '
                          <tr>
                          <td class="block"><button type="button" class="mb-2 btn btn-sm btn-outline-success mr-1 btn-font">'.$arrMaDH[$i].'</button><p class="none">'.$arrMaDH[$i].'</p></td>
                          <td>'.$arrNgayTaoDon[$i].'</td>
                          <td>'.$arrTenKhachHang[$i].'</td>
                          <td class="none"><button type="button" class="mb-2 btn btn-sm btn-outline-success mr-1 btn-font">Đã hoàn thành</button></td>                          
                          <td>'.$arrThanhToan[$i].'</td>                          
                          <td>'.number_format($arrTongGiaDH[$i],0,",",".").'</td>                          
                          <td>';
                          // <a href="xem-dh.php" class="mb-2 btn btn-success mr-2 btn-font">
                          //   <i class="fas fa-eye"></i><p>&nbspXem</p>
                          // </a>
                          echo'<a href="sua-dh.php" class="mb-2 btn btn-info mr-2 btn-font">
                            <i class="fas fa-edit"></i><p>&nbspSửa</p>
                          </a>
                          <button type="button" class="mb-2 btn btn-danger mr-2 btn-font">
                            <i class="fas fa-times"></i><p>&nbspXóa</p>
                          </button>
                          </td>                          
                          </tr>
                          ';
                        }
                        ?></tbody>
                    </table>
                  </div>
                  </div>
                </div>
              </div>
          </div>
          <?php include 'layout/footer.php';?>
        </main>
      </div>
    </div>
<?php include 'layout/script.php';?>
  </body>
</html>