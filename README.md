# Yrgo

## Setup

1. Run `git clone https://github.com/thehink/yrgo-wordpress.git`
1. Run `composer install`
1. Copy `.env.config` to `.env` and define your environment settings
1. Start webserver and set `./public` folder as your webroot
1. Install wordpress at `{YOUR_WORDPRESS_HOST}/wordpress/wp-admin/install.php`
1. Activate plugins: `ACF to REST API` & `Plate`
1. Install & activate the plugin Advanced Custom Fields Pro
1. Click on `Custom Fields` in admin menu & sync fields
1. Setup server for client app: https://github.com/thehink/yrgo-app

## Add About Pages
1. Go to Pages
1. Click `Add New Page`
1. Enter Title & Content
1. Set parent page to `About`
