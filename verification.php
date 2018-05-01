<?php
session_start();
$key = "keyyouwanttouse"; # Change this key to whatever key you'd like.
if (isset($_SESSION["verified"]) && $_SESSION["verified"]) {
  header("Location: /"); # This statement is important because it checks if the user has been previously verified.
}
if (isset($_POST["key"])) {
  if ($_POST["key"] == $key) {
      $_SESSION["verified"] = true;
      header("Location: /");
  } else {
    $error = "That key is invalid!";
  }
}
?>
<!DOCTYPE HTML>
<html>
  <head>
    <title>Verification Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="verification.css">
  </head>
  <body>
    <h1>Verify</h1>
    <form action="verification.php" method="post">
      <input type="text" name="key" id="key" placeholder="Key">
      <input type="submit" value="Verify">
    </form>
    <?php if (isset($error)) echo "<p>$error</p>"; ?>
  </body>
</html>
