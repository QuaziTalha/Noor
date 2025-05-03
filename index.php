<?php
require_once 'lib/db.php';
require_once 'lib/Noor.php';

$noor = new Noor();
require_once 'routes.php';
$noor->dispatch();