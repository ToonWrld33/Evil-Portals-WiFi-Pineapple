<?php
$destination = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
require_once('helper.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Privacy Policy - The Continental Hotel</title>

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
      backdrop-filter: brightness(60%) blur(4px);
      color: #FFFFFF;
    }

    .container {
      max-width: 600px;
      width: 100%;
      text-align: center;
    }

    .content-container {
      background: rgba(0,0,0,0.8);
      border-radius: 8px;
      padding: 20px;
      box-shadow: 0 0 15px rgba(0,0,0,0.3);
    }

    h1 {
      color: #d4af37;
      margin-bottom: 10px;
    }

    p {
      font-size: 14px;
      line-height: 1.5;
      text-align: left;
    }

    footer {
      font-size: 12px;
      color: #bbb;
      margin-top: 15px;
    }

    footer a {
      color: #bbb;
      text-decoration: none;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="content-container">
      <h1>The Continental Hotel Privacy Policy</h1>
      <p>
        At The Continental Hotel, your privacy is paramount. Our Wi-Fi network securely collects and manages basic information solely for providing connectivity services. Information collected includes email addresses, room numbers, names, and passwords, strictly for authentication and enhancing your stay experience.
        <br><br>
        We will not share or disclose your personal information to external entities or third parties, and all data is securely stored.
        <br><br>
        By connecting, you agree to comply with our policies regarding network usage, maintaining confidentiality, and privacy of our guests.
        <br><br>
        For questions or concerns regarding your privacy and data, please contact our concierge.
      </p>
    </div>

    <footer>
      The Continental Hotel © 2025. All rights reserved.
      <a href="index.php">Return to Login</a>
    </footer>
  </div>
</body>
</html>
