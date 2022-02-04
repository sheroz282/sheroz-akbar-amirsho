<?php

function validateMax($value, $max_value = 50)
{
    if ($value >= $max_value) {
        return "ERROR 422! You inserted wrong coordinates - over maximum!";
    }
    return "Success! Max is not exceeded.";
}

function validateMin($value, $min_value = 20)
{
    if ($value <= $min_value) {
        return "ERROR 422! You inserted wrong coordinates - under minimum!";
    }
    return "Success! Min is not surpassed.";
}

function validateType($value)
{
    if (!filter_var($value, FILTER_VALIDATE_FLOAT)) {
        return "ERROR: Type is not float!";
    }
    return "Success: Type is float!";
}

function validateScope($value, $point_a, $point_b)
{
    if ($value <= $point_a && $value >= $point_b){
        return "ERROR! You are out of scope!";
    }

    return "Got your spot! We will pick you up!";
}


function validateCoordinates($latitude, $longitude)
{
    $validation_message = "";
    $validation_message .= validateType($latitude) . " - latitude\n";
    $validation_message .= validateType($longitude) . " - longitude\n";
    $validation_message .= validateMin($latitude) . " - latitude\n"; // you can insert 2nd param if needed
    $validation_message .= validateMax($latitude) . " - latitude\n"; // you can insert 2nd param if needed
    $validation_message .= validateMin($longitude) . " - longitude\n"; // you can insert 2nd param if needed
    $validation_message .= validateMax($longitude) . " - longitude\n"; // you can insert 2nd param if needed
    $validation_message .= validateScope($longitude, 0, 90) . " - longitude\n";
    $validation_message .= validateScope($latitude, 0, 180) . " - latitude\n";
    return $validation_message;
}

$my_latitude = readline("Введите координаты широты:");
$my_longitude = readline("Введите координаты долготы:");

$result = validateCoordinates($my_latitude, $my_longitude);
print($result);