<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>PHP OOP Concept for Authentication</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <!-- sign up section -->
  <section> 
     <h2>Sign Up</h2> 
      <form action="signup.php" method="POST">
        <i>Username </i><input type="text" name="username" required>  <br><br>
        <i>Password </i><input type="password" name="password" required>  <br><br>
        <input type="submit" value="Sign Up"> 
      </form>
  </section> 
  <hr>
  <!-- login section -->
  <section> 
     <h2>Log In</h2> 
      <form action="login.php" method="POST">
        <i>Username </i><input type="text" name="username" required>  <br><br>
        <i>Password </i><input type="password" name="password" required>  <br><br>
        <input type="submit" value="Login"> 
      </form>
  </section>
  <hr>
  <section>
    <h1>There are 5 files in this project</h1>
    <h3>1.index.php</h3><br> 
    <h3>2.Database.php</h3><br>
    <h3>3.User.php</h3><br>
    <h3>4.signup.php</h3><br>
    <h3>5.login.php</h3><br>
  </section>
</body>
</html>