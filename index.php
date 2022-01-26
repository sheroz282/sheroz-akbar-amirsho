<?php
/*
  Clementine mock mojito Recipe
  Ingredients:
    * 1 clementine
    * ½ tsp demerara sugar
    * 1 lemon wedge, chopped
    * ice
    * small handful of mint, woody stalks removed
    * a few drops of orange blossom water
    * sparkling water, to top up
*/

function makeClementineMojito(
  int $clementine,
  float $demerara_sugar,
  int $lemon_wedges,
  string $ice,
  string $mint,
  string $orange_blossom_water,
  string $sparkling_water
) {
  // It's hard to make math operations inside a string, so we make it out of the string itself
  $half_clementine = $clementine / 2;
  echo
  "<h1>Clementine mock mojito Recipe</h1>
    <p>Enjoy this mock clementine mojito as a non-alcoholic option at a party. With clementine, orange blossom water and sparkling water, it's fabulously refreshing</p>
    <h2>STEP 1</h2>
      <p>Juice $half_clementine of the clementine and chop the other $half_clementine into small pieces. Pour the juice into a glass and stir in $demerara_sugar teaspoon of the sugar. Tip in the chopped clementine and $lemon_wedges lemon, then crush using a muddler.</p>
    <h2>STEP 2</h2>
      Add a handful of $ice, the $mint and $orange_blossom_water. Top up slowly with $sparkling_water.";
}

makeClementineMojito(1, 0.5, 1, 'ice', 'mint', 'orange blossom water', 'sparkling water');