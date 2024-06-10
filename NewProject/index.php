<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- font awesome css -->
    <link rel="stylesheet" href="css/all.min.css">
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css2?family=Times+New+Roman&display=swap" rel="stylesheet">
    <!-- custom css -->
    <link rel="stylesheet" href="css/custom.css">
    
    <title>IT SOLUTION HUB</title>
    <style>
        .remove-vid-marg{
    margin: 0px !important;
    padding:0px;
}
.vid-parent{
    position:relative;
}
video{
    width:100%;
    height:100%;
}
.vid-overlay{
    position:absolute;
    top:0;
    left:0;
    width:100%;
    height:100%;
    background-color:rgba(0,0,0,0.5);
    z-index: 1;
}
.vid-content{
    position:absolute;
    top:35%;
    left:25%;
    z-index: 2;
    text-align:center;
    justify-content:center;
    color:#fff;
}
.bottom-banner{
    color:#fff;
    padding:10px;
}


</style>
</head>
<body>
    <!-- start navigation -->
    <nav>
<nav class="navbar navbar-expand-sm navbar-dark bg-transparent pl-6 fixed-top ">
<a href="index.php" class="navbar-brand">IT SOLUTION HUB</a>
<span class="navbar-text badge bg-transparent text-light"><marquee>Customer Happiness and Satisfaction is matter</marquee></span>

<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myMenu">
    <span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="myMenu">
    <ul class="navbar-nav pl-5 custom-nav">
        <li class="nav-item mx-4" ><a href="index.php" class="nav-link"><b>Home</b></a></li>
        <li class="nav-item mx-4"><a href="#Services" class="nav-link"><b>Services</b></a></li>
        <li class="nav-item mx-4"><a href="#Registration" class="nav-link"><b>Registraton</b></a></li>
        <li class="nav-item mx-4"><a href="Requester/RequesterLogin.php" class="nav-link"><b>Login</b></a></li>
        <li class="nav-item mx-4"><a href="#contact" class="nav-link"><b>Contact</b></a></li>
        <!-- <span class="navbar-text badge text-white mx-5 ">..Welcome to the online service portal
    ...To know more about us <a href="aboutus.php">Click</a> here..</span> -->
    <li class="nav-item mx-4"><a href="aboutus.php" class="nav-link"><b>"Welcome to the online service portal" </b></a></li>

    </ul>
</div>

</nav>  
<!-- start video background -->
<div class="container-fluid remove-vid-marg">
    <div class="vid-parent">
        <video playsinline autoplay muted loop>
            <source src="video/banvid.mp4">
        </video>
        <div class="vid-overlay">

        </div>
    </div>
    <div class=" myclass subtitle mt-10 vid-content">
    <h1 class="text-uppercase text-white font-weight-bold">Welcome To<br>IT SOLUTION HUB</h1>
    <h1 class="text-center">The Ultimate Service Management Destination</h1>
    <p class="font-italic"><i><b>Customer Happiness and Satisfaction is matter.</b></i></p>
    <a href="Requester/RequesterLogin.php" class="btn btn-success mr-6">Login</a>
    <a href="#Registration" class="btn btn-danger mr-8"> Sign up</a>
</div>
</header>
</div>

<!-- end video background -->
<!-- stat text banner -->
<div class="container-fluid bg-dark text-banner">
    <div class="row bottom-banner">
    <div class="col-sm">
            <h5><i class="fa-solid fa-users-gear mr-3"></i> Easy to use</h5>
        </div>
        <div class="col-sm">
            <h5><i class="fa-solid fa-user-gear mr-3"></i> Expert technicians</h5>
        </div>
        <div class="col-sm">
            <h5><i class="fa-regular fa-keyboard mr-3"></i> Lifetime access</h5>
        </div>
        <div class="col-sm">
            <h5><i class="fa-solid fa-gear mr-3"></i> 24/7 accessible</h5>
        </div>
        
        </div>
</div>
    <!-- end text banner -->

<!-- start introduction section -->
<div class="container">
    <div class="jumbotron p-3 mb-2 mt-4 bg-secondary text-black">
        <h3 class="text-center">IT SOLUTION SERVICES</h3>
        <p class=" bg-transparent text-white">Welcome to IT Solutions Hub, your go-to online platform for comprehensive computer services management. In an era where technology is integral to both business operations and personal convenience, IT Solutions Hub stands at the forefront, offering a seamless blend of expertise, innovation, and reliability.IT Solutions Hub is designed to meet the diverse needs of businesses and individuals by providing top-tier IT services and support. Our mission is to simplify the complexities of IT management, ensuring that our clients can focus on their core activities while we handle their technological needs.In the modern digital age, efficient management of computer services is crucial for businesses and individuals alike. Solution Hub is an innovative online portal designed to streamline and optimize your computer service management needs. Our platform offers a comprehensive suite of tools and features that simplify the complexities of IT service management, ensuring your operations run smoothly and efficiently.An online computer service platform is a web-based solution that offers a variety of technical support and IT services to users. These platforms provide assistance with software installation, troubleshooting, system maintenance, and cybersecurity. Users can access expert advice, remote support, and resources to manage and optimize their computing devices. By leveraging these services, individuals and businesses can ensure their technology operates efficiently and securely without the need for in-person technician visits.
