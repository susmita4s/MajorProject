<?php
define('TITLE', 'Submit Request');
define('PAGE', 'SubmitRequest');

include('includes/header.php'); 
include('../connection.php');
session_start();
 if($_SESSION['is_login']){
  $rEmail = $_SESSION['rEmail'];
 } else {
  echo "<script> location.href='RequesterLogin.php'; </script>";
 }
 if(isset($_REQUEST['submitrequest'])){
  // checking empty fields
  if(($_REQUEST['requestinfo'] == "") || ($_REQUEST['requestdesc'] == "") || ($_REQUEST['requestername'] == "") || ($_REQUEST['requesteradd1'] == "") || ($_REQUEST['requesteradd2'] == "") || ($_REQUEST['requestercity'] == "") || ($_REQUEST['requesterstate'] == "") || ($_REQUEST['requesterzip'] == "") || ($_REQUEST['requesteremail'] == "") || ($_REQUEST['requestermobile'] == "") || ($_REQUEST['requestdate'] == "")){
    $msg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert"> Fill All Fileds </div>';

  }else{
// Assigning User Values to Variable
$rinfo = $_REQUEST['requestinfo'];
$rdesc = $_REQUEST['requestdesc'];
$rname = $_REQUEST['requestername'];
$radd1 = $_REQUEST['requesteradd1'];
$radd2 = $_REQUEST['requesteradd2'];
$rcity = $_REQUEST['requestercity'];
$rstate = $_REQUEST['requesterstate'];
$rzip = $_REQUEST['requesterzip'];
$remail = $_REQUEST['requesteremail'];
$rmobile = $_REQUEST['requestermobile'];
$rdate = $_REQUEST['requestdate'];
$sql = "INSERT INTO submitrequest_tb(request_info, request_desc, requester_name, requester_add1, requester_add2, requester_city, requester_state, requester_zip, requester_email, requester_mobile, request_date) VALUES ('$rinfo','$rdesc', '$rname', '$radd1', '$radd2', '$rcity', '$rstate', '$rzip', '$remail', '$rmobile', '$rdate')";
if($conn->query($sql) == TRUE){
  $genid=mysqli_insert_id($conn);
  $msg = '<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert"> Request Submitted Successfully </div>';
  $_SESSION['myid']=$genid;
  echo "<script> location.href='RequestSuccess.php' </script>";
} else {
  // below msg display on form submit failed
  $msg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert"> Unable to Submit Your Request </div>';
 }
  }
 }
?>
<div class="col-sm-6 mt-4 mx-5">
  <form class="mx-6" action="" method="POST">
    <div class="form-group mt-4">
      <label for="inputRequestInfo"><b>Request Info</b></label>
      <input type="text" class="form-control" id="inputRequestInfo" placeholder="Request Info" name="requestinfo">
    </div>
    <div class="form-group">
      <label for="inputRequestDescription"><b>Description</b></label>
      <input type="text" class="form-control" id="inputRequestDescription" placeholder="Write Description" name="requestdesc">
    </div>
    <div class="form-group">
      <label for="inputName"><b>Name</b></label>
      <input type="text" class="form-control" id="inputName" placeholder="Rahul" name="requestername">
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputAddress"><b>Address Line 1</b></label>
        <input type="text" class="form-control" id="inputAddress" placeholder="House No. 123" name="requesteradd1">
      </div>
      <div class="form-group col-md-6">
        <label for="inputAddress2"><b>Address Line 2</b></label>
        <input type="text" class="form-control" id="inputAddress2" placeholder="Railway Colony" name="requesteradd2">
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputCity"><b>City</b></label>
        <input type="text" class="form-control" id="inputCity" name="requestercity">
      </div>
      <div class="form-group col-md-4">
        <label for="inputState"><b>State</b></label>
        <input type="text" class="form-control" id="inputState" name="requesterstate">
      </div>
      <div class="form-group col-md-3">
        <label for="inputZip"><b>Zip</b></label>
        <input type="text" class="form-control" id="inputZip" name="requesterzip" onkeypress="isInputNumber(event)">
      </div>
    </div>

    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputEmail"><b>Email</b></label>
        <input type="email" class="form-control" id="inputEmail" name="requesteremail">
      </div>
      <div class="form-group col-md-4">
        <label for="inputMobile"><b>Mobile</b></label>
        <input type="text" class="form-control" id="inputMobile" name="requestermobile" onkeypress="isInputNumber(event)">
      </div>
      <div class="form-group col-md-2 mb-4">
        <label for="inputDate"><b>Date</b></label>
        <input type="date" class="form-control" id="inputDate" name="requestdate">
      </div>
</div>
    

    <button type="submit" class="btn btn-danger mx-0" name="submitrequest">Submit</button>
    <button type="reset" class="btn btn-secondary">Reset</button>
</div>
  </form>
  <?php if(isset($msg)) {echo $msg; } ?>

</div>
</div>
</div>
<!-- only number for input fields -->
<script>
  function isInputNumber(evt) {
    var ch = String.fromCharCode(evt.which);
    if (!(/[0-9]/.test(ch))) {
      evt.preventDefault();
      }
    }
      </script>
<?php
include('includes/footer.php'); 
$conn->close();
?>