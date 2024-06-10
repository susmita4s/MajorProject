<?php
define('TITLE', 'Success');
define('PAGE', 'Success');

include('includes/header.php'); 
include('../connection.php');
session_start();

if(!isset($_SESSION['is_adminlogin'])) {
    echo "<script> location.href='login.php'; </script>";
    exit;
}

$aEmail = $_SESSION['aEmail'];

// Use a prepared statement
$stmt = $conn->prepare("SELECT * FROM customer_tb WHERE custid =?");
$stmt->bind_param("i", $_SESSION['myid']);
$stmt->execute();
$result = $stmt->get_result();

if($result->num_rows == 1) {
    $row = $result->fetch_assoc();
   ?>
    <div class="col-sm-8 mt-5 mx-3 ">
        <h3 class="text-center">Customer Bill</h3>
        <table class="table">
            <tbody>
                <tr>
                    <th>Customer ID</th>
                    <td><?= htmlspecialchars($row['custid'])?></td>
                </tr>
                <tr>
                    <th>Customer Name</th>
                    <td><?= htmlspecialchars($row['custname'])?></td>
                </tr>
                <tr>
                    <th>Address</th>
                    <td><?= htmlspecialchars($row['custadd'])?></td>
                </tr>
                <tr>
                    <th>Product</th>
                    <td><?= htmlspecialchars($row['cpname'])?></td>
                </tr>
                <tr>
                    <th>Quantity</th>
                    <td><?= htmlspecialchars($row['cpquantity'])?></td>
                </tr>
                <tr>
                    <th>Price Each</th>
                    <td><?= htmlspecialchars($row['cpeach'])?></td>
                </tr>
                <tr>
                    <th>Total Cost</th>
                    <td><?= htmlspecialchars($row['cptotal'])?></td>
                </tr>
                <tr>
                    <th>Date</th>
                    <td><?= htmlspecialchars($row['cpdate'])?></td>
                </tr>
                <tr>
                    <td>
                        <form class="d-print-none">
                            <input class="btn btn-danger" type="submit" value="Print" onClick="window.print()">
                        </form>
                    </td>
                    <td>
                        <a href="assets.php" class="btn btn-secondary d-print-none">Close</a>
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
$conn->close();
?>