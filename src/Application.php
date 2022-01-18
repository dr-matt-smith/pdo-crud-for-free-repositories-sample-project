<?php

namespace Tudublin;

class Application
{
    public function run()
    {
        // create and use repository to add new record to datatabase
        $movieRepository = new MovieRepository();
        $movieRepository->createAndInsert('Jumanji 2', 9.99, 'comedy');

        $movies = $movieRepository->findAll();

        print '<pre>';
        var_dump($movies);
    }

}