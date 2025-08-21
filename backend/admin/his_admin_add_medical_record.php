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
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Medical Records</a></li>
                                            <li class="breadcrumb-item active">Add Medical Records</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Patient Details</h4>
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
                                                           class="w-full px-3 py-2 text-sm border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                                           autocomplete="on">
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="table-responsive">
                                        <table id="demo-foo-filtering" class="table table-bordered toggle-circle mb-0" data-page-size="7">
                                            <thead class="bg-gray-100 text-gray-700 text-left text-sm">
                                            <tr>
                                                <th class="px-4 py-2">#</th>
                                                <th class="px-4 py-2">Name</th>
                                                <th class="px-4 py-2">Number</th>
                                                <th class="px-4 py-2">Address</th>
                                                <th class="px-4 py-2">Phone</th>
                                                <th class="px-4 py-2">Age</th>
                                                <th class="px-4 py-2">Category</th>
                                                <th class="px-4 py-2">Action</th>
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
                                                        <td class="px-4 py-2 text-sm"><?php echo $cnt;?></td>
                                                        <td class="px-4 py-2 text-sm"><?php echo $row->pat_fname;?> <?php echo $row->pat_lname;?></td>
                                                        <td class="px-4 py-2 text-sm"><?php echo $row->pat_number;?></td>
                                                        <td class="px-4 py-2 text-sm"><?php echo $row->pat_addr;?></td>
                                                        <td class="px-4 py-2 text-sm"><?php echo $row->pat_phone;?></td>
                                                        <td class="px-4 py-2 text-sm"><?php echo $row->pat_age;?> Years</td>
                                                        <td class="px-4 py-2 text-sm"><?php echo $row->pat_type;?></td>
                                                        <td class="px-4 py-2 text-sm">
                                                            <a href="his_admin_add_single_patient_medical_record.php?pat_number=<?php echo $row->pat_number;?>"
                                                               class="inline-flex items-center px-3 py-1 bg-blue-600 text-white text-xs font-medium rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-1 focus:ring-blue-500">
                                                                <i class="fas fa-file-signature mr-1"></i> Add Medical Record
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