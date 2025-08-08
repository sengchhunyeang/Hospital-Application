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
    <title>View Single Prescription </title>
</head>
<?php include ('assets/inc/head.php');?>

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
            <?php
                $pres_number=$_GET['pres_number'];
                $pres_id = $_GET['pres_id'];
                $ret="SELECT  * FROM hmisphp.his_prescriptions WHERE pres_number = ? AND pres_id = ?";
                $stmt= $mysqli->prepare($ret) ;
                $stmt->bind_param('ii',$pres_number,$pres_id);
                //$stmt->bind_param('i',$pres_id);
                $stmt->execute() ;//ok
                $res=$stmt->get_result();
                //$cnt=1;
                while($row=$res->fetch_object())
                {
            ?>
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
                                                <li class="breadcrumb-item"><a href="his_doc_dashboard.php">Dashboard</a></li>
                                                <li class="breadcrumb-item"><a href="javascript: void(0);">Pharmaceuticals</a></li>
                                                <li class="breadcrumb-item active">View Prescriptions</li>
                                            </ol>
                                        </div>
                                        <h4 class="page-title">#<?php echo $row->pres_number;?></h4>
                                    </div>
                                </div>
                            </div>
                            <!-- end page title -->

                            <div class="row">
                                <div class="col-12">
                                    <div class="card-box">
                                        <div class="max-w-5xl mx-auto bg-white  rounded-xl p-6 print:p-0 print:shadow-none print:rounded-none print:bg-white">
                                            <!-- Print Button (Hidden in print view) -->
                                            <div class="flex justify-end mb-4 print:hidden">
                                                <button onclick="window.print()" class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-2 rounded-lg flex items-center gap-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                                                        <path fill-rule="evenodd" d="M5 4v3H4a2 2 0 00-2 2v3a2 2 0 002 2h1v2a2 2 0 002 2h6a2 2 0 002-2v-2h1a2 2 0 002-2V9a2 2 0 00-2-2h-1V4a2 2 0 00-2-2H7a2 2 0 00-2 2zm8 0H7v3h6V4zm0 8H7v4h6v-4z" clip-rule="evenodd" />
                                                    </svg>
                                                    Print Prescription
                                                </button>
                                            </div>

                                            <!-- Prescription Info -->
                                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                                <div>
                                                    <h2 class="text-xl font-semibold text-gray-700 mb-1">Name:</h2>
                                                    <p class="text-gray-900 font-medium"><?= htmlspecialchars($row->pres_pat_name); ?></p>
                                                </div>

                                                <div>
                                                    <h2 class="text-xl font-semibold text-gray-700 mb-1">Age:</h2>
                                                    <p class="text-red-600 font-medium"><?= htmlspecialchars($row->pres_pat_age); ?> Years</p>
                                                </div>

                                                <div>
                                                    <h2 class="text-xl font-semibold text-gray-700 mb-1">Patient Number:</h2>
                                                    <p class="text-red-600 font-medium"><?= htmlspecialchars($row->pres_pat_number); ?></p>
                                                </div>

                                                <div>
                                                    <h2 class="text-xl font-semibold text-gray-700 mb-1">Patient Category:</h2>
                                                    <p class="text-red-600 font-medium"><?= htmlspecialchars($row->pres_pat_type); ?></p>
                                                </div>

                                                <div class="md:col-span-2">
                                                    <h2 class="text-xl font-semibold text-gray-700 mb-1">Patient Ailment:</h2>
                                                    <p class="text-red-600 font-medium"><?= htmlspecialchars($row->pres_pat_ailment); ?></p>
                                                </div>
                                            </div>

                                            <hr class="my-6 border-t border-gray-300">

                                            <!-- Prescription Instructions -->
                                            <div>
                                                <h2 class="text-xl font-semibold text-center text-gray-700 mb-3">Prescription</h2>
                                                <p class="text-gray-600 whitespace-pre-wrap leading-relaxed">
                                                    <?= $row->pres_ins ?>
                                                </p>
                                            </div>
                                        </div>

                                        <!-- end row -->
                                    </div> <!-- end card-->
                                </div> <!-- end col-->
                            </div>
                            <!-- end row-->

                        </div> <!-- container -->

                    </div> <!-- content -->

                    <!-- Footer Start -->
                        <?php include('assets/inc/footer.php');?>
                    <!-- end Footer -->

                </div>
            <?php }?>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->



        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- Vendor js -->
        <script src="assets/js/vendor.min.js"></script>

        <!-- App js -->
        <script src="assets/js/app.min.js"></script>

    </body>

</html>