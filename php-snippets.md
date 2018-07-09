## How to Protect a Page With Verification-Page

See  [README.md](README.md) before continuing on this page or see the [plain text](php-snippets.txt) version.

1. Add the full path of the page you want to protect (including the PHP filename; can't just be folder names, e.g. `/somepath/somerandompage.php` or `/somerandompage.php`) to the `$whitelist` array in [verification.php](verification.php#L12)

2. Add the first snippet above the doctype declaration (`<!DOCTYPE HTML>`)

```php
<?php
session_start();
if ($_SESSION["verified"]) {
?>
```

3. Add the second snippet after the closing html tag (`</html>`)

```php
<?php
} else {
  header("Location: /verification.php?continue=" . $_SERVER["SCRIPT_NAME"]);
}
?>
```

4. **Done!**
