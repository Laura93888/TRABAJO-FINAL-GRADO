<?php
$config = require __DIR__ . "/config.php";

require_once __DIR__ . "/db.php";
require_once __DIR__ . "/helpers.php";

$db = db_connect($config["db"]);