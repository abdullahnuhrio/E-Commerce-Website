<?php
$email = $_POST['cemail'];
$pname = $_POST['pname'];
$price = $_POST['price'];
?>
<style>
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

    h1 {
      font-size: 36px;
      margin-bottom: 20px;
      color: white;
      text-shadow: 0px 2px #333;
    }

    button[type="submit"] {
    
      background-color: #ff5400;
      color: #fff;
      padding: 10px 20px;
      border-radius: 20px;
      /* text-decoration: none; */
      margin: 10px;
      border: none;
      cursor: pointer;
      transition: 0.5s;
    }
    .center{
      margin: auto;
    }

    button[type="submit"]:hover {
      background-color: #fff;
      color: #ff5400;
      border: 1px solid #333;
    }

  </style>
</style>
<?php include('Random/navbar.php') ?>
  <header class="hero1">
  <form action="buy.php" method="POST">
  <h1>Confirm your order</h1>
  <div class="navbar-logo">
  <input type="hidden" name="cemail" value="<?php echo $email ?>">
    <input type="hidden" name="pname" value="<?php echo $pname ?>">
    <input type="hidden" name="price" value="<?php echo $price ?>">
    <div class="center">
      <button type="submit" name="confirm" class="add-to-cart" value="YES">YES</button>
      <button type="submit" name="confirm" class="add-to-cart" value="NO">NO</button>
    </div>
</div>
  </form>
</header>
  <?php include('Random/footer.php') ?>