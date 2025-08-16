<?php
session_start();
include('assets/inc/config.php');
include('assets/inc/checklogin.php');
check_login();
$aid = $_SESSION['ad_id'];
?>

<!DOCTYPE html>
<html lang="en">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Battambang:wght@100;300;400;700&display=swap" rel="stylesheet">
<style>
    body {
        font-family: 'Battambang', sans-serif !important;
        color: black;
    }
</style>
<?php include('assets/inc/head.php'); ?>

<body>

<!-- Begin page -->
<div id="wrapper">

    <!-- Topbar Start -->
    <?php include('assets/inc/nav.php'); ?>
    <!-- end Topbar -->

    <!-- ========== Left Sidebar Start ========== -->
    <?php include("assets/inc/sidebar.php"); ?>
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
                                    <li class="breadcrumb-item active">View Patients</li>
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
                                    <div class="col-12 text-sm-center form-inline">
                                        <div class="form-group mr-2" style="display:none">
                                            <select id="demo-foo-filter-status" class="custom-select custom-select-sm">
                                                <option value="">Show all</option>
                                                <option value="Discharged">Discharged</option>
                                                <option value="OutPatients">OutPatients</option>
                                                <option value="InPatients">InPatients</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <input id="demo-foo-search" type="text" placeholder="Search"
                                                   class="form-control form-control-sm" autocomplete="on">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="table-responsive">
                                <table id="demo-foo-filtering"
                                       class="min-w-full border border-black text-black mb-4 rounded-lg "
                                       data-page-size="7">
                                    <thead class="bg-gray-100 text-gray-700 uppercase text-sm font-semibold">
                                    <tr>
                                        <th class="px-4 py-2 text-left">No</th>
                                        <th class="px-4 py-2 text-left">Name</th>
                                        <th class="px-4 py-2 text-left">Number Patient</th>
                                        <th class="px-4 py-2 text-left hidden sm:table-cell">Address</th>
                                        <th class="px-4 py-2 text-left hidden sm:table-cell">Phone</th>
                                        <th class="px-4 py-2 text-left">Age</th>
                                        <th class="px-4 py-2 text-left">Status</th>
                                        <th class="px-4 py-2 text-left">Date In</th>
                                        <!--                                                <th data-hide="phone">Action</th>-->
                                    </tr>
                                    </thead>
                                    <?php
                                    /*
                                        *get details of allpatients
                                        *
                                    */
                                    $sum_patient =0;
                                    $ret = "SELECT * FROM  hmisphp.his_patients ORDER BY created_at DESC ";
                                    //sql code to get to ten docs  randomly
                                    $stmt = $mysqli->prepare($ret);
                                    $stmt->execute();//ok
                                    $res = $stmt->get_result();
                                    $cnt = 1;
                                    while ($row = $res->fetch_object()) {
                                        $sum_patient++
                                        ?>

                                        <tbody>
                                        <tr class="hover:bg-gray-100 text-black">
                                            <td class="px-4 py-2 whitespace-nowrap"><?php echo $cnt; ?></td>
                                            <td class="px-4 py-2 whitespace-nowrap"><?php echo $row->pat_fname . ' ' . $row->pat_lname; ?></td>
                                            <td class="px-4 py-2 whitespace-nowrap"><?php echo $row->pat_number; ?></td>
                                            <td class="px-4 py-2 whitespace-nowrap"><?php echo $row->pat_addr; ?></td>
                                            <td class="px-4 py-2 whitespace-nowrap"><?php echo $row->pat_phone; ?></td>
                                            <td class="px-4 py-2 whitespace-nowrap"><?php echo $row->pat_age; ?>Years
                                            </td>
                                            <td class="px-4 py-2 whitespace-nowrap">
                                                <?php if ($row->pat_type == 'OutPatient'): ?>
                                                    <span class="px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">
            <?php echo $row->pat_type; ?>
        </span>
                                                <?php elseif ($row->pat_type == 'InPatient'): ?>
                                                    <span class="px-2 py-1 text-xs font-semibold rounded-full bg-blue-100 text-blue-800">
            <?php echo $row->pat_type; ?>
        </span>
                                                <?php elseif ($row->pat_type == 'Waiting'): ?>
                                                    <span class="px-2 py-1 text-xs font-semibold rounded-full bg-yellow-100 text-yellow-800">
            <?php echo $row->pat_type; ?>
        </span>
                                                <?php else: ?>
                                                    <span class="px-2 py-1 text-xs font-semibold rounded-full bg-gray-100 text-gray-800">
            <?php echo $row->pat_type; ?>
        </span>
                                                <?php endif; ?>
                                            </td>

                                            <td class="px-4 py-2 whitespace-nowrap"><?php echo $row->created_at; ?></td>

                                        </tr>
                                        </tbody>
                                        <?php $cnt = $cnt + 1;
                                    } ?>

                                    <tfoot>
                                    <tr class="active">
                                        <div class="text-black text-bold mb-8"> <?php echo "Total patients: " . $cnt-1; ?></div>
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
        <?php include('assets/inc/footer.php'); ?>
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