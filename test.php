<?php

echo "Hello World!\n";

$ages = array(5, 6, 99);

array_push($ages, 11);

echo var_dump($ages);

echo ($ages[0]);

foreach($ages as $age) {
  echo $age . "\n";
}

?>
