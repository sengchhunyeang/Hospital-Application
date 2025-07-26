<div class="fixed left-0 top-0 bottom-0 w-64 bg-white shadow-md z-10 transition-all duration-300">
    <div class="h-full overflow-y-auto">
        <!-- Sidemenu -->
        <div class="px-4 py-6">
            <ul class="space-y-2">
                <li class="px-3 py-2 text-xs font-semibold text-gray-500 uppercase tracking-wider">Navigation</li>

                <li>
                    <a href="his_doc_dashboard.php" class="flex items-center px-3 py-2 text-gray-700 hover:bg-blue-50 rounded-lg transition-colors">
                        <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                        </svg>
                        <span class="ml-3">Dashboard</span>
                    </a>
                </li>

                <li>
                    <button type="button" class="flex items-center justify-between w-full px-3 py-2 text-gray-700 hover:bg-blue-50 rounded-lg transition-colors" aria-expanded="false">
                        <div class="flex items-center">
                            <svg class="w-5 h-5 text-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="ml-3">Patients</span>
                        </div>
                        <svg class="w-4 h-4 text-gray-500 transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <ul class="mt-1 pl-8 space-y-1 hidden" aria-hidden="true">
                        <li><a href="his_doc_register_patient.php" class="block px-3 py-2 text-gray-600 hover:bg-blue-50 rounded-lg transition-colors">Register Patient</a></li>
                        <li><a href="his_doc_view_patients.php" class="block px-3 py-2 text-gray-600 hover:bg-blue-50 rounded-lg transition-colors">View Patients</a></li>
                        <li><a href="his_doc_manage_patient.php" class="block px-3 py-2 text-gray-600 hover:bg-blue-50 rounded-lg transition-colors">Manage Patients</a></li>
                        <li class="border-t border-gray-200 my-1"></li>
                        <li><a href="his_doc_discharge_patient.php" class="block px-3 py-2 text-gray-600 hover:bg-blue-50 rounded-lg transition-colors">Discharge Patients</a></li>
                        <li><a href="his_doc_patient_transfer.php" class="block px-3 py-2 text-gray-600 hover:bg-blue-50 rounded-lg transition-colors">Patient Transfers</a></li>
                    </ul>
                </li>

                <li>
                    <button type="button" class="flex items-center justify-between w-full px-3 py-2 text-gray-700 hover:bg-blue-50 rounded-lg transition-colors" aria-expanded="false">
                        <div class="flex items-center">
                            <svg class="w-5 h-5 text-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="ml-3">Pharmacy</span>
                        </div>
                        <svg class="w-4 h-4 text-gray-500 transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <ul class="mt-1 pl-8 space-y-1 hidden" aria-hidden="true">
                        <li><a href="his_doc_add_pharm_cat.php" class="block px-3 py-2 text-gray-600 hover:bg-blue-50 rounded-lg transition-colors">Add Pharm Category</a></li>
                        <li><a href="his_doc_view_pharm_cat.php" class="block px-3 py-2 text-gray-600 hover:bg-blue-50 rounded-lg transition-colors">View Pharm Category</a></li>
                        <li><a href="his_doc_manage_pharm_cat.php" class="block px-3 py-2 text-gray-600 hover:bg-blue-50 rounded-lg transition-colors">Manage Pharm Category</a></li>
                        <li class="border-t border-gray-200 my-1"></li>
                        <li><a href="his_doc_add_pharmaceuticals.php" class="block px-3 py-2 text-gray-600 hover:bg-blue-50 rounded-lg transition-colors">Add Pharmaceuticals</a></li>
                        <li><a href="his_doc_view_pharmaceuticals.php" class="block px-3 py-2 text-gray-600 hover:bg-blue-50 rounded-lg transition-colors">View Pharmaceuticals</a></li>
                        <li><a href="his_doc_manage_pharmaceuticals.php" class="block px-3 py-2 text-gray-600 hover:bg-blue-50 rounded-lg transition-colors">Manage Pharmaceuticals</a></li>
                        <li class="border-t border-gray-200 my-1"></li>
                        <li><a href="his_doc_add_presc.php" class="block px-3 py-2 text-gray-600 hover:bg-blue-50 rounded-lg transition-colors">Add Prescriptions</a></li>
                        <li><a href="his_doc_view_presc.php" class="block px-3 py-2 text-gray-600 hover:bg-blue-50 rounded-lg transition-colors">View Prescriptions</a></li>
                        <li><a href="his_doc_manage_presc.php" class="block px-3 py-2 text-gray-600 hover:bg-blue-50 rounded-lg transition-colors">Manage Prescriptions</a></li>
                    </ul>
                </li>

                <!-- Continue with other menu items following the same pattern -->
                <!-- Inventory -->
                <li>
                    <button type="button" class="flex items-center justify-between w-full px-3 py-2 text-gray-700 hover:bg-blue-50 rounded-lg transition-colors" aria-expanded="false">
                        <div class="flex items-center">
                            <svg class="w-5 h-5 text-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8 3a1 1 0 011-1h2a1 1 0 110 2H9a1 1 0 01-1-1z"></path>
                                <path d="M6 3a2 2 0 00-2 2v11a2 2 0 002 2h8a2 2 0 002-2V5a2 2 0 00-2-2 3 3 0 01-3 3H9a3 3 0 01-3-3z"></path>
                            </svg>
                            <span class="ml-3">Inventory</span>
                        </div>
                        <svg class="w-4 h-4 text-gray-500 transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <ul class="mt-1 pl-8 space-y-1 hidden" aria-hidden="true">
                        <li><a href="his_doc_pharm_inventory.php" class="block px-3 py-2 text-gray-600 hover:bg-blue-50 rounded-lg transition-colors">Pharmaceuticals</a></li>
                        <li><a href="his_doc_equipments_inventory.php" class="block px-3 py-2 text-gray-600 hover:bg-blue-50 rounded-lg transition-colors">Assets</a></li>
                    </ul>
                </li>

                <!-- Laboratory -->
                <li>
                    <button type="button" class="flex items-center justify-between w-full px-3 py-2 text-gray-700 hover:bg-blue-50 rounded-lg transition-colors" aria-expanded="false">
                        <div class="flex items-center">
                            <svg class="w-5 h-5 text-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M11.17 3a1 1 0 01.98.6l1.85 3.8a1 1 0 01-.12 1.07l-4.5 5.9a1 1 0 01-1.51.1l-2.1-2.1a1 1 0 01.1-1.51l5.9-4.5a1 1 0 011.07-.12l3.8 1.85a1 1 0 01.6.98v6.34a1 1 0 01-1 1H4a1 1 0 01-1-1V4a1 1 0 011-1h7.17z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="ml-3">Laboratory</span>
                        </div>
                        <svg class="w-4 h-4 text-gray-500 transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <ul class="mt-1 pl-8 space-y-1 hidden" aria-hidden="true">
                        <li><a href="his_doc_patient_lab_test.php" class="block px-3 py-2 text-gray-600 hover:bg-blue-50 rounded-lg transition-colors">Patient Lab Tests</a></li>
                        <li><a href="his_doc_patient_lab_result.php" class="block px-3 py-2 text-gray-600 hover:bg-blue-50 rounded-lg transition-colors">Patient Lab Results</a></li>
                        <li><a href="his_doc_patient_lab_vitals.php" class="block px-3 py-2 text-gray-600 hover:bg-blue-50 rounded-lg transition-colors">Patient Vitals</a></li>
                        <li><a href="his_doc_lab_report.php" class="block px-3 py-2 text-gray-600 hover:bg-blue-50 rounded-lg transition-colors">Lab Reports</a></li>
                    </ul>
                </li>

                <!-- Payrolls -->
                <li>
                    <button type="button" class="flex items-center justify-between w-full px-3 py-2 text-gray-700 hover:bg-blue-50 rounded-lg transition-colors" aria-expanded="false">
                        <div class="flex items-center">
                            <svg class="w-5 h-5 text-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.433 7.418c.155-.103.346-.196.567-.267v1.698a2.305 2.305 0 01-.567-.267C8.07 8.34 8 8.114 8 8c0-.114.07-.34.433-.582zM11 12.849v-1.698c.22.071.412.164.567.267.364.243.433.468.433.582 0 .114-.07.34-.433.582a2.305 2.305 0 01-.567.267z"></path>
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-13a1 1 0 10-2 0v.092a4.535 4.535 0 00-1.676.662C6.602 6.234 6 7.009 6 8c0 .99.602 1.765 1.324 2.246.48.32 1.054.545 1.676.662v1.941c-.391-.127-.68-.317-.843-.504a1 1 0 10-1.51 1.31c.562.649 1.413 1.076 2.353 1.253V15a1 1 0 102 0v-.092a4.535 4.535 0 001.676-.662C13.398 13.766 14 12.991 14 12c0-.99-.602-1.765-1.324-2.246A4.535 4.535 0 0011 9.092V7.151c.391.127.68.317.843.504a1 1 0 101.511-1.31c-.563-.649-1.413-1.076-2.354-1.253V5z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="ml-3">Payrolls</span>
                        </div>
                        <svg class="w-4 h-4 text-gray-500 transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <ul class="mt-1 pl-8 space-y-1 hidden" aria-hidden="true">
                        <li><a href="his_doc_view_payrolls.php" class="block px-3 py-2 text-gray-600 hover:bg-blue-50 rounded-lg transition-colors">My Payrolls</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>

<!-- Add this JavaScript for dropdown functionality -->
<script>
    document.querySelectorAll('button[aria-expanded]').forEach(button => {
        button.addEventListener('click', () => {
            const expanded = button.getAttribute('aria-expanded') === 'true';
            button.setAttribute('aria-expanded', !expanded);
            button.querySelector('svg:last-child').classList.toggle('rotate-180');
            const menu = button.nextElementSibling;
            menu.classList.toggle('hidden');
        });
    });
</script>