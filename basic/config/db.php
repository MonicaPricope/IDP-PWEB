<?php

return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=database_setup_mysql-server_1;dbname=test',
    'username' => 'appuser',
    'password' => 'appuserPasswd',
    'charset' => 'utf8',

    // Schema cache options (for production environment)
    //'enableSchemaCache' => true,
    //'schemaCacheDuration' => 60,
    //'schemaCache' => 'cache',
];
