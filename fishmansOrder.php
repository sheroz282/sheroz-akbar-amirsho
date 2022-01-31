
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

$fish_name = [
    "carp",
    "zander"
];

function fishNameOrder(array $fish_name): string
{
    if(is_array($fish_name) === is_string($fish_name))
    {
        return "Very few characters in the order. ";
    }
    return "The value of characters are ok. ";

}
echo fishNameOrder($fish_name) . "<br/>";

$quantity_of_fish = 2;
$min_value = 1;
function fishQuantityOrderMin(int $quantity_of_fish, int $min_value): string
{
    if(mb_strlen($quantity_of_fish) <= $min_value)
    {
        return "Very few characters in the order. ";
    }
	return "Min number of characters are ok. ";
}
echo fishQuantityOrderMin(2, 1) . "<br>";


$max_value = 2;
function fishQuantityOrderMax(int $quantity_of_fish, int $max_value): string
{
    if(mb_strlen($quantity_of_fish) > $max_value)
    {
        return "Too many characters in the order. ";
    }
	return "Max number of characters are ok. ";
}
echo fishQuantityOrderMax(2, 2);