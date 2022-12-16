<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
<!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>
 <!-- top navigation bar-->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.html">BGreen Farming</a></h1>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto " href="#portfolio">Farmer's group</a></li>
          <li><a class="nav-link scrollto" href="#team">Team</a></li>
          <li><a href="blog.html">Blog posts</a></li>
          <li class="dropdown"><a href="#"><span>Green housing</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Sponsors</a></li>
              <li class="dropdown"><a href="#"><span>Membership</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Union Members</a></li>
                  <li><a href="#">Democratic Members</a></li>
                  <li><a href="#">Private Members</a></li>
                  <li><a href="#">Public Members</a></li>
                  <li><a href="#">New Members</a></li>
                </ul>
              </li>
              <li><a href="#">Debates</a></li>
              <li><a href="#">Campaigns</a></li>
              <li><a href="#">Movements</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <li><a class="getstarted scrollto" href="#about">Get Started</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>

    </div>
  </header><!-- end of top navigation bar-->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

       

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active" id="background">
  <div class="animate__animated animate__fadeInDown">
    <h1 id="heading">WELCOME TO OUR BGREEN FARMING ORGANIZATION</h1>
    </div>
                <div class="animate__animated animate__fadeInUp">
                <table>
                  <tr>
                    <th>Details</th>
                    <th>Information</th>
                  </tr>
                  <tr>
                  <td>First name: </td>
                  <td><?php echo $_POST['firstname'];?></td>
                  </tr>
                  <tr>
                    <td>Middle name: </td>
                    <td><?php echo $_POST['middlename'];?></td>
                  </tr>
                  <tr>
                    <td>Surname:</td>
                    <td><?php echo $_POST['surname'];?></td>
                  </tr>
                  <tr>
                    <td>Birthdate:</td>
                    <td><?php echo $_POST['birthdate'];?></td>
                  </tr>
                  <tr>
                    <td>Gender: </td>
                    <td><?php echo $_POST['gender'];?></td>
                  </tr>
                  <tr>
                    <td>Physical Address: </td>
                    <td><?php echo $_POST['address'];?></td>
                  </tr>
                  <tr>
                    <td>Phone number: </td>
                    <td><?php echo $_POST['phone'];?></td>
                  </tr>
                  <tr>
                    <td>Region: </td>
                    <td><?php echo $_POST['region'];?></td>
                  </tr>
                  <tr>
                    <td>Municipal: </td>
                    <td><?php echo $_POST['municipal'];?></td>
                  </tr>
                  <tr>
                    <td>Village: </td>
                    <td><?php echo $_POST['village'];?></td>
                  </tr>
                  <tr>
                    <td>Ward: </td>
                    <td><?php echo $_POST['ward'];?></td>
                  </tr>
                  <tr>
                    <td>Farm size: </td>
                    <td><?php echo $_POST['farmsize'];?></td>
                  </tr>
                  <tr>
                    <td>Ownership: </td>
                    <td><?php echo $_POST['ownership'];?></td>
                  </tr>
                  <tr>
                    <td>Group of crops: </td>
                    <td><?php echo $_POST['gcrops'];?></td>
                  </tr>
                  <tr>
                    <td>Subgroup of crops: </td>
                    <td><?php echo $_POST['subcrops'];?></td>
                  </tr>
                </table>
                </div>
           </div>     
          </div>
        </div>
      </div>
    </section>
    <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

   </main>
