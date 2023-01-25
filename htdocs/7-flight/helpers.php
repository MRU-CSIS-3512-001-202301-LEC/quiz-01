<?php

function airport_name_from($airport_code)
{
    return "Calgary International Airport";
}

function departure_info_for($user_id)
{
    return [
        "airline" => "West Jet",
        "scheduled" => "09:30",
        "airport_code" => "YYC",
        "flight" => "WS2310",
        "destination" => "Cancun",
        "gate" => "D78",
        "status" => "Boarding"
    ];
}
