<?php
  session_start();
  include('assets/inc/config.php');
  include('assets/inc/checklogin.php');
  check_login();
  $aid=$_SESSION['ad_id'];
  /*
  if(isset($_GET['delete']))
  {
        $id=intval($_GET['delete']);
        $adn="delete from his_patients where pat_id=?";
        $stmt= $mysqli->prepare($adn);
        $stmt->bind_param('i',$id);
        $stmt->execute();
        $stmt->close();	 
  
          if($stmt)
          {
            $success = "Vehicle Removed";
          }
            else
            {
                $err = "Try Again Later";
            }
    }
    */
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
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Patients</a></li>
                                            <li class="breadcrumb-item active">Discharge Patients</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Discharge Patients</h4>
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
                                        <table id="demo-foo-filtering" class="min-w-full border border-gray-200 rounded-lg shadow-sm">
                                            <thead class="bg-gray-100">
                                            <tr>
                                                <th class="px-4 py-2 text-left text-sm font-medium text-gray-600">#</th>
                                                <th class="px-4 py-2 text-left text-sm font-medium text-gray-600">Patient Name</th>
                                                <th class="px-4 py-2 text-left text-sm font-medium text-gray-600">Patient Number</th>
                                                <th class="px-4 py-2 text-left text-sm font-medium text-gray-600">Patient Address</th>
                                                <th class="px-4 py-2 text-left text-sm font-medium text-gray-600">Patient Category</th>
                                                <th class="px-4 py-2 text-left text-sm font-medium text-gray-600">Action</th>
                                            </tr>
                                            </thead>
                                            <tbody class="divide-y divide-gray-200">
                                            <?php
                                            $ret="SELECT * FROM  hmisphp.his_patients  WHERE pat_discharge_status !='Discharged' AND  pat_type = 'InPatient' ";
                                            $stmt= $mysqli->prepare($ret);
                                            $stmt->execute();
                                            $res=$stmt->get_result();
                                            $cnt=1;
                                            while($row=$res->fetch_object())
                                            {
                                                ?>
                                                <tr class="hover:bg-gray-50">
                                                    <td class="px-4 py-2 text-sm text-gray-700"><?php echo $cnt;?></td>
                                                    <td class="px-4 py-2 text-sm text-gray-700"><?php echo $row->pat_fname;?> <?php echo $row->pat_lname;?></td>
                                                    <td class="px-4 py-2 text-sm text-gray-700"><?php echo $row->pat_number;?></td>
                                                    <td class="px-4 py-2 text-sm text-gray-700"><?php echo $row->pat_addr;?></td>
                                                    <td class="px-4 py-2 text-sm text-gray-700"><?php echo $row->pat_type;?></td>
                                                    <td class="px-4 py-2 text-sm">
                                                        <a href="his_admin_discharge_single_patient.php?pat_id=<?php echo $row->pat_id;?>"
                                                           class="inline-flex items-center px-3 py-1 text-xs font-medium text-white bg-blue-600 rounded hover:bg-blue-700">
                                                            <i class="mdi mdi-check-box-outline mr-1"></i> Discharge
                                                        </a>
                                                    </td>
                                                </tr>
                                                <?php  $cnt = $cnt +1 ; } ?>
                                            </tbody>
                                            <tfoot>
                                            <tr>
                                                <td colspan="6" class="px-4 py-3 text-right">
                                                    <div class="flex justify-end">
                                                        <ul class="flex space-x-1">
                                                            <!-- pagination will be injected here -->
                                                        </ul>
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