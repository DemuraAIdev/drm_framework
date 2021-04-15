# DRM MASIH DALAM PROJECT BLM SELESAI

DRM Is Mini framwork
DRM is NOT a professional framework and it does not come with all the stuff real frameworks have

## Features

- simple, easy to understand
- With Bootsrap 4
- simple but clean structure
- makes "beautiful" clean URLs
- demo CRUD actions: Create, Read, Update and Delete database entries easily (ON PROJECT)
- tries to follow PSR 1/2 coding guidelines
- uses PDO for any database requests, comes with an additional PDO debug tool to emulate your SQL statements
- uses only native PHP code, so people don't have to learn a framework

## Requirements

- PHP 7.2.0+ (when first released), now it works fine with current stable versions PHP 5.6 and 7.1, 7.2., 7.3 and 7.4. 
  The latest PHP 8.0 is not tested yet but should also work fine.
- MySQL

## Manual Installation
1. Edit the database credentials in `system/config/config.php`
2. Execute the .sql statements in the `user_absen.sql`-folder (with PHPMyAdmin for example).
3. Make sure you have mod_rewrite activated on your server / in your environment. Some guidelines:
   [EasyPHP on Windows](http://stackoverflow.com/questions/8158770/easyphp-and-htaccess),
   [AMPPS on Windows/Mac OS](http://www.softaculous.com/board/index.php?tid=3634&title=AMPPS_rewrite_enable/disable_option%3F_please%3F),
   [XAMPP for Windows](http://www.leonardaustin.com/blog/technical/enable-mod_rewrite-in-xampp/),
   [MAMP on Mac OS](http://stackoverflow.com/questions/7670561/how-to-get-htaccess-to-work-on-mamp)

4. Install composer and run `composer install` in the project's folder to create the PSR-4 autoloading stuff from Composer automatically.
