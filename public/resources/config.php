<?php

define("TITULO","Roleta");
define("DEV","Lucas Campello da Pieva");
define("VERSAO","0.02 - 20251127");

define("DIR_CSS", "resources/css");
define("DIR_JS", "resources/js");

define("VIEW","../app/View");

// DATABASE
const DATA_LAYER_CONFIG = [
    "driver" => "mysql",
    "host" => "localhost",
    "port" => "3306",
    "dbname" => "livro_jogo",
    "username" => "root",
    "passwd" => "root",
    "options" => [
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
        PDO::ATTR_CASE => PDO::CASE_NATURAL
    ]
];