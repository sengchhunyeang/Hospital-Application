<!--Server side code to handle  Patient Registration-->
<?php
	session_start();
	include('assets/inc/config.php');
		if(isset($_POST['update_patient']))
		{
            //$pat_i = $_GET['pat_id'];
			$pat_fname=$_POST['pat_fname'];
			$pat_lname=$_POST['pat_lname'];
			$pat_number=$_GET['pat_number'];
            $pat_phone=$_POST['pat_phone'];
            $pat_type=$_POST['pat_type'];
            $pat_addr=$_POST['pat_addr'];
            $pat_age = $_POST['pat_age'];
            $pat_dob = $_POST['pat_dob'];
            $pat_ailment = $_POST['pat_ailment'];
            //sql to insert captured values
			$query="UPDATE  hmisphp.his_patients  SET pat_fname=?, pat_lname=?, pat_age=?, pat_dob=?,  pat_phone=?, pat_type=?, pat_addr=?, pat_ailment=? WHERE pat_number=?";
			$stmt = $mysqli->prepare($query);
			$rc=$stmt->bind_param('sssssssss', $pat_fname, $pat_lname, $pat_age, $pat_dob,  $pat_phone, $pat_type, $pat_addr, $pat_ailment, $pat_number);
			$stmt->execute();
			/*
			*Use Sweet Alerts Instead Of This Fucked Up Javascript Alerts
			*echo"<script>alert('Successfully Created Account Proceed To Log In ');</script>";
			*/ 
			//declare a varible which will be passed to alert function
			if($stmt)
			{
				$success = "Patient Details Updated";
			}
			else {
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
    <title>view patients</title>
</head>
    <!--Head-->
    <?php include('assets/inc/head.php');?>
    <body>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Topbar Start -->
            <?php include("assets/inc/nav.php");?>
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
                                            <li class="breadcrumb-item"><a href="his_admin_dashboard.php">Dashboard</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Patients</a></li>
                                            <li class="breadcrumb-item active">Manage Patients</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Update Patient Details</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 
                        <!-- Form row -->
                        <!--LETS GET DETAILS OF SINGLE PATIENT GIVEN THEIR ID-->
                        <?php
                        $pat_number = $_GET['pat_number'];
                        $ret = "SELECT * FROM hmisphp.his_patients WHERE pat_number = ?";
                        $stmt = $mysqli->prepare($ret);
                        $stmt->bind_param('i', $pat_number);
                        $stmt->execute();
                        $res = $stmt->get_result();

                        $row = $res->fetch_object();
                            {
                        ?>
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Fill all fields</h4>
                                        <!--Add Patient Form-->
                                        <form method="post">
                                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                                <!-- First Name -->
                                                <div>
                                                    <label for="pat_fname" class="block text-sm font-medium text-gray-700">First Name</label>
                                                    <input
                                                            type="text"
                                                            id="pat_fname"
                                                            name="pat_fname"
                                                            value="<?php echo $row->pat_fname; ?>"
                                                            required
                                                            placeholder="Patient's First Name"
                                                            class="mt-1 block w-full rounded-md border border-gray-300 px-3 py-2 text-sm text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                                    >
                                                </div>

                                                <!-- Last Name -->
                                                <div>
                                                    <label for="pat_lname" class="block text-sm font-medium text-gray-700">Last Name</label>
                                                    <input
                                                            type="text"
                                                            id="pat_lname"
                                                            name="pat_lname"
                                                            value="<?php echo $row->pat_lname; ?>"
                                                            required
                                                            placeholder="Patient's Last Name"
                                                            class="mt-1 block w-full rounded-md border border-gray-300 px-3 py-2 text-sm text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                                    >
                                                </div>
                                            </div>


                                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                                <!-- Date Of Birth -->
                                                <div>
                                                    <label for="pat_dob" class="block text-sm font-medium text-gray-700">Date Of Birth</label>
                                                    <input
                                                            type="text"
                                                            id="pat_dob"
                                                            name="pat_dob"
                                                            value="<?php echo $row->pat_dob; ?>"
                                                            required
                                                            placeholder="DD/MM/YYYY"
                                                            class="mt-1 block w-full rounded-md border border-gray-300 px-3 py-2 text-sm text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                                    >
                                                </div>

                                                <!-- Age -->
                                                <div>
                                                    <label for="pat_age" class="block text-sm font-medium text-gray-700">Age</label>
                                                    <input
                                                            type="text"
                                                            id="pat_age"
                                                            name="pat_age"
                                                            value="<?php echo $row->pat_age; ?>"
                                                            required
                                                            placeholder="Patient's Age"
                                                            class="mt-1 block w-full rounded-md border border-gray-300 px-3 py-2 text-sm text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                                    >
                                                </div>
                                            </div>


                                            <div class="mb-4">
                                                <label for="pat_addr" class="block text-sm font-medium text-gray-700">Address</label>
                                                <input
                                                        type="text"
                                                        id="pat_addr"
                                                        name="pat_addr"
                                                        value="<?php echo $row->pat_addr; ?>"
                                                        required
                                                        placeholder="Patient's Address"
                                                        class="mt-1 block w-full rounded-md border border-gray-300 px-3 py-2 text-sm text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                                >
                                            </div>


                                            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                                <!-- Mobile Number -->
                                                <div>
                                                    <label for="pat_phone" class="block text-sm font-medium text-gray-700">Mobile Number</label>
                                                    <input
                                                            type="text"
                                                            id="pat_phone"
                                                            name="pat_phone"
                                                            value="<?php echo $row->pat_phone; ?>"
                                                            required
                                                            placeholder="Mobile Number"
                                                            class="mt-1 block w-full rounded-md border border-gray-300 px-3 py-2 text-sm text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                                    >
                                                </div>

                                                <!-- Room Number -->
                                                <div>
                                                    <label for="pat_ailment" class="block text-sm font-medium text-gray-700">Room Number</label>
                                                    <input
                                                            type="text"
                                                            id="pat_ailment"
                                                            name="pat_ailment"
                                                            value="<?php echo $row->pat_ailment; ?>"
                                                            required
                                                            placeholder="Room Number"
                                                            class="mt-1 block w-full rounded-md border border-gray-300 px-3 py-2 text-sm text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                                    >
                                                </div>

                                                <!-- Patient Type -->
                                                <div>
                                                    <label for="pat_type" class="block text-sm font-medium text-gray-700">Patient's Type</label>
                                                    <select
                                                            id="pat_type"
                                                            name="pat_type"
                                                            required
                                                            class="mt-1 block w-full rounded-md border border-gray-300 bg-white px-3 py-2 text-sm text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                                    >
                                                        <option value=""></option>
                                                        <option>Waiting</option>
                                                        <option>InPatient</option>
                                                        <option>OutPatient</option>
                                                    </select>
                                                </div>
                                            </div>


                                            <button
                                                    type="submit"
                                                    name="update_patient"
                                                    class="mt-2 inline-flex items-center px-4 py-2 bg-yellow-500 text-white text-sm font-medium rounded-md hover:bg-yellow-600 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-offset-2 transition-colors duration-200"
                                            >
                                                Update
                                            </button>


                                        </form>
                                        <!--End Patient Form-->
                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->
                            </div> <!-- end col -->
                        </div>
                        <?php  }?>
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

        <!-- App js-->
        <script src="assets/js/app.min.js"></script>

        <!-- Loading buttons js -->
        <script src="assets/libs/ladda/spin.js"></script>
        <script src="assets/libs/ladda/ladda.js"></script>

        <!-- Buttons init js-->
        <script src="assets/js/pages/loading-btn.init.js"></script>
        
    </body>

</html>