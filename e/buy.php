<?php
$date = date("Y/m/d");
$email = $_POST['cemail'];
$pname = $_POST['pname'];
$price = $_POST['price'];

$con = mysqli_connect("localhost", "root", "", "shop") or die('fail');
  if($_SERVER['REQUEST_METHOD'] == 'POST'){

    if($_POST['confirm'] == "YES"){
      $sql = "INSERT INTO orders (odate,cemail,pname,price,ostatus) VALUES('$date','$email','$pname','$price','')";
      $result = mysqli_query($con,$sql);  
      session_start();
      $_SESSION['odone'] = true;
      header('Location: shop.php');
    }elseif($_POST['confirm'] == "NO"){
      header('Location: shop.php');
    }
  }
?>