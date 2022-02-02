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

function validateString($order_fish): string
{
    $fish_name = [
        "Сазан",
        "Судак",
        "Змеглаво"
    ];
    foreach ($fish_name as $fishes) {
        if ($fishes == $order_fish)
            return   "200: Fish name type is ok! ";
    }
    return   "422: The type of Fish name is incorrectly! ";
}

function validateMin(int $min_value): string
{
    if($min_value >= 1){
        return "Min number of characters are ok! ";
    }
    return "Very few characters in the order! ";
}

function validateMax(int $max_value): string
{
    if($max_value <= 3){
        return "Max number of characters are ok! ";
    }
    return "A lot of characters in the order! ";
}

#[Pure] function orderToFisherman($order_fish, $min_value, $max_value): string
{
    $validate_string  = validateString($order_fish);
    $validate_min     = validateMin($min_value);
    $validate_max     = validateMax($max_value);
    return $validate_string . $validate_min . $validate_max ;
}
echo orderToFisherman('Сазан', 1, 4);