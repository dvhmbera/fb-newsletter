<?php
require_once('config/bootstrap.php');

use Cake\Core\Configure;
use League\Fractal\Manager;

$app = new \Slim\Slim();

// Create monolog logger and store logger in container as singleton 
// (Singleton resources retrieve the same log resource definition each time)
$app->container->singleton('log', function () {
    $log = new \Monolog\Logger('fb-newsletter');
    $log->pushHandler(new \Monolog\Handler\StreamHandler('./logs/app.log', \Monolog\Logger::DEBUG));
    return $log;
});

$app->container->singleton('apiManager', function () {
    $manager = new Manager();
    $manager->setSerializer(new League\Fractal\Serializer\JsonApiSerializer());
    return $manager;
});

$app->container->singleton('fb', function () {
    try {
        $fb = new Facebook\Facebook([
          'app_id'     => Configure::read('fb.api_id'),
          'app_secret' => Configure::read('fb.api_secret'),
          'default_graph_version' => 'v2.2',
        ]);
    } catch(Exception $e) {
        $app->log->error('Failed to create facebook app client');
    }
    return $fb;
});

// Prepare view
$app->view(new \Slim\Views\Twig());
$app->view->parserOptions = [
    'charset' => 'utf-8',
    'cache'   => CACHE_DIR,
    'auto_reload' => true,
    'strict_variables' => false,
    'autoescape' => true
];
$app->view->parserExtensions = [new \Slim\Views\TwigExtension()];

// home page
$app->get('/', function() use ($app) {
    $app->render('index.php');
});

$app->get('/404', function() use ($app) {
    $app->render('not_found.php');
});

// load other routes
require_once('src/routes/users.php');
require_once('src/routes/newsletters.php');

// Run the application
$app->run();