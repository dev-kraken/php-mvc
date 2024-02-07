<?php

declare(strict_types=1);

use App\APP;
use App\Config;
use App\Controllers\HomeController;
use App\Router;

require_once __DIR__ . '/../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();
const VIEW_PATH = __DIR__ . '/../views';

$router = new Router();

$router
    ->get('/', [HomeController::class, 'index']);

(new APP(
    $router,
    ['path' => $_SERVER['REQUEST_URI'], 'method' => $_SERVER['REQUEST_METHOD']],
    new Config($_ENV)
))->run();

