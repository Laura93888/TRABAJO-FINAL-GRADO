<?php
function db_connect(array $dbCfg): PDO {
  $dsn = "mysql:host={$dbCfg['host']};dbname={$dbCfg['name']};charset={$dbCfg['charset']}";
  return new PDO($dsn, $dbCfg["user"], $dbCfg["pass"], [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
  ]);
}