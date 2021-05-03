<p align="center"><img src="https://cdn.discordapp.com/attachments/837719575063691274/837732607089049680/baner.jpg" /></p>
<p align="center">
<a href="https://github.com/DemuraAIdev/drm_framwork/releases/"><img src="https://img.shields.io/github/v/release/DemuraAIdev/drm_framwork?label=DRM" alt="Pembaruan"></a>
<a href="https://github.com/DemuraAIdev/drm_framwork/"><img src="https://img.shields.io/github/downloads/DemuraAIdev/drm_framwork/total" alt="Latest Stable Version"></a>
<a href="https://travis-ci.com/github/DemuraAIdev/drm_framwork"><img src="https://img.shields.io/travis/com/DemuraAIdev/drm_framwork?label=DRM" alt="License"></a>
<a href="https://github.com/DemuraAIdev/drm_framwork/"><img src="https://img.shields.io/github/stars/DemuraAIdev/drm_framwork" alt="License"></a>
<a href="https://opensource.org/licenses/MIT"><img src="https://img.shields.io/github/license/DemuraAIdev/drm_framwork" alt="License"></a>

<button href="https://discord.gg/wWJeaCs63b">
</button>
		<a href="https://discord.gg/wWJeaCs63b">
			<img src="https://canary.discordapp.com/api/guilds/837717027556294746/embed.png" alt="Discord server">
		</a>
</p>
# DRM 

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

## License

The Drm framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

