<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Job.php";
    require_once __DIR__."/../src/Company.php";
    require_once __DIR__."/../src/Address.php";

    session_start();

    if (empty($_SESSION['list_of_jobs'])) {
        $_SESSION['list_of_jobs'] = array();
    }

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('jobs.html.twig', array('jobs' => Job::getAll()));
    });

    $app->post("/jobs", function() use ($app) {
        $job = new Job($_POST['title'], new Company($_POST['name'], $_POST['phone']));
        // $company = $job->getCompany();
        // $company_name = $company->getName();
        $place->save();
        return $app['twig']->render('add_job.html.twig', array('newjob' => $job));
    });

    $app->post("/delete_jobs.html.twig", function() use($app) {
        Job::deleteAll();
        return $app['twig']->render('delete_jobs.html.twig');
    });

    return $app;
 ?>
