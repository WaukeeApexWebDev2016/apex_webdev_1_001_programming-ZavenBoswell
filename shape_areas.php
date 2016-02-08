<?php

//Declares String Variables
$square = "Square";

$rectangle = "Rectangle";

$triangle = "Triangle";

$circle = "Circle";

$help = "Help";

$quit = "Quit";

echo("\nType 'Quit' to exit program when desired.\n");
$ask = readline("Input the shape to calculate its area. (Please have first letter be uppercase): ");


  if ($ask == $quit)
    echo("You have quit.\n\n");

while ($ask != $quit) {

if ($ask == $square) // if statement for square
{
  // creates square image
  echo(" __________\n?          |\n?          |\n?          |\n?          |\n?__________|\n");

  $squareside1 = readLine("What is the length of one of its sides? "); // get side length

   $squareanswer = $squareside1 * $squareside1; // calculates area of square

   //creates square image for saying area
  echo("\n __________\n|          |\n|          |\n|          |\n|          |\n|__________|\n\n");
  echo("The area of the square is: "). $squareanswer;

  $ask = readline("\n\nInput a shape to calculate its area: "); // prompts user to continue
}
  if ($ask == $rectangle) //if statement for rectangle
  {
    // creates rectangle image
    echo(" _______________\n|               |\n|               |\n|               |\n ? ? ? ? ? ? ? ?\n");

    $rectangleside1 = readline("What is the length of its base? "); // finds base

    echo(" _______________\n?               |\n?               |\n?               |\n?_______________|\n");
    $rectangleside2 = readline("What is the length of its height? "); // finds height

    $rectangleanswer = $rectangleside1 * $rectangleside2; //calculates area of rectangle

    // displays area with image
    echo("\n _______________\n|               |\n|               |\n|               |\n|_______________|\n");
    echo("The area of the rectangle is: "). $rectangleanswer;

    $ask = readline("\n\nInput a shape to calculate its area: "); // promts user to continue
  }
  if ($ask == $triangle) // if statement for triangle
  {
    // displays triagnle image
    echo("    /\    \n   /  \ \n  /    \ \n /      \ \n ????????\n");

    $trianglebase = readline("What is the length of its base? "); // finds base

    echo("?     /\    \n?    /  \ \n?   /    \ \n?  /      \ \n? /________\ \n"); // displays image for height

    $triangleheight = readline("What is the length of its height? "); // finds height

    $triangleanswer = (($trianglebase * $triangleheight)/ 2); // calculates area

    // creates image with area
    echo("    /\    \n   /  \ \n  /    \ \n /      \ \n/________\ \n");

    echo("The area of the triangle is: "). $triangleanswer; // displays area
    echo("\n"); // adds blank line

    $ask = readline("\n\nInput a shape to calculate its area: "); // prompts user to continue
  }
  if ($ask == $circle) // if statement for circle
  {
    $circleradius = readline("What is the raidus of the circle? "); // finds radius

    $circleanswer = ($circleradius * $circleradius) * 3.14; // calculates area

    echo("\nThe area of the circle is roughly: "). $circleanswer; // displays area
    echo("\n"); // adds blank line

    $ask = readline("\n\nInput a shape to calculate its area: "); // prompts user to continue
  }
  else
  echo("\nThe available shapes for this program are Square, \nRectangle, Triangle, and Circle\n");

  $ask = readline("\nInput a shape to calculate its area: "); // prompts user to continue


} // end while statement
?>
