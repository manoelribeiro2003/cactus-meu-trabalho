<?php
/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different URLs to chosen controllers and their actions (functions).
 *
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

use Cake\Core\Plugin;
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;
use Cake\Routing\Route\DashedRoute;

/**
 * The default class to use for all routes
 *
 * The following route classes are supplied with CakePHP and are appropriate
 * to set as the default:
 *
 * - Route
 * - InflectedRoute
 * - DashedRoute
 *
 * If no call is made to `Router::defaultRouteClass()`, the class used is
 * `Route` (`Cake\Routing\Route\Route`)
 *
 * Note that `Route` does not do any inflections on URLs which will result in
 * inconsistently cased URLs when used with `:plugin`, `:controller` and
 * `:action` markers.
 *
 * Cache: Routes are cached to improve performance, check the RoutingMiddleware
 * constructor in your `src/Application.php` file to change this behavior.
 *
 */
Router::defaultRouteClass(DashedRoute::class);

Router::scope('/', function (RouteBuilder $routes) {
    $routes->connect('/', ['controller' => 'Home', 'action' => 'index']);
    $routes->connect('/pages/*', ['controller' => 'Home', 'action' => 'index']);
    $routes->fallbacks(DashedRoute::class);
});

//https://book.cakephp.org/3.0/en/development/routing.html#passing-parameters-to-action
Router::scope('/', function ($routes) {
    // $routes->connect(
    //     '/artigo/:slug', // E.g. /blog/3-CakePHP_Rocks
    //     ['controller' => 'Artigo', 'action' => 'view']
    // )
    // // Define the route elements in the route template
    // // to pass as function arguments. Order matters since this
    // // will simply map ":id" to $articleId in your action
    // ->setPass(['slug']);
    // $routes->fallbacks(DashedRoute::class);
    $routes->connect(
        '/startups/:id', // E.g. /blog/3-CakePHP_Rocks
        ['controller' => 'startups', 'action' => 'view']
    )
    // Define the route elements in the route template
    // to pass as function arguments. Order matters since this
    // will simply map ":id" to $articleId in your action
    ->setPass(['id']);
    $routes->fallbacks(DashedRoute::class);
});

Router::prefix('admin', function (RouteBuilder $routes) {
    $routes->fallbacks(DashedRoute::class);
});
