<?php
$situation = rand(0, 1);
switch ($situation) {
    case 0:
        require_once("./situations/000.php");
        break;
    case 1:
        require_once("./situations/100.php");
        break;
}
