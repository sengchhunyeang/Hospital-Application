<?php
session_start();
include('assets/inc/config.php');
include('assets/inc/checklogin.php');
check_login();
$doc_id = $_SESSION['doc_id'];

// Get prescription ID from URL
if (!isset($_GET['pres_id'])) {
    die("No prescription selected");
}
$pres_id = intval($_GET['pres_id']);

// Fetch prescription main info
$ret = "SELECT * FROM hmisphp.his_prescriptions WHERE pres_id = ?";
$stmt = $mysqli->prepare($ret);
$stmt->bind_param('i', $pres_id);
$stmt->execute();
$res = $stmt->get_result();
$prescription = $res->fetch_object();

if (!$prescription) {
    die("Prescription not found");
}

// Fetch medicines for this prescription
$meds = "SELECT * FROM hmisphp.his_prescription_medicines WHERE pres_id = ? ORDER BY id ASC";
$stmt_meds = $mysqli->prepare($meds);
$stmt_meds->bind_param('i', $pres_id);
$stmt_meds->execute();
$res_meds = $stmt_meds->get_result();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <title>View Single Prescription</title>
</head>
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

    <div class="content-page">
        <div class="content">
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
                            <h4 class="page-title">#<?php echo htmlspecialchars($prescription->pres_number); ?></h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-12">
                        <div class="max-w-4xl mx-auto bg-gradient-to-b from-white to-blue-50 rounded-2xl p-8 print:p-10 print:rounded-none print:bg-white border border-blue-100 print:text-[18px]">

                            <!-- Header: Logo & Clinic Info -->
                            <div class="flex justify-between items-center mb-8">
                                <div class="flex items-center gap-4">
                                    <img src="./assets/images/logo.png" alt="Logo"
                                         class="h-20 w-20 object-contain rounded-full border-2 border-blue-200">
                                    <div>
                                        <h1 class="text-3xl font-bold text-blue-800">Happy Health Clinic</h1>
                                        <p class="text-lg text-blue-500">123 Wellness St, City, Country</p>
                                    </div>
                                </div>

                                <!-- Print Button -->
                                <button onclick="window.print()"
                                        class="flex items-center gap-1 px-3 py-1 bg-gray-400 hover:bg-gray-500 text-white font-medium rounded-md shadow-sm print:hidden transition transform hover:-translate-y-0.5 text-sm">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="currentColor"
                                         viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                              d="M5 4v3H4a2 2 0 00-2 2v3a2 2 0 002 2h1v2a2 2 0 002 2h6a2 2 0 002-2v-2h1a2 2 0 002-2V9a2 2 0 00-2-2h-1V4a2 2 0 00-2-2H7a2 2 0 00-2 2zm8 0H7v3h6V4zm0 8H7v4h6v-4z"
                                              clip-rule="evenodd"/>
                                    </svg>
                                </button>
                            </div>

                            <!-- Patient Info -->
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-8 text-lg">
                                <div>
                                    <h2 class="text-base font-semibold text-blue-600">Name</h2>
                                    <p class="text-2xl font-medium text-blue-900"><?= htmlspecialchars($prescription->pres_pat_name); ?></p>
                                </div>
                                <div>
                                    <h2 class="text-base font-semibold text-blue-600">Age</h2>
                                    <p class="text-2xl font-medium text-red-500"><?= htmlspecialchars($prescription->pres_pat_age); ?> Years</p>
                                </div>
                                <div>
                                    <h2 class="text-base font-semibold text-blue-600">Patient Number</h2>
                                    <p class="text-2xl font-medium text-red-500"><?= htmlspecialchars($prescription->pres_pat_number); ?></p>
                                </div>
                                <div>
                                    <h2 class="text-base font-semibold text-blue-600">Category</h2>
                                    <span class="inline-block px-4 py-2 rounded-full text-white font-medium text-lg
                                        <?php if ($prescription->pres_pat_type == "Waiting") { echo 'bg-yellow-400'; }
                                    elseif ($prescription->pres_pat_type == "InPatient") { echo 'bg-green-400'; }
                                    else { echo 'bg-blue-400'; } ?>">
                                        <?= htmlspecialchars($prescription->pres_pat_type); ?>
                                    </span>
                                </div>
                                <div class="md:col-span-2">
                                    <h2 class="text-base font-semibold text-blue-600">Ailment / Room</h2>
                                    <p class="text-2xl font-medium text-red-500"><?= htmlspecialchars($prescription->pres_pat_ailment ?? 'NA'); ?></p>
                                </div>
                            </div>

                            <hr class="my-6 border-blue-200">

                            <!-- Medicine List -->
                            <div class="mt-8">
                                <h2 class="text-2xl font-bold text-center text-blue-700 mb-4 border-b border-blue-200 pb-2">
                                    Medicines
                                </h2>
                                <table class="w-full border border-blue-200 rounded-lg overflow-hidden text-lg">
                                    <thead class="bg-blue-100 text-blue-800">
                                    <tr>
                                        <th class="px-4 py-2 text-left">#</th>
                                        <th class="px-4 py-2 text-left">Medicine</th>
                                        <th class="px-4 py-2 text-left">Quantity</th>
                                        <th class="px-4 py-2 text-left">Time</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $cnt = 1;
                                    while($med = $res_meds->fetch_object()) { ?>
                                        <tr class="border-t border-blue-200">
                                            <td class="px-4 py-2"><?= $cnt++; ?></td>
                                            <td class="px-4 py-2"><?= htmlspecialchars($med->medicine_name); ?></td>
                                            <td class="px-4 py-2"><?= htmlspecialchars($med->medicine_qty); ?></td>
                                            <td class="px-4 py-2"><?= htmlspecialchars($med->medicine_time); ?></td>
                                        </tr>
                                    <?php } ?>
                                    </tbody>
                                </table>
                            </div>

                            <!-- Footer: Doctor / Date -->
                            <div class="mt-12 flex justify-between items-center print:mt-8 text-lg">
                                <div>
                                    <p class="text-blue-700 font-medium">Doctor: ____________________</p>
                                </div>
                                <div>
                                    <p class="text-blue-700 font-medium">Date: <?= date('d/m/Y'); ?></p>
                                </div>
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
