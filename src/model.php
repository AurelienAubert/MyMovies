<?php

// Return all news
function getNews() {
    $bdd = new PDO('mysql:host=localhost;dbname=mymovies;charset=utf8', 'mymovies_user', 'secret');
    $movies = $bdd->query('select * from movie order by mov_id desc');
    return $movies;
}