</p>
            
    </div>

</div>
<!-- start services section -->
<div class="container text-center border-bottom" id="Services">
   
    <div class="row mt-4">
        <div class="col-sm-4 mb-4">
            <a href="#"><i class="fas fa-tv fa-8x text-success "></i></a>
            <h4 class="mt-4">Hardware Management Solutions</h4>
        </div>
        <div class="col-sm-4 mb-4">
            <a href="#"><i class="fas fa-sliders-h fa-8x text-primary"></i></a>
            <h4 class="mt-4">Remote IT Support</h4>
        </div>
        <div class="col-sm-4 mb-4">
            <a href="#"><i class="fas fa-cogs fa-8x text-info "></i></a>
            <h4 class="mt-4">Maintenance & Fault Repair</h4>
        </div>
    </div>
</div>
<!-- Registration form -->
<?php include('Registration.php'); ?>

<!-- start happy customer -->
<div class="jumbotron bg-dark ">
    <div class="container mb-5">
        <h2 class="text-center text-white mt-5">Feedback of our Happy customers</h2>
        <div class="row  mt-8">
            <!-- column1 -->
            <div class="col-lg-3 col-sm-5">
                <div class="card shadow-lg mb-3">
<div class="card-body text-center">
    <img src="images/avt8.jpg" class="img-fluid" style="border-radius:1000px;" alt="avt8">
    <h4 class="card-title">Ziya s. </h4>
    <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odio, adipisci</p>
</div>
                </div>

            </div> 
            <!-- column2 -->
            <div class="col-lg-3 col-sm-6">
                <div class="card shadow-lg mb-1">
<div class="card-body text-center">
    <img src="images/avt7.jpg" class="img-fluid" style="border-radius:1000px;" alt="avt7">
    <h4 class="card-title">Priya A. </h4>
    <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odio, adipisci</p>
</div>
                </div>

            </div>
            <!-- column3 -->
            <div class="col-lg-3 col-sm-6">
                <div class="card shadow-lg mb-2">
<div class="card-body text-center">
    <img src="images/avt6.jpg" class="img-fluid" style="border-radius:800px;" alt="avt6">
    <h4 class="card-title">Saurav G. </h4>
    <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odio, adipisci</p>
</div>
                </div>

            </div>
            <!-- column4 -->
            <div class="col-lg-3 col-sm-6">
                <div class="card shadow-lg mb-2">
<div class="card-body text-center">
    <img src="images/avt9.jpg" class="img-fluid" style="border-radius:800px;" alt="avt9">
    <h4 class="card-title">Samual s. </h4>
    <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odio, adipisci</p>
</div>
                </div>

            </div>
        </div>
    </div>
    
</div>
<!-- start contact us -->
<div class="container shadow-lg p-6"id="contact">
    <h2 class="text-center mb-4">Contact us</h2>
    <div class="row">
       <!-- contact us link -->
       <?php include 'Contact.php'; ?>

    <div class="col-md-4 text-center text-black">
        <strong>Headquarter:</strong><br>
        IT SOLUTION HUB ltd,<br>
        Dulmi,Purulia<br>
        West Bengal,India<br>
        phone:+0000000<br>
        <a href="#" target="_blank">www.itsolutionhub.com</a><br>
        <br><br>
        <strong>Branch:</strong><br>
        IT SOLUTION HUB ltd,<br>
        Nadiha,Bankura<br>
        West Bengal,India<br>
        phone:+1111111<br>
        <a href="#" target="_blank">www.itsolutionhub.com</a><br>
    </div>
</div>
</div>
<!-- start footer -->

<footer class="container-fluid bg-dark mt-5 text-white">
    <div class="container">
        <div class="row py-3">
            <div class="col-md-6">
            <span class="pr-2">Follow us</span>
            <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-facebook-f"></i></a>
            <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-twitter"></i></a>

            <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-instagram"></i></a>
            <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-youtube"></i></a>
            <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-rss"></i></a>
        </div>

        <div class="col-md-6 text-right">
            <small>Designed by <b class="text-primary">SMS</b> &copy; 2024</small>
            <small class="ml-2"><a href="Admin/login.php">Admin Login</a></small>

</div>
</div>

</div>
</footer>
<!-- javascript -->
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/all.min.js"></script>
</body>
</html>