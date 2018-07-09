<?php
session_start();
$key = "test"; # Change this key to whatever key you'd like.
if (isset($_SESSION["verified"]) && $_SESSION["verified"]) {
  header("Location: /example-of-use.php");
}
if (isset($_POST["key"])) {
  if ($_POST["key"] === $key) {
    $_SESSION["verified"] = true;
    if (isset($_GET["continue"])) {
      $nextpage = $_GET["continue"];
      $whitelist = ["/example-of-use.php"]; # Add any other pages you want to be protected with the continue param.
      if (in_array($nextpage, $whitelist)) {
        header("Location: $nextpage");
      } else {
        header("Location: /example-of-use.php");
      }
    } else {
      header("Location: /example-of-use.php");
    }
  } else {
    $error = "That key is invalid!";
  }
}
?>
<!DOCTYPE HTML>
<html>
  <head>
    <title>Verify to Continue</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="verification.css">
  </head>
  <body>
    <h1>Verify to Continue</h1>
    <p>Please enter in the verification key to continue.</p>
    <form action="verification.php<?php if (isset($_GET["continue"])) echo "?continue=" . htmlentities($_GET["continue"]); ?>" method="post" autocomplete="off">
      <input type="text" name="key" id="key" placeholder="Key">
      <input type="submit" value="Verify">
    </form>
    <?php if (isset($error)) echo "<p>$error</p>\n"; ?>
  </body>
</html>
