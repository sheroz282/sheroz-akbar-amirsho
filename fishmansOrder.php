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

//Проверка типы данных

use JetBrains\PhpStorm\Pure;

function validateString($fish_name): string
{
    if(is_string($fish_name)) {
        return   "200: Fish name type is ok! ";
    }
    return   "422: The type of Fish name is incorrectly! ";
}

function validateInteger($quantity_of_fish): string
{
      if(is_int($quantity_of_fish)){
        return   "200: Fish number type is ok! ";
      }
      return "422: The type of Fish number is incorrectly! ";
  }

// Длина команды минимум и максимум
function validateMin ($fish_name, $min_value ): string
{
    if(mb_strlen($fish_name) <= $min_value) {
        return "Very few characters in the order! ";
    }
    return "Min number of characters are ok! ";
}

function validateMax($fish_name, $max_value): string
{
    if  (strlen($fish_name) >= $max_value) {
        return "A lot of characters in the order! " ;
    }
    return "Max number of characters are ok! " ;
}

 $fish_name = [
        'Сазан',
        'Судак'
    ];

// находится уже существующих рыб в океане
function validateInArray($fish_name): string
{
    if(in_array($fish_name)){
        return "The fish is in list!" ;
    }
    return "The fish is not in list!" ;
}

$min_value  =  1 ;
$max_value  =  2 ;
$quantity_of_fish = readline ("Input the number of fish, please: ");
$fish_name = readline("Input the name of fish, please: ");

#[Pure] function orderToFisherman($fish_name, $quantity_of_fish, $min_value, $max_value): string
{
    $validate_string  = validateString($fish_name);
    $validate_integer = validateInteger($quantity_of_fish);
    $validate_min     = validateMin($fish_name, $min_value);
    $validate_max     = validateMax($fish_name, $max_value);
    $in_array         = validateInArray($fish_name);
    return $validate_string . $validate_integer . $validate_min . $validate_max . $in_array;
}
echo orderToFisherman($fish_name, $quantity_of_fish, $min_value, $max_value);
