<?php
require_once("models.php");
$config = new Config();

//modify bellow
$config->databaseHostname = "localhost";
$config->databasePort = 3306;
$config->databaseUsername = "webeng20g6";
$config->databasePassword = "2021g6";
$config->databaseName = "webeng20g6";
//stop modifying from this point on.

return $config;
?>