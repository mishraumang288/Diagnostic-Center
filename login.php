<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<section id="header">
    <div class="header container">
      <div class="nav-bar">
        <div class="brand">
          <a href="index.php">
            <h1><span>v</span>isionary <span>d</span>iagnostics</h1>
          </a>
        </div>
  </section>
<div class="wrapper fadeInDown">
  <div id="formContent">
   
    <h2 class="active">Admin Login</h2>

    <div class="brandHead">
        
    <h1><span>V</span>ISIONARY <span>D</span>IAGNOSTICS</h1>
    </div>


    <form name="loginForm" action="loginConnect.php" method="request">
      <input type="text" id="login" class="fadeIn second" name="login" placeholder="Login ID" required>
      <input type="text" id="password" class="fadeIn third" name="pass" placeholder="Password" required>
      <input type="submit" id="loginBtn" value="Log In">
    </form>

    <div id="formFooter">
      <a class="underlineHover" href="#">Admin Access Only</a>
    </div>

  </div>
</div>
</body>
</html>
