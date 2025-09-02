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

/* 🔹 DELETE PROCESS FUNCTION */
if (isset($_GET['delete'])) {
    $id = intval($_GET['delete']);
    $adn = "DELETE FROM hmisphp.his_patient_transfers WHERE t_id = ?";
    $stmt = $mysqli->prepare($adn);
    $stmt->bind_param('i', $id);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        $success = "Patient Transfer Record Removed Successfully";
    } else {
        $err = "Error! Please Try Again Later";
    }

    $stmt->close();
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <title>view patients</title>
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

    <!-- ============================================================== -->
    <!-- Start Page Content here -->
    <!-- ============================================================== -->

    <div class="content-page">
        <div class="content">


            <?php if (isset($success)) { ?>
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                    <?php echo $success; ?>
                </div>
            <?php } ?>
            <?php if (isset($err)) { ?>
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                    <?php echo $err; ?>
                </div>
            <?php } ?>


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
                                                <option value="Outpatients">OutPatients</option>
                                                <option value="Inpatients">InPatients</option>
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
                                    <!-- Previous code remains the same until the first table query -->

                                    <?php
                                    /*
                                     * Get details of patients awaiting transfer (InPatients not yet transferred)
                                     */
                                    $ret = "SELECT p.* 
        FROM hmisphp.his_patients p
        WHERE p.pat_type = 'InPatient' 
        AND NOT EXISTS (
            SELECT 1 
            FROM hmisphp.his_patient_transfers t 
            WHERE t.t_pat_number COLLATE utf8mb4_unicode_ci = p.pat_number
        )";


                                    $stmt = $mysqli->prepare($ret);
                                    $stmt->execute();
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
                                            <td class="border border-gray-200 px-4 py-2 text-black hidden sm:table-cell"><?php
                                                $colors = ['OutPatient' => 'green', 'InPatient' => 'blue', 'Waiting' => 'yellow'];
                                                $color = $colors[$row->pat_type] ?? 'gray';
                                                ?>
                                                <span class="px-2 py-1 text-xs font-semibold rounded-full bg-<?php echo $color; ?>-100 text-<?php echo $color; ?>-800">
                                                <?php echo $row->pat_type; ?></td>
                                            <td class="border border-gray-200 px-4 py-2 text-black hidden sm:table-cell">
                                                <a href="his_doc_transfer_single_patient.php?pat_number=<?php echo $row->pat_number; ?>"
                                                   class="bg-blue-500 text-white px-3 py-1 rounded text-sm inline-block hover:bg-blue-600 transition-colors">
                                                    Discharge
                                                </a>
                                            </td>
                                        </tr>
                                        </tbody>
                                        <?php
                                        $cnt = $cnt + 1;
                                    }
                                    ?>

                                    <!-- Rest of the code remains the same -->
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
                            <h4 class="text-lg font-semibold mb-4 text-black">Transferred Patients/
                                Discharged </h4>
                            <div class="mb-4">
                                <div class="flex flex-wrap -mx-2">
                                    <div class="w-full px-2 text-center sm:text-left flex flex-col sm:flex-row items-center gap-2">
                                        <div class="hidden">
                                            <select id="demo-foo-filter-status"
                                                    class="border border-gray-300 rounded-md px-3 py-1 text-sm text-black">
                                                <option value="">Show all</option>
                                                <option value="Discharged">Discharged</option>
                                                <option value="Outpatients">OutPatients</option>
                                                <option value="Inpatients">InPatients</option>
                                            </select>
                                        </div>
                                        <div>
                                            <label for="demo-foo-search"></label>
                                            <input id="searchInput"
                                                   type="text"
                                                   placeholder="Search"
                                                   class="border border-gray-300 rounded-md px-3 py-1 text-sm text-black"
                                                   autocomplete="on">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <hr class="my-4 border-gray-200">

                            <div class="overflow-x-auto">
                                <!-- Table with Pagination -->
                                <div class="bg-white rounded-lg shadow overflow-hidden">
                                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                                        <div class="max-h-[500px] overflow-y-auto"> <!-- Adjust max-height as needed -->
                                            <table id="patientTable"
                                                   class="w-full border-collapse border border-gray-200">
                                                <thead class="sticky top-0 bg-gray-100 z-10"> <!-- Sticky header -->
                                                <tr>
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
                                                        Referral Hospital / Home
                                                    </th>
                                                    <th class="border border-gray-200 px-4 py-2 text-black hidden sm:table-cell">
                                                        Transfer Date
                                                    </th>
                                                    <th class="border border-gray-200 px-4 py-2 text-black hidden sm:table-cell">
                                                        Action
                                                    </th>
                                                </tr>
                                                </thead>
                                                <tbody class="divide-y divide-gray-200">
                                                <?php
                                                $ret = "SELECT * FROM hmisphp.his_patient_transfers";
                                                $stmt = $mysqli->prepare($ret);
                                                $stmt->execute();
                                                $res = $stmt->get_result();
                                                $cnt = 1;
                                                while ($row = $res->fetch_object()) {
                                                    ?>
                                                    <tr class="hover:bg-gray-50">
                                                        <td class="border border-gray-200 px-4 py-2 text-black"><?php echo $cnt; ?></td>
                                                        <td class="border border-gray-200 px-4 py-2 text-black"><?php echo $row->t_pat_name; ?></td>
                                                        <td class="border border-gray-200 px-4 py-2 text-black hidden sm:table-cell"><?php echo $row->t_pat_number; ?></td>
                                                        <td class="border border-gray-200 px-4 py-2 text-black hidden sm:table-cell"><?php echo $row->t_status; ?></td>
                                                        <td class="border border-gray-200 px-4 py-2 text-black hidden sm:table-cell"><?php echo $row->t_hospital; ?></td>
                                                        <td class="border border-gray-200 px-4 py-2 text-black hidden sm:table-cell"><?php echo $row->t_date; ?></td>
                                                        <td class="border border-gray-200 px-4 py-2 text-black hidden sm:table-cell">
                                                            <a href="his_doc_patient_transfer.php?delete=<?php echo $row->t_id; ?>"
                                                               class="bg-red-500 text-white px-3 py-1 rounded text-sm inline-block hover:bg-red-600 transition-colors"
                                                               onclick="return confirm('Are you sure you want to delete this record?');">
                                                                Delete
                                                            </a>

                                                        </td>

                                                    </tr>
                                                    <?php
                                                    $cnt = $cnt + 1;
                                                }
                                                ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <!-- Pagination -->
                                </div>
                            </div>
                        </div> <!-- end card-box -->
                    </div> <!-- end col -->
                </div>
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
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const searchInput = document.getElementById('searchInput');
        const table = document.getElementById('patientTable');
        const rows = table.getElementsByTagName('tr');

        searchInput.addEventListener('keyup', function () {
            const searchTerm = this.value.toLowerCase();

            for (let i = 1; i < rows.length; i++) { // Start from 1 to skip header row
                const row = rows[i];
                const cells = row.getElementsByTagName('td');
                let found = false;

                for (let j = 0; j < cells.length; j++) {
                    const cellText = cells[j].textContent.toLowerCase();
                    if (cellText.includes(searchTerm)) {
                        found = true;
                        break;
                    }
                }

                row.style.display = found ? '' : 'none';
            }
        });
    });
</script>
</body>

</html>