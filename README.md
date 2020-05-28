Yii 2 API Template
============================

This is a a REST API template built using Yii2. This template use Yii2-Micro approach so it will be lightweight and easy to deploy.

![Packagist Version](https://img.shields.io/packagist/v/fbacks/yii2-api-template)
![Packagist Downloads](https://img.shields.io/packagist/dt/fbacks/yii2-api-template)

The detailed documentation can be found at [docs/README.md](docs/README.md).

Requirements
------------

The minimum requirement by this project template is that your Web server supports PHP 5.4.0.
Also it is recommended that your php installation has the following modules enabled:
* intl:  to use advanced parameters formatting in Yii::t()

To check the full requirements, please copy ```requirements.php``` from the project root to ```api/web``` folder, then navigate to the file from your web browser.


Installation
------------

The preferred way to install this template is through composer using the following command:

```
composer create-project --prefer-dist fbacks/yii2-api-template [app_name]
```

DIRECTORY STRUCTURE
-------------------

```
common
    config/              contains shared configurations
    mail/                contains view files for e-mails
    models/              contains model classes used in both backend and frontend
    tests/               contains tests for common classes    
console
    config/              contains console configurations
    controllers/         contains console controllers (commands)
    migrations/          contains database migrations
    models/              contains console-specific model classes
    runtime/             contains files generated during runtime
api
    config/              contains api configurations
    modules/             contains Web controller classes
    runtime/             contains files generated during runtime
    tests/               contains tests for api application    
    web/                 contains the entry script and Web resources
vendor/                  contains dependent 3rd-party packages
environments/            contains environment-based overrides
```