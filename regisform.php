<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Sign Up Page</title>
  <link rel="stylesheet" href="regisss.css">
</head>
<body>
  <div class="container">
        <div class="signup-section">
      <h2>Welcome Back!</h2>
      <p>Yuk, isi data dirimu biar bisa pakai semua fitur seru di Skill Zone</p>
      <button class="btn-outline">
        <a href="loginform.php">Login</a>
      </button>
    </div>
 
    <div class="login-section">
      <h2>Create Account</h2>
      <div class="social-login">
        <div class="social-login">
        <a href="#"><img src="picture/google.png" alt="Google"></a>
        <a href="#"><img src="picture/fb.png" alt="Facebook"></a>
        <a href="#"><img src="picture/ip.png" alt="Apple"></a>
        </div>

      </div>
      <p>or use email for registeration</p>

      <form action="registrasi.php" method="POST">
        <select name="role" required>
          <option value="user">User</option>
          <option value="admin">Admin</option>
        </select>
        <div class="input-box">
            <img src="picture/user.png" class="icon" alt="User">
            <input type="username" name="username" placeholder="Username" required>
        </div>
        <div class="input-box">
            <img src="picture/person.png" class="icon" alt="Lock">
            <input type="email" name="email" placeholder="Email" required>
        </div>
        <div class="input-box">
            <img src="picture/gembok.png" class="icon" alt="Lock">
            <input type="password" name="password" placeholder="Password" required>
        </div>

        <a href="#" class="forgot">Forget Your Password?</a>
        <button type="submit" name="login" class="btn">Sign Up</button>
      </form>

      <p class="register-text">Do have any account? 
        <a href="loginform.php">Login here!</a>
      </p>
    </div>
  </div>
</body>
</html>
