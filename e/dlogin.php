<?php
$con = mysqli_connect("localhost", "root", "", "shop") or die('fail');
$error = false;
if ($_SERVER['REQUEST_METHOD'] == "POST") {
  $uname = $_POST['uname'];
  $pass = $_POST['pass'];
  $sql = "SELECT * FROM adminTbl WHERE username = '$uname' AND pass = '$pass'";
  $result = mysqli_query($con, $sql);
  $num = mysqli_num_rows($result);
  if ($num > 0) {
    session_start();
    $_SESSION['uname'] = $uname;
    $_SESSION['alogin'] = true;

    header('location: dashboard.php');
  } else {
    $error = "Something went wrong ! try again";
  }
}
?>

<!DOCTYPE html>
<html>

<head>
  <title>ADMIN Login My E-commerce Website</title>
  <link rel="stylesheet" href="Index.css">
  <style>
    body {
      font-family: "Times New Roman", Times, serif;
      margin: 0;
      padding: 0;
    }

    /* login page background picture code */
    .hero1 {
      background-image: url('images/hero.jpg');
      background-size: cover;
      background-position: center;
      text-align: center;
      padding: 100px;
      color: #333;

    }

    form {
      max-width: 500px;
      margin: 0 auto;
      padding: 40px;
      background-color: #333;
      border: 1px solid #ccc;
      border-radius: 15px;
    }

    /* For Logo Pic */
    .navbar-logo p {
      display: flex;
      align-items: center;
      margin-left: 80px;
      color: white;
      font-size: 30px;
    }

    .navbar-logo img {
      height: 50px;
      margin-right: 10px;
    }

    h1 {
      font-size: 36px;
      margin-bottom: 20px;
      color: white;
    }

    h2 {
      font-size: 36px;
      margin-bottom: 20px;
      color: white;
    }

    label {
      font-size: 20px;
      display: block;
      margin-bottom: 10px;
      color: white;
    }

    input[type="text"],
    input[type="email"],
    input[type="password"] {
      width: 100%;
      padding: 10px;
      font-size: 16px;
      margin-bottom: 20px;
      border: 1px solid #ccc;
      border-radius: 8px;
    }

    button[type="submit"] {
      display: block;
      background-color: #ff5400;
      color: #fff;
      padding: 10px 20px;
      border-radius: 20px;
      text-decoration: none;
      font-size: 18px;
      margin-top: 20px;
      border: none;
      cursor: pointer;
      transition: 0.5s;
    }

    button[type="submit"]:hover {
      background-color: #fff;
      color: #ff5400;
      border: 1px solid #333;
    }

    p {
      font-size: 16px;
      margin-top: 20px;
      color: white;
    }

    a {
      color: #ff5400;
      text-decoration: none;
    }

    a:hover {
      text-decoration: underline;
    }
  </style>
</head>

<body>

  <header class="hero1">
    <form method="POST">
      <div class="navbar-logo">
        <p><img src="images/logo.png" alt="Logo">My E-commerce Website</p>
      </div>
      <h1>ADMIN LOGIN</h1>
      <label for="email">Username:</label>
      <input type="text" id="email" name="uname" required>
      <label for="password">Password:</label>
      <input type="password" id="password" name="pass" required>
      <button type="submit">LOGIN</button>
    </form>
  </header>

</body>

</html>