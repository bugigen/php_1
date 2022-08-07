<?php
  require_once 'index.html';

  $one = rand(0, 100);
  $two = rand(0, 100);
  $str1 = 'word1';
  $str2 = 'word2';
  echo '$one = ' . $one . '<br>';
  echo '$two = ' . $two . '<br>';
  echo '$one + $two = ' . $one + $two . '<br>' . '<hr>';
  echo '$str1 = ' . $str1 . '<br>';
  echo '$str2 = ' . $str2 . '<br>';
  echo '$str1 + $str2 = ' . $str1 . $str2 . '<br>' . '<hr>';

  $dog = 'Bobik';
  $cat = 'Musya';
  $cow = 'Murka';
  $type_animals = ['Bobik', 'Musya', 'Murka', 'Barsik', 'Sharik', 'Nemo'];
  $type_animal = $type_animals[rand(0, count($type_animals) - 1)];
  echo $type_animal . '<br>';
  switch ($type_animal) {
    case $dog:
      echo '$type_animal = $dog';
      break;
    case $cat:
      echo '$type_animal = $cat';
      break;
    case $cow:
      echo '$type_animal = $cow';
      break;
    default:
      echo 'WTF??!!';
  }
?>

