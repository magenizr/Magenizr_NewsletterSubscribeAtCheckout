# Magenizr NewsletterSubscribeAtCheckout
This Magento 2 module allows you to enable a newsletter subscription checkbox on the checkout page. Customers can subscribe to your newsletter list in `Marketing > Communications > Newsletter Subscribers` during checkout.

![Magento2 NewsletterSubscribeAtCheckout - Intro](http://download.magenizr.com/pub/magenizr_newslettersubscribeatcheckout/all/intro.gif)

![Magento2 NewsletterSubscribeAtCheckout - Frontend - Checkout](http://download.magenizr.com/pub/magenizr_newslettersubscribeatcheckout/all/backend/01.gif)

![Magento2 NewsletterSubscribeAtCheckout - Backend - Newsletter](http://download.magenizr.com/pub/magenizr_newslettersubscribeatcheckout/all/backend/02.gif)

## Installation (Composer)

1. Add this extension to your repository `composer config repositories.magenizr/magento2-newsletter-subscribe-at-checkout git https://github.com/magenizr/Magenizr_NewsletterSubscribeAtCheckout.git`
2. Update your composer.json `composer require "magenizr/magento2-newsletter-subscribe-at-checkout":"1.0.0"`

```
./composer.json has been updated
Loading composer repositories with package information
Updating dependencies (including require-dev)
Package operations: 1 install, 0 updates, 0 removals
  - Installing magenizr/magento2-newsletter-subscribe-at-checkout (1.0.0): Downloading (100%)
Writing lock file
Generating autoload files
```

3. Enable the module and clear static content.

```
php bin/magento module:enable Magenizr_NewsletterSubscribeAtCheckout --clear-static-content
php bin/magento setup:upgrade
```

## Installation (Manually)
1. Download the latest version of the source code.
2. Extract the downloaded tar.gz file. Example: `tar -xzf Magenizr_NewsletterSubscribeAtCheckout_1.0.0.tar.gz`.
3. Copy the code into `./app/code/Magenizr/NewsletterSubscribeAtCheckout/`.
4. Enable the module and clear static content.

```
php bin/magento module:enable Magenizr_NewsletterSubscribeAtCheckout --clear-static-content
php bin/magento setup:upgrade
```

## Features
* The option `Checked` allows you to pre-tick the newsletter checkbox. Default is `No`.
* The text field `Label` allows you to display a custom label.
* With the option `Note` you can display a custom text right below the newsletter subscription.

## Usage
The functionality can be used in the backend section `Stores > Configuration > Sales > Checkout > Newsletter Subscribe At Checkout`.

## Support
If you have any issues with this extension, open an issue on [Github](https://github.com/magenizr/Magenizr_NewsletterSubscribeAtCheckout/issues). For a custom build, don't hesitate to contact us on [Magento Marketplace](https://marketplace.magento.com/partner/magenizr).

## History
===== 1.0.0 =====
* Stable version
* Code based on latest version of [https://github.com/tobias-forkel/Magento2_NewsletterSubscribeAtCheckout](https://github.com/tobias-forkel/Magento2_NewsletterSubscribeAtCheckout)

## License
[OSL - Open Software Licence 3.0](http://opensource.org/licenses/osl-3.0.php)