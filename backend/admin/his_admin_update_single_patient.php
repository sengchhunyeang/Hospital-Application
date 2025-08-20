<!--Server side code to handle  Patient Registration-->
<?php
	session_start();
	include('assets/inc/config.php');
		if(isset($_POST['update_patient']))
		{
            $pat_id = $_GET['pat_id'];
			$pat_fname=$_POST['pat_fname'];
			$pat_lname=$_POST['pat_lname'];
			$pat_number=$_POST['pat_number'];
            $pat_phone=$_POST['pat_phone'];
            $pat_type=$_POST['pat_type'];
            $pat_addr=$_POST['pat_addr'];
            $pat_age = $_POST['pat_age'];
            $pat_dob = $_POST['pat_dob'];
            $pat_ailment = $_POST['pat_ailment'];
            //sql to insert captured values
			$query="UPDATE  hmisphp.his_patients  SET pat_fname=?, pat_lname=?, pat_age=?, pat_dob=?, pat_number=?, pat_phone=?, pat_type=?, pat_addr=?, pat_ailment=? WHERE pat_id = ?";
			$stmt = $mysqli->prepare($query);
			$rc=$stmt->bind_param('sssssssssi', $pat_fname, $pat_lname, $pat_age, $pat_dob, $pat_number, $pat_phone, $pat_type, $pat_addr, $pat_ailment, $pat_id);
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
                            $pat_id=$_GET['pat_id'];
                            $ret="SELECT  * FROM hmisphp.his_patients WHERE pat_id=?";
                            $stmt= $mysqli->prepare($ret) ;
                            $stmt->bind_param('i',$pat_id);
                            $stmt->execute() ;//ok
                            $res=$stmt->get_result();
                            //$cnt=1;
                            while($row=$res->fetch_object())
                            {
                        ?>
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card bg-white shadow rounded-lg p-6">
                                        <h4 class="text-xl font-semibold mb-6">Fill all fields</h4>
                                        <!--Add Patient Form-->
                                        <form method="post" class="space-y-6">

                                            <!-- First & Last Name -->
                                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                                <div>
                                                    <label for="pat_fname" class="block text-gray-700 font-medium mb-1">
                                                        First Name <span class="text-red-500">*</span>
                                                    </label>
                                                    <input type="text" required value="<?php echo $row->pat_fname;?>" name="pat_fname" id="pat_fname"
                                                           placeholder="Patient's First Name"
                                                           class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                                                </div>
                                                <div>
                                                    <label for="pat_lname" class="block text-gray-700 font-medium mb-1">
                                                        Last Name <span class="text-red-500">*</span>
                                                    </label>
                                                    <input type="text" required value="<?php echo $row->pat_lname;?>" name="pat_lname" id="pat_lname"
                                                           placeholder="Patient's Last Name"
                                                           class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                                                </div>
                                            </div>

                                            <!-- DOB & Age -->
                                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                                <div>
                                                    <label for="pat_dob" class="block text-gray-700 font-medium mb-1">
                                                        Date Of Birth <span class="text-red-500">*</span>
                                                    </label>
                                                    <input type="text" required value="<?php echo $row->pat_dob;?>" name="pat_dob" id="pat_dob"
                                                           placeholder="DD/MM/YYYY"
                                                           class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                                                </div>
                                                <div>
                                                    <label for="pat_age" class="block text-gray-700 font-medium mb-1">
                                                        Age <span class="text-red-500">*</span>
                                                    </label>
                                                    <input type="text" required value="<?php echo $row->pat_age;?>" name="pat_age" id="pat_age"
                                                           placeholder="Patient's Age"
                                                           class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                                                </div>
                                            </div>

                                            <!-- Address -->
                                            <div>
                                                <label for="pat_addr" class="block text-gray-700 font-medium mb-1">
                                                    Address <span class="text-red-500">*</span>
                                                </label>
                                                <input type="text" required value="<?php echo $row->pat_addr;?>" name="pat_addr" id="pat_addr"
                                                       placeholder="Patient's Address"
                                                       class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                                            </div>

                                            <!-- Phone, Room Number, Type -->
                                            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                                <div>
                                                    <label for="pat_phone" class="block text-gray-700 font-medium mb-1">
                                                        Mobile Number <span class="text-red-500">*</span>
                                                    </label>
                                                    <input type="text" required value="<?php echo $row->pat_phone;?>" name="pat_phone" id="pat_phone"
                                                           class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                                                </div>
                                                <div>
                                                    <label for="pat_ailment" class="block text-gray-700 font-medium mb-1">
                                                        Room Number <span class="text-red-500">*</span>
                                                    </label>
                                                    <input type="text" required value="<?php echo $row->pat_ailment;?>" name="pat_ailment" id="pat_ailment"
                                                           class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                                                </div>
                                                <div>
                                                    <label for="pat_type" class="block text-gray-700 font-medium mb-1">
                                                        Patient's Type <span class="text-red-500">*</span>
                                                    </label>
                                                    <select id="pat_type" name="pat_type" required
                                                            class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                                                        <option>Waiting</option>
                                                        <option>InPatient</option>
                                                        <option>OutPatient</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <!-- Patient Number (hidden or auto-generated) -->
                                            <div class="form-group col-md-2" style="display:none">
                                                <label for="inputZip" class="col-form-label">Patient Number</label>
                                                <input type="text" name="pat_number" value="<?php echo $row->pat_number; ?>"
                                                       class="form-control" id="inputZip" readonly>
                                            </div>


                                            <!-- Submit Button -->
                                            <div>
                                                <button type="submit" name="update_patient"
                                                        class="bg-green-500 hover:bg-green-600 text-white font-semibold px-6 py-2 rounded-md shadow-md transition">
                                                    Add Patient
                                                </button>
                                            </div>

                                        </form>
                                        <!--End Patient Form-->
                                    </div>
                                    <!-- end card-body -->
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