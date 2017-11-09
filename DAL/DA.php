<?php

require_once 'DA/BaseDA.php';

require_once 'MySqlPDO/MySqlPDO.php';
require_once 'DbSettings.php';


function getDBInstance()
{
    $m = MySqlPDO::CreateNewInstance();

    $m->Connect(DB_NAME, DB_USER, DB_PASSWORD, DB_URL, DB_PORT);

    return $m;
}