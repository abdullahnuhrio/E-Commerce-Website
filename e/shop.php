<!-- Shop portion CSS -->
<style>
  .shop {
    padding: 10px;
    text-align: center;
    font-size: 30px;
  }

  .hero1 {
    background-image: url('images/hero.jpg');
    background-size: cover;
    background-position: center;
    text-align: center;
    justify-content: center;
    padding: 100;
    color: #333;

  }

  .fontss {
    font-size: 40px;
    text-shadow: 0px 2px #ccc;
  }

  .product-list {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    margin-top: 30px;
  }

  .product {
    background-color: #333;
    color: whitesmoke;
    width: 300px;
    padding: 20px;
    border: 1px solid #ddd;
    margin : 10px;
    border-radius: 10px;
    box-shadow  : whitesmoke;
    text-align: center;
  }

  .product1 {
    /* background-color: #333; */
    color: #333;
    padding: 20px;
    /* border: 1px solid #ddd; */
    margin : 10px;
    border-radius: 10px;
    /* box-shadow  : whitesmoke; */
    text-align: center;
  }
  .product img {
    width: 100%;
    height: 200px;
    object-fit: cover;
    border-radius: 10px;
    margin-bottom: 20px;
    
  }

  .products h1 {
    font-size: 70px;
    margin-bottom: 10px;
    text-shadow : 0px 2px whitesmoke;
  }

  .product p {
    font-size: 20px;
    margin-bottom: 20px;
  }

  .add-to-cart {
    background-color: whitesmoke;
    color: #333;
    border: none;
    border-radius: 10px;
    padding: 10px 20px;
    font-size: 16px;
    cursor: pointer;
  }

  .add-to-cart:hover {
    background-color: #ff0000;
    transition: 0.7s;
  }
</style>
<!-- Shop Portion Html -->

<?php include('Random/navbar.php') ?>
<header class="hero1">
  <?php
  if (isset($_SESSION['email']) && isset($_SESSION['login'])) {
    echo '<section class="shop">
  <div class = "fontss"> 
    <h1>Our Products</h1>
  </div>
    <div class="product-list">
      <div class="product">
        <img src="images/product1.jpg" alt="Product 1">
        <h3>air max 97 stan shoe</h3>
        <p class="price">$499.99</p>
        <form action="cbuy.php" method="post">
          <input type="hidden" name="cemail" value="'.$_SESSION['email'].'">
          <input type="hidden" name="pname" value="air max 97 stan shoe">
          <input type="hidden" name="price" value="499.99">
          <button type="submit" class="add-to-cart" value="buy">Buy Now</button>
        </form>
      </div>
      <div class="product">
        <img src="images/product2.jpg" alt="Product 2">
        <h3>The Apple Watch Ultra</h3>
        <p class="price">$599.99</p>
        <form action="cbuy.php" method="post">
          <input type="hidden" name="cemail" value="'.$_SESSION['email'].'">
          <input type="hidden" name="pname" value="The Apple Watch Ultra">
          <input type="hidden" name="price" value="599.99">
          <button type="submit" class="add-to-cart" value="buy">Buy Now</button>
        </form>
      </div>
      <div class="product">
        <img src="images/product3.jpg" alt="Product 3">
        <h3>Samsung Galaxy S23 Ultra</h3>
        <p class="price">$999.99</p>
        <form action="cbuy.php" method="post">
          <input type="hidden" name="cemail" value="'.$_SESSION['email'].'">
          <input type="hidden" name="pname" value="Samsung Galaxy S23 Ultra">
          <input type="hidden" name="price" value="999.99">
          <button type="submit" class="add-to-cart" value="buy">Buy Now</button>
        </form>
      </div>
    </div>
  </section>';
  } 
  else {
    echo '<div class="products">
  <h1>Login to continue</h1>
</div>';
  }

  ?>


</header>
<div id="foot">
  <?php include('Random/footer.php') ?>

</div>