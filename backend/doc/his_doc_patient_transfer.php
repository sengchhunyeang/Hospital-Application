<?php
  session_start();
  include('assets/inc/config.php');
  include('assets/inc/checklogin.php');
  check_login();
  $doc_id = $_SESSION['doc_id'];
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
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Patients</a></li>
                                            <li class="breadcrumb-item active">Transfer Patients</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Transfer Patients</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="flex flex-wrap -mx-4">
                            <div class="w-full px-4">
                                <div class="bg-white rounded-lg shadow-md p-6">
                                    <h4 class="text-lg font-semibold mb-4 text-black">Patient's Awaiting Transfers</h4>
                                    <div class="mb-4">
                                        <div class="flex flex-wrap -mx-2">
                                            <div class="w-full px-2 text-center sm:text-left flex flex-col sm:flex-row items-center gap-2">
                                                <div class="hidden">
                                                    <select id="demo-foo-filter-status"
                                                            class="border border-gray-300 rounded-md px-3 py-1 text-sm text-black">
                                                        <option value="">Show all</option>
                                                        <option value="Discharged">Discharged</option>
                                                        <option value="OutPatients">OutPatients</option>
                                                        <option value="InPatients">InPatients</option>
                                                    </select>
                                                </div>
                                                <div>
                                                    <input id="demo-foo-search" type="text" placeholder="Search"
                                                           class="border border-gray-300 rounded-md px-3 py-1 text-sm text-black"
                                                           autocomplete="on">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="overflow-x-auto">
                                        <table id="demo-foo-filtering"
                                               class="w-full border-collapse border border-gray-200" data-page-size="7">
                                            <thead>
                                            <tr class="bg-gray-100">
                                                <th class="border border-gray-200 px-4 py-2 text-black">#</th>
                                                <th class="border border-gray-200 px-4 py-2 text-black"
                                                    data-toggle="true">Patient Name
                                                </th>
                                                <th class="border border-gray-200 px-4 py-2 text-black hidden sm:table-cell">
                                                    Patient Number
                                                </th>
                                                <th class="border border-gray-200 px-4 py-2 text-black hidden sm:table-cell">
                                                    Patient Address
                                                </th>
                                                <th class="border border-gray-200 px-4 py-2 text-black hidden sm:table-cell">
                                                    Patient Category
                                                </th>
                                                <th class="border border-gray-200 px-4 py-2 text-black hidden sm:table-cell">
                                                    Action
                                                </th>
                                            </tr>
                                            </thead>
                                            <?php
                                            /*
                                              *get details of allpatients
                                              *
                                            */
                                            $ret = "SELECT * FROM  hmisphp.his_patients WHERE  pat_type = 'InPatient' ";

                                            $stmt = $mysqli->prepare($ret);
                                            $stmt->execute();//ok
                                            $res = $stmt->get_result();
                                            $cnt = 1;
                                            while ($row = $res->fetch_object()) {
                                                ?>
                                                <tbody>
                                                <tr>
                                                    <td class="border border-gray-200 px-4 py-2 text-black"><?php echo $cnt; ?></td>
                                                    <td class="border border-gray-200 px-4 py-2 text-black"><?php echo $row->pat_fname; ?><?php echo $row->pat_lname; ?></td>
                                                    <td class="border border-gray-200 px-4 py-2 text-black hidden sm:table-cell"><?php echo $row->pat_number; ?></td>
                                                    <td class="border border-gray-200 px-4 py-2 text-black hidden sm:table-cell"><?php echo $row->pat_addr; ?></td>
                                                    <td class="border border-gray-200 px-4 py-2 text-black hidden sm:table-cell"><?php echo $row->pat_type; ?></td>

                                                    <td class="border border-gray-200 px-4 py-2 text-black hidden sm:table-cell">
                                                        <a href="his_doc_transfer_single_patient.php?pat_number=<?php echo $row->pat_number; ?>"
                                                           class="bg-blue-500 text-white px-3 py-1 rounded text-sm inline-block hover:bg-blue-600 transition-colors">
                                                            Transfer Patient
                                                        </a>
                                                    </td>
                                                </tr>
                                                </tbody>
                                                <?php $cnt = $cnt + 1;
                                            } ?>
                                            <tfoot>
                                            <tr class="bg-gray-100">
                                                <td colspan="8" class="border border-gray-200 px-4 py-2">
                                                    <div class="flex justify-end">
                                                        <ul class="flex space-x-1 pagination pagination-rounded justify-end footable-pagination mt-2 mb-0"></ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div> <!-- end card-box -->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->
                        <div class="flex flex-wrap -mx-4">
                            <div class="w-full px-4">
                                <div class="bg-white rounded-lg shadow-md p-6">
                                    <h4 class="text-lg font-semibold mb-4 text-black">Transfered Patients</h4>
                                    <div class="mb-4">
                                        <div class="flex flex-wrap -mx-2">
                                            <div class="w-full px-2 text-center sm:text-left flex flex-col sm:flex-row items-center gap-2">
                                                <div class="hidden">
                                                    <select id="demo-foo-filter-status"
                                                            class="border border-gray-300 rounded-md px-3 py-1 text-sm text-black">
                                                        <option value="">Show all</option>
                                                        <option value="Discharged">Discharged</option>
                                                        <option value="OutPatients">OutPatients</option>
                                                        <option value="InPatients">InPatients</option>
                                                    </select>
                                                </div>
                                                <div>
                                                    <input id="demo-foo-search" type="text" placeholder="Search"
                                                           class="border border-gray-300 rounded-md px-3 py-1 text-sm text-black"
                                                           autocomplete="on">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <hr class="my-4 border-gray-200">

                                    <div class="overflow-x-auto">
                                        <table id="demo-foo-filtering"
                                               class="w-full border-collapse border border-gray-200" data-page-size="7">
                                            <thead>
                                            <tr class="bg-gray-100">
                                                <th class="border border-gray-200 px-4 py-2 text-black">#</th>
                                                <th class="border border-gray-200 px-4 py-2 text-black"
                                                    data-toggle="true">Patient Name
                                                </th>
                                                <th class="border border-gray-200 px-4 py-2 text-black hidden sm:table-cell">
                                                    Transfer Number
                                                </th>
                                                <th class="border border-gray-200 px-4 py-2 text-black hidden sm:table-cell">
                                                    Transfer Status
                                                </th>
                                                <th class="border border-gray-200 px-4 py-2 text-black hidden sm:table-cell">
                                                    Refferal Hospital
                                                </th>
                                                <th class="border border-gray-200 px-4 py-2 text-black hidden sm:table-cell">
                                                    Transfer Date
                                                </th>
                                            </tr>
                                            </thead>
                                            <?php
                                            /*
                                              *get details of allpatients
                                              *
                                            */
                                            $ret = "SELECT * FROM  hmisphp.his_patient_transfers ";

                                            $stmt = $mysqli->prepare($ret);
                                            $stmt->execute();//ok
                                            $res = $stmt->get_result();
                                            $cnt = 1;
                                            while ($row = $res->fetch_object()) {
                                                ?>
                                                <tbody>
                                                <tr>
                                                    <td class="border border-gray-200 px-4 py-2 text-black"><?php echo $cnt; ?></td>
                                                    <td class="border border-gray-200 px-4 py-2 text-black"><?php echo $row->t_pat_name; ?></td>
                                                    <td class="border border-gray-200 px-4 py-2 text-black hidden sm:table-cell"><?php echo $row->t_pat_number; ?></td>
                                                    <td class="border border-gray-200 px-4 py-2 text-black hidden sm:table-cell"><?php echo $row->t_status; ?></td>
                                                    <td class="border border-gray-200 px-4 py-2 text-black hidden sm:table-cell"><?php echo $row->t_hospital; ?></td>
                                                    <td class="border border-gray-200 px-4 py-2 text-black hidden sm:table-cell"><?php echo $row->t_date; ?></td>
                                                </tr>
                                                </tbody>
                                                <?php $cnt = $cnt + 1;
                                            } ?>
                                            <tfoot>
                                            <tr class="bg-gray-100">
                                                <td colspan="8" class="border border-gray-200 px-4 py-2">
                                                    <div class="flex justify-end">
                                                        <ul class="flex space-x-1 pagination pagination-rounded justify-end footable-pagination mt-2 mb-0"></ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div> <!-- end card-box -->
                            </div> <!-- end col -->
                        </div>
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