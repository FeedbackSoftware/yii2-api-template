Preparing application
---------------------

After you install the application, you have to conduct the following steps to initialize the installed application. You only need to do these once for all.

1. Open a console terminal, execute the init command and select dev as environment.

    ```
    /path/to/php-bin/php /path/to/yii-application/init
    ```

    If you automate it with a script you can execute init in non-interactive mode.

    ```
    /path/to/php-bin/php /path/to/yii-application/init --env=Development --overwrite=All
    ```
   
2. Create a new database and adjust the ```components['db']``` configuration in ```/path/to/yii-application/common/config/db.php``` accordingly, for example:
       
    ```php
    return [
       'class' => 'yii\db\Connection',
       'dsn' => 'mysql:host=localhost;dbname=yii2basic',
       'username' => 'root',
       'password' => '1234',
       'charset' => 'utf8',
    ];
    ```
   
**Notes:**
- Yii won't create the database for you, this has to be done manually before you can access it.
- Check and edit the other files in the `config/` directory to customize your application as required.
- Refer to the README in the `tests` directory for information specific to basic application tests.
