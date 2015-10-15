<?php

define('DS', DIRECTORY_SEPARATOR);
define('CONFIG',  dirname(__file__) .  DS );
define('ROOT',  dirname(basename(dirname(__file__))));
define('VENDOR',  ROOT . DS . 'vendor' . DS );
define('CACHE_DIR',  ROOT. DS . 'templates' . DS . 'cache' . DS);
require(VENDOR . 'autoload.php');

use Cake\Core\Configure;

Configure::load('app', 'default', false);

