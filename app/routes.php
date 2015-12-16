<?php

use Symfony\Component\HttpFoundation\Request;
use MicroCMS\Domain\Comment;
use MicroCMS\Form\Type\CommentType;

// Home page
$app->get('/', function () use ($app) {
    $movies = $app['dao.movie']->findAll();
    return $app['twig']->render('index.html.twig', array('movies' => $movies));
})->bind('home');

// Movie details with comments
$app->match('/movie/{id}', function ($id, Request $request) use ($app) {
    $movie = $app['dao.movie']->find($id);
    $detailFormView = null;
    
        }
        $detailFormView = $detailForm->createView();
    
    $details = $app['dao.detail']->findAllByMovie($id);
    return $app['twig']->render('movie.html.twig', array(
        'movie' => $movie, 
        'details' => $details,
        'detailForm' => $detailFormView));
})->bind('movie');
