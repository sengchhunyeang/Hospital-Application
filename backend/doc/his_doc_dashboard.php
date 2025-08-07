<?php
global $mysqli;
session_start();
include('assets/inc/config.php');
include('assets/inc/checklogin.php');
check_login();
$doc_id = $_SESSION['doc_id'];
$doc_number = $_SESSION['doc_number'];

?>
<!DOCTYPE html>
<html lang="en">

<!--Head Code-->
<?php include("assets/inc/head.php"); ?>
<!--update link tailwind css -->
<script src="https://cdn.tailwindcss.com"></script>
<body>

<!-- Begin page -->
<div id="wrapper">

    <!-- Topbar Start -->
    <?php include('assets/inc/nav.php'); ?>
    <!-- end Topbar -->

    <!-- ========== Left Sidebar Start ========== -->
    <?php include('assets/inc/sidebar.php'); ?>
    <!-- Left Sidebar End -->

    <!-- ============================================================== -->
    <!-- Start Page Content here -->
    <!-- ============================================================== -->

    <div class="content-page">
        <div class="content">
            <!-- Start Content-->
            <div class="container-fluid">
                <!-- start page title -->
                <div class="flex flex-wrap -mx-4">
                    <div class="w-full px-4">
                        <div class="mb-6">
                            <h4 class="text-xl font-semibold text-gray-800">Hospital-Application Dashboard</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="flex flex-wrap -mx-4">
                    <!--Start OutPatients-->
                    <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-4">
                        <div class="bg-white rounded-lg hover:shadow-md transition-shadow  p-4">
                            <div class="flex items-center">
                                <div class="w-1/2">
                                    <div class="w-16 h-16 rounded-full bg-red-100 border-2 border-red-500 flex items-center justify-center mx-auto">
                                        <i class="fab fa-accessible-icon text-xl text-red-500"></i>
                                    </div>
                                </div>
                                <div class="w-1/2 text-right">
                                    <?php
                                    //code for summing up number of out patients
                                    $result = "SELECT count(*) FROM hmisphp.his_patients  ";
                                    $stmt = $mysqli->prepare($result);
                                    $stmt->execute();
                                    $stmt->bind_result($patient);
                                    $stmt->fetch();
                                    $stmt->close();
                                    ?>
                                    <h3 class="text-2xl font-semibold text-black"><span
                                                data-plugin="counterup"><?php echo $patient; ?></span></h3>
                                    <p class="text-black text-sm truncate">Total Patients</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Out Patients-->

                    <!--Start InPatients-->
                    <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-4">
                        <div class="bg-white rounded-lg hover:shadow-md transition-shadow  p-4">
                            <div class="flex items-center">
                                <div class="w-1/2">
                                    <div class="w-16 h-16 rounded-full bg-red-100 border-2 border-red-500 flex items-center justify-center mx-auto">
                                        <i class="mdi mdi-flask text-xl text-red-500"></i>
                                    </div>
                                </div>
                                <div class="w-1/2 text-right">
                                    <?php
                                    /*
                                     * code for counting only inpatients
                                     */
                                    $result = "SELECT COUNT(*) FROM hmisphp.his_patients
                                            WHERE pat_type = 'Inpatient'"; // Adjust field name as needed

                                    // Alternative if you need to join with patients table:
                                    // $result = "SELECT COUNT(*) FROM hmisphp.his_equipments e
                                    //           JOIN hmisphp.his_patients p ON e.patient_id = p.patient_id
                                    //           WHERE p.patient_type = 'Inpatient'";

                                    $stmt = $mysqli->prepare($result);
                                    $stmt->execute();
                                    $stmt->bind_result($inpatient_count);
                                    $stmt->fetch();
                                    $stmt->close();
                                    ?>
                                    <h3 class="text-2xl font-semibold text-black">
                                        <span data-plugin="counterup"><?php echo $inpatient_count; ?></span>
                                    </h3>
                                    <p class="text-black text-sm truncate">Inpatient</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End InPatients-->
                    <!--                            start OPD -->
                    <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-4">
                        <div class="bg-white rounded-lg hover:shadow-md transition-shadow  p-4">
                            <div class="flex items-center">
                                <div class="w-1/2">
                                    <div class="w-16 h-16 rounded-full bg-red-100 border-2 border-red-500 flex items-center justify-center mx-auto">
                                        <i class="mdi mdi-flask text-xl text-red-500"></i>
                                    </div>
                                </div>
                                <div class="w-1/2 text-right">
                                    <?php
                                    /*
                                     * code for counting only inpatients
                                     */
                                    $result = "SELECT COUNT(*) FROM hmisphp.his_patients
                                            WHERE pat_type = 'Outpatient'"; // Adjust field name as needed

                                    // Alternative if you need to join with patients table:
                                    // $result = "SELECT COUNT(*) FROM hmisphp.his_equipments e
                                    //           JOIN hmisphp.his_patients p ON e.patient_id = p.patient_id
                                    //           WHERE p.patient_type = 'Inpatient'";

                                    $stmt = $mysqli->prepare($result);
                                    $stmt->execute();
                                    $stmt->bind_result($outpatient_count);
                                    $stmt->fetch();
                                    $stmt->close();
                                    ?>
                                    <h3 class="text-2xl font-semibold text-black">
                                        <span data-plugin="counterup"><?php echo $outpatient_count; ?></span>
                                    </h3>
                                    <p class="text-black text-sm truncate">OutPatient</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- My Profile Card -->
                    <!--                            <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-4">-->
                    <!--                                <a href="his_doc_account.php">-->
                    <!--                                    <div class="bg-white rounded-lg  p-4 hover:shadow-md transition-shadow">-->
                    <!--                                        <div class="flex items-center">-->
                    <!--                                            <div class="w-1/2">-->
                    <!--                                                <div class="w-16 h-16 rounded-full bg-red-100 border-2 border-red-500 flex items-center justify-center mx-auto">-->
                    <!--                                                    <i class="fas fa-user-tag text-xl text-red-500"></i>-->
                    <!--                                                </div>-->
                    <!--                                            </div>-->
                    <!--                                            <div class="w-1/2 text-right">-->
                    <!--                                                <h3 class="text-2xl font-semibold text-black"></h3>-->
                    <!--                                                <p class="text-black text-sm truncate">My Profile</p>-->
                    <!--                                            </div>-->
                    <!--                                        </div>-->
                    <!--                                    </div>-->
                    <!--                                </a>-->
                    <!--                            </div>-->

                    <!-- My Payroll Card -->
                    <!--                            <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-4">-->
                    <!--                                <a href="his_doc_view_payrolls.php">-->
                    <!--                                    <div class="bg-white rounded-lg  p-4 hover:shadow-md transition-shadow">-->
                    <!--                                        <div class="flex items-center">-->
                    <!--                                            <div class="w-1/2">-->
                    <!--                                                <div class="w-16 h-16 rounded-full bg-red-100 border-2 border-red-500 flex items-center justify-center mx-auto">-->
                    <!--                                                    <i class="mdi mdi-flask text-xl text-red-500"></i>-->
                    <!--                                                </div>-->
                    <!--                                            </div>-->
                    <!--                                            <div class="w-1/2 text-right">-->
                    <!--                                                <h3 class="text-2xl font-semibold text-black"></h3>-->
                    <!--                                                <p class="text-black text-sm truncate">My Payroll</p>-->
                    <!--                                            </div>-->
                    <!--                                        </div>-->
                    <!--                                    </div>-->
                    <!--                                </a>-->
                    <!--                            </div>-->
                </div>

                <!--Recently Employed Employees-->
                <div class="flex flex-wrap mx-4">

                    <div class="w-full">
                        <div class="bg-white rounded-lg  p-4">
                            <h4 class="text-lg font-semibold mb-4">Patient</h4>
                            <div class="mb-4">
                                <div class="flex flex-wrap">
                                    <div class="w-full">
                                        <div class="flex flex-col sm:flex-row gap-2 justify-start">
                                            <!-- Changed to justify-start -->
                                            <div class="hidden">
                                                <select id="demo-foo-filter-status"
                                                        class="border border-gray-300 rounded px-3 py-1 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
                                                    <option value="">Show all</option>
                                                    <option value="Discharged">Discharged</option>
                                                    <option value="OutPatients">OutPatients</option>
                                                    <option value="InPatients">InPatients</option>
                                                </select>
                                            </div>
                                            <div class="w-full sm:w-auto"> <!-- Added width control -->
                                                <input id="demo-foo-search"
                                                       type="text"
                                                       placeholder="Search"
                                                       class="border border-gray-300 rounded px-3 py-1 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 w-full"
                                                       autocomplete="on">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="overflow-x-auto">
                                <table id="demo-foo-filtering" class="w-full border-collapse border border-gray-200"
                                       data-page-size="7">
                                    <thead>
                                    <tr class="bg-gray-100">
                                        <th class="border border-gray-200 px-4 py-2 text-black">#</th>
                                        <th class="border border-gray-200 px-4 py-2 text-black" data-toggle="true">
                                            Patient Name
                                        </th>
                                        <th class="border border-gray-200 px-4 py-2 text-black hidden sm:table-cell">
                                            Patient Number
                                        </th>
                                        <th class="border border-gray-200 px-4 py-2 text-black hidden sm:table-cell">
                                            Patient Address
                                        </th>
                                        <th class="border border-gray-200 px-4 py-2 text-black hidden sm:table-cell">
                                            Patient Phone
                                        </th>
                                        <th class="border border-gray-200 px-4 py-2 text-black hidden sm:table-cell">
                                            Patient Age
                                        </th>
                                        <th class="border border-gray-200 px-4 py-2 text-black hidden sm:table-cell">
                                            Patient Category
                                        </th>
                                        <th class="border border-gray-200 px-4 py-2 text-black hidden sm:table-cell">
                                            Action
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $ret = "SELECT * FROM hmisphp.his_patients ORDER BY RAND()";
                                    $stmt = $mysqli->prepare($ret);
                                    $stmt->execute();
                                    $res = $stmt->get_result();
                                    $cnt = 1;
                                    while ($row = $res->fetch_object()) {
                                        ?>
                                        <tr class="hover:bg-gray-50">
                                            <td class="border border-gray-200 px-4 py-2 text-black"><?php echo $cnt; ?></td>
                                            <td class="border border-gray-200 px-4 py-2 text-black"><?php echo $row->pat_fname; ?><?php echo $row->pat_lname; ?></td>
                                            <td class="border border-gray-200 px-4 py-2 text-black hidden sm:table-cell"><?php echo $row->pat_number; ?></td>
                                            <td class="border border-gray-200 px-4 py-2 text-black hidden sm:table-cell"><?php echo $row->pat_addr; ?></td>
                                            <td class="border border-gray-200 px-4 py-2 text-black hidden sm:table-cell"><?php echo $row->pat_phone; ?></td>
                                            <td class="border border-gray-200 px-4 py-2 text-black hidden sm:table-cell"><?php echo $row->pat_age; ?>
                                                Years
                                            </td>
                                            <td class="border border-gray-200 px-4 py-2 text-black hidden sm:table-cell"><?php echo $row->pat_type; ?></td>
                                            <td class="border border-gray-200 px-4 py-2 text-black hidden sm:table-cell">
                                                <a href="his_doc_view_single_patient.php?pat_id=<?php echo $row->pat_id; ?>&&pat_number=<?php echo $row->pat_number; ?>&&pat_name=<?php echo $row->pat_fname; ?>_<?php echo $row->pat_lname; ?>"
                                                   class="bg-green-500 hover:bg-green-600 text-white px-2 py-1 rounded text-xs inline-block mr-1">
                                                    <i class="mdi mdi-eye"></i> View
                                                </a>
                                            </td>
                                        </tr>
                                        <?php
                                        $cnt = $cnt + 1;
                                    }
                                    ?>
                                    </tbody>
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
                        </div>
                    </div>
                </div>
                <!-- end row -->

            </div> <!-- container -->

        </div> <!-- content -->

        <!-- Footer Start -->
        <?php include('assets/inc/footer.php'); ?>
        <!-- end Footer -->

    </div>

    <!-- ============================================================== -->
    <!-- End Page content -->
    <!-- ============================================================== -->


