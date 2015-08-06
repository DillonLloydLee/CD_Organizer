<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Cd.php";

    session_start();

    $cds = array();
    if (empty($_SESSION['list_of_cds'])) {
        $_SESSION['list_of_cds'] = $cds;
    }

    $app = new Silex\Application();
    $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__.'/../views'));

    //ROOT ROUTE
    $app->get("/", function() use ($app) {
        return $app['twig']->render('cd.html.twig', array ('cds' => Cd::getAll()));

    });

    $app->get('/new_cd', function() use ($app) {
        return $app['twig']->render('new_cd.html.twig', array ('cds' => Cd::getAll()));
    });

    $app->get('/searchbyartist', function() use ($app) {
        return $app['twig']->render('searchbyartist.html.twig', array ('cds' => Cd::getAll()));
    });

    return $app;

?>
