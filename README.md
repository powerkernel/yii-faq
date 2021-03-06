Yii FAQ
=======

Prerequisites
-------------
- [Yii API Starter Kit](https://github.com/powerkernel/yii-api-starter-kit)
- [Yii Common](https://github.com/powerkernel/yii-common)
- [Yii Auth API](https://github.com/powerkernel/yii-auth)

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).
Either run

```
composer require powerkernel/yii-faq "@dev"
```

or add

```
"powerkernel/yii-faq": "@dev"
```

to the require section of your `composer.json` file

DB Migration
------------
Run in `/bin` directory

```
php yii mongodb-migrate --migrationPath=@vendor/powerkernel/yii-faq/src/migrations --migrationCollection=faq_migration
```

API Documentation
-----------------
[View on Postman](https://documenter.getpostman.com/view/4282480/RWTeX37L)