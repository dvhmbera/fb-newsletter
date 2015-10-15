<?php
namespace App\Routes;

use App\Resource\UserCollection;
use App\Transformer\UserTransformer;

$app->get('/users/:username', function($username) use ($app) {
    $app->render('users/profile.php');
    $app->log->info('Retrieving user profile: ' . $username);
});


// JSON API Routes below here
$app->get('/api/users',
  /**
   * @api {get} /users Retrieve a user collection
   * @apiGroup User
   *
   */
  function($username) use ($app) {
    $app->log->info('Retrieving users: ' . $username);

    $data = []; // TODO: fetch user data
      
    $resource = new UserCollection($data, new UserTransformer(), 'users');
    
    $resource->setMetaValue('userCount', count($data));
    
    echo $app->apiManager->createData($resource)->toJson();
});

$app->delete('/api/users/:username',
   /**
   * @api {delete} /users/:username Permanently delete a user's profile
   * @apiParam {String} username
   * @apiGroup User
   *
   */
 function($username) use ($app) {
    // TODO: Delete code
    $app->log->info('Deleting user profile for: ' . $username);
});