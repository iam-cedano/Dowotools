<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/{locale}', 'Home::index');

$routes->get('/{locale}/math', 'Math::index');
$routes->get('/{locale}/text', 'Text::index');
$routes->get('/{locale}/images', 'Images::index');
$routes->get('/{locale}/office', 'Office::index');
$routes->get('/{locale}/roblox', 'Roblox::index');

$routes->get('/{locale}/math/add-to-numbers', 'Math::addToNumbers');
$routes->get('/{locale}/math/area-calculator', 'Math::areaCalculator');
$routes->get('/{locale}/math/volume-calculator', 'Math::volumeCalculator');

