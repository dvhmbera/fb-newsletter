<?php

$app->get('/:username/newsletters', function($username) use ($app) {
    
    $app->log->info(sprintf('Fetching all newsletters for %s', $username));
    
});

$app->get('/:username/newsletters/:yyyy', function($username, $year) use ($app) {
    
    $app->log->info(sprintf('Fetching all newsletters for %s, year: %s', $username, $year));
    
});

$app->get('/:username/newsletters/:yyyy/:mm', function($username, $year, $month) use ($app) {
    $app->log->info(sprintf('Fetching newsletters for %s, year: %s, month: %s', $username, $year, $month));
              
});


// JSON API routes
$app->get('/api/:username/newsletters',
  /**
   * @api {get} /api/:username/newsletters Retrieve newsletters for the user with username
   * @apiParam {String} username Username of active user
   * @apiGroup Newsletter
   *
   */
  function($username) use ($app) {
    
    $app->log->info(sprintf('Fetching all newsletters for %s', $username));
    
});
