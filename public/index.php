<?php
require_once __DIR__ . '/../config/dbConstants.php';
require_once __DIR__ . '/../vendor/autoload.php';

use Tudublin\MovieRepository;
use Tudublin\Movie;

// for Car DB actions
$movieRepository = new MovieRepository();

$m = new Movie();
$m->setTitle('pop');
$m->setPrice(8.01);
$m->setCategory('(unknown)');
$movieRepository->create($m);

$movies = $movieRepository->findAll();

var_dump($movies);

