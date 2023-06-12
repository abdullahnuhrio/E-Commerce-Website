<style> 
body {
    font-family: "Times New Roman", Times, serif;
    margin: 0;
    padding: 0;
  }

  .hero1 {
    background-image: url('images/hero.jpg');
    background-size: cover;
    background-position: center;
    text-align: center;
    justify-content:center;
    padding: 100px;
    color: #333;
  }
   .fontss
   {
    font-size:40px;
    text-shadow: 0px 2px #ccc;
   }
  .main-content {
  margin-top: 100px;
  margin-left: 270px;
  padding: 20px;
}

.dashboard-cards {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 40px;
}

.card {
  background-color: #fff;
  border-radius: 10px;
  box-shadow: 0 2px 4px rgba(0,0,0,0.1);
  width: 290px;
  padding: 20px;
}

.card h3 {
  margin: 0;
  font-size: 40px;
}

.card p {
  margin: 10px 0 0 0;
  font-size: 36px;
  font-weight: bold;
}

.dashboard-charts {
  margin-top: 40px;
}

.dashboard-charts h1 {
  font-size: 50px;
  margin-bottom: 20px;
}


</style>

<?php 
$con = mysqli_connect("localhost","root","","shop") or die('fail');
$pSql = "select sum(price) as p from orders";
$pResult = mysqli_query($con,$pSql);

$cSql = "select count(oid) as id from orders";
$cResult = mysqli_query($con,$cSql);

$customerSql = "select count(cid) as id from customers";
$customerResult = mysqli_query($con,$customerSql);

include('dashboard-Random/navbar.php');

?>
<header class="hero1">   
  <?php
  
    if(isset($_SESSION['uname']) && isset($_SESSION['alogin'])){
      ?>
      <div class = "fontss"> 
        <h1>Products Sales And Vissitors</h1>
        </div>
        <div class="dashboard-cards">
          <div class="card">
            <h3>Total Sales</h3>
            <?php while($row = mysqli_fetch_assoc($pResult)) { ?>
            <p>$<?php echo $row['p']; ?></p>
            <?php } ?>
          </div>
          <div class="card">
            <h3>New Orders</h3>
            <?php while($row = mysqli_fetch_assoc($cResult)) { ?>
            <p><?php echo $row['id']; ?></p>
            <?php } ?>
          </div>
          <div class="card">
            <h3>Customers</h3>
            <?php while($row = mysqli_fetch_assoc($customerResult)) { ?>
            <p><?php echo $row['id']; ?></p>
            <?php } ?>
          </div>
        </div>
        <div class="dashboard-charts">
          <h1>Sales Chart</h1>
      </div>

    <?php
    }else{
      echo '<div class = "fontss"> 
      <h1>Login to continue</h1>
      </div>';
    }
  ?>
       
</header>
    <?php include('dashboard-Random/footer.php') ?>