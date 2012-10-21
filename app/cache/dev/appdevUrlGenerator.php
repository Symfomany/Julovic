<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Symfony\Component\HttpKernel\Log\LoggerInterface;

/**
 * appdevUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appdevUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRoutes = array(
        '_welcome' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Site\\AdminBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),),
        '_wdt' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::toolbarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_wdt',    ),  ),),
        '_profiler_search' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search',    ),  ),),
        '_profiler_purge' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::purgeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/purge',    ),  ),),
        '_profiler_info' => array (  0 =>   array (    0 => 'about',  ),  1 =>   array (    '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::infoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'about',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler/info',    ),  ),),
        '_profiler_import' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::importAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/import',    ),  ),),
        '_profiler_export' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '.txt',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/\\.]+',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler/export',    ),  ),),
        '_profiler_phpinfo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::phpinfoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/phpinfo',    ),  ),),
        '_profiler_search_results' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/search/results',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),),
        '_profiler' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),),
        '_profiler_redirect' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',    'route' => '_profiler_search_results',    'token' => 'empty',    'ip' => '',    'url' => '',    'method' => '',    'limit' => '10',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/',    ),  ),),
        '_configurator_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_configurator/',    ),  ),),
        '_configurator_step' => array (  0 =>   array (    0 => 'index',  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'index',    ),    1 =>     array (      0 => 'text',      1 => '/_configurator/step',    ),  ),),
        '_configurator_final' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_configurator/final',    ),  ),),
        'home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Site\\AdminBundle\\Controller\\ArticlesController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/',    ),  ),),
        'site_admin_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Site\\AdminBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/demo',    ),  ),),
        'login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Site\\AdminBundle\\Controller\\SecurityController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/login',    ),  ),),
        'login_check' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/login_check',    ),  ),),
        'logout' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/logout',    ),  ),),
        'articles' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Site\\AdminBundle\\Controller\\ArticlesController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/articles/',    ),  ),),
        'articles_position' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Site\\AdminBundle\\Controller\\ArticlesController::positionAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/articles/position',    ),  ),),
        'articles_activation' => array (  0 =>   array (    0 => 'id',    1 => 'bool',  ),  1 =>   array (    '_controller' => 'Site\\AdminBundle\\Controller\\ArticlesController::activationAction',    'bool' => '1',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'bool',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/articles/activation',    ),  ),),
        'articles_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Site\\AdminBundle\\Controller\\ArticlesController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/articles/show',    ),  ),),
        'articles_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Site\\AdminBundle\\Controller\\ArticlesController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/articles/new',    ),  ),),
        'articles_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Site\\AdminBundle\\Controller\\ArticlesController::createAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/articles/create',    ),  ),),
        'articles_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Site\\AdminBundle\\Controller\\ArticlesController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/articles/edit',    ),  ),),
        'articles_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Site\\AdminBundle\\Controller\\ArticlesController::updateAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/articles/update',    ),  ),),
        'articles_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Site\\AdminBundle\\Controller\\ArticlesController::deleteAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/articles/delete',    ),  ),),
        'categories' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Site\\AdminBundle\\Controller\\CategoriesController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/categories/',    ),  ),),
        'categories_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Site\\AdminBundle\\Controller\\CategoriesController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/categories',    ),  ),),
        'categories_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Site\\AdminBundle\\Controller\\CategoriesController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/categories/new',    ),  ),),
        'categories_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Site\\AdminBundle\\Controller\\CategoriesController::createAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/categories/create',    ),  ),),
        'categories_position' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Site\\AdminBundle\\Controller\\CategoriesController::positionAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/categories/position',    ),  ),),
        'categories_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Site\\AdminBundle\\Controller\\CategoriesController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/categories',    ),  ),),
        'categories_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Site\\AdminBundle\\Controller\\CategoriesController::updateAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/update',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/categories',    ),  ),),
        'categories_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Site\\AdminBundle\\Controller\\CategoriesController::deleteAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/categories',    ),  ),),
        'comments' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Site\\AdminBundle\\Controller\\CommentsController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/comments/',    ),  ),),
        'comments_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Site\\AdminBundle\\Controller\\CommentsController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/comments',    ),  ),),
        'comments_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Site\\AdminBundle\\Controller\\CommentsController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/comments/new',    ),  ),),
        'comments_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Site\\AdminBundle\\Controller\\CommentsController::createAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/comments/create',    ),  ),),
        'comments_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Site\\AdminBundle\\Controller\\CommentsController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/comments',    ),  ),),
        'comments_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Site\\AdminBundle\\Controller\\CommentsController::updateAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/update',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/comments',    ),  ),),
        'comments_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Site\\AdminBundle\\Controller\\CommentsController::deleteAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/comments',    ),  ),),
        'links' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Site\\AdminBundle\\Controller\\LinksController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/links/',    ),  ),),
        'links_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Site\\AdminBundle\\Controller\\LinksController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/links',    ),  ),),
        'links_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Site\\AdminBundle\\Controller\\LinksController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/links/new',    ),  ),),
        'links_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Site\\AdminBundle\\Controller\\LinksController::createAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/links/create',    ),  ),),
        'links_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Site\\AdminBundle\\Controller\\LinksController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/links',    ),  ),),
        'links_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Site\\AdminBundle\\Controller\\LinksController::updateAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/update',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/links',    ),  ),),
        'links_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Site\\AdminBundle\\Controller\\LinksController::deleteAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/links',    ),  ),),
        'links_activation' => array (  0 =>   array (    0 => 'id',    1 => 'bool',  ),  1 =>   array (    '_controller' => 'Site\\AdminBundle\\Controller\\LinksController::activationAction',    'bool' => '1',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'bool',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/links/activation',    ),  ),),
        'medias' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Site\\AdminBundle\\Controller\\MediasController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/medias/',    ),  ),),
        'medias_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Site\\AdminBundle\\Controller\\MediasController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/medias',    ),  ),),
        'medias_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Site\\AdminBundle\\Controller\\MediasController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/medias/new',    ),  ),),
        'medias_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Site\\AdminBundle\\Controller\\MediasController::createAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/medias/create',    ),  ),),
        'medias_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Site\\AdminBundle\\Controller\\MediasController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/medias',    ),  ),),
        'medias_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Site\\AdminBundle\\Controller\\MediasController::updateAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/update',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/medias',    ),  ),),
        'medias_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Site\\AdminBundle\\Controller\\MediasController::deleteAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/medias',    ),  ),),
        'medias_activation' => array (  0 =>   array (    0 => 'id',    1 => 'bool',  ),  1 =>   array (    '_controller' => 'Site\\AdminBundle\\Controller\\MediasController::activationAction',    'bool' => '1',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'bool',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/medias/activation',    ),  ),),
        'tags' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Site\\AdminBundle\\Controller\\TagsController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/tags/',    ),  ),),
        'tags_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Site\\AdminBundle\\Controller\\TagsController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/tags',    ),  ),),
        'tags_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Site\\AdminBundle\\Controller\\TagsController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/tags/new',    ),  ),),
        'tags_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Site\\AdminBundle\\Controller\\TagsController::createAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/tags/create',    ),  ),),
        'tags_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Site\\AdminBundle\\Controller\\TagsController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/tags',    ),  ),),
        'tags_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Site\\AdminBundle\\Controller\\TagsController::updateAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/update',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/tags',    ),  ),),
        'tags_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Site\\AdminBundle\\Controller\\TagsController::deleteAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/tags',    ),  ),),
        'users' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Site\\AdminBundle\\Controller\\UsersController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/users/',    ),  ),),
        'users_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Site\\AdminBundle\\Controller\\UsersController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/users',    ),  ),),
        'users_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Site\\AdminBundle\\Controller\\UsersController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/users/new',    ),  ),),
        'users_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Site\\AdminBundle\\Controller\\UsersController::createAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/users/create',    ),  ),),
        'users_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Site\\AdminBundle\\Controller\\UsersController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/users',    ),  ),),
        'users_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Site\\AdminBundle\\Controller\\UsersController::updateAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/update',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/users',    ),  ),),
        'users_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Site\\AdminBundle\\Controller\\UsersController::deleteAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/users',    ),  ),),
        'search_query' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Site\\AdminBundle\\Controller\\SlotController::searchAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/search',    ),  ),),
        'search_query_ajax' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Site\\AdminBundle\\Controller\\SlotController::searchajaxAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/searchajax',    ),  ),),
        'other' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Site\\AdminBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/notfound',    ),  ),),
        'administrateurs' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Site\\AdminBundle\\Controller\\AdministrateursController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/',    ),  ),),
        'my_account' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Site\\AdminBundle\\Controller\\AdministrateursController::myaccountAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/my-account',    ),  ),),
        'administrateurs_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Site\\AdminBundle\\Controller\\AdministrateursController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin',    ),  ),),
        'administrateurs_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Site\\AdminBundle\\Controller\\AdministrateursController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/new',    ),  ),),
        'administrateurs_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Site\\AdminBundle\\Controller\\AdministrateursController::createAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/create',    ),  ),),
        'administrateurs_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Site\\AdminBundle\\Controller\\AdministrateursController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin',    ),  ),),
        'administrateurs_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Site\\AdminBundle\\Controller\\AdministrateursController::updateAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/update',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin',    ),  ),),
        'administrateurs_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Site\\AdminBundle\\Controller\\AdministrateursController::deleteAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin',    ),  ),),
        'pages' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Site\\AdminBundle\\Controller\\PagesController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/pages/',    ),  ),),
        'pages_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Site\\AdminBundle\\Controller\\PagesController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/pages',    ),  ),),
        'pages_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Site\\AdminBundle\\Controller\\PagesController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/pages/new',    ),  ),),
        'pages_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Site\\AdminBundle\\Controller\\PagesController::createAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/pages/create',    ),  ),),
        'pages_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Site\\AdminBundle\\Controller\\PagesController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/pages',    ),  ),),
        'pages_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Site\\AdminBundle\\Controller\\PagesController::updateAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/update',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/pages',    ),  ),),
        'pages_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Site\\AdminBundle\\Controller\\PagesController::deleteAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/pages',    ),  ),),
        'parametres' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Site\\AdminBundle\\Controller\\ParametresController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/parametres/',    ),  ),),
        'parametres_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Site\\AdminBundle\\Controller\\ParametresController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/parametres',    ),  ),),
        'parametres_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Site\\AdminBundle\\Controller\\ParametresController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/parametres',    ),  ),),
        'parametres_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Site\\AdminBundle\\Controller\\ParametresController::updateAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/update',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/parametres',    ),  ),),
        'referencement' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Site\\AdminBundle\\Controller\\ReferencementController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/referencement/',    ),  ),),
        'referencement_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Site\\AdminBundle\\Controller\\ReferencementController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/referencement',    ),  ),),
        'referencement_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Site\\AdminBundle\\Controller\\ReferencementController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/referencement/new',    ),  ),),
        'referencement_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Site\\AdminBundle\\Controller\\ReferencementController::createAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/referencement/create',    ),  ),),
        'referencement_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Site\\AdminBundle\\Controller\\ReferencementController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/referencement',    ),  ),),
        'referencement_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Site\\AdminBundle\\Controller\\ReferencementController::updateAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/update',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/referencement',    ),  ),),
        'referencement_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Site\\AdminBundle\\Controller\\ReferencementController::deleteAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/referencement',    ),  ),),
        'fos_js_routing_js' => array (  0 =>   array (    0 => '_format',  ),  1 =>   array (    '_controller' => 'fos_js_routing.controller:indexAction',    '_format' => 'js',  ),  2 =>   array (    '_format' => 'js|json',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => 'js|json',      3 => '_format',    ),    1 =>     array (      0 => 'text',      1 => '/admin/js/routing',    ),  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $absolute = false)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Route "%s" does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $absolute);
    }
}
