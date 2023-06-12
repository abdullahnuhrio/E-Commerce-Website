<!-- CSS code for the customers section -->
<style>
.customers {
  padding: 50px 0;
  background-color: #ff8800;
  border-radius: 25px;
}
.hero1 {
    background-image: url('../images/hero.jpg');
    background-size: cover;
    background-position: center;
    text-align: center;
    padding: 100px;
    color: #333;
   
  }
.container {
  max-width: 1600px;
  margin: 0 ;
  padding: 0 1px;
}
h2 {
  font-size: 55px;
  margin-bottom: 30px;
  text-align: center;
  color: black;
  text-shadow: 0px 2px whitesmoke;
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
.customer h3 {
  font-size: 34px;
  margin-bottom: 15px;
  color: black;
  text-shadow: 0px 2px whitesmoke;
}
.customer p {
  font-size: 18px;
  line-height: 1.5;
  color:whitesmoke;
}
</style>

<!-- For Product HTML Code -->
<?php include('../dashboard-Random/navbar.php')?>
<header class= "hero1">
<section class="customers">
  <div class="container">
    <h2>Customers</h2>
    <div class="row">
      <div class="col-md-4">
        <div class="customer">
          <img src="customer1.jpg" alt="Customer 1">
          <h3>HAMMAD Memon</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="customer">
          <img src="customer2.jpg" alt="Customer 2">
          <h3>USMAN GHORI</h3>
          <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="customer">
          <img src="customer3.jpg" alt="Customer 3">
          <h3>SHAHID NUHRIO</h3>
          <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="customer">
          <img src="customer4.jpg" alt="Customer 4">
          <h3>SARVECH KHATTI</h3>
          <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="customer">
          <img src="customer5.jpg" alt="Customer 5">
          <h3>AZLAN KHATTI</h3>
          <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
        </div>
      </div>
    </div>
  </div>
</section>
</header>
    <?php include('../dashboard-Random/footer.php')?>