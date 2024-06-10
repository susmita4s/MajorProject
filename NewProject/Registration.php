<?php
include ("connection.php");
if(isset($_REQUEST['rSignup'])){
    //checking for empty fields
    if(($_REQUEST['rname']=="")||($_REQUEST['remail']=="")||($_REQUEST['rpassword']=="")){
$regmsg= '<div class="alert alert-warning mt-2"role="alert">***Please fill all the fields</div>';
    }else{
// verify email to check if it already exist or not
$sql="SELECT r_email from requesterlogin_tb where r_email='".$_REQUEST['remail']."'";
$result=$conn->query($sql);
if($result->num_rows==1){
$regmsg='<div class="alert alert-warning mt-2"role="alert">Email ID already Registered</div>';
}else{
//assigning user's values to variable
$rName=$_REQUEST['rname'];
$rEmail=$_REQUEST['remail'];
$rPassword=$_REQUEST['rpassword'];
$sql="INSERT INTO requesterlogin_tb(r_name,r_email,r_password)VALUES('$rName','$rEmail','$rPassword')";
if($conn->query($sql)==TRUE){
$regmsg='<div class="alert alert-success mt-2 role="alert">Account Successfully created </div>';
}else{
$regmsg='<div class="alert alert-danger mt-2"role="alert">unable to create account</div>';
}
}
}
}

?>

<!-- Registration form -->
<div class="container pt-5" id="Registration">
    <h2 class="text-center">Create an Account</h2>
<div class="row mt-4 mb-4">
    <div class="col-md-6 offset-md-3">
        <form action=""  class="shadow-lg p-4"method="POST">
            <div class="form-group">
                <i class="fas fa-user"></i> <label for="name" class="font-weight-bold pl-2">Name</label><input type="text" class="form-control" placeholder="Enter name" name="rname">
</div>
<div class="form-group">
                <i class="fas fa-user"></i> <label for="email" class="font-weight-bold pl-2">Email</label><input type="email" class="form-control" placeholder="Enter email" name="remail">
                <small class="form-text">We'll never share your email with anyone else..</small>
</div>
<div class="form-group">
                <i class="fas fa-key"></i> <label for="pass" class="font-weight-bold pl-2">New Password</label><input type="password" class="form-control" placeholder="Enter password" name="rpassword">
</div>
<button type="submit" class="btn btn-danger mt-5 btn-inline-block shadow-sm font-weight-bold" name="rSignup">Sign up</button>
<!-- <em style="font-size:12px">Note-By clicking Sign Up,you agree to our Terms,Data Policy and cookie policy</em> -->
<?php if(isset($regmsg)){
echo $regmsg;}
?>
        </form>
    </div>
</div>
</div>