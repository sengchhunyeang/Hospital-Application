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
  background-color: #f0f4f8;
  color: #333;
  margin: 0;
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
  box-shadow: 0 2px 10px rgba(0, 0, 0, 0.03);
  padding: 20px 0;
}

.nav-menu {
  list-style: none;
  display: flex;
  gap: 30px;
  margin: 0;
  padding: 0;
}

.nav-menu a {
  position: relative;
  text-decoration: none;
  font-weight: 600;
  color: #333;
  padding-bottom: 5px;
  transition: 0.3s ease;
}

.nav-menu a::after {
  content: "";
  position: absolute;
  width: 0;
  height: 2px;
  bottom: 0;
  left: 0;
  background-color: #00b4d8;
  transition: width 0.3s;
}

.nav-menu a:hover::after {
  width: 100%;
}

.banner {
  background: linear-gradient(to right, #0077b6, #00b4d8);
  color: white;
  padding: 120px 20px 80px;
  text-align: center;
  position: relative;
  overflow: hidden;
}

.banner h1 {
  font-size: 3rem;
  font-weight: 700;
  margin-bottom: 20px;
}

.banner p {
  font-size: 1.1rem;
  max-width: 750px;
  margin: 0 auto 15px;
  line-height: 1.6;
}

.login-buttons {
  margin-top: 35px;
}

.login-buttons .btn {
  margin: 10px;
  border-radius: 30px;
  padding: 12px 35px;
  font-weight: 600;
  font-size: 1rem;
  transition: all 0.3s ease;
}

.btn-outline-light {
  border: 2px solid white;
  color: white;
  background: transparent;
}

.btn-outline-light:hover {
  background: white;
  color: #0077b6;
}

.btn-light {
  background-color: #fff;
  color: #0077b6;
  border: 2px solid #fff;
}

.btn-light:hover {
  background-color: transparent;
  color: #fff;
  border: 2px solid white;
}

.features {
  margin-top: 60px;
}

.feature-box {
  background: #fff;
  padding: 30px 25px;
  border-radius: 15px;
  box-shadow: 0 6px 20px rgba(0, 0, 0, 0.05);
  transition: all 0.3s ease;
  height: 100%;
}

.feature-box:hover {
  transform: translateY(-6px);
  box-shadow: 0 12px 25px rgba(0, 0, 0, 0.1);
}

.feature-icon {
  font-size: 42px;
  color: #00b4d8;
  margin-bottom: 20px;
}

.feature-box h5 {
  font-weight: 700;
  margin-bottom: 10px;
}

.feature-box p {
  color: #666;
}

footer {
  background-color: #ffffff;
  text-align: center;
  padding: 30px 0;
  font-size: 14px;
  color: #888;
  border-top: 1px solid #eee;
  margin-top: 60px;
}

@media (max-width: 768px) {
  .banner h1 {
    font-size: 2rem;
  }

  .login-buttons .btn {
    width: 100%;
    max-width: 280px;
  }

  .nav-menu {
    flex-direction: column;
    gap: 10px;
  }
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
  $(window).on('load', function () {
    $('.preloader').fadeOut(600);
  });
</script>


</body>
</html>
