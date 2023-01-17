<?php

function num_blorbs($s)
{
    $result = 0;
    $i = 0;
    while ($i < strlen($s)) {
        if ($s[$i] === "o") {
            $result += 1;
        }
        $i++;
    }
    return $result;
}

$orders = [
    "873" => [
        "recipient_name" => "Nina",
        "grade" => 10,
        "cans" => 3,
        "customer_name" => "Marxy"
    ],
    "103" => [
        "customer_name" => "Alejandro",
        "recipient_name" => "Yara",
        "grade" => 11,
        "cans" => 2,
    ],
    "044" => [
        "customer_name" => "Junko",
        "grade" => 12,
        "recipient_name" => "Ike",
        "cans" => 4,
    ]
];

$name = "Doomcat";

$p1_score = 3;

$is_activated = false;

$result = num_blorbs($name);

if (!$is_activated) {
    $status = "offline";
} else {
    $status = "online";
}

$answer_0 = $p1_score * $orders["873"]["cans"];

$answer_1 = num_blorbs($name) > $p1_score;

$answer_2 = "Ms. " . $name;

$answer_2_5 = "{$p1_score}$p1_score";

$answer_3 = $orders["044"]["customer_name"];

$answer_4 = $status;

$answer_5 = $name === "DOOMCAT" ? "-1" : 1;

echo "foo";
