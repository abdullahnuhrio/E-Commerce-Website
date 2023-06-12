<!DOCTYPE html>
<html>
  <head>
    <title>My E-commerce Website</title>
    <link rel="stylesheet" href="Index.css">
    <style>
        body {
          font-family: "Times New Roman", Times, serif;
  margin: 0;
  padding: 0;
}

form {
  max-width: 500px;
  margin: 0 auto;
  padding: 40px;
  background-color: #333;
  border: 1px solid #ccc;
  border-radius: 15px;
}

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
  color : white;
}

h2 {
  font-size: 36px;
  margin-bottom: 20px;
  color : white;
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
  color : white;
}

a {
  color: #ff5400;
  text-decoration: none;
}

a:hover {
  text-decoration: underline;
}

    </style>
  </head>
  <body>
    <header class="hero">

      <form>
      <div class="navbar-logo">
    <p><img src="logo.png" alt="Logo">My E-Comerse Website</p>
  </div>
      <h1>Registration</h1>
      <h2>Create an Account</h2>
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" required>
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>
      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required>
      <label for="confirm-password">Confirm Password:</label>
      <input type="password" id="confirm-password" name="confirm-password" required>
      <button type="submit">Create Account</button>
      <p>Already have an account? <a href="login.php">Log in</a></p>
    </form>
    </header>
  </body>
</html>
