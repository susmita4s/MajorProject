<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- bootstrap css -->
<link rel="stylesheet" href="../css/bootstrap.min.css">
<!-- font awesome css -->
<link rel="stylesheet" href="../css/all.min.css">
<!-- custom css -->
<link rel="stylesheet" href="../css/custom.css">
    <title><?php echo TITLE; ?></title>


</head>
<body>
    <!-- Top navbar -->
    <nav class="navbar navbar-dark fixed-top bg-danger flex-md-nowrap p-0 shadow "><a class="navbar-brand col-sm-3 col-md-2 mr-0 text-center"href="RequesterProfile.php">IT SOLUTION HUB</a></nav>

<div class="container-fluid mb-5" style="margin-top:40px;">
    <div class="row">
        <!-- side bar start -->
        <nav class="col-sm-2 sidebar py-4 d-print-none"
            style="background-color:#EF9A9A;">
            <div class="sidebar-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link <?php  if(PAGE=='RequesterProfile'){echo 'active';}?> "style="color:black;"href="RequesterProfile.php"><i class="fas fa-user"></i><strong> Profile</strong></a>

                    </li>
                
                <li class="nav-item">
                        <a class="nav-link <?php  if(PAGE=='SubmitRequest'){echo 'active';}?> " style="color:black;"href="SubmitRequest.php"><i class="fab fa-accessible-icon" style="color:black;"></i><strong>Submit Request</strong></a>

                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php  if(PAGE=='CheckStatus'){echo 'active';}?>" style="color:black;"href="CheckStatus.php"><i class="fas fa-align center" style="color:black;"></i><strong>Service  status</strong></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php  if(PAGE=='ChangePassword'){echo 'active';}?>" style="color:black;"href="ChangePassword.php"><i class="fas fa-key" style="color:black;"></i><strong>Change Password</strong></a>

                    </li>
                    <li class="nav-item">
                        <a class="nav-link " style="color:black;"href="../logout.php" ><i class="fas fa-sign-out-alt" style="color:black;"></i><strong>Logout</strong></a>
                    </li>
</ul>
            </div>
</nav> <!--End of side  bar-->







