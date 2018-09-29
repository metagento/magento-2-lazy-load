# Lazy Load extension for Magento 2 by Metagento

What is lazy loading?
Lazy loading is technique that defers loading of non-critical resources at page load time, this case it's product images. Lazy loading is a great way to optimize magento website speed and improve performace.

In Magento default, when customers visit a page, the site loads all images of products on that page. This slows down the loading speed, and leads to long waiting time for customers. 

Our Lazy Load extension solves this problem which just loads images on customer viewport. 

Beside improving the performance, it boost your website ranking on search engines, as well.


Install via Composer 

```
composer require metagento/lazy-load-magento2:*
php bin/magento setup:upgrade
php bin/magento setup:static-content:deploy
Then go to Store-> Configuration to active the feature.
```

Any question, please contact us https://www.metagento.com/magento-2-lazy-load.html


