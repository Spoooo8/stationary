
<!DOCTYPE html><?php
require_once('connection.php');
?>
<html lang="en">
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
  <link rel="stylesheet" href="reg.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    
  <div class="wrapper">
    <form class="" method="post">
      <h1>Register</h1>
      <div class="input-box">
        <input type="text" placeholder="Username" name="Usernamee" id="Usernamee" required>
      </div>
      <div class="input-box">
        <input type="password" placeholder="Password" name="Password" id="Password"required>
      </div>
      <div class="input-box">
        
        <input type="email" placeholder="Email" name="Email" id="Email" required >
      </div>
      <div class="remember-forgot">
        <label><input type="checkbox">Remember Me</label>
    
      </div>
      <button type="submit" class="btn" id="ex3" name="register" class="btn-primary">Register</button>
      <div class="register-link">
        <p>Already have an account? <a href="login.html">Login</a></p>
      </div>
    </form>
  </div>
</body>
<?php
    if (isset($_POST["register"])){
    $Email=$_POST["Email"];
    $Usernamee=$_POST["Usernamee"];
    $Password=$_POST["Password"];
    

    $sql="INSERT INTO  register (`Email`, `Usernamee`,`Password`) VALUES ('$Email','$Usernamee','$Password')";
    $query=mysqli_query($con,$sql);
    if($query){
      ?>
      <script>
      alert('succesfully registered');
      window.location="intex.html";
      </script>
      <?php
      }
      else{
        ?>
        <script>
        alert('registration failed');
        </script>
        <?php
        }
        }
        ?>
</html>