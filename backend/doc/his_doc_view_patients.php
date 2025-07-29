<?php
global $mysqli;
session_start();
  include('assets/inc/config.php');
  include('assets/inc/checklogin.php');
  check_login();
  //$aid=$_SESSION['ad_id'];
  $doc_id = $_SESSION['doc_id']
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
                        <div class="flex flex-wrap">
                            <div class="w-full">
                                <div class="flex justify-between items-center mb-4">
                                    <div class="flex items-center space-x-2 text-sm">
                                        <a href="javascript: void(0);" class="text-gray-600 hover:text-gray-900">Dashboard</a>
                                        <span class="text-gray-400">/</span>
                                        <a href="javascript: void(0);" class="text-gray-600 hover:text-gray-900">Patients</a>
                                        <span class="text-gray-400">/</span>
                                        <span class="text-gray-900 font-medium">View Patients</span>
                                    </div>
                                    <h4 class="text-xl font-semibold">Patient Details</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="flex flex-wrap text-black">
                            <div class="w-full">
                                <div class="bg-white rounded-lg shadow-md p-4 mb-4 text-black">
                                    <h4 class="text-lg font-semibold mb-4 text-black"></h4>
                                    <div class="mb-4 text-black">
                                        <div class="flex flex-wrap text-black">
                                            <div class="w-full text-center sm:text-left flex flex-col sm:flex-row items-center gap-2 text-black">
                                                <div class="hidden">
                                                    <select id="demo-foo-filter-status" class="border border-gray-300 rounded px-3 py-1 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 text-black">
                                                        <option value="" class="text-black">Show all</option>
                                                        <option value="Discharged" class="text-black">Discharged</option>
                                                        <option value="OutPatients" class="text-black">OutPatients</option>
                                                        <option value="InPatients" class="text-black">InPatients</option>
                                                    </select>
                                                </div>
                                                <div>
                                                    <input id="demo-foo-search" type="text" placeholder="Search" class="border border-gray-300 rounded px-3 py-1 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 text-black placeholder-gray-500" autocomplete="on">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="overflow-x-auto text-black">
                                        <table id="demo-foo-filtering" class="w-full border-collapse border border-gray-200 text-black" data-page-size="7">
                                            <thead>
                                            <tr class="bg-gray-100 text-black">
                                                <th class="border border-gray-200 px-4 py-2 text-black">#</th>
                                                <th class="border border-gray-200 px-4 py-2 text-black" data-toggle="true">Patient Name</th>
                                                <th class="border border-gray-200 px-4 py-2 hidden sm:table-cell text-black">Patient Number</th>
                                                <th class="border border-gray-200 px-4 py-2 hidden sm:table-cell text-black">Patient Address</th>
                                                <th class="border border-gray-200 px-4 py-2 hidden sm:table-cell text-black">Patient Phone</th>
                                                <th class="border border-gray-200 px-4 py-2 hidden sm:table-cell text-black">Patient Age</th>
                                                <th class="border border-gray-200 px-4 py-2 hidden sm:table-cell text-black">Patient Category</th>
                                                <th class="border border-gray-200 px-4 py-2 hidden sm:table-cell text-black">Action</th>
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

                                                <tbody class="text-black">
                                                <tr class="hover:bg-gray-50 text-black">
                                                    <td class="border border-gray-200 px-4 py-2 text-black"><?php echo $cnt;?></td>
                                                    <td class="border border-gray-200 px-4 py-2 text-black"><?php echo $row->pat_fname;?> <?php echo $row->pat_lname;?></td>
                                                    <td class="border border-gray-200 px-4 py-2 hidden sm:table-cell text-black"><?php echo $row->pat_number;?></td>
                                                    <td class="border border-gray-200 px-4 py-2 hidden sm:table-cell text-black"><?php echo $row->pat_addr;?></td>
                                                    <td class="border border-gray-200 px-4 py-2 hidden sm:table-cell text-black"><?php echo $row->pat_phone;?></td>
                                                    <td class="border border-gray-200 px-4 py-2 hidden sm:table-cell text-black"><?php echo $row->pat_age;?> Years</td>
                                                    <td class="border border-gray-200 px-4 py-2 hidden sm:table-cell text-black"><?php echo $row->pat_type;?></td>

                                                    <td class="border border-gray-200 px-4 py-2 hidden sm:table-cell text-black">
                                                        <a href="his_doc_view_single_patient.php?pat_id=<?php echo $row->pat_id;?>&&pat_number=<?php echo $row->pat_number;?>&&pat_name=<?php echo $row->pat_fname;?>_<?php echo $row->pat_lname;?>" class="bg-green-500 hover:bg-green-600 text-white px-2 py-1 rounded text-xs inline-flex items-center">
                                                            <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                                            </svg>
                                                            View
                                                        </a>
                                                    </td>
                                                </tr>
                                                </tbody>
                                                <?php  $cnt = $cnt +1 ; }?>
                                            <tfoot>
                                            <tr class="bg-gray-100 text-black">
                                                <td colspan="8" class="border border-gray-200 px-4 py-2 text-black">
                                                    <div class="flex justify-end text-black">
                                                        <ul class="flex space-x-1 pagination pagination-rounded justify-end footable-pagination mt-2 mb-0 text-black"></ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
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