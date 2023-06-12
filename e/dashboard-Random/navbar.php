<style>
.navbar {
  background-color: #333;
  height: 60px;
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 0 20px;
}

.navbar-logo {
  display: flex;
  align-items: center;
}

.navbar-logo img {
  height: 40px;
  margin-right: 10px;
}

.navbar-title {
  color: #fff;
  margin: 0;
  font-size: 24px;
}

.navbar-links {
  list-style: none;
  margin: 0;
  padding: 0;
  display: flex;
  align-items: center;
}

.navbar-links li {
  margin: 0 20px;
}

.navbar-links a {
  color: #fff;
  text-decoration: none;
  font-size: 18px;
  transition:0.2s;
}

.navbar-links a:hover {
  color: #ff5400;
  font-size: 20px;
}

.navbar-login  a {
  background-color: #ff5400;
  color: #fff;
  border-radius: 8px;
  border: none;
  padding: 10px 20px;
  font-size: 18px;
  cursor: pointer;
  text-decoration:none;
}
.navbar-login a:hover {
  background-color: #ff732e;

}

@media screen and (max-width: 768px) {
  .navbar-links {
    display: none;
  }
}

</style>

<nav class="navbar">
  <div class="navbar-logo">
  <p><img src="images/logo.png" alt="Logo"> <h1 class="navbar-title">My E-commerce Website</h1></p>
   
  </div>
  <ul class="navbar-links">
        <li><a href="dashboard.php" class="active">Dashboard</a></li>
        <li><a href="order.php">Orders</a></li>
        <li><a href="customers.php">Customers</a></li>
      </ul>
      <?php
    session_start();
    if(isset($_SESSION['uname']) && isset($_SESSION['alogin'])){
        echo '<div class="navbar-login">
        <a href="dlogout.php">Logout</a>
      </div>';
    }else{
      echo '<div class="navbar-login">
      <a href="dlogin.php">login</a>
    </div>';
    }
    ?>
      
</nav>


