<?php namespace Config;

use CodeIgniter\Router\RouteCollection;

$routes = Services::routes();

if (file_exists(SYSTEMPATH.'Config/Routes.php'))
{
    require SYSTEMPATH.'Config/Routes.php';
}
/**
 * @var RouteCollection $routes
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

$routes->get('/', 'Home::index');
// $routes->get('/', 'User::index');
// $routes->get('/', 'Home::index', ['filter' => 'login']);
// $routes->get('/home', 'Home::index', ['filter' => 'login']);