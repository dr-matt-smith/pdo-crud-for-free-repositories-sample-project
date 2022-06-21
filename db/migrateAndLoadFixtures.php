<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Tudublin\MovieRepository;

$movieRepository = new MovieRepository();

$movieRepository->resetTable();

$movieRepository->createAndInsert('Jaws', 9.99, 'horror');
$movieRepository->createAndInsert('Jumanji', 7, 'entertainment');

$movies = $movieRepository->findAll();
print '<pre>';
var_dump($movies);
