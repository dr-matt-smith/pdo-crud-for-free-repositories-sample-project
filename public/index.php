<!-- prevent getting executed twice each time due to favicon requsts -->
<link rel="icon" href="data:;base64,iVBORw0KGgo=">

<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once __DIR__ . '/../vendor/autoload.php';

use Tudublin\MovieRepository;
use Tudublin\Movie;

// create and use repository to add new record to datatabase
$movieRepository = new MovieRepository();
$movieRepository->createAndInsert('Jumanji 2', 9.99, 'comedy');

$movies = $movieRepository->findAll();

print '<pre>';
var_dump($movies);

