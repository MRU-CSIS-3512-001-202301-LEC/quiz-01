<?php

function bar()
{
    return "INTENSE";
}

function foo($s)
{
    return "$s is " . bar() . "!";
}
