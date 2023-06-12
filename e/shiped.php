<?php
$con = mysqli_connect("localhost", "root", "", "shop") or die('fail');
$error = false;
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $id = $_POST['id'];
    $sql = "UPDATE orders SET ostatus = 'Shiped' WHERE oid = '$id'";
    $result = mysqli_query($con,$sql);
    if($result){
        header('location: order.php');

    }else{
        echo "Eror occurs";
    }
}
?>