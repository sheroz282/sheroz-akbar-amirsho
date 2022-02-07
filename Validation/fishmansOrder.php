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

function validateMin($fish_name, $min_value): string
{
    if(strlen($fish_name) <= $min_value){
        return "Very few characters in the order! ";
    }else{
        return "Min number of characters are ok! ";
    }
}

function validateMax($fish_name, $max_value): string
{
    if (strlen($fish_name) >= $max_value) {
        return "A lot of characters in the order! ";
    } else {
        return "Max number of characters are ok! ";
    }
}

function validateExistingFish($fish_name, $existing_fish): string
{
    if(!in_array($fish_name, (array)$existing_fish)){
        return "There is no such fish on the list";
    }else{
        return "There is such a fish";
    }
}

function validate($rules, $request, $existing_fish): array
{
    $existing_fish = [];
    $separate_rules = explode('|', $rules);
    foreach ($separate_rules as $rule){
        $rule_with_parameters = explode(':', $rule);
        array_push($existing_fish,
            call_user_func_array('validate' . ucfirst($rule_with_parameters[0]),[$request, $separate_rules[0]]));
    }
    return $existing_fish;
}

function index($request): string
{
    $existing_fish = ["Сазан", "Судак", "Змеглаво"];
    $rules = 'string|int|min:1|max:3|existingFish:$existing_fish';
    $messages = validate($rules, $request, $existing_fish);
    return count($messages)
        ? implode(',\n', $messages)
        : "No validation message";
}
$fish_count = readline ("Enter number of fish, please: ");
$fish_name = readline("Input the name of fish, please: ");
echo index($fish_count);
echo index($fish_name);