<?php
include_once ('config.php');
$mysqli = new mysqli($config['mysql']['host'], $config['mysql']['user'], $config['mysql']['password'], $config['mysql']['db']);
$mysqli->query ("SET NAMES 'utf8'");

