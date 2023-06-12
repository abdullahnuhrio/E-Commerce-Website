<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
  <style> 
body {
    font-family: "Times New Roman", Times, serif;
    margin: 0;
    padding: 0;
  }

main {
  background-image: url('../images/hero.jpg');
    background-size: cover;
    background-position: center;
    text-align: center;
    justify-content:center;
    padding: 100px;
    color: #333;
}

h1 {
	font-size: 50px;
  margin-top: 0px;
	margin-bottom: 10px;
}

section {
	display: flex;
	flex-wrap: wrap;
	justify-content: space-between;
	align-items: center;
  
}

.card {
	padding: 20px;
	margin-bottom: 20px;
	border-radius: 5px;
	flex-basis: calc(33.33% - 20px);
	box-sizing: border-box;
	position: relative;
	overflow: hidden;
	box-shadow: 0 5px 15px rgba(0,0,0,.1);
  background-color: #ff8800;
}

.card:hover img {
	transform: scale(1.1);
}

.card img {
	width: 100%;
	transition: all .3s ease-in-out;
}

.card h2 {
	font-size: 24px;
	margin-top: 10px;
	margin-bottom: 5px;
}

.card p {
	font-size: 18px;
	color: #666;
	margin-bottom: 10px;
}

.card button {
	background-color: #333;
	color: #fff;
	padding: 10px 20px;
	border: none;
	border-radius: 5px;
	cursor: pointer;
	position: absolute;
	bottom: 20px;
	right: 20px;
}

.card button:hover {
	background-color: #ff8800;;
	color: #333;
}

@media screen and (max-width: 768px) {
	section {
		flex-direction: column;
		align-items: center;
	}

	.card {
		flex-basis: 100%;
	}
}


  /* For Details of Chart */

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
</head>
<body>
<?php include('../dashboard-Random/navbar.php') ?>
	<main>

  <h1>Dashboard</h1>

  <header class="hero1">  	
     <section>
			<div class="card">
				<img src="https://via.placeholder.com/500x300" alt="Product">
				<h1>Product 1</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque eget lorem a arcu viverra iaculis. Donec id justo eu mi consequat dictum.</p>
				<button>View Details</button>
			</div>
			<div class="card">
				<img src="https://via.placeholder.com/500x300" alt="Product">
				<h1>Product 2</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque eget lorem a arcu viverra iaculis. Donec id justo eu mi consequat dictum.</p>
				<button>View Details</button>
			</div>
			<div class="card">
				<img src="https://via.placeholder.com/500x300" alt="Product">
				<h1>Product 3</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque eget lorem a arcu viverra iaculis. Donec id justo eu mi consequat dictum.</p>
				<button>View Details</button>
			</div>
		</section>

       <div class = "fontss"> 
      <h1>Products Sales And Vissitors</h1>
      </div>
      <div class="dashboard-cards">
        <div class="card">
          <h3>Total Sales</h3>
          <p>$50,000</p>
        </div>
        <div class="card">
          <h3>New Orders</h3>
          <p>20</p>
        </div>
        <div class="card">
          <h3>Visitors</h3>
          <p>1,000</p>
        </div>
      </div>
      <div class="dashboard-charts">
        <h1>Sales Chart</h1>
    </div>
</header>
	</main>
  <?php include('../dashboard-Random/footer.php') ?>
</body>
</html>

    