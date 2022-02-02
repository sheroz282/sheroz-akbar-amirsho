<?php

function validateMax($value, $max_value = 50)
{
    if ($value >= $max_value) {
        return "ERROR 422! You've inserted wrong coordinates - exceeds maximum!";
    }
    return "Success! Max is not exceeded.";
}

function validateMin($value, $min_value = 20)
{
    if ($value <= $min_value) {
        return "ERROR 422! You inserted wrong coordinates - surpass minimum!";
    }
    return "Success! Min is not surpassed.";
}

function validateType($value)
{
    if (!floatval($value)) {
        return "ERROR: Type is not float!";
    }
    return "Success: Type is float!";
}


function validateCoordinates($latitude, $longitude){
    validateType($latitude);
    validateType($longitude);
    validateMin($latitude);
    validateMax($latitude);
    validateMin($longitude);
    validateMax($longitude);
}