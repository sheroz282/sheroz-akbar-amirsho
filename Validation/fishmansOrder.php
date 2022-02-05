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

use JetBrains\PhpStorm\Pure;

function validateString($fish_name): string
{
    if(!is_string($fish_name)){
        return   "422: The type of Fish name is incorrectly! ";
    }else{
        return   "200: Fish name type is ok! ";
    }
}

function validateInt($fish_count): string
{
    if(is_int($fish_count) == 0){
        return   "422: The type of Fish name is incorrectly! ";
    }else{
        return   "200: Fish name type is ok! ";
    }
}

function validateMin(string $fish_name, $min_value): string
{
    if(strlen($fish_name) <= $min_value){
        return "Very few characters in the order! ";
    }else{
        return "Min number of characters are ok! ";
    }
}

function validateMax(string $fish_name, $max_value): string
{
    if(strlen($fish_name) >= $max_value){
        return "A lot of characters in the order! ";
    }else{
        return "Max number of characters are ok! ";
    }
}

function validateExistingFish(string $fish_name, array $existing_fish): string
{
    if(!in_array($fish_name, $existing_fish)){
        return "There is no such fish on the list";
    }else{
        return "There is such a fish";
    }
}

$fish_count = readline ("Enter number of fish, please: ");
$fish_name = readline("Input the name of fish, please: ");
#[Pure] function orderToFisherman(string $fish_name, string $fish_count): string
{
    $existing_fish = [
        "Сазан",
        "Судак",
        "Змеглаво"
    ];

    $validate_string  = validateString($fish_name)   . "<br>";
    $validate_int     = validateInt($fish_count) . "<br>";
    $validate_min = validateMin($fish_name, 1) . "<br>";
    $validate_max     = validateMax($fish_name, 3) . "<br>";
    $existing_fish     = validateExistingFish($fish_name, $existing_fish) . "<br>";
    return $validate_string . $validate_int . $validate_min . $validate_max . $existing_fish;
}
echo orderToFisherman($fish_name, $fish_count);