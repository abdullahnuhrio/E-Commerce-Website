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
.footer {
  background-color: #333;
  color: #fff;
  padding: 40px;
}

.footer-columns {
  display: flex;
  justify-content: space-between;
  margin-bottom: 40px;
}

.footer-column {
  width: 30%;
}

.footer-column h3 {
  margin-bottom: 20px;
  font-size: 24px;
}

.footer-column p, .footer-column ul {
  font-size: 16px;
  line-height: 1.5;
  margin: 0;
  padding: 0;
}

.footer-column ul li {
  list-style: none;
  margin-bottom: 10px;
}

.footer-column a {
  color: #fff;
  text-decoration: none;
  transition : 0.2s;
}

.footer-column a:hover {
  color: #ff5400;
  font-size: 18px;
}

.footer-bottom {
  text-align: center;
  font-size: 16px;
  padding-top: 20px;
  border-top: 1px solid #fff;
  margin-top: 40px;
}


</style>

<!-- css for dashboard data -->


<style>
          body {
            font-family: "Times New Roman", Times, serif;
  margin: 0;
  padding: 0;
}

form {
  max-width: 500px;
  margin: 50px auto;
  padding: 40px;
  background-color: #333;
  border: 1px solid #ccc;
  border-radius: 15px;
}

.hero1 {
    background-image: url('hero.jpg');
    background-size: cover;
    background-position: center;
    text-align: center;
    padding: 1px;
    color: #333;
   
  }
  

/* For Logo Pic */

.navbar-logo p{
  display: flex;
  align-items: center;
  margin-left:80px;
  color:white;
  font-size:30px;
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
  color:white;
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
  transition :0.5s;
}

button[type="submit"]:hover {
  background-color: #fff;
  color: #ff5400;
  border: 1px solid #333;
}

p {
  font-size: 16px;
  margin-top: 20px;
  color:white;
}

a {
  color: #ff5400;
  text-decoration: none;
}

a:hover {
  text-decoration: underline;
}
</style>

<nav class="navbar">
  <div class="navbar-logo">
    <a href="#"><img src="logo.png" alt="Logo"></a>
    <h1 class="navbar-title">My E-commerce Website</h1>
  </div>
  <ul class="navbar-links">
        <li><a href="#" class="active">Dashboard</a></li>
        <li><a href="#">Orders</a></li>
        <li><a href="#">Products</a></li>
        <li><a href="#">Customers</a></li>
        <li><a href="#">Settings</a></li>
      </ul>
  <div class="navbar-login">
    <a href="logout.php">LogOut</a>
  </div>
</nav>
</header>

<!-- for dashboard data -->

    <header class="hero1">

<form>
<div class="navbar-logo">
<p><img src="logo.png" alt="Logo">My E-Comerse Website</p>
</div>
<h1>LOGIN</h1>
<label for="email">Email:</label>
<input type="email" id="email" name="email" required>
<label for="password">Password:</label>
<input type="password" id="password" name="password" required>
<button type="submit">LOGIN</button>
<p>If you dont have account ! <a href="register.php">Register Here</a></p>
</form>
</header>


<footer class="footer">
  <div class="footer-columns">
    <div class="footer-column">
      <h3>About Us</h3>
      <p>Welcome to our e-commerce website! We are dedicated to providing you with the best online shopping experience possible. Whether you're looking for the latest fashion trends, high-tech gadgets, or household essentials, we have everything you need at affordable prices.</p>
    </div>
    <div class="footer-column">
      <h3>Quick Links</h3>
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">Shop</a></li>
        <li><a href="#">About Us</a></li>
        <li><a href="#">Contact Us</a></li>
      </ul>
    </div>
    <div class="footer-column">
      <h3>Contact Us</h3>
      <ul>
        <li><i class="fa fa-map-marker"></i> DC Main Chock, City, Badin,Sindh</li>
        <li><i class="fa fa-phone"></i> 03493864832</li>
        <li><i class="fa fa-envelope"></i> abdullahnuhrio117@gmail.com</li>
      </ul>
    </div>
  </div>
  <div class="footer-bottom">
    <p>&copy; 2023 My E-Commerce Website. All Rights Reserved.</p>
  </div>
</footer>

