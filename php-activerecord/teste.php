<?php
echo 'php-activerecord/ActiveRecord.php';
require_once 'ActiveRecord.php';

ActiveRecord\Config::initialize(function($cfg)
{
    $cfg->set_model_directory('models');
    $cfg->set_connections(array(
        'development' => 'mysql://root:root@localhost/active'));
});
echo 'testee';
$User = User::first();
echo $User->nome;
