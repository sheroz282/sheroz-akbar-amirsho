<?php
/*
Задача5 (Заказ у рыбака):
Контекст: У мостика корабля забросил свою удочку наш рыбак.
Он готов поймать одну рыбу для вас, но он требует писать свой заказ правильно.
Напишите функцию, которая поверяет заказ для рыбака, в случае ошибки вернуть сообщение (422-неверно отправленные данные N)

INPUT: Имя рыбы, количество рыбы
Требования: Проверить типы данных, длина команды минимум и максимум,
находится для в наборе уже существующих рыб в океане (создаете отдельный массив доступных рыб)
*/

function validateExistingFish(string $accept_order): string
{
    $fish_name = [
        "Сазан",
        "Судак",
        "Змеглаво"
    ];
    foreach ($fish_name as $fishes) {
        if (is_string($fishes) == $accept_order)
            return   "200: Fish name type is ok! ";
    }
    return   "422: The type of Fish name is incorrectly! ";
}

function validateMin($value, $min_value): string
{
    if(is_int($value) >= is_int($min_value)){
        return "Min number of characters are ok! ";
    }
    return "Very few characters in the order! ";
}

function validateMax($value, $max_value): string
{
    if(is_int($value) <= is_int($max_value)){
        return "Max number of characters are ok! ";
    }
    return "A lot of characters in the order! ";
}

$value  =  readline("Input the name of fish, please: ");
$min_value  =  readline("Enter number of fish, minimum 1 please: ");
$max_value = readline ("Enter number of fish, maximum 3 please: ");
$accept_order = readline("Input the name of fish, please: ");
function orderToFisherman($accept_order, $value, $min_value, $max_value): string
{
    $validate_string  = validateExistingFish($accept_order)   . "<br>";
    $validate_min     = validateMin($value, $min_value) . "<br>";
    $validate_max     = validateMax($value, $max_value) . "<br>";
    return $validate_string . $validate_min . $validate_max ;
}
print orderToFisherman("$accept_order", "$value", "$min_value", "$max_value");