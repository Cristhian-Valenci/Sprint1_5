<?php 
require_once 'N1.Ejercicio1.Animal.php';
require_once 'N1.Ejercicio1.Perro.php';
require_once 'N1.Ejercicio1.Gato.php';

$perro = new Perro("Bandido");
echo $perro->makeSound();

$gato = new Gato("Garfield");
echo $gato->makeSound();



?>