<?php
  session_start();
  include('assets/inc/config.php');
  include('assets/inc/checklogin.php');
  check_login();
  $doc_id = $_SESSION['doc_id'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <title>view patients</title>
</head>
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
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Payroll</a></li>
                                            <li class="breadcrumb-item active">View Payroll</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">My Payrolls</h4>
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
                                                <div class="form-group">
                                                    <input id="demo-foo-search" type="text" placeholder="Search" class="form-control form-control-sm" autocomplete="on">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="table-responsive">
                                        <table id="demo-foo-filtering" class="w-full border-collapse border" data-page-size="7">
                                            <thead class="bg-gray-100">
                                            <tr>
                                                <th class="border p-2 text-black font-semibold">#</th>
                                                <th class="border p-2 text-black font-semibold" data-toggle="true">My Name</th>
                                                <th class="border p-2 text-black font-semibold" data-toggle="true">My Number</th>
                                                <th class="border p-2 text-black font-semibold" data-hide="phone">Payroll Number</th>
                                                <th class="border p-2 text-black font-semibold" data-hide="phone">My Salary</th>
                                                <th class="border p-2 text-black font-semibold" data-hide="phone">Action</th>
                                            </tr>
                                            </thead>
                                            <?php
                                            $pay_doc_number = $_SESSION['doc_number'];
                                            $ret="SELECT  * FROM hmisphp.his_payrolls WHERE pay_doc_number = ?";
                                            $stmt= $mysqli->prepare($ret);
                                            $stmt->bind_param('s',$pay_doc_number);
                                            $stmt->execute();
                                            $res=$stmt->get_result();
                                            $cnt=1;
                                            while($row=$res->fetch_object())
                                            {
                                                ?>
                                                <tbody>
                                                <tr class="hover:bg-gray-50">
                                                    <td class="border p-2 text-black"><?php echo $cnt;?></td>
                                                    <td class="border p-2 text-black"><?php echo $row->pay_doc_name;?></td>
                                                    <td class="border p-2 text-black"><?php echo $row->pay_doc_number;?></td>
                                                    <td class="border p-2 text-black"><?php echo $row->pay_number;?></td>
                                                    <td class="border p-2 text-black">$ <?php echo $row->pay_emp_salary;?></td>
                                                    <td class="border p-2 text-black">
                                                        <a href="his_doc_view_single_payroll.php?pay_number=<?php echo $row->pay_number;?>" class="inline-block bg-green-500 text-white px-3 py-1 rounded text-sm hover:bg-green-600">
                                                            <i class="fas fa-eye mr-1"></i> View | Print Payroll
                                                        </a>
                                                    </td>
                                                </tr>
                                                </tbody>
                                                <?php $cnt = $cnt +1; }?>
                                            <tfoot>
                                            <tr class="bg-gray-100">
                                                <td colspan="8" class="border p-2">
                                                    <div class="flex justify-end">
                                                        <ul class="flex pagination rounded"></ul>
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