<?php
session_start();
include('assets/inc/config.php');
if (isset($_POST['add_patient'])) {
    $pat_fname = $_POST['pat_fname'];
    $pat_lname = $_POST['pat_lname'];
    $pat_number = $_POST['pat_number'];
    $pat_phone = $_POST['pat_phone'];
    $pat_type = $_POST['pat_type'];
    $pat_addr = $_POST['pat_addr'];
    $pat_age = $_POST['pat_age'];
    $pat_dob = $_POST['pat_dob'];
    $pat_ailment = $_POST['pat_ailment'];
    //sql to insert captured values
    $query = "insert into hmisphp.his_patients (pat_fname, pat_ailment, pat_lname, pat_age, pat_dob, pat_number, pat_phone, pat_type, pat_addr) values(?,?,?,?,?,?,?,?,?)";
    $stmt = $mysqli->prepare($query);
    $rc = $stmt->bind_param('sssssssss', $pat_fname, $pat_ailment, $pat_lname, $pat_age, $pat_dob, $pat_number, $pat_phone, $pat_type, $pat_addr);
    $stmt->execute();
    /*
    *Use Sweet Alerts Instead Of This Fucked Up Javascript Alerts
    *echo"<script>alert('Successfully Created Account Proceed To Log In ');</script>";
    */
    //declare a varible which will be passed to alert function
    if ($stmt) {
        $success = "Patient Details Added";
    } else {
        $err = "Please Try Again Or Try Later";
    }


}

?>
<!--End Server Side-->
<!--End Patient Registration-->
<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
</head>

<!--Head-->
<?php include('assets/inc/head.php'); ?>
<body style="color: black">

<!-- Begin page -->
<div id="wrapper">

    <!-- Topbar Start -->
    <?php include("assets/inc/nav.php"); ?>
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
                                    <li class="breadcrumb-item"><a href="his_doc_dashboard.php">Dashboard</a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Patients</a></li>
                                    <li class="breadcrumb-item active">Add Patient</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Add Patient Details</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->
                <!-- Form row -->
                <div class="flex flex-wrap">
                    <div class="w-full px-4">
                        <div class="bg-white rounded-lg shadow-md">
                            <div class="p-6">
                                <h4 class="text-lg font-semibold mb-4 text-black">Fill all fields</h4>
                                <!--Add Patient Form-->
                                <form method="post">
                                    <div class="flex flex-wrap -mx-2 ">
                                        <div class="w-full md:w-1/2 px-2 mb-4">
                                            <label for="inputEmail4" class="block text-sm font-medium mb-1 text-black">First
                                                Name</label>
                                            <input type="text" required name="pat_fname"
                                                   class="w-full px-3 py-2 border border-gray-300 rounded-md text-black"
                                                   id="inputEmail4" placeholder="Patient's First Name">
                                        </div>
                                        <div class="w-full md:w-1/2 px-2 mb-4">
                                            <label for="inputPassword4"
                                                   class="block text-sm font-medium mb-1 text-black">Last Name</label>
                                            <input required type="text" name="pat_lname"
                                                   class="w-full px-3 py-2 border border-gray-300 rounded-md text-black"
                                                   id="inputPassword4" placeholder="Patient's Last Name">
                                        </div>
                                    </div>

                                    <div class="flex flex-wrap -mx-2 ">
                                        <!-- Date of Birth -->
                                        <div class="w-full md:w-1/2 px-2 mb-4">
                                            <label for="pat_dob" class="block text-sm font-medium mb-1 text-black">Date
                                                Of Birth</label>
                                            <input type="date" required name="pat_dob"
                                                   class="w-full px-3 py-2 border border-gray-300 rounded-md text-black"
                                                   id="pat_dob">
                                        </div>

                                        <!-- Age -->
                                        <div class="w-full md:w-1/2 px-2 mb-4">
                                            <label for="pat_age"
                                                   class="block text-sm font-medium mb-1 text-black">Age</label>
                                            <input required type="text" name="pat_age"
                                                   class="w-full px-3 py-2 border border-gray-300 rounded-md text-black"
                                                   id="pat_age" placeholder="Patient's Age" readonly>
                                        </div>
                                    </div>

                                    <div class="mb-4">
                                        <label for="inputAddress" class="block text-sm font-medium mb-1 text-black">Address</label>
                                        <input required type="text"
                                               class="w-full px-3 py-2 border border-gray-300 rounded-md text-black"
                                               name="pat_addr" id="inputAddress" placeholder="Patient's Address">
                                    </div>

                                    <div class="flex flex-wrap -mx-2 mb-6">
                                        <div class="w-full md:w-1/3 px-2 mb-4">
                                            <label for="inputCity" class="block text-sm font-medium mb-1 text-black">Mobile
                                                Number</label>
                                            <input required type="text" name="pat_phone"
                                                   class="w-full px-3 py-2 border border-gray-300 rounded-md text-black"
                                                   id="inputCity">
                                        </div>
                                        <div class="w-full md:w-1/3 px-2 mb-4">
                                            <label for="inputCity" class="block text-sm font-medium mb-1 text-black">Room
                                                number </label>
                                            <input type="text" name="pat_ailment"
                                                   class="w-full px-3 py-2 border border-gray-300 rounded-md text-black"
                                                   id="inputCity">
                                        </div>
                                        <div class="w-full md:w-1/3 px-2 mb-4">
                                            <label for="inputState" class="block text-sm font-medium mb-1 text-black">Patient's
                                                Type</label>
                                            <select id="inputState" required name="pat_type"
                                                    class="w-full px-3 py-2 border border-gray-300 rounded-md text-black">
                                                <option>Choose</option>
                                                <option>InPatient</option>
                                                <option>OutPatient</option>
                                            </select>
                                        </div>
                                        <div class="w-full md:w-1/6 px-2 mb-4 hidden">
                                            <?php
                                            $length = 5;
                                            $patient_number = substr(str_shuffle('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ'), 1, $length);
                                            ?>
                                            <label for="inputZip" class="block text-sm font-medium mb-1 text-black">Patient
                                                Number</label>
                                            <input type="text" name="pat_number" value="<?php echo $patient_number; ?>"
                                                   class="w-full px-3 py-2 border border-gray-300 rounded-md text-black"
                                                   id="inputZip">
                                        </div>
                                    </div>

                                    <button type="submit" name="add_patient"
                                            class="px-4 py-2 bg-blue-700 text-white rounded-md hover:bg-gray-700 transition-colors">
                                        Add Patient
                                    </button>
                                </form>
                                <!--End Patient Form-->
                            </div>
                        </div>
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

<!-- App js-->
<script src="assets/js/app.min.js"></script>

<!-- Loading buttons js -->
<script src="assets/libs/ladda/spin.js"></script>
<script src="assets/libs/ladda/ladda.js"></script>

<!-- Buttons init js-->
<script src="assets/js/pages/loading-btn.init.js"></script>
<script>
    document.getElementById("pat_dob").addEventListener("change", function () {
        const dob = new Date(this.value);
        const today = new Date();
        let age = today.getFullYear() - dob.getFullYear();
        const m = today.getMonth() - dob.getMonth();

        // Adjust if birthday hasn't occurred yet this year
        if (m < 0 || (m === 0 && today.getDate() < dob.getDate())) {
            age--;
        }

        // Show age in the input field
        document.getElementById("pat_age").value = age;
    });

</script>
<!-- In your <head> -->


</body>

</html>