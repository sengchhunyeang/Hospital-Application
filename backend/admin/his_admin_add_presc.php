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
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Pharmacy</a></li>
                                            <li class="breadcrumb-item active">Give Prescription</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Add Prescriptions</h4>
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
                                                <div class="mb-4">
                                                    <input id="demo-foo-search" type="text" placeholder="Search"
                                                           class="block w-full px-3 py-2 text-sm border border-gray-300 rounded-md focus:outline-none focus:ring-red-500 focus:border-red-500"
                                                           autocomplete="on">
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="table-responsive">
                                        <table id="demo-foo-filtering" class="table table-bordered toggle-circle mb-0" data-page-size="7">
                                            <thead class="bg-gray-100">
                                            <tr>
                                                <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">#</th>
                                                <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">Patient Name</th>
                                                <th class="px-4 py-2 text-left text-sm font-medium text-gray-700 hidden sm:table-cell">Patient Number</th>
                                                <th class="px-4 py-2 text-left text-sm font-medium text-gray-700 hidden sm:table-cell">Patient Address</th>
                                                <th class="px-4 py-2 text-left text-sm font-medium text-gray-700 hidden sm:table-cell">Patient Ailment</th>
                                                <th class="px-4 py-2 text-left text-sm font-medium text-gray-700 hidden sm:table-cell">Patient Age</th>
                                                <th class="px-4 py-2 text-left text-sm font-medium text-gray-700 hidden sm:table-cell">Patient Category</th>
                                                <th class="px-4 py-2 text-left text-sm font-medium text-gray-700 hidden sm:table-cell">Action</th>
                                            </tr>
                                            </thead>

                                            <?php
                                            /*
                                                *get details of allpatients
                                                *
                                            */
                                                $ret="SELECT * FROM  hmisphp.his_patients ORDER BY RAND() ";
                                                //sql code to get to ten docs  randomly
                                                $stmt= $mysqli->prepare($ret) ;
                                                $stmt->execute() ;//ok
                                                $res=$stmt->get_result();
                                                $cnt=1;
                                                while($row=$res->fetch_object())
                                                {
                                            ?>

                                                    <tbody>
                                                    <tr class="border-b hover:bg-gray-50">
                                                        <td class="px-4 py-2 text-sm text-gray-700"><?php echo $cnt; ?></td>
                                                        <td class="px-4 py-2 text-sm text-gray-700"><?php echo $row->pat_fname; ?> <?php echo $row->pat_lname; ?></td>
                                                        <td class="px-4 py-2 text-sm text-gray-700 hidden sm:table-cell"><?php echo $row->pat_number; ?></td>
                                                        <td class="px-4 py-2 text-sm text-gray-700 hidden sm:table-cell"><?php echo $row->pat_addr; ?></td>
                                                        <td class="px-4 py-2 text-sm text-gray-700 hidden sm:table-cell"><?php echo $row->pat_ailment; ?></td>
                                                        <td class="px-4 py-2 text-sm text-gray-700 hidden sm:table-cell"><?php echo $row->pat_age; ?> Years</td>
                                                        <td class="px-4 py-2 text-sm text-gray-700 hidden sm:table-cell"><?php echo $row->pat_type; ?></td>
                                                        <td class="px-4 py-2 text-sm text-gray-700 hidden sm:table-cell">
                                                            <a href="his_admin_add_single_pres.php?pat_number=<?php echo $row->pat_number;?>"
                                                               class="inline-flex items-center px-3 py-1 bg-blue-600 text-white text-xs font-medium rounded hover:bg-blue-700">
                                                                <i class="fas fa-highlighter mr-1"></i> Add Prescription
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