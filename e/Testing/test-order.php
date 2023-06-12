<style>
.hero1 {
    background-image: url('../images/hero.jpg');
    background-size: cover;
    background-position: center;
    text-align: center;
    padding: 100px;
    color: #333;
   
  }

.orders {
  background-color: #ff8800;
  margin: 50px auto;
  width: 80%;
  border-radius:10px;
}

.orders h2 {
  margin-bottom: 20px;
}

.orders table {
  width: 100%;
  border-collapse: collapse;
}

.orders th,
.orders td {
  padding: 10px;
  text-align: left;
  border-bottom: 1px solid #333;
}

.orders th {
  background-color: #f2f2f2;
  font-weight: normal;
}

.orders td:first-child {
  font-weight: bold;
}

.orders tr:hover {
  background-color: #f5f5f5;
}

</style>

<?php include('../dashboard-Random/navbar.php')?>
<div class="hero1">
<div class="orders">
  <h2>Orders</h2>
  <table>
    <thead>
      <tr>
        <th>Order ID</th>
        <th>Date</th>
        <th>Customer Name</th>
        <th>Product Name</th>
        <th>Price</th>
        <th>Status</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>001</td>
        <td>2023-05-01</td>
        <td>John Doe</td>
        <td>Product 1</td>
        <td>$19.99</td>
        <td>Processing</td>
      </tr>
      <tr>
        <td>002</td>
        <td>2023-05-02</td>
        <td>Jane Smith</td>
        <td>Product 2</td>
        <td>$29.99</td>
        <td>Shipped</td>
      </tr>
      <!-- more orders here -->
    </tbody>
  </table>
</div>
</div>
<?php include('../dashboard-Random/footer.php')?>
