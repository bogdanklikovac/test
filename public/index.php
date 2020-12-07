<?php

require_once '../app/init.php';
require_once '../db.php';

$app = new App();

$database = new Db();
$db = $database->connect();