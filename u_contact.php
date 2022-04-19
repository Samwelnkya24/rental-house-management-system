<?php
session_start();
include "conn.php";
if(!$_SESSION['username']){
  echo '<script>window.location.href = "login.php";</script>';
  exit();
}
 ?>



<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Rental House Management System</title>
  <link rel="icon" href="rent.ico">

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="home.php">

        <div class="sidebar-brand-text mx-3">Rental House Management System</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="home.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-user fa-cog"></i>
          <span>Profile</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Details:</h6>
            <a class="collapse-item" href="u_personal.php">Personal Information</a>
            <a class="collapse-item" href="u_contact.php">Contact Information</a>
            <a class="collapse-item" href="upay.php">Payment Information</a>
            <a class="collapse-item" href="u_contract.php">Contract</a>
          </div>
        </div>
      </li>
      <hr class="sidebar-divider">




      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link" href="u_change.php">
          <i class="fas fa-fw fa-exchange-alt"></i>
          <span>Change Password</span>
        </a>

      </li>
      <hr class="sidebar-divider">

      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="form_in.php">
          <i class="fas fa-fw fa-clipboard-list"></i>
          <span>Tenant-In form</span>
        </a>

      </li>
      <hr class="sidebar-divider">

      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="pay.php">
          <i class="fas fa-fw fa-dollar-sign"></i>
          <span>Pay Here</span></a>
      </li>

      <!-- Nav Item - Tables -->

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>


          <ul class="navbar-nav ml-auto">

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php

                $uname = @$_SESSION['username'];
                $query = "SELECT * FROM tenant WHERE u_name = '$uname' ";
                $result = mysqli_query($con, $query);
                $row=mysqli_fetch_assoc($result);
                do{
                  $fname = $row['fname'];
                  $lname = $row['lname'];
                  $full = $fname." ".$lname;
                  echo $full;

                  $row = mysqli_fetch_assoc($result);
                }while ($row);
                ?></span>
                <img class="img-profile rounded-circle" src="user.png">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">

                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>

            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">
          <h1 class="h3 mb-2 text-gray-800" align="center">Your Contacts</h1>
          <div class="card shadow mb-4">
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-borderless" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Contact #1</th>

                    </tr>
                  </thead>

                  <tbody>
                    <?php
                    $query = "SELECT * FROM tenant WHERE u_name = '$uname' ";
                    $result1 = mysqli_query($con, $query);
                    $row=mysqli_fetch_assoc($result1);
                    do{
                      $id = $row['tenant_id'];
                      $row = mysqli_fetch_assoc($result1);
                    }while ($row);
                    $sql = "SELECT * FROM tenant_contacts WHERE tenant_id = '$id'";
                    $result = mysqli_query($con, $sql);
                    $row = mysqli_fetch_assoc($result);
                    $total = 0;
                    do{
                      echo '<tr>';
                      echo "<td> Full Name:</td>";
                      echo "<td style = 'color:blue;'>".$row['fname1']. " ".$row['lname1']."</td>";
                      echo '<tr>';

                      echo '<tr>';
                      echo "<td>Occupation:</td>";
                      echo "<td style = 'color:blue;'>".$row['occupation1']."</td>";
                      echo '<tr>';

                      echo '<tr>';
                      echo "<td>Nature of the Relationship:</td>";
                      echo "<td style = 'color:blue;'>".$row['nature1']."</td>";
                      echo '<tr>';

                      echo '<tr>';
                      echo "<td>Phone Number 1:</td>";
                      echo "<td style = 'color:blue;'>".$row['pno1']."</td>";
                      echo '<tr>';
                      if($row['pno2'] == ''){
                        $row['pno2'] = '-';
                      }

                      echo '<tr>';
                      echo "<td>Phone Number 2:</td>";
                      echo "<td style = 'color:blue;'>".$row['pno2']."</td>";
                      echo '<tr>';
                      if($row['e_address1'] == ''){
                        $row['e_address1'] = '-';
                      }

                      echo '<tr>';
                      echo "<td>Email Address:</td>";
                      echo "<td style = 'color:blue;'>".$row['e_address1']."</td>";
                      echo '<tr>';

                      echo '<tr>';
                      echo "<td>Postal Address:</td>";
                      echo "<td style = 'color:blue;'>".$row['p_address1']."</td>";
                      echo '<tr>';

                      echo '<tr>';
                      echo "<td>City</td>";
                      echo "<td style = 'color:blue;'>".$row['city1']."</td>";
                      echo '<tr>';

                      echo '<tr>';
                      echo "<td>Region</td>";
                      echo "<td style = 'color:blue;'>".$row['region1']."</td>";
                      echo '<tr>';

                      echo '<tr>';
                      echo "<td></td>";
                      echo "<td></td>";
                      echo '<tr>';

                      echo '<thead>';
                      echo '<tr>';
                      echo '<th>Contact #2</th>';
                      echo '</tr>';
                      echo '</thead>';

                      echo '<tr>';
                      echo "<td> Full Name:</td>";
                      echo "<td style = 'color:blue;'>".$row['fname2']. " ".$row['lname2']."</td>";
                      echo '<tr>';

                      echo '<tr>';
                      echo "<td>Occupation:</td>";
                      echo "<td style = 'color:blue;'>".$row['occupation2']."</td>";
                      echo '<tr>';

                      echo '<tr>';
                      echo "<td>Nature of the Relationship:</td>";
                      echo "<td style = 'color:blue;'>".$row['nature2']."</td>";
                      echo '<tr>';

                      echo '<tr>';
                      echo "<td>Phone Number 1:</td>";
                      echo "<td style = 'color:blue;'>".$row['pno3']."</td>";
                      echo '<tr>';
                      if($row['pno4'] == ''){
                        $row['pno4'] = '-';
                      }

                      echo '<tr>';
                      echo "<td>Phone Number 2:</td>";
                      echo "<td style = 'color:blue;'>".$row['pno4']."</td>";
                      echo '<tr>';
                      if($row['e_address2'] == ''){
                        $row['e_address2'] = '-';
                      }

                      echo '<tr>';
                      echo "<td>Email Address:</td>";
                      echo "<td style = 'color:blue;'>".$row['e_address2']."</td>";
                      echo '<tr>';

                      echo '<tr>';
                      echo "<td>Postal Address:</td>";
                      echo "<td style = 'color:blue;'>".$row['p_address2']."</td>";
                      echo '<tr>';

                      echo '<tr>';
                      echo "<td>City</td>";
                      echo "<td style = 'color:blue;'>".$row['city2']."</td>";
                      echo '<tr>';

                      echo '<tr>';
                      echo "<td>Region</td>";
                      echo "<td style = 'color:blue;'>".$row['region2']."</td>";

                      echo '<tr>';
                      echo "<td></td>";
                      echo "<td></td>";
                      echo '<tr>';

                      echo '<tr>';
                      echo "<td>Choose below the information you would like to edit: </td>";
                      echo '<tr>';


                      $row = mysqli_fetch_assoc($result);
                    }while ($row);

                    if(isset($_POST['submit'])){

                      $col = $_POST['column'];
                      $edit = $_POST['edit'];

                      $query2 = "UPDATE tenant_contacts SET $col = '$edit' WHERE tenant_id = '$id'";
                      mysqli_query($con, $query2);
                      echo "<script> alert('Edited successfully!!');</script>";
                      echo '<style>body{display:none;}</style>';
                      echo '<script>window.location.href = "u_contact.php";</script>';
                      exit;


                    }


                     ?>
                     <tr>
                     <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method = "POST">
                     <td><select class='custom-select' name= 'column' style= 'width:300px;'>
                     <option disabled>CONTACT #1</option>
                     <option value = 'fname1' >First Name</option>
                     <option value = 'lname1'>Last Name</option>
                     <option value = 'occupation1'>Occupation</option>
                     <option value = 'nature1'>Nature of the Relationship</option>
                     <option value = 'pno1'>Phone Number 1 e.g; 0754******</option>
                     <option value = 'pno2'>Phone Number 2 e.g; 0754******</option>
                     <option value = 'e_address1'>Email Address</option>
                     <option value = 'p_address1'>Postal Address</option>
                     <option value = 'city1'>City</option>
                     <option value = 'region1'>Region</option>
                     <option disabled>CONTACT #2</option>
                     <option value = 'fname2'>First Name</option>
                     <option value = 'lname2'>Last Name</option>
                     <option value = 'occupation2'>Occupation</option>
                     <option value = 'nature2'>Nature of the Relationship</option>
                     <option value = 'pno3'>Phone Number 1 e.g; 0754******</option>
                     <option value = 'pno4'>Phone Number 2 e.g; 0754******</option>
                     <option value = 'e_address2'>Email Address</option>
                     <option value = 'p_address2'>Postal Address</option>
                     <option value = 'city2'>City</option>
                     <option value = 'region2'>Region</option>
                   </select></td>
                     <td><input type='text' class='form-control form-control-user' name='edit'></td>
                     <tr>

                     <tr>
                     <td><input class='btn btn-primary btn-user btn-lg' type='submit' name='submit' value='Edit'></td>
                     </form>
                     <tr>

                  </tbody>
                </table>
              </div>
            </div>
          </div>


        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; RHMS 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="logout.php">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <script>
    if ( window.history.replaceState ) {
      window.history.replaceState( null, null, window.location.href );
    }
  </script>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
