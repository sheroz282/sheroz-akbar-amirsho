<?php

function validateMax($value, $max_value = 5)
{
    if (strlen($value) >= $max_value) {
        return "ERROR 422! You inserted wrong coordinates - over maximum!";
    }
    return "Success! Max is not exceeded.";
}

function validateMin($value, $min_value = 3)
{
    if (strlen($value) <= $min_value) {
        return "ERROR 422! You inserted wrong coordinates - under minimum!";
    }
    return "Success! Min is not surpassed.";
}

function validateFloat($value)
{
    if (!filter_var($value, FILTER_VALIDATE_FLOAT)) {
        return "ERROR: Type is not float!";
    }
    return "Success: Type is float!";
}

function validateScope($value, $point_a, $point_b)
{
    if ($value <= $point_a && $value >= $point_b) {
        return "ERROR! You are out of scope!";
    }

    return "Got your spot! We will pick you up!";
}

function ruleParser($rules, $any_value)
{
    $message = [];
    $rules_in_array = explode('|', $rules);
    foreach ($rules_in_array as $rule) {
        $rule_with_key_param = explode(':', $rule);
        $parameters = array_slice($rule_with_key_param, 1);
        // ['float', 'min', '3', 'max', '5', 'scope', '0', '90'];
        if (count($rule_with_key_param) == 1) {
            array_push
            ($message,
                call_user_func_array("validate" . ucfirst($rule_with_key_param[0]), [$any_value])
            );
        } else {
            array_push
            (
                $message,
                call_user_func_array("validate" . ucfirst($rule_with_key_param[0]),[$any_value, ...$parameters])
            );
        }
    }
    return $message;
}

function index($request)
{
    $rule = "float|min:3|max:5|scope:0:90";
    $messages = ruleParser($rule, $request);

    return count($messages)
        ? implode(",\n", $messages)
        : "No validation messages";
}

$my_latitude = readline("Введите координаты широты:");
$my_longitude = readline("Введите координаты долготы:");

echo index($my_latitude);
echo index($my_longitude);