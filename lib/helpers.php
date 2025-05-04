<?php

function view($path) {
    ob_start();
    include "views/{$path}.php";
    return ob_get_clean();
 }

?>
