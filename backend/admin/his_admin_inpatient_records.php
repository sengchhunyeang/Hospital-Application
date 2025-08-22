<?php
session_start();
include('assets/inc/config.php');
include('assets/inc/checklogin.php');
check_login();
$aid = $_SESSION['ad_id'];
?>

<!DOCTYPE html>
<html lang="en">

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
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Reporting</a></li>
                                    <li class="breadcrumb-item active">In Patients</li>
                                </ol>
                            </div>
                            <h4 class="page-title">InPatient Details</h4>
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
                                    <div class="col-12 flex justify-between items-center flex-wrap">
                                        <div class="form-group mr-2" style="display:none">
                                            <select id="demo-foo-filter-status" class="custom-select custom-select-sm">
                                                <option value="">Show all</option>
                                                <option value="Discharged">Discharged</option>
                                                <option value="OutPatients">OutPatients</option>
                                                <option value="InPatients">InPatients</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <input
                                                    id="demo-foo-search"
                                                    type="text"
                                                    placeholder="Search"
                                                    autocomplete="on"
                                                    class="w-full px-3 py-2 text-sm border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                            >
                                        </div>
                                        <!-- Export Button -->
                                        <div class="mb-3 ml-2">
                                            <button id="exportBtn"
                                                    class="px-3 py-2 bg-green-600 text-white rounded-md hover:bg-green-700">
                                                Export to Excel
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="table-responsive">
                                <?php
                                $totalQuery = "SELECT COUNT(*) AS total FROM hmisphp.his_patients WHERE pat_type = 'InPatient'";
                                $totalStmt = $mysqli->prepare($totalQuery);
                                $totalStmt->execute();
                                $totalResult = $totalStmt->get_result()->fetch_assoc();
                                $totalPatients = $totalResult['total'];
                                $totalStmt->close();
                                ?>
                                <table id="demo-foo-filtering" class="table table-bordered toggle-circle mb-0"
                                       data-page-size="7">
                                    <div class="text-black font-semibold mb-2">
                                        Total: <?php echo $totalPatients; ?></div>
                                    <thead class="bg-gray-100 text-gray-700">
                                    <tr>
                                        <th class="px-4 py-2 text-left text-sm font-semibold">#</th>
                                        <th class="px-4 py-2 text-left text-sm font-semibold">Patient Name</th>
                                        <th class="px-4 py-2 text-left text-sm font-semibold">Patient Number</th>
                                        <th class="px-4 py-2 text-left text-sm font-semibold">Patient Address</th>
                                        <th class="px-4 py-2 text-left text-sm font-semibold">Patient Phone</th>
                                        <th class="px-4 py-2 text-left text-sm font-semibold">Patient Age</th>
                                        <th class="px-4 py-2 text-left text-sm font-semibold">Action</th>
                                    </tr>
                                    </thead>

                                    <?php
                                    $ret = "SELECT * FROM hmisphp.his_patients WHERE pat_type = 'InPatient' ORDER BY RAND() ";
                                    $stmt = $mysqli->prepare($ret);
                                    $stmt->execute();
                                    $res = $stmt->get_result();
                                    $cnt = 1;
                                    while ($row = $res->fetch_object()) {
                                        ?>
                                        <tbody class="divide-y divide-gray-200">
                                        <tr class="hover:bg-gray-50">
                                            <td class="px-4 py-2 text-sm text-gray-700"><?php echo $cnt; ?></td>
                                            <td class="px-4 py-2 text-sm text-gray-700">
                                                <?php echo $row->pat_fname; ?><?php echo $row->pat_lname; ?>
                                            </td>
                                            <td class="px-4 py-2 text-sm text-gray-700"><?php echo $row->pat_number; ?></td>
                                            <td class="px-4 py-2 text-sm text-gray-700"><?php echo $row->pat_addr; ?></td>
                                            <td class="px-4 py-2 text-sm text-gray-700"><?php echo $row->pat_phone; ?></td>
                                            <td class="px-4 py-2 text-sm text-gray-700"><?php echo $row->pat_age; ?>
                                                Years
                                            </td>
                                            <td class="px-4 py-2">
                                                <a href="his_admin_view_single_patient.php?pat_id=<?php echo $row->pat_id; ?>&&pat_number=<?php echo $row->pat_number; ?>"
                                                   class="inline-flex items-center px-2 py-1 text-xs font-medium text-white bg-blue-600 rounded-md hover:bg-blue-700">
                                                    <i class="mdi mdi-eye mr-1"></i> View
                                                </a>
                                            </td>
                                        </tr>
                                        </tbody>
                                        <?php $cnt++;
                                    } ?>
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
        <?php include('assets/inc/footer.php'); ?>
        <!-- end Footer -->

    </div>

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

<!-- SheetJS -->
<script src="https://cdn.jsdelivr.net/npm/xlsx@0.18.5/dist/xlsx.full.min.js"></script>

<script>
    // Export table to Excel
    document.getElementById('exportBtn').addEventListener('click', function () {
        var table = document.getElementById('demo-foo-filtering');
        var wb = XLSX.utils.table_to_book(table, {sheet: "InPatients"});
        XLSX.writeFile(wb, 'InPatients.xlsx');
    });
</script>

</body>

</html>