</div>
<!-- END wrapper -->

<!-- Right Sidebar -->
<div class="right-bar">
    <div class="rightbar-title">
        <a href="javascript:void(0);" class="right-bar-toggle float-right">
            <i class="dripicons-cross noti-icon"></i>
        </a>
        <h5 class="m-0 text-white">Settings</h5>
    </div>
    <div class="slimscroll-menu">
        <!-- User box -->
        <div class="user-box">
            <div class="user-img">
                <img src="assets/images/users/user-1.jpg" alt="user-img" title="Mat Helme"
                     class="rounded-circle img-fluid">
                <a href="javascript:void(0);" class="user-edit"><i class="mdi mdi-pencil"></i></a>
            </div>

            <h5><a href="javascript: void(0);">Geneva Kennedy</a></h5>
            <p class="text-muted mb-0"><small>Admin Head</small></p>
        </div>

        <!-- Settings -->
        <hr class="mt-0"/>
        <h5 class="pl-3">Basic Settings</h5>
        <hr class="mb-0"/>

        <div class="p-3">
            <div class="checkbox checkbox-primary mb-2">
                <input id="Rcheckbox1" type="checkbox" checked>
                <label for="Rcheckbox1">
                    Notifications
                </label>
            </div>
            <div class="checkbox checkbox-primary mb-2">
                <input id="Rcheckbox2" type="checkbox" checked>
                <label for="Rcheckbox2">
                    API Access
                </label>
            </div>
            <div class="checkbox checkbox-primary mb-2">
                <input id="Rcheckbox3" type="checkbox">
                <label for="Rcheckbox3">
                    Auto Updates
                </label>
            </div>
            <div class="checkbox checkbox-primary mb-2">
                <input id="Rcheckbox4" type="checkbox" checked>
                <label for="Rcheckbox4">
                    Online Status
                </label>
            </div>
            <div class="checkbox checkbox-primary mb-0">
                <input id="Rcheckbox5" type="checkbox" checked>
                <label for="Rcheckbox5">
                    Auto Payout
                </label>
            </div>
        </div>

        <!-- Timeline -->
        <hr class="mt-0"/>
        <h5 class="px-3">Messages <span class="float-right badge badge-pill badge-danger">25</span></h5>
        <hr class="mb-0"/>
        <div class="p-3">
            <div class="inbox-widget">
                <div class="inbox-item">
                    <div class="inbox-item-img"><img src="assets/images/users/user-2.jpg" class="rounded-circle" alt="">
                    </div>
                    <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Tomaslau</a></p>
                    <p class="inbox-item-text">I've finished it! See you so...</p>
                </div>
                <div class="inbox-item">
                    <div class="inbox-item-img"><img src="assets/images/users/user-3.jpg" class="rounded-circle" alt="">
                    </div>
                    <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Stillnotdavid</a></p>
                    <p class="inbox-item-text">This theme is awesome!</p>
                </div>
                <div class="inbox-item">
                    <div class="inbox-item-img"><img src="assets/images/users/user-4.jpg" class="rounded-circle" alt="">
                    </div>
                    <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Kurafire</a></p>
                    <p class="inbox-item-text">Nice to meet you</p>
                </div>

                <div class="inbox-item">
                    <div class="inbox-item-img"><img src="assets/images/users/user-5.jpg" class="rounded-circle" alt="">
                    </div>
                    <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Shahedk</a></p>
                    <p class="inbox-item-text">Hey! there I'm available...</p>
                </div>
                <div class="inbox-item">
                    <div class="inbox-item-img"><img src="assets/images/users/user-6.jpg" class="rounded-circle" alt="">
                    </div>
                    <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Adhamdannaway</a></p>
                    <p class="inbox-item-text">This theme is awesome!</p>
                </div>
            </div> <!-- end inbox-widget -->
        </div> <!-- end .p-3-->

    </div> <!-- end slimscroll-menu-->
</div>
<!-- /Right-bar -->

<!-- Right bar overlay-->
<div class="rightbar-overlay"></div>

<!-- Vendor js -->
<script src="assets/js/vendor.min.js"></script>

<!-- Plugins js-->
<script src="assets/libs/flatpickr/flatpickr.min.js"></script>
<script src="assets/libs/jquery-knob/jquery.knob.min.js"></script>
<script src="assets/libs/jquery-sparkline/jquery.sparkline.min.js"></script>
<script src="assets/libs/flot-charts/jquery.flot.js"></script>
<script src="assets/libs/flot-charts/jquery.flot.time.js"></script>
<script src="assets/libs/flot-charts/jquery.flot.tooltip.min.js"></script>
<script src="assets/libs/flot-charts/jquery.flot.selection.js"></script>
<script src="assets/libs/flot-charts/jquery.flot.crosshair.js"></script>

<!-- Dashboar 1 init js-->
<script src="assets/js/pages/dashboard-1.init.js"></script>
<script src="assets/js/pages/foo-tables.init.js"></script>
<script src="assets/libs/footable/footable.all.min.js"></script>


<!-- App js-->
<script src="assets/js/app.min.js"></script>

</body>

</html>