# Verification Page
A simple Page-Protection Verification page developed in [PHP](https://secure.php.net/); used to protect webpages you'd like only people who have access to a key to see.

## Requirements
* PHP ≥ 5.4

## Tutorial
1. Firstly, [download](https://github.com/henry7720/Verification-Page/archive/master.zip) all of the files in any way you please.
2. Next, generate a BCRYPT hash for your password with [hashgenerator.php](hashgenerator.php).
2. Next, open up [verification.php](verification.php) and replace the `$hash` variable's value with your hashed password. If you are aware of any particular pages you'd like to password-protect, add them to the `$whitelist` array now. Make sure the page's path is a relative path with a forward slash before it.
3. Next, open up [php-snippets.txt](php-snippets.md) and follow the particular instructions for using the PHP snippets to protect pages.
4. Finally, create a new page with the PHP snippets and that page will be password-protected, making sure that the page has been added to the whitelist.
**Note**: if you are confused, make sure to read the inline comments for further explanation.

## License
[MIT](LICENSE)
