<?php

function in_valid_range($val)
{
    return $val >= 3 && $val <= 5;
}

if ($_SERVER['REQUEST_METHOD'] === "POST") {

    if (!isset($_POST['lethality-level'])) {
        $lethality = -1;
    } else if (!in_valid_range($_POST['lethality-level'])) {
        $lethality = 0;
    } else {
        $lethality = $_POST['lethality-level'];
    }
}

require 'form.view.php';
