<?php
session_start();
if ($_SESSION["verified"]) {
?>
<!DOCTYPE HTML>
<html>
  <head>
    <title>Secret Content!</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="verification.css">
  </head>
  <body>
    <h1>Welcome to some secret content! Bored already? Just <a href="/end-session.php">leave</a>...</h1>
  </body>
</html>
<?php
} else {
  header("Location: /verification.php?continue=" . $_SERVER["SCRIPT_NAME"]);
}
?>
