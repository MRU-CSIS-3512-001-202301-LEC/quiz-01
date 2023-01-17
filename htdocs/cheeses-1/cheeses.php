<?php

$cheeses = [
    [
        "name" => "stilton",
        "category" => "blue",
        "cost" => 12.1
    ],
    [
        "name" => "cottage",
        "category" => "fresh",
        "cost" => 2.23
    ],
    [
        "name" => "brie",
        "category" => "soft",
        "cost" => 4.82
    ]
];

function price($cheese)
{
    return "$" . number_format($cheese['cost'], 2);
}

require 'cheeses.view.php';
