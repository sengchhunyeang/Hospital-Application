<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Hospital Management System</title>
    <link rel="shortcut icon" href="assets/images/logo/right.png" type="image/x-icon" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
        .nav-link::after {
            content: "";
            position: absolute;
            bottom: 0;
            left: 0;
            height: 2px;
            width: 0;
            background-color: #00b4d8;
            transition: width 0.3s;
        }
        .nav-link:hover::after {
            width: 100%;
        }
    </style>
</head>
<body class="bg-gray-100 text-gray-800">

<!-- Preloader -->
<div class="fixed inset-0 bg-white flex items-center justify-center z-[9999]" id="preloader">
    <div class="animate-spin rounded-full h-10 w-10 border-b-2 border-blue-500"></div>
</div>

<!-- Header -->
<header class="bg-white shadow">
    <div class="container mx-auto px-4 py-5 flex items-center justify-between">
        <a href="index.php">
            <img src="assets/images/logo/right.png" alt="Logo" class="h-14">
        </a>
        <ul class="flex flex-col md:flex-row gap-4 md:gap-8 font-semibold text-gray-700">
            <li><a href="index.php" class="relative nav-link pb-1">Home</a></li>
            <li><a href="backend/doc/index.php" class="relative nav-link pb-1">Doctor Login</a></li>
            <li><a href="backend/admin/index.php" class="relative nav-link pb-1">Admin Login</a></li>
        </ul>
    </div>
</header>

<!-- Banner -->
<section class="bg-gradient-to-r from-blue-700 to-cyan-400 text-white py-28 px-4 text-center relative overflow-hidden">
    <div class="container mx-auto">
        <h1 class="text-4xl md:text-5xl font-bold mb-6 animate__animated animate__fadeInDown">Welcome to Our Hospital Management System</h1>
        <p class="max-w-3xl mx-auto mb-4 animate__animated animate__fadeInUp">
            Our system provides a secure and efficient platform to manage patient records, doctor schedules, appointments, prescriptions, billing, and reporting — all in one place.
        </p>
        <p class="max-w-3xl mx-auto mb-4 animate__animated animate__fadeInUp">
            Designed for hospitals, clinics, and healthcare providers, it empowers staff to deliver faster, more accurate, and patient-centered care through automation and real-time access to vital data.
        </p>
        <p class="max-w-3xl mx-auto mb-4 animate__animated animate__fadeInUp">
            With role-based access for administrators, doctors, receptionists, and patients, our system ensures confidentiality, compliance, and seamless communication across departments.
        </p>
        <div class="mt-8 flex flex-col sm:flex-row justify-center gap-4 animate__animated animate__fadeInUp">
            <a href="backend/doc/index.php" class="border-2 border-white text-white px-6 py-3 rounded-full font-semibold hover:bg-white hover:text-blue-700 transition">Doctor Login</a>
            <a href="backend/admin/index.php" class="bg-white text-blue-700 px-6 py-3 rounded-full font-semibold hover:bg-transparent hover:text-white border-2 border-white transition">Admin Login</a>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="py-16 bg-gray-100">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6 text-center">
            <div class="bg-white p-6 rounded-xl shadow-md hover:-translate-y-1 hover:shadow-lg transition">
                <div class="text-4xl text-cyan-500 mb-4"><i class="fa fa-user-md"></i></div>
                <h5 class="font-bold text-lg mb-2">Doctor Management</h5>
                <p class="text-gray-600">Manage doctor profiles, specialties, and schedules efficiently.</p>
            </div>
            <div class="bg-white p-6 rounded-xl shadow-md hover:-translate-y-1 hover:shadow-lg transition">
                <div class="text-4xl text-cyan-500 mb-4"><i class="fa fa-calendar-check-o"></i></div>
                <h5 class="font-bold text-lg mb-2">Appointment Scheduling</h5>
                <p class="text-gray-600">Book, reschedule, and manage appointments with ease.</p>
            </div>
            <div class="bg-white p-6 rounded-xl shadow-md hover:-translate-y-1 hover:shadow-lg transition">
                <div class="text-4xl text-cyan-500 mb-4"><i class="fa fa-hospital-o"></i></div>
                <h5 class="font-bold text-lg mb-2">Patient Records</h5>
                <p class="text-gray-600">Securely store and retrieve patient medical histories and reports.</p>
            </div>
            <div class="bg-white p-6 rounded-xl shadow-md hover:-translate-y-1 hover:shadow-lg transition">
                <div class="text-4xl text-cyan-500 mb-4"><i class="fa fa-bar-chart"></i></div>
                <h5 class="font-bold text-lg mb-2">Reports & Analytics</h5>
                <p class="text-gray-600">Generate reports to analyze performance and healthcare metrics.</p>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="bg-white text-center py-6 text-sm text-gray-500 border-t border-gray-200">
    &copy; 2025 Hospital Management System. All rights reserved.
</footer>

<!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    window.addEventListener('load', () => {
        document.getElementById('preloader').style.display = 'none';
    });
</script>

</body>
</html>