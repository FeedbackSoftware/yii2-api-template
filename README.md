Yii 2 API Template
============================
REQUIREMENTS
------------

The minimum requirement by this project template that your Web server supports PHP 5.4.0.
Also it is recommended that your php installation has the following modules enabled:
* intl:  to use advanced parameters formatting in Yii::t()


INSTALLATION
------------

### Install from an Archive File

Extract the archive file downloaded from [github.com](https://github.com/mattether/yii2-app-api/archive/master.zip) to
a directory named `api` that is directly under the Web root.

Set cookie validation key in `config/web.php` file to some random secret string:

```php
'request' => [
    // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
    'cookieValidationKey' => '<secret random string goes here>',
],
```

You can then access the application through the following URL:

~~~
http://localhost/api/web/
~~~


### Install via Composer

If you do not have [Composer](http://getcomposer.org/), you may install it by following the instructions
at [getcomposer.org](http://getcomposer.org/doc/00-intro.md#installation-nix).

You can then install this project template using the following command:

~~~
php composer.phar global require "fxp/composer-asset-plugin:~1.1.1"
php composer.phar create-project --prefer-dist --stability=dev ethercreative/yii2-app-api api
~~~

Now you should be able to access the application through the following URL, assuming `api` is the directory
directly under the Web root.

~~~
http://localhost/api/web/
~~~


CONFIGURATION
-------------

### Database

Edit the file `config/db.php` with real data, for example:

```php
return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=localhost;dbname=yii2basic',
    'username' => 'root',
    'password' => '1234',
    'charset' => 'utf8',
];
```

**NOTES:**
- Yii won't create the database for you, this has to be done manually before you can access it.
- Check and edit the other files in the `config/` directory to customize your application as required.
- Refer to the README in the `tests` directory for information specific to basic application tests.

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
backend
    assets/              contains application assets such as JavaScript and CSS
    config/              contains backend configurations
    controllers/         contains Web controller classes
    models/              contains backend-specific model classes
    runtime/             contains files generated during runtime
    tests/               contains tests for backend application    
    views/               contains view files for the Web application
    web/                 contains the entry script and Web resources
frontend
    assets/              contains application assets such as JavaScript and CSS
    config/              contains frontend configurations
    controllers/         contains Web controller classes
    models/              contains frontend-specific model classes
    runtime/             contains files generated during runtime
    tests/               contains tests for frontend application
    views/               contains view files for the Web application
    web/                 contains the entry script and Web resources
    widgets/             contains frontend widgets
vendor/                  contains dependent 3rd-party packages
environments/            contains environment-based overrides
```

GENERAL INDICATIONS
-------------------

### i18n - Translating App Messages

The i18n configuration is set up using the instructions found at [Yii2 i18n](https://www.yiiframework.com/doc/guide/2.0/en/tutorial-i18n).
The i18n configuration file is located at ```<ProjectRoot>/messages/config-messages.php```

To extract your app messages you can do so using the [message command](https://www.yiiframework.com/doc/guide/2.0/en/tutorial-i18n#using-the-message-command).

```./yii message messages/config-messages.php```