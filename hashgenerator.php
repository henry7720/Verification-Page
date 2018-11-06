<?php
if (isset($_POST["key"])) {
  $key = trim($_POST["key"]);
  $hashedkey = password_hash(
    base64_encode(
      hash("sha256", $key, true)
    ),
    PASSWORD_DEFAULT
  );
  if (strlen($key) >= 8 && strlen($key) <= 32) {
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
      <input type="password" name="key" id="key" maxlength="32" placeholder="Key">
      <input type="submit" value="Hash">
    </form>
<?php if (isset($message)) echo "    <p>$message</p>\n"; ?>
  </body>
</html>
