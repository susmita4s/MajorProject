<?php
define('TITLE', 'Success');
define('PAGE', 'RequesterProfile.php');
include('includes/header.php'); 
include('../connection.php');
session_start();
if($_SESSION['is_login']){
 $rEmail = $_SESSION['rEmail'];
} else {
 echo "<script> location.href='RequesterLogin.php'; </script>";
 exit;
}
$sql = "SELECT * FROM submitrequest_tb WHERE request_id = {$_SESSION['myid']}";
$result = $conn->query($sql);
// session_start();

// if(!isset($_SESSION['is_login'])) {
//     echo "<script> location.href='RequesterLogin.php'; </script>";
//     exit;
// }

// $rEmail = $_SESSION['rEmail'];

// // Use a prepared statement
// $stmt = $conn->prepare("SELECT * FROM submitrequest_tb WHERE request_id =?");
// $stmt->bind_param("i", $_SESSION['myid']);
// $stmt->execute();
// $result = $stmt->get_result();

if($result->num_rows == 1) {
    $row = $result->fetch_assoc();
   ?>
    <div class="col-sm-8 mt-5 mx-3 ">
        <table class="table">
            <tbody>
                <tr>
                    <th>Request ID</th>
                    <td><?= htmlspecialchars($row['request_id'])?></td>
                </tr>
                <tr>
                    <th>Name</th>
                    <td><?= htmlspecialchars($row['requester_name'])?></td>
                </tr>
                <tr>
                    <th>Email ID</th>
                    <td><?= htmlspecialchars($row['requester_email'])?></td>
                </tr>
                <tr>
                    <th>Request Info</th>
                    <td><?= htmlspecialchars($row['request_info'])?></td>
                </tr>
                <tr>
                    <th>Request Description</th>
                    <td><?= htmlspecialchars($row['request_desc'])?></td>
                </tr>
                <tr>
                    <td>
                        <form class="d-print-none">
                            <input class="btn btn-danger" type="submit" value="Print" onClick="window.print()">
                        </form>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <?php
} else {
    echo "Failed";
}
?>

<?php
include('includes/footer.php'); 
?>