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
<<<<<<< HEAD

    if ($fish_name == is_string($accept_order)){
        return   "200: Fish name type is ok! ";
    }
=======
    foreach ($fish_name as $fishes) {
        if (in_array($fishes) == $accept_order)
            return   "200: Fish name type is ok! ";
    }else{
>>>>>>> 1359df0d2ab0f8a50fd5e28707a9dce220b49ea1
    return   "422: The type of Fish name is incorrectly! ";
    }
}

function validateMin($value, $min_value): string
{
    if(is_int($value) >= $min_value){
        return "Min number of characters are ok! ";
    }else{
        return "Very few characters in the order! ";
    }
}

function validateMax($value, $max_value): string
{
    if(is_int($value) <= $max_value){
        return "Max number of characters are ok! ";
    }else{
<<<<<<< HEAD
        return "A lot of characters in the order! ";
    }
}

$max_value = readline ("Enter number of fish, please: ");
=======
    return "A lot of characters in the order! ";
    }
}

$min_value  =  readline("Enter number of fish, please: ");
>>>>>>> 1359df0d2ab0f8a50fd5e28707a9dce220b49ea1
$accept_order = readline("Input the name of fish, please: ");
#[Pure] function orderToFisherman($accept_order, $value, $min_value, $max_value): string
{
    $validate_string  = validateExistingFish($accept_order)   . "<br>";
    $validate_min     = validateMin($value, $min_value) . "<br>";
    $validate_max     = validateMax($value, $max_value) . "<br>";
    return $validate_string . $validate_min . $validate_max ;
}
<<<<<<< HEAD
echo orderToFisherman("Сазан", "1", "2", "3");



=======
print orderToFisherman("$accept_order", "$value", "$min_value", "$max_value");
>>>>>>> 1359df0d2ab0f8a50fd5e28707a9dce220b49ea1
