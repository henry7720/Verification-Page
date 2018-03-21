<?php
session_start();
if ($_SESSION["verified"]) { # This statement is extremely important because it checks if the user has been previously verified.
?>
<!DOCTYPE HTML>
<html>
  <head>
    <title>Secret Content!</title>
  </head>
  <body>
    <h1>Welcome to some secret content! - <a href="/end-session.php">End Session</a></p> <!-- A link to end the session (in the case you want to require the user to be verified again). -->
    <!-- This code just shows a VERY basic example of how the verificaton code can be used. The only required things are the PHP snippets at the beginning of the document (above the DOCTYPE declaration) and at the end (below the closing HTML tag). -->
  </body>
</html>
<?php
} else {
  header("Location: /verification.php"); # If the user hasn't been verified, it brings them to the verification page.
}
?>