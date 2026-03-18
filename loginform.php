<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login Page</title>
  <link rel="stylesheet" href="login.css">
</head>
<body>
  <div class="container">
    <div class="login-section">
      <h2>Login</h2>
      <div class="social-login">
        <div class="social-login">
        <a href="#"><img src="picture/google.png" alt="Google"></a>
        <a href="#"><img src="picture/fb.png" alt="Facebook"></a>
        <a href="#"><img src="picture/ip.png" alt="Apple"></a>
        </div>

      </div>
      <p>or use email password</p>

      <form action="login.php" method="POST">
        <div class="input-box">
            <img src="picture/person.png" class="icon" alt="User">
            <input type="email" name="email" placeholder="Email" required>
        </div>
        <div class="input-box">
            <img src="picture/gembok.png" class="icon" alt="Lock">
            <input type="password" name="password" placeholder="Password" required>
        </div>

        <a href="#" class="forgot">Forget Your Password?</a>
        <button type="submit" name="login" class="btn">Login</button>
      </form>

      <p class="register-text">Don’t have any account? 
        <a href="regisform.php">Register</a>
      </p>
    </div>

    <div class="signup-section">
      <h2>Hello, Friend!</h2>
      <p>Yuk, isi data dirimu biar bisa pakai semua fitur seru di Skill Zone</p>
      <button class="btn-outline">
        <a href="regisform.php">Register</a>
      </button>
    </div>
  </div>
</body>
</html>
