## Banncity

[![StyleCI](https://styleci.io/repos/65454494/shield)](https://styleci.io/repos/65454494/)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE)

Banncity is a free, open-source, self-hosted forum software based on the Laravel PHP Framework.

Banncity itself based highly on the [Hifone Project](https://github.com/Hifone/Hifone).
I have forked it and create a new Project because of different Goals for some functions.

## Features

This package is currently in (very-)alpha stage, so all of the following features may or may not work yet. However, feel free to post issues and features requests [here](https://github.com/rygos/banncity/issues) . We will try to fix and improve the package as fast as we can based on your help!

* Fast and simple
* Beautiful and responsive
* Register & Login via OAuth
* Image upload
* Avatars
* Credits
* Roles & Permissions
* Notifications
* Markdown & Emoj
* Tags
* Advertisements
* RSS Feeds
* Localization: language files, time zone and UTF-8 support

## Requirements

There are a few things that you will need to have set up in order to run Gitamin:

- A web server: **Nginx**, **Apache** (with mod_rewrite), or **Lighttpd**
- **PHP 5.6.4+** with the following extensions: mbstring, pdo_mysql
- **MySQL** or **PostgreSQL**
- **Composer**

## Installation

By default Hifone comes with a .env.example file. You'll need to rename this file to just .env regardless of what environment you're working on.

If you're using SQLite then your .env file should not contain a DB_HOST key. You'll also need to touch ./database/hifone.sqlite and give it the required permissions.

Directories within the `storage` and the `bootstrap/cache` directories should be writable by your web server or Hifone will not run. 


### Step 1: Shell

```shell
git clone https://github.com/Hifone/Hifone
cd Hifone

cp .env.example .env
vi .env  # write database settings

composer install --no-dev -o

php artisan hifone:install

chmod -R 777 storage
chmod -R 777 bootstrap/cache
chmod -R 777 public/uploads
```

If you have problems to open the Page, enter the Following:
```shell
php artisan vendor:publish
```

### Step 2: Browser

Now go to http://your_site_domain/ and have fun!

### Additional Settings
On the Admin Panel you can add some additional Settings
```
meta_author - Set Metadata for Authors
meta_keywords - Set Metadata for Keywords
footer_html - Write some HTML stuff for Footer
new_thread_dropdowns - With this, you can add some DropDown Items for the "New Thread" Button
site_about - This is for Adding a Subtitle for the Website
module_activate_pms - With this you can Activate the Personal Message System
```

## Upgrading

```shell
php artisan hifone:update
```

## Development

These extra dependencies are required to develop Banncity:

- Node.js
- Bower
- Gulp

```shell
npm install
bower install
gulp
```

If you're making a lot of changes, you'll find that running `gulp watch` will really help you out!

## Demo

Original Hifone Script: [Hifone website](http://hifone.com/)

The Banncity Fork: [Banncity.de](http://banncity.de)

## License

Banncity/Hifone is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)
