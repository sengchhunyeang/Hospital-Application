<?php
  session_start();
  include('assets/inc/config.php');
  include('assets/inc/checklogin.php');
  check_login();
  $aid=$_SESSION['ad_id'];
?>

<!DOCTYPE html>
<html lang="en">
    
<?php include('assets/inc/head.php');?>

    <body>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Topbar Start -->
                <?php include('assets/inc/nav.php');?>
            <!-- end Topbar -->

            <!-- ========== Left Sidebar Start ========== -->
                <?php include("assets/inc/sidebar.php");?>
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">
                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Reporting</a></li>
                                            <li class="breadcrumb-item active"> Pharmaceutical Records</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Pharmaceuticals</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <div class="row">
                            <div class="col-12">
                                <div class="card-box">
                                    <h4 class="header-title"></h4>
                                    <div class="mb-2">
                                        <div class="row">
                                            <div class="col-12 text-sm-center form-inline" >
                                                <div class="form-group mr-2" style="display:none">
                                                    <select id="demo-foo-filter-status" class="custom-select custom-select-sm">
                                                        <option value="">Show all</option>
                                                        <option value="Discharged">Discharged</option>
                                                        <option value="OutPatients">OutPatients</option>
                                                        <option value="InPatients">InPatients</option>
                                                    </select>
                                                </div>
                                                <!-- Search input -->
                                                <div class="mb-3">
                                                    <input
                                                            id="demo-foo-search"
                                                            type="text"
                                                            placeholder="Search"
                                                            class="w-full px-3 py-2 text-sm border border-gray-300 rounded-md focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500"
                                                            autocomplete="on"
                                                    >
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="table-responsive">
                                        <table id="demo-foo-filtering" class="table table-bordered toggle-circle mb-0" data-page-size="7">
                                            <!-- Table header -->
                                            <thead class="bg-gray-50 text-gray-700 text-left text-sm font-medium">
                                            <tr>
                                                <th class="px-4 py-2">#</th>
                                                <th class="px-4 py-2">Pharmaceutical Name</th>
                                                <th class="px-4 py-2">Pharmaceutical Barcode</th>
                                                <th class="px-4 py-2">Pharmaceutical Vendor</th>
                                                <th class="px-4 py-2">Pharmaceutical Category</th>
                                                <th class="px-4 py-2">Pharmaceutical Quantity</th>
                                                <th class="px-4 py-2">Action</th>
                                            </tr>
                                            </thead>
                                            <?php
                                            /*
                                                *get details of allpatients
                                                *
                                            */
                                                $ret="SELECT * FROM  hmisphp.his_pharmaceuticals ORDER BY RAND() ";
                                                $stmt= $mysqli->prepare($ret) ;
                                                $stmt->execute() ;//ok
                                                $res=$stmt->get_result();
                                                $cnt=1;
                                                while($row=$res->fetch_object())
                                                {
                                            ?>

                                                    <tbody class="divide-y divide-gray-200">
                                                    <tr class="hover:bg-gray-50">
                                                        <td class="px-4 py-2 text-sm"><?php echo $cnt; ?></td>
                                                        <td class="px-4 py-2 text-sm"><?php echo $row->phar_name; ?></td>
                                                        <td class="px-4 py-2 text-sm"><?php echo $row->phar_bcode; ?></td>
                                                        <td class="px-4 py-2 text-sm"><?php echo $row->phar_vendor; ?></td>
                                                        <td class="px-4 py-2 text-sm"><?php echo $row->phar_cat; ?></td>
                                                        <td class="px-4 py-2 text-sm"><?php echo $row->phar_qty; ?> Cartons</td>
                                                        <td class="px-4 py-2 text-sm">
                                                            <a href="his_admin_view_single_pharm.php?phar_bcode=<?php echo $row->phar_bcode; ?>"
                                                               class="inline-flex items-center px-2 py-1 text-xs font-medium text-white bg-blue-600 rounded-md hover:bg-blue-700">
                                                                <i class="far fa-eye mr-1"></i> View
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    </tbody>

                                                    <?php  $cnt = $cnt +1 ; }?>
                                            <tfoot>
                                            <tr class="active">
                                                <td colspan="8">
                                                    <div class="text-right">
                                                        <ul class="pagination pagination-rounded justify-content-end footable-pagination m-t-10 mb-0"></ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            </tfoot>
                                        </table>
                                    </div> <!-- end .table-responsive-->
                                </div> <!-- end card-box -->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

                    </div> <!-- container -->

                </div> <!-- content -->

                <!-- Footer Start -->
                 <?php include('assets/inc/footer.php');?>
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->


        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- Vendor js -->
        <script src="assets/js/vendor.min.js"></script>

        <!-- Footable js -->
        <script src="assets/libs/footable/footable.all.min.js"></script>

        <!-- Init js -->
        <script src="assets/js/pages/foo-tables.init.js"></script>

        <!-- App js -->
        <script src="assets/js/app.min.js"></script>
        
    </body>

</html>