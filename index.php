<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Hospital Management System</title>
  <link rel="shortcut icon" href="assets/images/logo/right.png" type="image/x-icon" />

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet" />

  <!-- Bootstrap 4 -->
  <link rel="stylesheet" href="assets/css/bootstrap-4.1.3.min.css" />
  <link rel="stylesheet" href="assets/css/font-awesome-4.7.0.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

  <style>
    body {
      font-family: 'Inter', sans-serif;
      background-color: #f8f9fa;
    }

    .preloader {
      position: fixed;
      top: 0; left: 0;
      width: 100%; height: 100%;
      background: #fff;
      z-index: 9999;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    header {
      background-color: #ffffff;
      box-shadow: 0 2px 8px rgba(0,0,0,0.05);
      padding: 15px 0;
    }

    .nav-menu {
      list-style: none;
      margin: 0;
      padding: 0;
      display: flex;
      gap: 20px;
    }

    .nav-menu a {
      text-decoration: none;
      font-weight: 600;
      color: #333;
      transition: all 0.3s ease;
    }

    .nav-menu a:hover {
      color: #0077b6;
    }

    .banner {
      background: linear-gradient(to right, #0077b6, #00b4d8);
      color: white;
      padding: 100px 20px 60px;
      text-align: center;
      position: relative;
    }

    .banner h1 {
      font-size: 48px;
      font-weight: 700;
      margin-bottom: 20px;
    }

    .banner p {
      font-size: 18px;
      max-width: 700px;
      margin: auto;
      opacity: 0.95;
    }

    .login-buttons {
      margin-top: 30px;
    }

    .login-buttons .btn {
      margin: 10px;
      border-radius: 50px;
      padding: 10px 30px;
      font-weight: 600;
      transition: all 0.3s ease;
    }

    .login-buttons .btn:hover {
      transform: scale(1.05);
    }

    .features {
      margin-top: 50px;
    }

    .feature-box {
      background: #fff;
      padding: 25px 20px;
      border-radius: 10px;
      box-shadow: 0 4px 15px rgba(0,0,0,0.05);
      transition: all 0.3s ease;
      height: 100%;
    }

    .feature-box:hover {
      transform: translateY(-8px);
      box-shadow: 0 8px 25px rgba(0,0,0,0.1);
    }

    .feature-icon {
      font-size: 40px;
      color: #0077b6;
      margin-bottom: 15px;
    }

    footer {
      background-color: #ffffff;
      text-align: center;
      padding: 20px 0;
      margin-top: 60px;
      font-size: 14px;
      color: #777;
      border-top: 1px solid #eee;
    }
  </style>
</head>
<body>

<!-- Preloader -->
<div class="preloader">
  <div class="spinner-border text-primary" role="status">
    <span class="sr-only">Loading...</span>
  </div>
</div>

<!-- Header -->
<header>
  <div class="container d-flex justify-content-between align-items-center">
    <a href="index.php">
      <img src="assets/images/logo/right.png" alt="Logo" height="60">
    </a>
    <ul class="nav-menu">
      <li><a href="index.php">Home</a></li>
      <li><a href="backend/doc/index.php">Doctor Login</a></li>
      <li><a href="backend/admin/index.php">Admin Login</a></li>
    </ul>
  </div>
</header>

<!-- Banner -->
<section class="banner">
  <div class="container">
    <h1 class="animate__animated animate__fadeInDown">Welcome to Our Hospital Management System</h1>
    <p class="animate__animated animate__fadeInUp">
      Our system provides a secure and efficient platform to manage patient records, doctor schedules, appointments, prescriptions, billing, and reporting — all in one place.
    </p>
    <p class="animate__animated animate__fadeInUp">
      Designed for hospitals, clinics, and healthcare providers, it empowers staff to deliver faster, more accurate, and patient-centered care through automation and real-time access to vital data.
    </p>
    <p class="animate__animated animate__fadeInUp">
      With role-based access for administrators, doctors, receptionists, and patients, our system ensures confidentiality, compliance, and seamless communication across departments.
    </p>
    <div class="login-buttons animate__animated animate__fadeInUp">
      <a href="backend/doc/index.php" class="btn btn-outline-light">Doctor Login</a>
      <a href="backend/admin/index.php" class="btn btn-light">Admin Login</a>
    </div>
  </div>
</section>

<!-- Features Section -->
<section class="features py-5">
  <div class="container">
    <div class="row text-center">
      <div class="col-md-3 mb-4">
        <div class="feature-box">
          <div class="feature-icon"><i class="fa fa-user-md"></i></div>
          <h5>Doctor Management</h5>
          <p>Manage doctor profiles, specialties, and schedules efficiently.</p>
        </div>
      </div>
      <div class="col-md-3 mb-4">
        <div class="feature-box">
          <div class="feature-icon"><i class="fa fa-calendar-check-o"></i></div>
          <h5>Appointment Scheduling</h5>
          <p>Book, reschedule, and manage appointments with ease.</p>
        </div>
      </div>
      <div class="col-md-3 mb-4">
        <div class="feature-box">
          <div class="feature-icon"><i class="fa fa-hospital-o"></i></div>
          <h5>Patient Records</h5>
          <p>Securely store and retrieve patient medical histories and reports.</p>
        </div>
      </div>
      <div class="col-md-3 mb-4">
        <div class="feature-box">
          <div class="feature-icon"><i class="fa fa-bar-chart"></i></div>
          <h5>Reports & Analytics</h5>
          <p>Generate reports to analyze performance and healthcare metrics.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Footer -->
<footer>
  &copy; 2025 Hospital Management System. All rights reserved.
</footer>

<!-- Scripts -->
<script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"></script>
<script src="assets/js/vendor/bootstrap-4.1.3.min.js"></script>
<script>
  $(document).ready(function () {
    $('.preloader').fadeOut('slow');
  });
</script>

</body>
</html>
