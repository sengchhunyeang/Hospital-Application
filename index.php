<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Hospital Management System</title>
    <link rel="shortcut icon" href="assets/images/logo/left.png" type="image/x-icon" />

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet"/>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap-4.1.3.min.css" />
    <link rel="stylesheet" href="assets/css/font-awesome-4.7.0.min.css" />

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

        .nav-menu li {
            display: inline;
        }

        .nav-menu a {
            text-decoration: none;
            font-weight: 600;
            color: #333;
            transition: color 0.3s;
        }

        .nav-menu a:hover {
            color: #0077b6;
        }

        .banner {
            background: linear-gradient(to right, #0077b6, #00b4d8);
            color: white;
            padding: 100px 20px;
            text-align: center;
        }

        .banner h1 {
            font-size: 48px;
            font-weight: 700;
            margin-bottom: 20px;
        }

        .banner p {
            font-size: 18px;
            max-width: 600px;
            margin: auto;
            opacity: 0.95;
        }

        .btn-rounded {
            border-radius: 50px;
            padding: 10px 25px;
            font-weight: 600;
        }

        .login-buttons {
            margin-top: 30px;
        }

        .login-buttons .btn {
            margin: 10px;
        }

        .modal-header {
            background-color: #0077b6;
            color: white;
            border-top-left-radius: .3rem;
            border-top-right-radius: .3rem;
        }

        .modal-footer {
            border-top: none;
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
<header class="header-area">
    <div class="container d-flex justify-content-between align-items-center">
        <a href="index.php">
            <img src="assets/images/logo/left.png" alt="Logo" height="72">
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
        <h1>Hospital Management System</h1>
        <p>Empowering hospitals with integrated digital tools for seamless operations and superior patient care.</p>
        <div class="login-buttons">
            <button class="btn btn-light btn-rounded" data-toggle="modal" data-target="#doctorLoginModal">Doctor Portal</button>
            <button class="btn btn-outline-light btn-rounded" data-toggle="modal" data-target="#adminLoginModal">Admin Panel</button>
        </div>
    </div>
</section>

<!-- Doctor Login Modal -->
<div class="modal fade" id="doctorLoginModal" tabindex="-1" role="dialog" aria-labelledby="doctorLoginModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <form class="modal-content" action="backend/doc/index.php" method="post">
      <div class="modal-header">
        <h5 class="modal-title">Doctor Login</h5>
        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
          <span>&times;</span>
        </button>
      </div>
      <div class="modal-body px-4">
        <div class="form-group">
          <label for="docUsername">Username</label>
          <input type="text" class="form-control" name="username" id="docUsername" aria-label="Doctor Username" required/>
        </div>
        <div class="form-group">
          <label for="docPassword">Password</label>
          <input type="password" class="form-control" name="password" id="docPassword" aria-label="Doctor Password" required/>
        </div>
      </div>
      <div class="modal-footer px-4">
        <button type="submit" class="btn btn-primary btn-rounded w-100">Login</button>
      </div>
    </form>
  </div>
</div>

<!-- Admin Login Modal -->
<div class="modal fade" id="adminLoginModal" tabindex="-1" role="dialog" aria-labelledby="adminLoginModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <form class="modal-content" action="backend/admin/index.php" method="post">
      <div class="modal-header">
        <h5 class="modal-title">Admin Login</h5>
        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
          <span>&times;</span>
        </button>
      </div>
      <div class="modal-body px-4">
        <div class="form-group">
          <label for="adminUsername">Username</label>
          <input type="text" class="form-control" name="username" id="adminUsername" aria-label="Admin Username" required/>
        </div>
        <div class="form-group">
          <label for="adminPassword">Password</label>
          <input type="password" class="form-control" name="password" id="adminPassword" aria-label="Admin Password" required/>
        </div>
      </div>
      <div class="modal-footer px-4">
        <button type="submit" class="btn btn-success btn-rounded w-100">Login</button>
      </div>
    </form>
  </div>
</div>

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
