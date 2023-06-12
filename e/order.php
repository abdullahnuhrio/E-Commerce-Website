<style>
  body {
    margin: 0;
    padding: 0;
  }

  .hero1 {
    font-family: "Times New Roman", Times, serif;
    background-image: url('images/hero.jpg');
    background-size: cover;
    background-position: center;
    text-align: center;
    padding: 100px;
    color: #333;

  }


  .hero1 h2 {
    margin-top: 0px;
    font-size: 60px;
    margin-bottom: 10px;
    text-shadow: 0px 2px whitesmoke;
  }

  .orders {
    background-color: #ff8800;
    margin: 40px auto;
    width: 100%;
    border-radius: 5px;
  }

  .orders table {
    width: 100%;
    border-collapse: collapse;
  }

  .orders th {
    padding: 12px;
    text-align: left;
    border-bottom: 1px solid #333;
    font-size: 22px;
  }

  .orders td {
    color: black;
    padding: 10px;
    text-align: left;
    border-bottom: 1px solid #333;
  }

  .orders th {
    background-color: #f2f2f2;
    font-weight: normal;
  }

  .orders tr:hover {
    background-color: #f5f5f5;
    font-size: 17px;
    transition: 0.7s;
  }
</style>

<!-- html code for order details -->

<?php include('dashboard-Random/navbar.php') ?>



<div class="hero1">
  <h2>Orders</h2>
  <?php
  $con = mysqli_connect("localhost", "root", "", "shop") or die('fail');
  $sql = "select * from orders";
  $result = mysqli_query($con, $sql);

  if (isset($_SESSION['uname']) && isset($_SESSION['alogin'])) {
  ?>
    <div class="orders">
      <table>
        <thead>
          <tr>
            <th>Order ID</th>
            <th>Date</th>
            <th>Customer Name</th>
            <th>Product Name</th>
            <th>Price</th>
            <th>Status</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php while($row = mysqli_fetch_assoc($result)) {?>
          <tr>
            <td><?php echo $row['oid']; ?></td>
            <td><?php echo $row['odate']; ?></td>
            <td><?php echo $row['cemail']; ?></td>
            <td><?php echo $row['pname']; ?></td>
            <td>$<?php echo $row['price']; ?></td>
            <td><?php if($row['ostatus'] == ""){ echo "Processing";}else{ echo $row['ostatus']; }?></td>
            <td>
              <form action="shiped.php" method="POST">
              <input type="hidden" name="id" value="<?php echo $row['oid']; ?>">
              <input type="submit" value="Shiped" <?php if($row['ostatus'] == "Shiped"){ echo 'disabled'; } ?>>

              </form>
            </td>
          </tr>
          <?php }?>
        </tbody>
      </table>
    </div>
  <?php
  } else {
    echo '<h1>Login to continue</h1>';
  }
  ?>
</div>
<?php include('dashboard-Random/footer.php') ?>