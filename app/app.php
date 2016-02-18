<?php
    require_once __DIR__.'/../vendor/autoload.php';
    require_once __DIR__.'/../src/ScrabbleGenerator.php';

    $app = new Silex\Application();

    $app['debug'] = true;

    $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__.'/../views'));

    $app->get('/', function() use ($app) {
        return $app['twig']->render('homepage.html.twig');
    });

    $app->get('/results', function() use ($app) {
        $scrabble_word = new ScrabbleGenerator;
        $result = $scrabble_word->scrabble_generator($_GET['word']);
        return $app['twig']->render('results.html.twig', array('results' => $result));
    });

    return $app;
 ?>
