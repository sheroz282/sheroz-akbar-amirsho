<?php 
/*
	1) Milk 1 cup
	2) Honey 4 tsp
	3) Lemon juice 1 tsp
	4) Cinnamon or cocoa to taste
*/

function cookMilkHoney(int $milk, int $honey, int $lemon_juice, int $cinnamon_and_cocoa)
{
	echo
	"$milk Beat milk with honey and lemon juice in a blender or mixer until a slight foam is formed. " .
	"$honey 4 tsp" .
	"$lemon_juice 1tsp" .
	"$cinnamon_and_cocoa Pour the cocktail into glasses. Garnish with cinnamon or cocoa if desired.";
}
cookMilkHoney(1, 4, 1, 1);