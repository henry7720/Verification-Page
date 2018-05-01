<?php
session_start();
session_destroy();
header("Location: /verification.php");
# Make sure to make this redirect where you want it to, either back to the verification page, or the masked homepage; the verification page is important to redirect to so it doesn't have to redirect twice (unnecessary).
?>
