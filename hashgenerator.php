<?php
if (isset($_POST["key-to-hash"])) {
  $keytohash = trim($_POST["key-to-hash"]);
  $sha256hash = hash("sha256", $keytohash);
  $hashedkey = password_hash($sha256hash, PASSWORD_DEFAULT);
  if (strlen($keytohash) >= 8 && strlen($keytohash) <= 32) {
    $message = "Your BCRYPT hashed password is <span style=\"background-color:#ffff00;font-weight:bold\">$hashedkey</span> !";
  } else {
    $message = "Please enter in a password that is at least 8 characters, but no more than 32.";
  }
}
?>
<!DOCTYPE HTML>
<html>
  <head>
    <title>BCRYPT Hash Generator</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="verification.css">
  </head>
  <body>
    <h1>BCRYPT Hash Generator</h1>
    <p>Please enter in a password to be hashed for use in the verification system.</p>
    <form action="hashgenerator.php" method="post" autocomplete="off">
      <input type="text" name="key-to-hash" id="key-to-hash" maxlength="32" placeholder="Key">
      <input type="submit" value="Hash">
    </form>
<?php if (isset($message)) echo "    <p>$message</p>\n"; ?>
  </body>
</html>
