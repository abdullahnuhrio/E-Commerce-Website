<!-- CSS code for the customers section -->
<style>
.customers {
  padding: 50px 0;
  background-color: #333;
  border-radius: 25px;
}
.hero1 {
    background-image: url('images/hero.jpg');
    background-size: cover;
    background-position: center;
    text-align: center;
    padding: 50px;
    color: whitesmoke;
   
  }
.container {
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 15px;
}
h2 {
  font-size: 55px;
  margin-bottom: 30px;
  text-align: center;
  color: whitesmoke;
  text-shadow: 0px 1.5px blue;
}
.row {
  display: flex;
  margin: 0 1px;
}
.col-md-4 {
  width: 33.33%;
  padding: 0 2px;
  margin-bottom: 20px;
}
.customer {
  text-align: center;
}
.customer img {
  max-width: 100%;
  margin-bottom: 15px;
  border-radius: 15px;
  width: 6in; /* or any other desired width */
  height: 2.5in; /* or any other desired height */
  object-fit: cover;
}

.customer img:hover
{
  max-width: 100%;
  margin-bottom: 15px;
  border-radius: 15px;
  width: 6.2in; /* or any other desired width */
  height: 2.7in; /* or any other desired height */
  object-fit: cover;
  transition : 3s;
}
.customer h3 {
  font-size: 34px;
  margin-bottom: 15px;
  color: whitesmoke;
  text-shadow: 0px 1px blue;
}
.customer p {
  font-size: 18px;
  line-height: 1.5;
  color: whitesmoke;
  text-shadow: 0px 1px black;
}
</style>

<!-- For Product HTML Code -->
<?php include('dashboard-Random/navbar.php')?>
<header class= "hero1">

<?php
if(isset($_SESSION['uname']) && isset($_SESSION['alogin'])){
  echo '<section class="customers">
  <div class="container">
    <h2>Customers</h2>
    <div class="row">
      <div class="col-md-4">
        <div class="customer">
          <img src="images/customer1.jpg" alt="Customer 1">
          <h3>HAMMAD MEMON</h3>
          <p>LIVE IN : BADIN<br>HOMETOWN : BADIN<br>WORK : STUDENT<br>STUDY : SINDH UNIVERSITY<br>DEPARTMENT : COMPUTER SCIENCE</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="customer">
          <img src="images/customer2.jpg" alt="Customer 2">
          <h3>USMAN GHORI</h3>
          <p>LIVE IN : BADIN<br>HOMETOWN : BADIN<br>WORK : STUDENT<br>STUDY : SINDH UNIVERSITY<br>DEPARTMENT : COMPUTER SCIENCE</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="customer">
          <img src="images/customer3.jpg" alt="Customer 3">
          <h3>SHAHID NUHRIO</h3>
          <p>LIVE IN : BADIN<br>HOMETOWN : BADIN<br>WORK : STUDENT<br>STUDY : SINDH UNIVERSITY<br>DEPARTMENT : COMPUTER SCIENCE</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="customer">
          <img src="images/customer4.jpg" alt="Customer 4">
          <h3>SARVECH REHMANI</h3>
          <p>LIVE IN : BADIN<br>HOMETOWN : BADIN<br>WORK : STUDENT<br>STUDY : SINDH UNIVERSITY<br>DEPARTMENT : COMPUTER SCIENCE</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="customer">
          <img src="images/customer5.jpg" alt="Customer 5">
          <h3>AZLAN KHATTI</h3>
          <p>LIVE IN : BADIN<br>HOMETOWN : BADIN<br>WORK : STUDENT<br>STUDY : SINDH UNIVERSITY<br>DEPARTMENT : COMPUTER SCIENCE</p>
        </div>
      </div>
    </div>
  </div>
</section>';
}else{
echo '<h3>Login to Continue</h3>';
}
?>

</header>
    <?php include('dashboard-Random/footer.php')?>