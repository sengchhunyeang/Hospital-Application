<div class="left-side-menu fixed left-0 top-0 bottom-0 w-16 md:w-64 bg-white shadow-md z-10 transition-all duration-300">
    <div class="h-full overflow-y-auto">
        <!-- Sidemenu -->
        <div class="px-2 md:px-4 py-6">
            <ul class="space-y-2">
                <li class="px-2 py-2 text-xs font-semibold text-gray-500 uppercase tracking-wider hidden md:block">
                    Navigation
                </li>

                <!-- Dashboard -->
                <li>
                    <a href="his_admin_dashboard.php"
                       class="flex items-center justify-center md:justify-start px-2 md:px-3 py-2 rounded-lg transition-colors hover:bg-blue-50 hover:text-blue-600 <?php echo basename($_SERVER['PHP_SELF']) == 'his_doc_dashboard.php' ? 'bg-blue-50 text-blue-600' : 'text-gray-700' ?>"
                       title="Dashboard">
                        <svg class="w-5 h-5 <?php echo basename($_SERVER['PHP_SELF']) == 'his_doc_dashboard.php' ? 'text-blue-500' : 'text-gray-500' ?>"
                             fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                        </svg>
                        <span class="ml-3 hidden md:block">Dashboard</span>
                    </a>
                </li>

                <!-- Patients -->
                <li>
                    <?php
                    $patientsActive = in_array(basename($_SERVER['PHP_SELF']), ['his_admin_register_patient.php', 'his_admin_view_patients.php', 'his_admin_manage_patient.php', 'his_admin_discharge_patient.php', 'his_admin_patient_transfer.php']);
                    ?>
                    <button type="button"
                            class="flex items-center justify-between w-full px-2 md:px-3 py-2 rounded-lg transition-colors
                   hover:bg-blue-50 hover:text-blue-600
                   <?php echo $patientsActive ? 'bg-blue-50 text-blue-600' : 'text-gray-700' ?>"
                            aria-expanded="<?php echo $patientsActive ? 'true' : 'false' ?>"
                            title="Patients">
                        <div class="flex items-center">
                            <svg class="w-5 h-5 <?php echo $patientsActive ? 'text-blue-500' : 'text-gray-500' ?>"
                                 fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                      d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z"
                                      clip-rule="evenodd"></path>
                            </svg>
                            <span class="ml-3 hidden md:block">Patients</span>
                        </div>
                        <svg class="w-4 h-4 <?php echo $patientsActive ? 'text-blue-500 rotate-180' : 'text-gray-500' ?> transform transition-transform hidden md:block"
                             fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>

                    <ul class="mt-1 pl-0 md:pl-8 space-y-1 <?php echo $patientsActive ? '' : 'hidden' ?>"
                        aria-hidden="<?php echo $patientsActive ? 'false' : 'true' ?>">
                        <?php
                        $patientsSubmenu = ['his_admin_register_patient.php' => 'Register Patient', 'his_admin_view_patients.php' => 'View Patients', 'his_admin_manage_patient.php' => 'Manage Patients', 'his_admin_patient_transfer.php' => 'Patient Transfers'];
                        foreach ($patientsSubmenu as $file => $label):
                            $active = basename($_SERVER['PHP_SELF']) == $file ? 'bg-blue-50 text-blue-600' : 'text-gray-600';
                            ?>
                            <li class="<?php echo $label == 'Patient Transfers' ? 'border-t border-gray-200 my-1' : ''; ?>">
                                <a href="<?php echo $file; ?>"
                                   class="flex items-center justify-center md:justify-start px-2 md:px-3 py-2 rounded-lg transition-colors
                      hover:bg-blue-50 hover:text-blue-600 <?php echo $active ?>"
                                   title="<?php echo $label; ?>">
                                    <svg class="w-4 h-4 md:hidden" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"/>
                                    </svg>
                                    <span class="hidden md:block"><?php echo $label; ?></span>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </li>

                <!-- Pharmacy -->
                <li>
                    <?php
                    $pharmacyActive = in_array(basename($_SERVER['PHP_SELF']), ['his_admin_add_pharm_cat.php', 'his_admin_view_pharm_cat.php', 'his_admin_manage_pharm_cat.php', 'his_admin_add_pharmaceuticals.php', 'his_admin_view_pharmaceuticals.php', 'his_admin_manage_pharmaceuticals.php', 'his_admin_add_presc.php', 'his_admin_view_presc.php', 'his_admin_manage_presc.php']);
                    ?>
                    <button type="button"
                            class="flex items-center justify-center md:justify-between w-full px-2 md:px-3 py-2 rounded-lg transition-colors hover:bg-blue-50 hover:text-blue-600 <?php echo $pharmacyActive ? 'bg-blue-50 text-blue-600' : 'text-gray-700' ?>"
                            aria-expanded="<?php echo $pharmacyActive ? 'true' : 'false' ?>"
                            title="Pharmacy">
                        <div class="flex items-center">
                            <!-- Pill Icon -->
                            <svg class="w-5 h-5 <?php echo $pharmacyActive ? 'text-blue-500' : 'text-gray-500' ?>"
                                 fill="currentColor" viewBox="0 0 24 24">
                                <path d="M19.79 4.21a5.5 5.5 0 00-7.78 0l-8.5 8.5a5.5 5.5 0 107.78 7.78l8.5-8.5a5.5 5.5 0 000-7.78zM7.5 20a3.5 3.5 0 01-2.47-5.97l4.24-4.24 4.95 4.95-4.24 4.24A3.48 3.48 0 017.5 20z"/>
                            </svg>
                            <span class="ml-3 hidden md:block">Pharmacy</span>
                        </div>
                        <!-- Dropdown arrow -->
                        <svg class="w-4 h-4 <?php echo $pharmacyActive ? 'text-blue-500 rotate-180' : 'text-gray-500' ?> transform transition-transform hidden md:block"
                             fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <ul class="mt-1 space-y-1 pl-0 md:pl-8 <?php echo $pharmacyActive ? '' : 'hidden' ?>"
                        aria-hidden="<?php echo $pharmacyActive ? 'false' : 'true' ?>">

                        <!-- Pharm Category -->
                        <li>
                            <a href="his_admin_add_pharm_cat.php"
                               class="flex items-center px-2 md:px-3 py-2 rounded-lg transition-colors
                      hover:bg-blue-50 hover:text-blue-600
                      <?php echo basename($_SERVER['PHP_SELF']) == 'his_admin_add_pharm_cat.php' ? 'bg-blue-50 text-blue-600' : 'text-gray-600' ?>">
                                <span>Add Pharm Category</span>
                            </a>
                        </li>
                        <li>
                            <a href="his_admin_view_pharm_cat.php"
                               class="flex items-center px-2 md:px-3 py-2 rounded-lg transition-colors
                      hover:bg-blue-50 hover:text-blue-600
                      <?php echo basename($_SERVER['PHP_SELF']) == 'his_admin_view_pharm_cat.php' ? 'bg-blue-50 text-blue-600' : 'text-gray-600' ?>">
                                <span>View Pharm Category</span>
                            </a>
                        </li>
                        <li>
                            <a href="his_admin_manage_pharm_cat.php"
                               class="flex items-center px-2 md:px-3 py-2 rounded-lg transition-colors
                      hover:bg-blue-50 hover:text-blue-600
                      <?php echo basename($_SERVER['PHP_SELF']) == 'his_admin_manage_pharm_cat.php' ? 'bg-blue-50 text-blue-600' : 'text-gray-600' ?>">
                                <span>Manage Pharm Category</span>
                            </a>
                        </li>

                        <li class="border-t border-gray-200 my-1"></li>

                        <!-- Pharmaceuticals -->
                        <li>
                            <a href="his_admin_add_pharmaceuticals.php"
                               class="flex items-center px-2 md:px-3 py-2 rounded-lg transition-colors
                      hover:bg-blue-50 hover:text-blue-600
                      <?php echo basename($_SERVER['PHP_SELF']) == 'his_admin_add_pharmaceuticals.php' ? 'bg-blue-50 text-blue-600' : 'text-gray-600' ?>">
                                <span>Add Pharmaceuticals</span>
                            </a>
                        </li>
                        <li>
                            <a href="his_admin_view_pharmaceuticals.php"
                               class="flex items-center px-2 md:px-3 py-2 rounded-lg transition-colors
                      hover:bg-blue-50 hover:text-blue-600
                      <?php echo basename($_SERVER['PHP_SELF']) == 'his_admin_view_pharmaceuticals.php' ? 'bg-blue-50 text-blue-600' : 'text-gray-600' ?>">
                                <span>View Pharmaceuticals</span>
                            </a>
                        </li>
                        <li>
                            <a href="his_admin_manage_pharmaceuticals.php"
                               class="flex items-center px-2 md:px-3 py-2 rounded-lg transition-colors
                      hover:bg-blue-50 hover:text-blue-600
                      <?php echo basename($_SERVER['PHP_SELF']) == 'his_admin_manage_pharmaceuticals.php' ? 'bg-blue-50 text-blue-600' : 'text-gray-600' ?>">
                                <span>Manage Pharmaceuticals</span>
                            </a>
                        </li>

                        <li class="border-t border-gray-200 my-1"></li>

                        <!-- Prescriptions -->
                        <li>
                            <a href="his_admin_add_presc.php"
                               class="flex items-center px-2 md:px-3 py-2 rounded-lg transition-colors
                      hover:bg-blue-50 hover:text-blue-600
                      <?php echo basename($_SERVER['PHP_SELF']) == 'his_admin_add_presc.php' ? 'bg-blue-50 text-blue-600' : 'text-gray-600' ?>">
                                <span>Add Prescriptions</span>
                            </a>
                        </li>
                        <li>
                            <a href="his_admin_view_presc.php"
                               class="flex items-center px-2 md:px-3 py-2 rounded-lg transition-colors
                      hover:bg-blue-50 hover:text-blue-600
                      <?php echo basename($_SERVER['PHP_SELF']) == 'his_admin_view_presc.php' ? 'bg-blue-50 text-blue-600' : 'text-gray-600' ?>">
                                <span>View Prescriptions</span>
                            </a>
                        </li>
                        <li>
                            <a href="his_admin_manage_presc.php"
                               class="flex items-center px-2 md:px-3 py-2 rounded-lg transition-colors
                      hover:bg-blue-50 hover:text-blue-600
                      <?php echo basename($_SERVER['PHP_SELF']) == 'his_admin_manage_presc.php' ? 'bg-blue-50 text-blue-600' : 'text-gray-600' ?>">
                                <span>Manage Prescriptions</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <!--            Employee-->
                <li>
                    <?php
                    $employeeActive = in_array(basename($_SERVER['PHP_SELF']), ['his_admin_add_employee.php', 'his_admin_view_employee.php', 'his_admin_manage_employee.php', 'his_admin_assaign_dept.php', 'his_admin_transfer_employee.php']);
                    ?>
                    <button type="button"
                            class="flex items-center justify-between w-full px-2 md:px-3 py-2 rounded-lg transition-colors
                   hover:bg-blue-50 hover:text-blue-600
                   <?php echo $employeeActive ? 'bg-blue-50 text-blue-600' : 'text-gray-700' ?>"
                            aria-expanded="<?php echo $employeeActive ? 'true' : 'false' ?>"
                            title="Employee">
                        <div class="flex items-center">
                            <svg class="w-5 h-5 <?php echo $employeeActive ? 'text-blue-500' : 'text-gray-500' ?>"
                                 fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                      d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z"
                                      clip-rule="evenodd"></path>
                            </svg>
                            <span class="ml-3 hidden md:block">Employee</span>
                        </div>
                        <svg class="w-4 h-4 <?php echo $employeeActive ? 'text-blue-500 rotate-180' : 'text-gray-500' ?> transform transition-transform hidden md:block"
                             fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>

                    <ul class="mt-1 pl-0 md:pl-8 space-y-1 <?php echo $employeeActive ? '' : 'hidden' ?>"
                        aria-hidden="<?php echo $employeeActive ? 'false' : 'true' ?>">
                        <?php
                        $employeeSubmenu = ['his_admin_add_employee.php' => 'Add Employee', 'his_admin_view_employee.php' => 'View Employee', 'his_admin_manage_employee.php' => 'Manage Employee', 'his_admin_assaign_dept.php' => 'Assign Department', 'his_admin_transfer_employee.php' => 'Employee Transfers'];
                        foreach ($employeeSubmenu as $file => $label):
                            $active = basename($_SERVER['PHP_SELF']) == $file ? 'bg-blue-50 text-blue-600' : 'text-gray-600';
                            ?>
                            <li class="<?php echo $label == 'Employee Transfers' ? 'border-t border-gray-200 my-1' : ''; ?>">
                                <a href="<?php echo $file; ?>"
                                   class="flex items-center justify-center md:justify-start px-2 md:px-3 py-2 rounded-lg transition-colors
                      hover:bg-blue-50 hover:text-blue-600 <?php echo $active ?>"
                                   title="<?php echo $label; ?>">
                                    <svg class="w-4 h-4 md:hidden" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"/>
                                    </svg>
                                    <span class="hidden md:block"><?php echo $label; ?></span>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </li>



                <li>
                    <?php
                    $accountingActive = in_array(basename($_SERVER['PHP_SELF']), ['his_admin_add_acc.payable.php', 'his_admin_manage_acc_payable.php', 'his_admin_add_acc_receivable.php', 'his_admin_manage_acc_receivable.php']);
                    ?>
                    <button type="button"
                            class="flex items-center justify-center md:justify-between w-full px-2 md:px-3 py-2 rounded-lg transition-colors
                   hover:bg-blue-50 hover:text-blue-600
                   <?php echo $accountingActive ? 'bg-blue-50 text-blue-600' : 'text-gray-700' ?>"
                            aria-expanded="<?php echo $accountingActive ? 'true' : 'false' ?>"
                            title="Accounting">
                        <div class="flex items-center">
                            <!-- Cash Multiple Icon -->
                            <svg class="w-5 h-5 <?php echo $accountingActive ? 'text-blue-500' : 'text-gray-500' ?>"
                                 fill="currentColor" viewBox="0 0 24 24">
                                <path d="M21 7H3a1 1 0 00-1 1v9a2 2 0 002 2h16a2 2 0 002-2V8a1 1 0 00-1-1zM3 6a2 2 0 012-2h14a2 2 0 012 2v1H3V6z"/>
                            </svg>
                            <span class="ml-3 hidden md:block">Accounting</span>
                        </div>
                        <!-- Dropdown arrow -->
                        <svg class="w-4 h-4 <?php echo $accountingActive ? 'text-blue-500 rotate-180' : 'text-gray-500' ?> transform transition-transform hidden md:block"
                             fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>

                    <ul class="mt-1 space-y-1 pl-0 md:pl-8 <?php echo $accountingActive ? '' : 'hidden' ?>"
                        aria-hidden="<?php echo $accountingActive ? 'false' : 'true' ?>">

                        <!-- Accounts Payable -->
                        <li>
                            <a href="his_admin_add_acc.payable.php"
                               class="flex items-center px-2 md:px-3 py-2 rounded-lg transition-colors
                      hover:bg-blue-50 hover:text-blue-600
                      <?php echo basename($_SERVER['PHP_SELF']) == 'his_admin_add_acc.payable.php' ? 'bg-blue-50 text-blue-600' : 'text-gray-600' ?>">
                                <span>Add Acc. Payable</span>
                            </a>
                        </li>
                        <li>
                            <a href="his_admin_manage_acc_payable.php"
                               class="flex items-center px-2 md:px-3 py-2 rounded-lg transition-colors
                      hover:bg-blue-50 hover:text-blue-600
                      <?php echo basename($_SERVER['PHP_SELF']) == 'his_admin_manage_acc_payable.php' ? 'bg-blue-50 text-blue-600' : 'text-gray-600' ?>">
                                <span>Manage Acc. Payable</span>
                            </a>
                        </li>

                        <li class="border-t border-gray-200 my-1"></li>

                        <!-- Accounts Receivable -->
                        <li>
                            <a href="his_admin_add_acc_receivable.php"
                               class="flex items-center px-2 md:px-3 py-2 rounded-lg transition-colors
                      hover:bg-blue-50 hover:text-blue-600
                      <?php echo basename($_SERVER['PHP_SELF']) == 'his_admin_add_acc_receivable.php' ? 'bg-blue-50 text-blue-600' : 'text-gray-600' ?>">
                                <span>Add Acc. Receivable</span>
                            </a>
                        </li>
                        <li>
                            <a href="his_admin_manage_acc_receivable.php"
                               class="flex items-center px-2 md:px-3 py-2 rounded-lg transition-colors
                      hover:bg-blue-50 hover:text-blue-600
                      <?php echo basename($_SERVER['PHP_SELF']) == 'his_admin_manage_acc_receivable.php' ? 'bg-blue-50 text-blue-600' : 'text-gray-600' ?>">
                                <span>Manage Acc. Receivable</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Laboratory -->
                <li>
                    <?php
                    $labActive = in_array(basename($_SERVER['PHP_SELF']), ['his_doc_patient_lab_test.php', 'his_doc_patient_lab_result.php', 'his_doc_patient_lab_vitals.php', 'his_doc_lab_report.php']);
                    ?>
                    <button type="button"
                            class="flex items-center justify-center md:justify-between w-full px-2 md:px-3 py-2 rounded-lg transition-colors hover:bg-blue-50 hover:text-blue-600 <?php echo $labActive ? 'bg-blue-50 text-blue-600' : 'text-gray-700' ?>"
                            aria-expanded="<?php echo $labActive ? 'true' : 'false' ?>"
                            title="Laboratory">
                        <div class="flex items-center">
                            <svg class="w-5 h-5 <?php echo $labActive ? 'text-blue-500' : 'text-gray-500' ?>"
                                 fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                      d="M11.17 3a1 1 0 01.98.6l1.85 3.8a1 1 0 01-.12 1.07l-4.5 5.9a1 1 0 01-1.51.1l-2.1-2.1a1 1 0 01.1-1.51l5.9-4.5a1 1 0 011.07-.12l3.8 1.85a1 1 0 01.6.98v6.34a1 1 0 01-1 1H4a1 1 0 01-1-1V4a1 1 0 011-1h7.17z"
                                      clip-rule="evenodd"></path>
                            </svg>
                            <span class="ml-3 hidden md:block">Laboratory</span>
                        </div>
                        <svg class="w-4 h-4 <?php echo $labActive ? 'text-blue-500 rotate-180' : 'text-gray-500' ?> transform transition-transform hidden md:block"
                             fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <ul class="mt-1 pl-0 md:pl-8 space-y-1 text-xs <?php echo $labActive ? '' : 'hidden' ?>"
                        aria-hidden="<?php echo $labActive ? 'false' : 'true' ?>">
                        <li>
                            <a href="his_admin_patient_lab_test.php"
                               class="flex items-center justify-center md:justify-start px-2 md:px-3 py-2 rounded-lg transition-colors text-gray-600 hover:bg-blue-50 hover:text-blue-600 <?php echo basename($_SERVER['PHP_SELF']) == 'his_doc_patient_lab_test.php' ? 'bg-blue-50 text-blue-600' : '' ?>"
                               title="Patient Lab Tests">
                                <svg class="w-4 h-4 md:hidden" fill="currentColor" viewBox="0 0 20 20"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                          d="M11.17 3a1 1 0 01.98.6l1.85 3.8a1 1 0 01-.12 1.07l-4.5 5.9a1 1 0 01-1.51.1l-2.1-2.1a1 1 0 01.1-1.51l5.9-4.5a1 1 0 011.07-.12l3.8 1.85a1 1 0 01.6.98v6.34a1 1 0 01-1 1H4a1 1 0 01-1-1V4a1 1 0 011-1h7.17z"
                                          clip-rule="evenodd"></path>
                                </svg>
                                <span class="hidden md:block">Patient Lab Tests</span>
                            </a>
                        </li>
                        <li>
                            <a href="his_admin_patient_lab_result.php"
                               class="flex items-center justify-center md:justify-start px-2 md:px-3 py-2 rounded-lg transition-colors text-gray-600 hover:bg-blue-50 hover:text-blue-600 <?php echo basename($_SERVER['PHP_SELF']) == 'his_doc_patient_lab_result.php' ? 'bg-blue-50 text-blue-600' : '' ?>"
                               title="Patient Lab Results">
                                <svg class="w-4 h-4 md:hidden" fill="currentColor" viewBox="0 0 20 20"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                          d="M3 3a1 1 0 000 2v8a2 2 0 002 2h2.586l-1.293 1.293a1 1 0 101.414 1.414L10 15.414l2.293 2.293a1 1 0 001.414-1.414L12.414 15H15a2 2 0 002-2V5a1 1 0 100-2H3zm11.707 4.707a1 1 0 00-1.414-1.414L10 9.586 8.707 8.293a1 1 0 00-1.414 0l-2 2a1 1 0 101.414 1.414L8 10.414l1.293 1.293a1 1 0 001.414 0l4-4z"
                                          clip-rule="evenodd"></path>
                                </svg>
                                <span class="hidden md:block">Patient Lab Results</span>
                            </a>
                        </li>
                        <li>
                            <a href="his_admin_patient_lab_vitals.php"
                               class="flex items-center justify-center md:justify-start px-2 md:px-3 py-2 rounded-lg transition-colors text-gray-600 hover:bg-blue-50 hover:text-blue-600 <?php echo basename($_SERVER['PHP_SELF']) == 'his_doc_patient_lab_vitals.php' ? 'bg-blue-50 text-blue-600' : '' ?>"
                               title="Patient Vitals">
                                <svg class="w-4 h-4 md:hidden" fill="currentColor" viewBox="0 0 20 20"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                          d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"
                                          clip-rule="evenodd"></path>
                                </svg>
                                <span class="hidden md:block">Patient Vitals</span>
                            </a>
                        </li>
                        <li>
                            <a href="his_admin_lab_report.php"
                               class="flex items-center justify-center md:justify-start px-2 md:px-3 py-2 rounded-lg transition-colors text-gray-600 hover:bg-blue-50 hover:text-blue-600 <?php echo basename($_SERVER['PHP_SELF']) == 'his_doc_lab_report.php' ? 'bg-blue-50 text-blue-600' : '' ?>"
                               title="Lab Reports">
                                <svg class="w-4 h-4 md:hidden" fill="currentColor" viewBox="0 0 20 20"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                          d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V7.414A2 2 0 0015.414 6L12 2.586A2 2 0 0010.586 2H6zm2 10a1 1 0 10-2 0v3a1 1 0 102 0v-3zm2-3a1 1 0 011 1v5a1 1 0 11-2 0v-5a1 1 0 011-1zm4-1a1 1 0 10-2 0v7a1 1 0 102 0V8z"
                                          clip-rule="evenodd"></path>
                                </svg>
                                <span class="hidden md:block">Lab Reports</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Inventory -->
                <li>
                    <?php
                    $inventoryActive = in_array(basename($_SERVER['PHP_SELF']), ['his_admin_pharm_inventory.php', 'his_admin_equipments_inventory.php']);
                    ?>
                    <button type="button"
                            class="flex items-center justify-center md:justify-between w-full px-2 md:px-3 py-2 rounded-lg transition-colors
                   hover:bg-blue-50 hover:text-blue-600
                   <?php echo $inventoryActive ? 'bg-blue-50 text-blue-600' : 'text-gray-700' ?>"
                            aria-expanded="<?php echo $inventoryActive ? 'true' : 'false' ?>"
                            title="Inventory">
                        <div class="flex items-center">
                            <!-- Inventory Icon -->
                            <svg class="w-5 h-5 <?php echo $inventoryActive ? 'text-blue-500' : 'text-gray-500' ?>"
                                 fill="currentColor" viewBox="0 0 24 24">
                                <path d="M3 7a1 1 0 011-1h16a1 1 0 011 1v11a2 2 0 01-2 2H5a2 2 0 01-2-2V7z"/>
                                <path d="M3 7V5a2 2 0 012-2h14a2 2 0 012 2v2H3z"/>
                            </svg>
                            <span class="ml-3 hidden md:block">Inventory</span>
                        </div>
                        <!-- Dropdown arrow -->
                        <svg class="w-4 h-4 <?php echo $inventoryActive ? 'text-blue-500 rotate-180' : 'text-gray-500' ?> transform transition-transform hidden md:block"
                             fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>

                    <ul class="mt-1 space-y-1 pl-0 md:pl-8 <?php echo $inventoryActive ? '' : 'hidden' ?>"
                        aria-hidden="<?php echo $inventoryActive ? 'false' : 'true' ?>">

                        <li>
                            <a href="his_admin_pharm_inventory.php"
                               class="flex items-center px-2 md:px-3 py-2 rounded-lg transition-colors
                      hover:bg-blue-50 hover:text-blue-600
                      <?php echo basename($_SERVER['PHP_SELF']) == 'his_admin_pharm_inventory.php' ? 'bg-blue-50 text-blue-600' : 'text-gray-600' ?>">
                                <span>Pharmaceuticals</span>
                            </a>
                        </li>
                        <li>
                            <a href="his_admin_equipments_inventory.php"
                               class="flex items-center px-2 md:px-3 py-2 rounded-lg transition-colors
                      hover:bg-blue-50 hover:text-blue-600
                      <?php echo basename($_SERVER['PHP_SELF']) == 'his_admin_equipments_inventory.php' ? 'bg-blue-50 text-blue-600' : 'text-gray-600' ?>">
                                <span>Assets</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <!--Reporting-->
                <li>
                    <?php
                    $reportingActive = in_array(basename($_SERVER['PHP_SELF']), ['his_admin_inpatient_records.php', 'his_admin_outpatient_records.php', 'his_admin_employee_records.php', 'his_admin_pharmaceutical_records.php', 'his_admin_accounting_records.php', 'his_admin_medical_records.php']);
                    ?>
                    <button type="button"
                            class="flex items-center justify-center md:justify-between w-full px-2 md:px-3 py-2 rounded-lg transition-colors
                   hover:bg-blue-50 hover:text-blue-600
                   <?php echo $reportingActive ? 'bg-blue-50 text-blue-600' : 'text-gray-700' ?>"
                            aria-expanded="<?php echo $reportingActive ? 'true' : 'false' ?>"
                            title="Reporting">
                        <div class="flex items-center">
                            <!-- Reporting Icon -->
                            <svg class="w-5 h-5 <?php echo $reportingActive ? 'text-blue-500' : 'text-gray-500' ?>"
                                 fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path d="M9 17v-6h2v6H9zm4 0V7h2v10h-2zm-8 0v-2h2v2H5zm12 0v-8h2v8h-2zM3 3h18v2H3V3z"/>
                            </svg>
                            <span class="ml-3 hidden md:block">Reporting</span>
                        </div>
                        <!-- Dropdown arrow -->
                        <svg class="w-4 h-4 <?php echo $reportingActive ? 'text-blue-500 rotate-180' : 'text-gray-500' ?> transform transition-transform hidden md:block"
                             fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>

                    <ul class="mt-1 space-y-1 pl-0 md:pl-8 <?php echo $reportingActive ? '' : 'hidden' ?>"
                        aria-hidden="<?php echo $reportingActive ? 'false' : 'true' ?>">

                        <li>
                            <a href="his_admin_inpatient_records.php"
                               class="flex items-center px-2 md:px-3 py-2 rounded-lg transition-colors
                      hover:bg-blue-50 hover:text-blue-600
                      <?php echo basename($_SERVER['PHP_SELF']) == 'his_admin_inpatient_records.php' ? 'bg-blue-50 text-blue-600' : 'text-gray-600' ?>">
                                <span>InPatient Records</span>
                            </a>
                        </li>
                        <li>
                            <a href="his_admin_outpatient_records.php"
                               class="flex items-center px-2 md:px-3 py-2 rounded-lg transition-colors
                      hover:bg-blue-50 hover:text-blue-600
                      <?php echo basename($_SERVER['PHP_SELF']) == 'his_admin_outpatient_records.php' ? 'bg-blue-50 text-blue-600' : 'text-gray-600' ?>">
                                <span>OutPatient Records</span>
                            </a>
                        </li>
                        <li>
                            <a href="his_admin_employee_records.php"
                               class="flex items-center px-2 md:px-3 py-2 rounded-lg transition-colors
                      hover:bg-blue-50 hover:text-blue-600
                      <?php echo basename($_SERVER['PHP_SELF']) == 'his_admin_employee_records.php' ? 'bg-blue-50 text-blue-600' : 'text-gray-600' ?>">
                                <span>Employee Records</span>
                            </a>
                        </li>
                        <li>
                            <a href="his_admin_pharmaceutical_records.php"
                               class="flex items-center px-2 md:px-3 py-2 rounded-lg transition-colors
                      hover:bg-blue-50 hover:text-blue-600
                      <?php echo basename($_SERVER['PHP_SELF']) == 'his_admin_pharmaceutical_records.php' ? 'bg-blue-50 text-blue-600' : 'text-gray-600' ?>">
                                <span>Pharmaceutical Records</span>
                            </a>
                        </li>
                        <li>
                            <a href="his_admin_accounting_records.php"
                               class="flex items-center px-2 md:px-3 py-2 rounded-lg transition-colors
                      hover:bg-blue-50 hover:text-blue-600
                      <?php echo basename($_SERVER['PHP_SELF']) == 'his_admin_accounting_records.php' ? 'bg-blue-50 text-blue-600' : 'text-gray-600' ?>">
                                <span>Accounting Records</span>
                            </a>
                        </li>
                        <li>
                            <a href="his_admin_medical_records.php"
                               class="flex items-center px-2 md:px-3 py-2 rounded-lg transition-colors
                      hover:bg-blue-50 hover:text-blue-600
                      <?php echo basename($_SERVER['PHP_SELF']) == 'his_admin_medical_records.php' ? 'bg-blue-50 text-blue-600' : 'text-gray-600' ?>">
                                <span>Medical Records</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <!--Medical Reporting-->
                <li>
                    <?php
                    $medicalRecordsActive = in_array(basename($_SERVER['PHP_SELF']), ['his_admin_add_medical_record.php', 'his_admin_manage_medical_record.php']);
                    ?>
                    <button type="button"
                            class="flex items-center justify-center md:justify-between w-full px-2 md:px-3 py-2 rounded-lg transition-colors
                   hover:bg-blue-50 hover:text-blue-600
                   <?php echo $medicalRecordsActive ? 'bg-blue-50 text-blue-600' : 'text-gray-700' ?>"
                            aria-expanded="<?php echo $medicalRecordsActive ? 'true' : 'false' ?>"
                            title="Medical Records">
                        <div class="flex items-center">
                            <!-- Medical Records Icon -->
                            <svg class="w-5 h-5 <?php echo $medicalRecordsActive ? 'text-blue-500' : 'text-gray-500' ?>"
                                 fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5l2 2h5a2 2 0 012 2v12a2 2 0 01-2 2z"/>
                            </svg>
                            <span class="ml-3 hidden md:block">Medical Records</span>
                        </div>
                        <!-- Dropdown arrow -->
                        <svg class="w-4 h-4 <?php echo $medicalRecordsActive ? 'text-blue-500 rotate-180' : 'text-gray-500' ?> transform transition-transform hidden md:block"
                             fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>

                    <ul class="mt-1 space-y-1 pl-0 md:pl-8 <?php echo $medicalRecordsActive ? '' : 'hidden' ?>"
                        aria-hidden="<?php echo $medicalRecordsActive ? 'false' : 'true' ?>">

                        <li>
                            <a href="his_admin_add_medical_record.php"
                               class="flex items-center px-2 md:px-3 py-2 rounded-lg transition-colors
                      hover:bg-blue-50 hover:text-blue-600
                      <?php echo basename($_SERVER['PHP_SELF']) == 'his_admin_add_medical_record.php' ? 'bg-blue-50 text-blue-600' : 'text-gray-600' ?>">
                                <span>Add Medical Record</span>
                            </a>
                        </li>
                        <li>
                            <a href="his_admin_manage_medical_record.php"
                               class="flex items-center px-2 md:px-3 py-2 rounded-lg transition-colors
                      hover:bg-blue-50 hover:text-blue-600
                      <?php echo basename($_SERVER['PHP_SELF']) == 'his_admin_manage_medical_record.php' ? 'bg-blue-50 text-blue-600' : 'text-gray-600' ?>">
                                <span>Manage Medical Records</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <!--Labo-->
                <li>
                    <?php
                    $labActive = in_array(basename($_SERVER['PHP_SELF']), ['his_admin_patient_lab_test.php', 'his_admin_patient_lab_result.php', 'his_admin_patient_lab_vitals.php', 'his_admin_employee_lab_vitals.php', 'his_admin_lab_report.php', 'his_admin_add_lab_equipment.php', 'his_admin_manage_lab_equipment.php']);
                    ?>
                    <button type="button"
                            class="flex items-center justify-center md:justify-between w-full px-2 md:px-3 py-2 rounded-lg transition-colors
                   hover:bg-blue-50 hover:text-blue-600
                   <?php echo $labActive ? 'bg-blue-50 text-blue-600' : 'text-gray-700' ?>"
                            aria-expanded="<?php echo $labActive ? 'true' : 'false' ?>"
                            title="Laboratory">
                        <div class="flex items-center">
                            <!-- Lab Icon -->
                            <svg class="w-5 h-5 <?php echo $labActive ? 'text-blue-500' : 'text-gray-500' ?>"
                                 fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M9 2v6l-2 7h10l-2-7V2M9 2h6M4 21h16"/>
                            </svg>
                            <span class="ml-3 hidden md:block">Laboratory</span>
                        </div>
                        <!-- Dropdown Arrow -->
                        <svg class="w-4 h-4 <?php echo $labActive ? 'text-blue-500 rotate-180' : 'text-gray-500' ?> transform transition-transform hidden md:block"
                             fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>

                    <ul class="mt-1 space-y-1 pl-0 md:pl-8 <?php echo $labActive ? '' : 'hidden' ?>"
                        aria-hidden="<?php echo $labActive ? 'false' : 'true' ?>">

                        <li>
                            <a href="his_admin_patient_lab_test.php"
                               class="flex items-center px-2 md:px-3 py-2 rounded-lg transition-colors
                      hover:bg-blue-50 hover:text-blue-600
                      <?php echo basename($_SERVER['PHP_SELF']) == 'his_admin_patient_lab_test.php' ? 'bg-blue-50 text-blue-600' : 'text-gray-600' ?>">
                                Patient Lab Tests
                            </a>
                        </li>
                        <li>
                            <a href="his_admin_patient_lab_result.php"
                               class="flex items-center px-2 md:px-3 py-2 rounded-lg transition-colors
                      hover:bg-blue-50 hover:text-blue-600
                      <?php echo basename($_SERVER['PHP_SELF']) == 'his_admin_patient_lab_result.php' ? 'bg-blue-50 text-blue-600' : 'text-gray-600' ?>">
                                Patient Lab Results
                            </a>
                        </li>
                        <li>
                            <a href="his_admin_patient_lab_vitals.php"
                               class="flex items-center px-2 md:px-3 py-2 rounded-lg transition-colors
                      hover:bg-blue-50 hover:text-blue-600
                      <?php echo basename($_SERVER['PHP_SELF']) == 'his_admin_patient_lab_vitals.php' ? 'bg-blue-50 text-blue-600' : 'text-gray-600' ?>">
                                Patient Vitals
                            </a>
                        </li>
                        <li>
                            <a href="his_admin_employee_lab_vitals.php"
                               class="flex items-center px-2 md:px-3 py-2 rounded-lg transition-colors
                      hover:bg-blue-50 hover:text-blue-600
                      <?php echo basename($_SERVER['PHP_SELF']) == 'his_admin_employee_lab_vitals.php' ? 'bg-blue-50 text-blue-600' : 'text-gray-600' ?>">
                                Employee Vitals
                            </a>
                        </li>
                        <li>
                            <a href="his_admin_lab_report.php"
                               class="flex items-center px-2 md:px-3 py-2 rounded-lg transition-colors
                      hover:bg-blue-50 hover:text-blue-600
                      <?php echo basename($_SERVER['PHP_SELF']) == 'his_admin_lab_report.php' ? 'bg-blue-50 text-blue-600' : 'text-gray-600' ?>">
                                Lab Reports
                            </a>
                        </li>

                        <hr class="border-gray-200 my-2">

                        <li>
                            <a href="his_admin_add_lab_equipment.php"
                               class="flex items-center px-2 md:px-3 py-2 rounded-lg transition-colors
                      hover:bg-blue-50 hover:text-blue-600
                      <?php echo basename($_SERVER['PHP_SELF']) == 'his_admin_add_lab_equipment.php' ? 'bg-blue-50 text-blue-600' : 'text-gray-600' ?>">
                                Add Lab Equipment
                            </a>
                        </li>
                        <li>
                            <a href="his_admin_manage_lab_equipment.php"
                               class="flex items-center px-2 md:px-3 py-2 rounded-lg transition-colors
                      hover:bg-blue-50 hover:text-blue-600
                      <?php echo basename($_SERVER['PHP_SELF']) == 'his_admin_manage_lab_equipment.php' ? 'bg-blue-50 text-blue-600' : 'text-gray-600' ?>">
                                Manage Lab Equipments
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- Surgical / Theatre -->
                <li>
                    <?php
                    $surgActive = in_array(basename($_SERVER['PHP_SELF']), [
                            'his_admin_add_equipment.php',
                            'his_admin_manage_equipment.php',
                            'his_admin_add_theatre_patient.php',
                            'his_admin_manage_theatre_patient.php',
                            'his_admin_surgery_records.php'
                    ]);
                    ?>
                    <button type="button"
                            class="flex items-center justify-between w-full px-2 md:px-3 py-2 rounded-lg transition-colors
                   hover:bg-blue-50 hover:text-blue-600
                   <?php echo $surgActive ? 'bg-blue-50 text-blue-600' : 'text-gray-700' ?>"
                            aria-expanded="<?php echo $surgActive ? 'true' : 'false' ?>"
                            title="Surgical / Theatre">
                        <div class="flex items-center">
                            <i class="mdi mdi-scissors-cutting <?php echo $surgActive ? 'text-blue-500' : 'text-gray-500' ?> text-lg"></i>
                            <span class="ml-3 hidden md:block">Surgical / Theatre</span>
                        </div>
                        <svg class="w-4 h-4 <?php echo $surgActive ? 'text-blue-500 rotate-180' : 'text-gray-500' ?> transform transition-transform hidden md:block"
                             fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>

                    <ul class="mt-1 space-y-1 pl-0 md:pl-8 <?php echo $surgActive ? '' : 'hidden' ?>"
                        aria-hidden="<?php echo $surgActive ? 'false' : 'true' ?>">
                        <?php
                        $surgSubmenu = [
                                'his_admin_add_equipment.php' => 'Add Equipment',
                                'his_admin_manage_equipment.php' => 'Manage Equipments',
                                'his_admin_add_theatre_patient.php' => 'Add Patient',
                                'his_admin_manage_theatre_patient.php' => 'Manage Patients',
                                'his_admin_surgery_records.php' => 'Surgery Records'
                        ];
                        foreach ($surgSubmenu as $file => $label):
                            $active = basename($_SERVER['PHP_SELF']) == $file ? 'bg-blue-50 text-blue-600' : 'text-gray-600';
                            ?>
                            <li>
                                <a href="<?php echo $file; ?>"
                                   class="flex items-center justify-center md:justify-start px-2 md:px-3 py-2 rounded-lg transition-colors
                      hover:bg-blue-50 hover:text-blue-600 <?php echo $active ?>"
                                   title="<?php echo $label; ?>">
                                    <svg class="w-4 h-4 md:hidden" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"/>
                                    </svg>
                                    <span class="hidden md:block"><?php echo $label; ?></span>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </li>


                <!-- Payrolls -->
                <li>
                    <?php
                    $payrollActive = in_array(basename($_SERVER['PHP_SELF']), [
                            'his_admin_add_payroll.php',
                            'his_admin_manage_payrolls.php',
                            'his_admin_generate_payrolls.php'
                    ]);
                    ?>
                    <button type="button"
                            class="flex items-center justify-between w-full px-2 md:px-3 py-2 rounded-lg transition-colors
                   hover:bg-blue-50 hover:text-blue-600
                   <?php echo $payrollActive ? 'bg-blue-50 text-blue-600' : 'text-gray-700' ?>"
                            aria-expanded="<?php echo $payrollActive ? 'true' : 'false' ?>"
                            title="Payrolls">
                        <div class="flex items-center">
                            <i class="mdi mdi-cash-refund <?php echo $payrollActive ? 'text-blue-500' : 'text-gray-500' ?> text-lg"></i>
                            <span class="ml-3 hidden md:block">Payrolls</span>
                        </div>
                        <svg class="w-4 h-4 <?php echo $payrollActive ? 'text-blue-500 rotate-180' : 'text-gray-500' ?> transform transition-transform hidden md:block"
                             fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>

                    <ul class="mt-1 space-y-1 pl-0 md:pl-8 <?php echo $payrollActive ? '' : 'hidden' ?>"
                        aria-hidden="<?php echo $payrollActive ? 'false' : 'true' ?>">
                        <?php
                        $payrollSubmenu = [
                                'his_admin_add_payroll.php' => 'Add Payroll',
                                'his_admin_manage_payrolls.php' => 'Manage Payrolls',
                                'his_admin_generate_payrolls.php' => 'Generate Payrolls'
                        ];
                        foreach ($payrollSubmenu as $file => $label):
                            $active = basename($_SERVER['PHP_SELF']) == $file ? 'bg-blue-50 text-blue-600' : 'text-gray-600';
                            ?>
                            <li>
                                <a href="<?php echo $file; ?>"
                                   class="flex items-center justify-center md:justify-start px-2 md:px-3 py-2 rounded-lg transition-colors
                      hover:bg-blue-50 hover:text-blue-600 <?php echo $active ?>"
                                   title="<?php echo $label; ?>">
                                    <svg class="w-4 h-4 md:hidden" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"/>
                                    </svg>
                                    <span class="hidden md:block"><?php echo $label; ?></span>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </li>


                <!-- Vendors -->
                <li>
                    <?php
                    $vendorActive = in_array(basename($_SERVER['PHP_SELF']), [
                            'his_admin_add_vendor.php',
                            'his_admin_manage_vendor.php'
                    ]);
                    ?>
                    <button type="button"
                            class="flex items-center justify-between w-full px-2 md:px-3 py-2 rounded-lg transition-colors
                   hover:bg-blue-50 hover:text-blue-600
                   <?php echo $vendorActive ? 'bg-blue-50 text-blue-600' : 'text-gray-700' ?>"
                            aria-expanded="<?php echo $vendorActive ? 'true' : 'false' ?>"
                            title="Vendors">
                        <div class="flex items-center">
                            <i class="fas fa-user-tag <?php echo $vendorActive ? 'text-blue-500' : 'text-gray-500' ?> text-lg"></i>
                            <span class="ml-3 hidden md:block">Vendors</span>
                        </div>
                        <svg class="w-4 h-4 <?php echo $vendorActive ? 'text-blue-500 rotate-180' : 'text-gray-500' ?> transform transition-transform hidden md:block"
                             fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>

                    <ul class="mt-1 space-y-1 pl-0 md:pl-8 <?php echo $vendorActive ? '' : 'hidden' ?>"
                        aria-hidden="<?php echo $vendorActive ? 'false' : 'true' ?>">
                        <?php
                        $vendorSubmenu = [
                                'his_admin_add_vendor.php' => 'Add Vendor',
                                'his_admin_manage_vendor.php' => 'Manage Vendors'
                        ];
                        foreach ($vendorSubmenu as $file => $label):
                            $active = basename($_SERVER['PHP_SELF']) == $file ? 'bg-blue-50 text-blue-600' : 'text-gray-600';
                            ?>
                            <li>
                                <a href="<?php echo $file; ?>"
                                   class="flex items-center justify-center md:justify-start px-2 md:px-3 py-2 rounded-lg transition-colors
                      hover:bg-blue-50 hover:text-blue-600 <?php echo $active ?>"
                                   title="<?php echo $label; ?>">
                                    <svg class="w-4 h-4 md:hidden" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"/>
                                    </svg>
                                    <span class="hidden md:block"><?php echo $label; ?></span>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </li>


                <!-- Password Resets -->
                <li>
                    <?php
                    $pwActive = (basename($_SERVER['PHP_SELF']) == 'his_admin_manage_password_resets.php');
                    ?>
                    <button type="button"
                            class="flex items-center justify-between w-full px-2 md:px-3 py-2 rounded-lg transition-colors
                   hover:bg-blue-50 hover:text-blue-600
                   <?php echo $pwActive ? 'bg-blue-50 text-blue-600' : 'text-gray-700' ?>"
                            aria-expanded="<?php echo $pwActive ? 'true' : 'false' ?>"
                            title="Password Resets">
                        <div class="flex items-center">
                            <i class="fas fa-lock <?php echo $pwActive ? 'text-blue-500' : 'text-gray-500' ?> text-lg"></i>
                            <span class="ml-3 hidden md:block">Password Resets</span>
                        </div>
                        <svg class="w-4 h-4 <?php echo $pwActive ? 'text-blue-500 rotate-180' : 'text-gray-500' ?> transform transition-transform hidden md:block"
                             fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>

                    <ul class="mt-1 space-y-1 pl-0 md:pl-8 <?php echo $pwActive ? '' : 'hidden' ?>"
                        aria-hidden="<?php echo $pwActive ? 'false' : 'true' ?>">
                        <?php
                        $pwSubmenu = [
                                'his_admin_manage_password_resets.php' => 'Manage'
                        ];
                        foreach ($pwSubmenu as $file => $label):
                            $active = basename($_SERVER['PHP_SELF']) == $file ? 'bg-blue-50 text-blue-600' : 'text-gray-600';
                            ?>
                            <li>
                                <a href="<?php echo $file; ?>"
                                   class="flex items-center justify-center md:justify-start px-2 md:px-3 py-2 rounded-lg transition-colors
                      hover:bg-blue-50 hover:text-blue-600 <?php echo $active ?>"
                                   title="<?php echo $label; ?>">
                                    <svg class="w-4 h-4 md:hidden" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"/>
                                    </svg>
                                    <span class="hidden md:block"><?php echo $label; ?></span>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>

