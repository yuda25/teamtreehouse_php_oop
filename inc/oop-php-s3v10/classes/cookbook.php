<?php
include "classes/recipes.php";
include "classes/render.php";
include "classes/recipecollection.php";
include "inc/recipes.php";


$cookbook = new recipecollection("treehouse recipes");

 $cookbook->addrecipe($lemon_chicken);
  $cookbook->addrecipe($granola_muffins);
  $cookbook->addrecipe($belgian_waffles);
  $cookbook->addrecipe($pepper_casserole);
  $cookbook->addrecipe($lasagna);
 
  $cookbook->addrecipe($dried_mushroom_ragout);
  $cookbook->addrecipe($rabbit_catalan);
  $cookbook->addrecipe($grilled_salmon_with_fennel);
  $cookbook->addrecipe($pistachio_duck);
  $cookbook->addrecipe($chili_pork);
  $cookbook->addrecipe($crab_cakes);
  $cookbook->addrecipe($beef_medallions);
  $cookbook->addrecipe($silver_dollar_cakes);
  $cookbook->addrecipe($french_toast);
  $cookbook->addrecipe($corn_beef_hash);
  $cookbook->addrecipe($granola);
  $cookbook->addrecipe($spicy_omelette);
  $cookbook->addrecipe($scones);
// yang di bawah ini salah
//   $breakfast = new recipecollection("favorite breakfasts");
//   foreach ($cookbook->filterbytag("breakfast") as $recipe)
//   {
//       $breakfast->addrecipe($recipe);
//   }
// =============================================
  $week1 = new recipecollection("meal plan: week 1");
  $week1 ->addrecipe($cookbook->filterbyid(2));
  $week1 ->addrecipe($cookbook->filterbyid(3));
  $week1 ->addrecipe($cookbook->filterbyid(6));
  $week1 ->addrecipe($cookbook->filterbyid(12));

  
  
  //   echo render::listrecipes($cookbook->getrecipetitles());
  
    echo "\n\nshopping list\n\n";            

  echo render::listshooping($breakfast->getcombinedingredients());

// echo render ::displayrecipe($cookbook->filterbyid(2));