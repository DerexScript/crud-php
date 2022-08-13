<?php
if (!file_exists("./config.php")) {
    require_once(__DIR__ . "/install.php");
    exit;
}