<script>
    // Dropdown functionality
    document.querySelectorAll('button[aria-expanded]').forEach(button => {
        button.addEventListener('click', () => {
            const expanded = button.getAttribute('aria-expanded') === 'true';
            button.setAttribute('aria-expanded', !expanded);

            // Toggle icon rotation and color
            const icon = button.querySelector('svg:last-child');
            if (icon) {
                icon.classList.toggle('rotate-180');
                icon.classList.toggle('text-blue-500');
                icon.classList.toggle('text-gray-500');
            }

            // Toggle menu visibility
            const menu = button.nextElementSibling;
            menu.classList.toggle('hidden');

            // Toggle button background and text color
            button.classList.toggle('bg-blue-50');
            button.classList.toggle('text-blue-600');
            button.classList.toggle('text-gray-700');

            // Toggle main icon color
            const mainIcon = button.querySelector('svg:first-child');
            mainIcon.classList.toggle('text-blue-500');
            mainIcon.classList.toggle('text-gray-500');
        });
    });
</script>
<!--<div class="left-side-menu">-->
<!---->
<!--    <div class="slimscroll-menu">-->
<!---->
<!--        <!--- Sidemenu -->-->
<!--        <div id="sidebar-menu">-->
<!---->
<!--            <ul class="metismenu" id="side-menu">-->
<!---->
<!--                <li class="menu-title">Navigation</li>-->
<!---->
<!--                <li>-->
<!--                    <a href="his_admin_dashboard.php">-->
<!--                        <i class="fe-airplay"></i>-->
<!--                        <span> Dashboard </span>-->
<!--                    </a>-->
<!---->
<!--                </li>-->
<!---->
<!--                <li>-->
<!--                    <a href="javascript: void(0);">-->
<!--                        <i class="fab fa-accessible-icon "></i>-->
<!--                        <span> Patients </span>-->
<!--                        <span class="menu-arrow"></span>-->
<!--                    </a>-->
<!--                    <ul class="nav-second-level" aria-expanded="false">-->
<!--                        <li>-->
<!--                            <a href="his_admin_register_patient.php"  >Register Patient</a>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            <a href="his_admin_view_patients.php">View Patients</a>-->
<!--                        </li>-->
<!--                        <li class="text-sm">-->
<!--                            <a href="his_admin_manage_patient.php" >Manage Patients</a>-->
<!--                        </li>-->
<!--                        <hr>-->
<!--                        <li>-->
<!--                            <a href="his_admin_discharge_patient.php">Discharge Patients</a>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            <a href="his_admin_patient_transfer.php">Patient Transfers</a>-->
<!--                        </li>-->
<!--                    </ul>-->
<!--                </li>-->
<!---->
<!--                <li>-->
<!--                    <a href="javascript: void(0);">-->
<!--                        <i class="mdi mdi-doctor"></i>-->
<!--                        <span> Employees </span>-->
<!--                        <span class="menu-arrow"></span>-->
<!--                    </a>-->
<!--                    <ul class="nav-second-level" aria-expanded="false">-->
<!--                        <li>-->
<!--                            <a href="his_admin_add_employee.php">Add Employee</a>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            <a href="his_admin_view_employee.php">View Employees</a>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            <a href="his_admin_manage_employee.php">Manage Employees</a>-->
<!--                        </li>-->
<!--                        <hr>-->
<!--                        <li>-->
<!--                            <a href="his_admin_assaign_dept.php">Assign Department</a>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            <a href="his_admin_transfer_employee.php">Transfer Employee</a>-->
<!--                        </li>-->
<!--                    </ul>-->
<!--                </li>-->
<!---->
<!--                <li>-->
<!--                    <a href="javascript: void(0);">-->
<!--                        <i class="mdi mdi-pill"></i>-->
<!--                        <span> Pharmacy </span>-->
<!--                        <span class="menu-arrow"></span>-->
<!--                    </a>-->
<!--                    <ul class="nav-second-level" aria-expanded="false">-->
<!--                        <li>-->
<!--                            <a href="his_admin_add_pharm_cat.php">Add Pharm Category</a>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            <a href="his_admin_view_pharm_cat.php">View Pharm Category</a>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            <a href="his_admin_manage_pharm_cat.php">Manage Pharm Category</a>-->
<!--                        </li>-->
<!--                        <hr>-->
<!--                        <li>-->
<!--                            <a href="his_admin_add_pharmaceuticals.php">Add Pharmaceuticals</a>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            <a href="his_admin_view_pharmaceuticals.php">View Pharmaceuticals</a>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            <a href="his_admin_manage_pharmaceuticals.php">Manage Pharmaceuticals</a>-->
<!--                        </li>-->
<!--                        <hr>-->
<!--                        <li>-->
<!--                            <a href="his_admin_add_presc.php">Add Prescriptions</a>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            <a href="his_admin_view_presc.php">View Prescriptions</a>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            <a href="his_admin_manage_presc.php">Manage Prescriptions</a>-->
<!--                        </li>-->
<!--                    </ul>-->
<!--                </li>-->
<!---->
<!--                <li>-->
<!--                    <a href="javascript: void(0);">-->
<!--                        <i class="mdi mdi-cash-multiple "></i>-->
<!--                        <span> Accounting </span>-->
<!--                        <span class="menu-arrow"></span>-->
<!--                    </a>-->
<!--                    <ul class="nav-second-level" aria-expanded="false">-->
<!--                        <li>-->
<!--                            <a href="his_admin_add_acc.payable.php">Add Acc. Payable</a>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            <a href="his_admin_manage_acc_payable.php">Manage Acc. Payable</a>-->
<!--                        </li>-->
<!--                        <hr>-->
<!--                        <li>-->
<!--                            <a href="his_admin_add_acc_receivable.php">Add Acc. Receivable</a>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            <a href="his_admin_manage_acc_receivable.php">Manage Acc. Receivable</a>-->
<!--                        </li>-->
<!--                        <hr>-->
<!---->
<!---->
<!--                    </ul>-->
<!--                </li>-->
<!--                <li>-->
<!--                    <a href="javascript: void(0);">-->
<!--                        <i class=" fas fa-funnel-dollar "></i>-->
<!--                        <span> Inventory </span>-->
<!--                        <span class="menu-arrow"></span>-->
<!--                    </a>-->
<!--                    <ul class="nav-second-level" aria-expanded="false">-->
<!---->
<!--                        <li>-->
<!--                            <a href="his_admin_pharm_inventory.php">Pharmaceuticals</a>-->
<!--                        </li>-->
<!---->
<!--                        <li>-->
<!--                            <a href="his_admin_equipments_inventory.php">Assets</a>-->
<!--                        </li>-->
<!---->
<!--                    </ul>-->
<!--                </li>-->
<!---->
<!--                <li>-->
<!--                    <a href="javascript: void(0);">-->
<!--                        <i class="fe-share"></i>-->
<!--                        <span> Reporting </span>-->
<!--                        <span class="menu-arrow"></span>-->
<!--                    </a>-->
<!--                    <ul class="nav-second-level" aria-expanded="false">-->
<!--                        <li>-->
<!--                            <a href="his_admin_inpatient_records.php">InPatient Records</a>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            <a href="his_admin_outpatient_records.php">OutPatient Records</a>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            <a href="his_admin_employee_records.php">Employee Records</a>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            <a href="his_admin_pharmaceutical_records.php">Pharmaceutical Records</a>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            <a href="his_admin_accounting_records.php">Accounting Records</a>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            <a href="his_admin_medical_records.php">Medical Records</a>-->
<!--                        </li>-->
<!---->
<!--                    </ul>-->
<!--                </li>-->
<!---->
<!--                <li>-->
<!--                    <a href="javascript: void(0);">-->
<!--                        <i class="fe-file-text"></i>-->
<!--                        <span> Medical Records </span>-->
<!--                        <span class="menu-arrow"></span>-->
<!--                    </a>-->
<!--                    <ul class="nav-second-level" aria-expanded="false">-->
<!--                        <li>-->
<!--                            <a href="his_admin_add_medical_record.php">Add Medical Record</a>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            <a href="his_admin_manage_medical_record.php">Manage Medical Records</a>-->
<!--                        </li>-->
<!---->
<!--                    </ul>-->
<!--                </li>-->
<!---->
<!--                <li>-->
<!--                    <a href="javascript: void(0);">-->
<!--                        <i class="mdi mdi-flask"></i>-->
<!--                        <span> Laboratory </span>-->
<!--                        <span class="menu-arrow"></span>-->
<!--                    </a>-->
<!--                    <ul class="nav-second-level" aria-expanded="false">-->
<!--                        <li>-->
<!--                            <a href="his_admin_patient_lab_test.php">Patient Lab Tests</a>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            <a href="his_admin_patient_lab_result.php">Patient Lab Results</a>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            <a href="his_admin_patient_lab_vitals.php">Patient Vitals</a>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            <a href="his_admin_employee_lab_vitals.php">Employee Vitals</a>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            <a href="his_admin_lab_report.php">Lab Reports</a>-->
<!--                        </li>-->
<!--                        <hr>-->
<!--                        <li>-->
<!--                            <a href="his_admin_add_lab_equipment.php">Add Lab Equipment</a>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            <a href="his_admin_manage_lab_equipment.php">Manage Lab Equipments</a>-->
<!--                        </li>-->
<!--                    </ul>-->
<!--                </li>-->
<!---->
<!--                <li>-->
<!--                    <a href="javascript: void(0);">-->
<!--                        <i class="mdi mdi-scissors-cutting "></i>-->
<!--                        <span> Surgical / Theatre </span>-->
<!--                        <span class="menu-arrow"></span>-->
<!--                    </a>-->
<!--                    <ul class="nav-second-level" aria-expanded="false">-->
<!--                        <li>-->
<!--                            <a href="his_admin_add_equipment.php">Add Equipment</a>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            <a href="his_admin_manage_equipment.php">Manage Equipments</a>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            <a href="his_admin_add_theatre_patient.php">Add Patient</a>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            <a href="his_admin_manage_theatre_patient.php">Manage Patients</a>-->
<!--                        </li>-->
<!---->
<!--                        <li>-->
<!--                            <a href="his_admin_surgery_records.php">Surgery Records</a>-->
<!--                        </li>-->
<!--                    </ul>-->
<!--                </li>-->
<!---->
<!--                <li>-->
<!--                    <a href="javascript: void(0);">-->
<!--                        <i class="mdi mdi-cash-refund "></i>-->
<!--                        <span> Payrolls </span>-->
<!--                        <span class="menu-arrow"></span>-->
<!--                    </a>-->
<!--                    <ul class="nav-second-level" aria-expanded="false">-->
<!--                        <li>-->
<!--                            <a href="his_admin_add_payroll.php">Add Payroll</a>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            <a href="his_admin_manage_payrolls.php">Manage Payrolls</a>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            <a href="his_admin_generate_payrolls.php">Generate Payrolls</a>-->
<!--                        </li>-->
<!--                    </ul>-->
<!--                </li>-->
<!---->
<!--                <li>-->
<!--                    <a href="javascript: void(0);">-->
<!--                        <i class="fas fa-user-tag"></i>-->
<!--                        <span> Vendors </span>-->
<!--                        <span class="menu-arrow"></span>-->
<!--                    </a>-->
<!--                    <ul class="nav-second-level" aria-expanded="false">-->
<!--                        <li>-->
<!--                            <a href="his_admin_add_vendor.php">Add Vendor</a>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            <a href="his_admin_manage_vendor.php">Manage Vendors</a>-->
<!--                        </li>-->
<!---->
<!--                    </ul>-->
<!--                </li>-->
<!--                <li>-->
<!--                    <a href="javascript: void(0);">-->
<!--                        <i class="fas fa-lock"></i>-->
<!--                        <span> Password Resets </span>-->
<!--                        <span class="menu-arrow"></span>-->
<!--                    </a>-->
<!--                    <ul class="nav-second-level" aria-expanded="false">-->
<!--                        <li>-->
<!--                            <a href="his_admin_manage_password_resets.php">Manage</a>-->
<!--                        </li>-->
<!---->
<!--                    </ul>-->
<!--                </li>-->
<!---->
<!--            </ul>-->
<!---->
<!--        </div>-->
<!--        <!-- End Sidebar -->-->
<!---->
<!--        <div class="clearfix"></div>-->
<!---->
<!--    </div>-->
<!--    <!-- Sidebar -left -->-->
<!---->
<!--</div>-->