<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>User Dashboard - Archives</title>

  <link rel = "icon" href = "icon.png" 
  type = "image/x-icon">

  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>


  <!--HEADER-->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-center">


      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link" href="Home.html">Home</a></li>
          <li><a class="nav-link" href="Barangay Official Directory.html">Barangay Official Directory</a></li>
          <li><a class="nav-link" href="#team">Organizational Structure</a></li>
          <li><a class="nav-link" href="#portfolio">LGU Code</a></li>
          <li><a class="nav-link scrollto active" href="DILG Intranet.html">DILG Intranet</a></li>
          <li class="dropdown"><a href="#"><span>About Us</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="Mission, Vision, and Shared Values.html">Mission, Vision, and Shared Values</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Account</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
                <li><a href="#">Settings</a></li>
                <li><a href="DILG Intranet.html">Log Out</a></li>
            </ul>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
    </div>
  </header>


  <main id="main">

    <!--ACCOUNTS-->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title">
          <h2>Archives</h2>
        </div>

        <div class="row">
            <div class="col mx-auto">
                <div class="icon-box">


                    <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Case No.</th>
                    <th>Docket No.</th>
                    <th>Complaint Title</th>
                    <th>Complainant</th>
                    <th>Category</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><a href="complaint.php">001</a></td>
                    <td>2023-001</td>
                    <td>Lorem Ipsum</td>
                    <td>John Doe</td>
                    <td>Category A</td>
                    <td class="status-settled">Settled</td>
                    <td>
                        
                        <button class="btn btn-danger unarchive-button">Unarchive</button>
                    </td>
                </tr>
                <tr>
                    <td><a href="complaint.php"> 002</a></td>
                    <td>2023-002</td>
                    <td>Dolor Sit Amet</td>
                    <td>Jane Smith</td>
                    <td>Category B</td>
                    <td class="status-pending">Pending</td>
                    <td>
                        
                        <button class="btn btn-danger unarchive-button">Unarchive</button>
                    </td>
                </tr>
                <!-- Add more rows if needed -->
            </tbody>
        </table>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script>
        var statusCells = document.getElementsByClassName("status-settled");
        for (var i = 0; i < statusCells.length; i++) {
            statusCells[i].classList.add("text-success");
        }

        statusCells = document.getElementsByClassName("status-pending");
        for (var i = 0; i < statusCells.length; i++) {
            statusCells[i].classList.add("text-danger");
        }

        var unarchiveButtons = document.getElementsByClassName("unarchive-button");
        for (var i = 0; i < unarchiveButtons.length; i++) {
            unarchiveButtons[i].addEventListener("click", function() {
                var row = this.parentNode.parentNode;
                row.remove();
            });
        }
    </script>


        

  </main>

 

  <!--JS FILES-->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!--MAIN JS FILE-->
  <script src="assets/js/main.js"></script>

</body>

</html>