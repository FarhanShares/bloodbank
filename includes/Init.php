<?php
session_start();
session_regenerate_id(true);

require_once "Database.php";
require_once "Functions.php";

tryRememberingUser();
