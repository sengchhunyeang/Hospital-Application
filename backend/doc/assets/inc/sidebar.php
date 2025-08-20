<div class="left-side-menu fixed left-0 top-0 bottom-0 w-16 md:w-64 bg-white shadow-md z-10 transition-all duration-300">
    <div class="h-full overflow-y-auto">
        <!-- Sidemenu -->
        <div class="px-2 md:px-4 py-6">
            <ul class="space-y-2">
                <li class="mt-4 px-2 py-2 text-xs font-semibold text-gray-500 uppercase tracking-wider hidden md:block">Navigation</li>

                <!-- Dashboard -->
                <li>
                    <a href="his_doc_dashboard.php"
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
                    $patientsActive = in_array(basename($_SERVER['PHP_SELF']), ['his_doc_register_patient.php', 'his_doc_view_patients.php', 'his_doc_manage_patient.php', 'his_doc_patient_transfer.php']);
                    ?>
                    <button type="button"
                            class="flex items-center justify-center md:justify-between w-full px-2 md:px-3 py-2 rounded-lg transition-colors hover:bg-blue-50 hover:text-blue-600 <?php echo $patientsActive ? 'bg-blue-50 text-blue-600' : 'text-gray-700' ?>"
                            aria-expanded="<?php echo $patientsActive ? 'true' : 'false' ?>"
                            title="Patients">
                        <div class="flex items-center">
                            <svg class="w-5 h-5 <?php echo $patientsActive ? 'text-blue-500' : 'text-gray-500' ?>"
                                 fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                      d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z"
                                      clip-rule="evenodd"></path>
                            </svg>
                            <span class="ml-3 hidden md:block">Patients</span>
                        </div>
                        <svg class="w-4 h-4 <?php echo $patientsActive ? 'text-blue-500 rotate-180' : 'text-gray-500' ?> transform transition-transform hidden md:block"
                             fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <ul class="mt-1 pl-0 md:pl-8 space-y-1 <?php echo $patientsActive ? '' : 'hidden' ?>"
                        aria-hidden="<?php echo $patientsActive ? 'false' : 'true' ?>">
                        <li>
                            <a href="his_doc_register_patient.php"
                               class="flex items-center justify-center md:justify-start px-2 md:px-3 py-2 rounded-lg transition-colors hover:bg-blue-50 hover:text-blue-600 <?php echo basename($_SERVER['PHP_SELF']) == 'his_doc_register_patient.php' ? 'bg-blue-50 text-blue-600' : 'text-gray-600' ?>"
                               title="Register Patient">
                                <svg class="w-4 h-4 md:hidden" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="hidden md:block">Register Patient</span>
                            </a>
                        </li>
                        <li>
                            <a href="his_doc_view_patients.php"
                               class="flex items-center justify-center md:justify-start px-2 md:px-3 py-2 rounded-lg transition-colors hover:bg-blue-50 hover:text-blue-600 <?php echo basename($_SERVER['PHP_SELF']) == 'his_doc_view_patients.php' ? 'bg-blue-50 text-blue-600' : 'text-gray-600' ?>"
                               title="View Patients">
                                <svg class="w-4 h-4 md:hidden" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path>
                                    <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="hidden md:block">View Patients</span>
                            </a>
                        </li>
                        <li>
                            <a href="his_doc_manage_patient.php"
                               class="flex items-center justify-center md:justify-start px-2 md:px-3 py-2 rounded-lg transition-colors hover:bg-blue-50 hover:text-blue-600 <?php echo basename($_SERVER['PHP_SELF']) == 'his_doc_manage_patient.php' ? 'bg-blue-50 text-blue-600' : 'text-gray-600' ?>"
                               title="Manage Patients">
                                <svg class="w-4 h-4 md:hidden" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"></path>
                                </svg>
                                <span class="hidden md:block">Manage Patients</span>
                            </a>
                        </li>
                        <li class="border-t border-gray-200 my-1"></li>
                        <li>
                            <a href="his_doc_patient_transfer.php"
                               class="flex items-center justify-center md:justify-start px-2 md:px-3 py-2 rounded-lg transition-colors hover:bg-blue-50 hover:text-blue-600 <?php echo basename($_SERVER['PHP_SELF']) == 'his_doc_patient_transfer.php' ? 'bg-blue-50 text-blue-600' : 'text-gray-600' ?>"
                               title="Patient Transfers">
                                <svg class="w-4 h-4 md:hidden" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="hidden md:block">Patient Transfers</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Pharmacy -->
                <li>
                    <?php
                    $pharmacyActive = in_array(basename($_SERVER['PHP_SELF']), ['his_doc_add_pharm_cat.php', 'his_doc_view_pharm_cat.php', 'his_doc_manage_pharm_cat.php', 'his_doc_add_pharmaceuticals.php', 'his_doc_view_pharmaceuticals.php', 'his_doc_manage_pharmaceuticals.php', 'his_doc_add_presc.php', 'his_doc_view_presc.php', 'his_doc_manage_presc.php']);
                    ?>
                    <button type="button"
                            class="flex items-center justify-center md:justify-between w-full px-2 md:px-3 py-2 rounded-lg transition-colors hover:bg-blue-50 hover:text-blue-600 <?php echo $pharmacyActive ? 'bg-blue-50 text-blue-600' : 'text-gray-700' ?>"
                            aria-expanded="<?php echo $pharmacyActive ? 'true' : 'false' ?>"
                            title="Pharmacy">
                        <div class="flex items-center">
                            <svg class="w-5 h-5 <?php echo $pharmacyActive ? 'text-blue-500' : 'text-gray-500' ?>"
                                 fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                      d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z"
                                      clip-rule="evenodd"></path>
                            </svg>
                            <span class="ml-3 hidden md:block">Pharmacy</span>
                        </div>
                        <svg class="w-4 h-4 <?php echo $pharmacyActive ? 'text-blue-500 rotate-180' : 'text-gray-500' ?> transform transition-transform hidden md:block"
                             fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <ul class="mt-1 space-y-1 pl-0 md:pl-8 <?php echo $pharmacyActive ? '' : 'hidden' ?>"
                        aria-hidden="<?php echo $pharmacyActive ? 'false' : 'true' ?>">
                        <li>
                            <a href="his_doc_add_pharm_cat.php"
                               class="flex items-center justify-center md:justify-start px-2 md:px-3 py-2 rounded-lg transition-colors hover:bg-blue-50 hover:text-blue-600 <?php echo basename($_SERVER['PHP_SELF']) == 'his_doc_add_pharm_cat.php' ? 'bg-blue-50 text-blue-600' : 'text-gray-600' ?>"
                               title="Add Pharm Category">
                                <svg class="w-4 h-4 md:hidden" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="hidden md:block">Add Pharm Category</span>
                            </a>
                        </li>
                        <li>
                            <a href="his_doc_view_pharm_cat.php"
                               class="flex items-center justify-center md:justify-start px-2 md:px-3 py-2 rounded-lg transition-colors hover:bg-blue-50 hover:text-blue-600 <?php echo basename($_SERVER['PHP_SELF']) == 'his_doc_view_pharm_cat.php' ? 'bg-blue-50 text-blue-600' : 'text-gray-600' ?>"
                               title="View Pharm Category">
                                <svg class="w-4 h-4 md:hidden" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path>
                                    <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="hidden md:block">View Pharm Category</span>
                            </a>
                        </li>
                        <li>
                            <a href="his_doc_manage_pharm_cat.php"
                               class="flex items-center justify-center md:justify-start px-2 md:px-3 py-2 rounded-lg transition-colors hover:bg-blue-50 hover:text-blue-600 <?php echo basename($_SERVER['PHP_SELF']) == 'his_doc_manage_pharm_cat.php' ? 'bg-blue-50 text-blue-600' : 'text-gray-600' ?>"
                               title="Manage Pharm Category">
                                <svg class="w-4 h-4 md:hidden" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"></path>
                                </svg>
                                <span class="hidden md:block">Manage Pharm Category</span>
                            </a>
                        </li>
                        <li class="border-t border-gray-200 my-1"></li>
                        <li>
                            <a href="his_doc_add_pharmaceuticals.php"
                               class="flex items-center justify-center md:justify-start px-2 md:px-3 py-2 rounded-lg transition-colors hover:bg-blue-50 hover:text-blue-600 <?php echo basename($_SERVER['PHP_SELF']) == 'his_doc_add_pharmaceuticals.php' ? 'bg-blue-50 text-blue-600' : 'text-gray-600' ?>"
                               title="Add Pharmaceuticals">
                                <svg class="w-4 h-4 md:hidden" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="hidden md:block">Add Pharmaceuticals</span>
                            </a>
                        </li>
                        <li>
                            <a href="his_doc_view_pharmaceuticals.php"
                               class="flex items-center justify-center md:justify-start px-2 md:px-3 py-2 rounded-lg transition-colors hover:bg-blue-50 hover:text-blue-600 <?php echo basename($_SERVER['PHP_SELF']) == 'his_doc_view_pharmaceuticals.php' ? 'bg-blue-50 text-blue-600' : 'text-gray-600' ?>"
                               title="View Pharmaceuticals">
                                <svg class="w-4 h-4 md:hidden" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path>
                                    <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="hidden md:block">View Pharmaceuticals</span>
                            </a>
                        </li>
                        <li>
                            <a href="his_doc_manage_pharmaceuticals.php"
                               class="flex items-center justify-center md:justify-start px-2 md:px-3 py-2 rounded-lg transition-colors hover:bg-blue-50 hover:text-blue-600 <?php echo basename($_SERVER['PHP_SELF']) == 'his_doc_manage_pharmaceuticals.php' ? 'bg-blue-50 text-blue-600' : 'text-gray-600' ?>"
                               title="Manage Pharmaceuticals">
                                <svg class="w-4 h-4 md:hidden" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"></path>
                                </svg>
                                <span class="hidden md:block">Manage Pharmaceuticals</span>
                            </a>
                        </li>
                        <li class="border-t border-gray-200 my-1"></li>
                        <li>
                            <a href="his_doc_add_presc.php"
                               class="flex items-center justify-center md:justify-start px-2 md:px-3 py-2 rounded-lg transition-colors hover:bg-blue-50 hover:text-blue-600 <?php echo basename($_SERVER['PHP_SELF']) == 'his_doc_add_presc.php' ? 'bg-blue-50 text-blue-600' : 'text-gray-600' ?>"
                               title="Add Prescriptions">
                                <svg class="w-4 h-4 md:hidden" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="hidden md:block">Add Prescriptions</span>
                            </a>
                        </li>
                        <li>
                            <a href="his_doc_view_presc.php"
                               class="flex items-center justify-center md:justify-start px-2 md:px-3 py-2 rounded-lg transition-colors hover:bg-blue-50 hover:text-blue-600 <?php echo basename($_SERVER['PHP_SELF']) == 'his_doc_view_presc.php' ? 'bg-blue-50 text-blue-600' : 'text-gray-600' ?>"
                               title="View Prescriptions">
                                <svg class="w-4 h-4 md:hidden" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path>
                                    <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="hidden md:block">View Prescriptions</span>
                            </a>
                        </li>
                        <li>
                            <a href="his_doc_manage_presc.php"
                               class="flex items-center justify-center md:justify-start px-2 md:px-3 py-2 rounded-lg transition-colors hover:bg-blue-50 hover:text-blue-600 <?php echo basename($_SERVER['PHP_SELF']) == 'his_doc_manage_presc.php' ? 'bg-blue-50 text-blue-600' : 'text-gray-600' ?>"
                               title="Manage Prescriptions">
                                <svg class="w-4 h-4 md:hidden" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"></path>
                                </svg>
                                <span class="hidden md:block">Manage Prescriptions</span>
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
                            <a href="his_doc_patient_lab_test.php"
                               class="flex items-center justify-center md:justify-start px-2 md:px-3 py-2 rounded-lg transition-colors text-gray-600 hover:bg-blue-50 hover:text-blue-600 <?php echo basename($_SERVER['PHP_SELF']) == 'his_doc_patient_lab_test.php' ? 'bg-blue-50 text-blue-600' : '' ?>"
                               title="Patient Lab Tests">
                                <svg class="w-4 h-4 md:hidden" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M11.17 3a1 1 0 01.98.6l1.85 3.8a1 1 0 01-.12 1.07l-4.5 5.9a1 1 0 01-1.51.1l-2.1-2.1a1 1 0 01.1-1.51l5.9-4.5a1 1 0 011.07-.12l3.8 1.85a1 1 0 01.6.98v6.34a1 1 0 01-1 1H4a1 1 0 01-1-1V4a1 1 0 011-1h7.17z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="hidden md:block">Patient Lab Tests</span>
                            </a>
                        </li>
                        <li>
                            <a href="his_doc_patient_lab_result.php"
                               class="flex items-center justify-center md:justify-start px-2 md:px-3 py-2 rounded-lg transition-colors text-gray-600 hover:bg-blue-50 hover:text-blue-600 <?php echo basename($_SERVER['PHP_SELF']) == 'his_doc_patient_lab_result.php' ? 'bg-blue-50 text-blue-600' : '' ?>"
                               title="Patient Lab Results">
                                <svg class="w-4 h-4 md:hidden" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M3 3a1 1 0 000 2v8a2 2 0 002 2h2.586l-1.293 1.293a1 1 0 101.414 1.414L10 15.414l2.293 2.293a1 1 0 001.414-1.414L12.414 15H15a2 2 0 002-2V5a1 1 0 100-2H3zm11.707 4.707a1 1 0 00-1.414-1.414L10 9.586 8.707 8.293a1 1 0 00-1.414 0l-2 2a1 1 0 101.414 1.414L8 10.414l1.293 1.293a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="hidden md:block">Patient Lab Results</span>
                            </a>
                        </li>
                        <li>
                            <a href="his_doc_patient_lab_vitals.php"
                               class="flex items-center justify-center md:justify-start px-2 md:px-3 py-2 rounded-lg transition-colors text-gray-600 hover:bg-blue-50 hover:text-blue-600 <?php echo basename($_SERVER['PHP_SELF']) == 'his_doc_patient_lab_vitals.php' ? 'bg-blue-50 text-blue-600' : '' ?>"
                               title="Patient Vitals">
                                <svg class="w-4 h-4 md:hidden" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="hidden md:block">Patient Vitals</span>
                            </a>
                        </li>
                        <li>
                            <a href="his_doc_lab_report.php"
                               class="flex items-center justify-center md:justify-start px-2 md:px-3 py-2 rounded-lg transition-colors text-gray-600 hover:bg-blue-50 hover:text-blue-600 <?php echo basename($_SERVER['PHP_SELF']) == 'his_doc_lab_report.php' ? 'bg-blue-50 text-blue-600' : '' ?>"
                               title="Lab Reports">
                                <svg class="w-4 h-4 md:hidden" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V7.414A2 2 0 0015.414 6L12 2.586A2 2 0 0010.586 2H6zm2 10a1 1 0 10-2 0v3a1 1 0 102 0v-3zm2-3a1 1 0 011 1v5a1 1 0 11-2 0v-5a1 1 0 011-1zm4-1a1 1 0 10-2 0v7a1 1 0 102 0V8z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="hidden md:block">Lab Reports</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Inventory -->
                <li>
                    <?php
                    $inventoryActive = in_array(basename($_SERVER['PHP_SELF']), ['his_doc_pharm_inventory.php', 'his_doc_equipments_inventory.php']);
                    ?>
                    <button type="button"
                            class="flex items-center justify-center md:justify-between w-full px-2 md:px-3 py-2 rounded-lg transition-colors hover:bg-blue-50 hover:text-blue-600 <?php echo $inventoryActive ? 'bg-blue-50 text-blue-600' : 'text-gray-700' ?>"
                            aria-expanded="<?php echo $inventoryActive ? 'true' : 'false' ?>"
                            title="Inventory">
                        <div class="flex items-center">
                            <svg class="w-5 h-5 <?php echo $inventoryActive ? 'text-blue-500' : 'text-gray-500' ?>"
                                 fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8 3a1 1 0 011-1h2a1 1 0 110 2H9a1 1 0 01-1-1z"></path>
                                <path d="M6 3a2 2 0 00-2 2v11a2 2 0 002 2h8a2 2 0 002-2V5a2 2 0 00-2-2 3 3 0 01-3 3H9a3 3 0 01-3-3z"></path>
                            </svg>
                            <span class="ml-3 hidden md:block">Inventory</span>
                        </div>
                        <svg class="w-4 h-4 <?php echo $inventoryActive ? 'text-blue-500 rotate-180' : 'text-gray-500' ?> transform transition-transform hidden md:block"
                             fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <ul class="mt-1 pl-0 md:pl-8 space-y-1 <?php echo $inventoryActive ? '' : 'hidden' ?>"
                        aria-hidden="<?php echo $inventoryActive ? 'false' : 'true' ?>">
                        <li><a href="his_doc_pharm_inventory.php"
                               class="flex items-center justify-center md:justify-start px-2 md:px-3 py-2 rounded-lg transition-colors hover:bg-blue-50 hover:text-blue-600 <?php echo basename($_SERVER['PHP_SELF']) == 'his_doc_pharm_inventory.php' ? 'bg-blue-50 text-blue-600' : 'text-gray-600' ?>"
                               title="Pharmaceuticals">
                                <svg class="w-4 h-4 md:hidden" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="hidden md:block">Pharmaceuticals</span>
                            </a>
                        </li>
                        <li><a href="his_doc_equipments_inventory.php"
                               class="flex items-center justify-center md:justify-start px-2 md:px-3 py-2 rounded-lg transition-colors hover:bg-blue-50 hover:text-blue-600 <?php echo basename($_SERVER['PHP_SELF']) == 'his_doc_equipments_inventory.php' ? 'bg-blue-50 text-blue-600' : 'text-gray-600' ?>"
                               title="Assets">
                                <svg class="w-4 h-4 md:hidden" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M11 17a1 1 0 001.447.894l4-2A1 1 0 0017 15V9.236a1 1 0 00-1.447-.894l-4 2a1 1 0 00-.553.894V17zM15.211 6.276a1 1 0 000-1.788l-4.764-2.382a1 1 0 00-.894 0L4.789 4.488a1 1 0 000 1.788l4.764 2.382a1 1 0 00.894 0l4.764-2.382zM4.447 8.342A1 1 0 003 9.236V15a1 1 0 00.553.894l4 2A1 1 0 009 17v-5.764a1 1 0 00-.553-.894l-4-2z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="hidden md:block">Assets</span>
                            </a>
                        </li>
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