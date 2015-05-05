<?php

require "app.class.php";

$app = new App();
$app->showErrors();
$app->openDatabaseConnection();
$app->start();
