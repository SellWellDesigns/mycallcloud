MyCallCloud WebSite
====

## To install website (UNIX):

* ensure you have PHP > 5.3.17
* ensure mod_rewrite is on and enabled
* install composer from command line (global install):
		```
		curl -sS https://getcomposer.org/installer | php
		```

		
		```
		mv composer.phar /usr/local/bin/composer
		```
* switch to desired site location: `cd /path/to/website`
* clone git repo: `git clone https://github.com/SellWellDesigns/mycallcloud.git desiredWebsiteFolderName`
* enter new site folder: `cd desiredWebsiteFolderName`
* have composer install required packages: `composer install`
* ensure the "storage" folder is writable: `sudo chmod -R 777 app/storage`

At this point, your site is installed, you can:

* point a vHost or similar apache config at this folder...
* or simply type `php artisan serve` which will use the webserver built into PHP 5.3 to serve the site at `localhost:8000` you do not even need apache installed on the machine to do this.

If you are installing on a Windows machine I can assist, but the process is very similar.