<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'debug.argument_resolver.service' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentValueResolverInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentResolver\\TraceableValueResolver.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentResolver\\ServiceValueResolver.php';

return $this->privates['debug.argument_resolver.service'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver(new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver(new \Symfony\Component\DependencyInjection\ServiceLocator(array('App\\Controller\\ActeurController::delete' => function () {
    return ($this->privates['.service_locator.xkmHvPK'] ?? $this->load('get_ServiceLocator_XkmHvPKService.php'));
}, 'App\\Controller\\ActeurController::edit' => function () {
    return ($this->privates['.service_locator.xkmHvPK'] ?? $this->load('get_ServiceLocator_XkmHvPKService.php'));
}, 'App\\Controller\\ActeurController::index' => function () {
    return ($this->privates['.service_locator.98aaGn8'] ?? $this->load('get_ServiceLocator_98aaGn8Service.php'));
}, 'App\\Controller\\ActeurController::new' => function () {
    return ($this->privates['.service_locator.OLaif_L'] ?? $this->load('get_ServiceLocator_OLaifLService.php'));
}, 'App\\Controller\\ActeurController::show' => function () {
    return ($this->privates['.service_locator.xkmHvPK'] ?? $this->load('get_ServiceLocator_XkmHvPKService.php'));
}, 'App\\Controller\\FilmController::delete' => function () {
    return ($this->privates['.service_locator.u3l54oY'] ?? $this->load('get_ServiceLocator_U3l54oYService.php'));
}, 'App\\Controller\\FilmController::edit' => function () {
    return ($this->privates['.service_locator.jH_iOFY'] ?? $this->load('get_ServiceLocator_JHIOFYService.php'));
}, 'App\\Controller\\FilmController::index' => function () {
    return ($this->privates['.service_locator.DYPBHGU'] ?? $this->load('get_ServiceLocator_DYPBHGUService.php'));
}, 'App\\Controller\\FilmController::show' => function () {
    return ($this->privates['.service_locator.u3l54oY'] ?? $this->load('get_ServiceLocator_U3l54oYService.php'));
}, 'App\\Controller\\GenreController::delete' => function () {
    return ($this->privates['.service_locator.IZGImX4'] ?? $this->load('get_ServiceLocator_IZGImX4Service.php'));
}, 'App\\Controller\\GenreController::edit' => function () {
    return ($this->privates['.service_locator.IZGImX4'] ?? $this->load('get_ServiceLocator_IZGImX4Service.php'));
}, 'App\\Controller\\GenreController::index' => function () {
    return ($this->privates['.service_locator.XfVLqWt'] ?? $this->load('get_ServiceLocator_XfVLqWtService.php'));
}, 'App\\Controller\\GenreController::show' => function () {
    return ($this->privates['.service_locator.IZGImX4'] ?? $this->load('get_ServiceLocator_IZGImX4Service.php'));
}, 'App\\Controller\\IndexController::index' => function () {
    return ($this->privates['.service_locator.DYPBHGU'] ?? $this->load('get_ServiceLocator_DYPBHGUService.php'));
}, 'App\\Controller\\RealisateurController::delete' => function () {
    return ($this->privates['.service_locator.WehOvbw'] ?? $this->load('get_ServiceLocator_WehOvbwService.php'));
}, 'App\\Controller\\RealisateurController::edit' => function () {
    return ($this->privates['.service_locator.WehOvbw'] ?? $this->load('get_ServiceLocator_WehOvbwService.php'));
}, 'App\\Controller\\RealisateurController::index' => function () {
    return ($this->privates['.service_locator.0hhL6ra'] ?? $this->load('get_ServiceLocator_0hhL6raService.php'));
}, 'App\\Controller\\RealisateurController::show' => function () {
    return ($this->privates['.service_locator.WehOvbw'] ?? $this->load('get_ServiceLocator_WehOvbwService.php'));
}, 'App\\Controller\\ActeurController:delete' => function () {
    return ($this->privates['.service_locator.xkmHvPK'] ?? $this->load('get_ServiceLocator_XkmHvPKService.php'));
}, 'App\\Controller\\ActeurController:edit' => function () {
    return ($this->privates['.service_locator.xkmHvPK'] ?? $this->load('get_ServiceLocator_XkmHvPKService.php'));
}, 'App\\Controller\\ActeurController:index' => function () {
    return ($this->privates['.service_locator.98aaGn8'] ?? $this->load('get_ServiceLocator_98aaGn8Service.php'));
}, 'App\\Controller\\ActeurController:new' => function () {
    return ($this->privates['.service_locator.OLaif_L'] ?? $this->load('get_ServiceLocator_OLaifLService.php'));
}, 'App\\Controller\\ActeurController:show' => function () {
    return ($this->privates['.service_locator.xkmHvPK'] ?? $this->load('get_ServiceLocator_XkmHvPKService.php'));
}, 'App\\Controller\\FilmController:delete' => function () {
    return ($this->privates['.service_locator.u3l54oY'] ?? $this->load('get_ServiceLocator_U3l54oYService.php'));
}, 'App\\Controller\\FilmController:edit' => function () {
    return ($this->privates['.service_locator.jH_iOFY'] ?? $this->load('get_ServiceLocator_JHIOFYService.php'));
}, 'App\\Controller\\FilmController:index' => function () {
    return ($this->privates['.service_locator.DYPBHGU'] ?? $this->load('get_ServiceLocator_DYPBHGUService.php'));
}, 'App\\Controller\\FilmController:show' => function () {
    return ($this->privates['.service_locator.u3l54oY'] ?? $this->load('get_ServiceLocator_U3l54oYService.php'));
}, 'App\\Controller\\GenreController:delete' => function () {
    return ($this->privates['.service_locator.IZGImX4'] ?? $this->load('get_ServiceLocator_IZGImX4Service.php'));
}, 'App\\Controller\\GenreController:edit' => function () {
    return ($this->privates['.service_locator.IZGImX4'] ?? $this->load('get_ServiceLocator_IZGImX4Service.php'));
}, 'App\\Controller\\GenreController:index' => function () {
    return ($this->privates['.service_locator.XfVLqWt'] ?? $this->load('get_ServiceLocator_XfVLqWtService.php'));
}, 'App\\Controller\\GenreController:show' => function () {
    return ($this->privates['.service_locator.IZGImX4'] ?? $this->load('get_ServiceLocator_IZGImX4Service.php'));
}, 'App\\Controller\\IndexController:index' => function () {
    return ($this->privates['.service_locator.DYPBHGU'] ?? $this->load('get_ServiceLocator_DYPBHGUService.php'));
}, 'App\\Controller\\RealisateurController:delete' => function () {
    return ($this->privates['.service_locator.WehOvbw'] ?? $this->load('get_ServiceLocator_WehOvbwService.php'));
}, 'App\\Controller\\RealisateurController:edit' => function () {
    return ($this->privates['.service_locator.WehOvbw'] ?? $this->load('get_ServiceLocator_WehOvbwService.php'));
}, 'App\\Controller\\RealisateurController:index' => function () {
    return ($this->privates['.service_locator.0hhL6ra'] ?? $this->load('get_ServiceLocator_0hhL6raService.php'));
}, 'App\\Controller\\RealisateurController:show' => function () {
    return ($this->privates['.service_locator.WehOvbw'] ?? $this->load('get_ServiceLocator_WehOvbwService.php'));
}))), ($this->privates['debug.stopwatch'] ?? $this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true)));