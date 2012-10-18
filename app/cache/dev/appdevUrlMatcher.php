<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appdevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appdevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }

            return array (  '_controller' => 'Site\\AdminBundle\\Controller\\DefaultController::indexAction',  '_route' => '_welcome',);
        }

        // _wdt
        if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?<token>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::toolbarAction',)), array('_route' => '_wdt'));
        }

        if (0 === strpos($pathinfo, '/_profiler')) {
            // _profiler_search
            if ($pathinfo === '/_profiler/search') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchAction',  '_route' => '_profiler_search',);
            }

            // _profiler_purge
            if ($pathinfo === '/_profiler/purge') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::purgeAction',  '_route' => '_profiler_purge',);
            }

            // _profiler_info
            if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?<about>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::infoAction',)), array('_route' => '_profiler_info'));
            }

            // _profiler_import
            if ($pathinfo === '/_profiler/import') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::importAction',  '_route' => '_profiler_import',);
            }

            // _profiler_export
            if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?<token>[^/\\.]+)\\.txt$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction',)), array('_route' => '_profiler_export'));
            }

            // _profiler_phpinfo
            if ($pathinfo === '/_profiler/phpinfo') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::phpinfoAction',  '_route' => '_profiler_phpinfo',);
            }

            // _profiler_search_results
            if (preg_match('#^/_profiler/(?<token>[^/]+)/search/results$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction',)), array('_route' => '_profiler_search_results'));
            }

            // _profiler
            if (preg_match('#^/_profiler/(?<token>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::panelAction',)), array('_route' => '_profiler'));
            }

            // _profiler_redirect
            if (rtrim($pathinfo, '/') === '/_profiler') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_profiler_redirect');
                }

                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => '_profiler_search_results',  'token' => 'empty',  'ip' => '',  'url' => '',  'method' => '',  'limit' => '10',  '_route' => '_profiler_redirect',);
            }

        }

        if (0 === strpos($pathinfo, '/_configurator')) {
            // _configurator_home
            if (rtrim($pathinfo, '/') === '/_configurator') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_configurator_home');
                }

                return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
            }

            // _configurator_step
            if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?<index>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',)), array('_route' => '_configurator_step'));
            }

            // _configurator_final
            if ($pathinfo === '/_configurator/final') {
                return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
            }

        }

        if (0 === strpos($pathinfo, '/admin')) {
            // home
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'home');
                }

                return array (  '_controller' => 'Site\\AdminBundle\\Controller\\ArticlesController::indexAction',  '_route' => 'home',);
            }

            // site_admin_homepage
            if ($pathinfo === '/admin/demo') {
                return array (  '_controller' => 'Site\\AdminBundle\\Controller\\DefaultController::indexAction',  '_route' => 'site_admin_homepage',);
            }

            // login
            if ($pathinfo === '/admin/login') {
                return array (  '_controller' => 'Site\\AdminBundle\\Controller\\SecurityController::loginAction',  '_route' => 'login',);
            }

            // login_check
            if ($pathinfo === '/admin/login_check') {
                return array('_route' => 'login_check');
            }

            // logout
            if ($pathinfo === '/admin/logout') {
                return array('_route' => 'logout');
            }

            if (0 === strpos($pathinfo, '/admin/articles')) {
                // articles
                if (rtrim($pathinfo, '/') === '/admin/articles') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'articles');
                    }

                    return array (  '_controller' => 'Site\\AdminBundle\\Controller\\ArticlesController::indexAction',  '_route' => 'articles',);
                }

                // articles_show
                if (0 === strpos($pathinfo, '/admin/articles/show') && preg_match('#^/admin/articles/show/(?<id>[^/]+)$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Site\\AdminBundle\\Controller\\ArticlesController::showAction',)), array('_route' => 'articles_show'));
                }

                // articles_new
                if ($pathinfo === '/admin/articles/new') {
                    return array (  '_controller' => 'Site\\AdminBundle\\Controller\\ArticlesController::newAction',  '_route' => 'articles_new',);
                }

                // articles_create
                if ($pathinfo === '/admin/articles/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_articles_create;
                    }

                    return array (  '_controller' => 'Site\\AdminBundle\\Controller\\ArticlesController::createAction',  '_route' => 'articles_create',);
                }
                not_articles_create:

                // articles_edit
                if (0 === strpos($pathinfo, '/admin/articles/edit') && preg_match('#^/admin/articles/edit/(?<id>[^/]+)$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Site\\AdminBundle\\Controller\\ArticlesController::editAction',)), array('_route' => 'articles_edit'));
                }

                // articles_update
                if (0 === strpos($pathinfo, '/admin/articles/update') && preg_match('#^/admin/articles/update/(?<id>[^/]+)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_articles_update;
                    }

                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Site\\AdminBundle\\Controller\\ArticlesController::updateAction',)), array('_route' => 'articles_update'));
                }
                not_articles_update:

                // articles_delete
                if (0 === strpos($pathinfo, '/admin/articles/delete') && preg_match('#^/admin/articles/delete/(?<id>[^/]+)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_articles_delete;
                    }

                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Site\\AdminBundle\\Controller\\ArticlesController::deleteAction',)), array('_route' => 'articles_delete'));
                }
                not_articles_delete:

            }

            if (0 === strpos($pathinfo, '/admin/categories')) {
                // categories
                if (rtrim($pathinfo, '/') === '/admin/categories') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'categories');
                    }

                    return array (  '_controller' => 'Site\\AdminBundle\\Controller\\CategoriesController::indexAction',  '_route' => 'categories',);
                }

                // categories_show
                if (preg_match('#^/admin/categories/(?<id>[^/]+)/show$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Site\\AdminBundle\\Controller\\CategoriesController::showAction',)), array('_route' => 'categories_show'));
                }

                // categories_new
                if ($pathinfo === '/admin/categories/new') {
                    return array (  '_controller' => 'Site\\AdminBundle\\Controller\\CategoriesController::newAction',  '_route' => 'categories_new',);
                }

                // categories_create
                if ($pathinfo === '/admin/categories/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_categories_create;
                    }

                    return array (  '_controller' => 'Site\\AdminBundle\\Controller\\CategoriesController::createAction',  '_route' => 'categories_create',);
                }
                not_categories_create:

                // categories_edit
                if (preg_match('#^/admin/categories/(?<id>[^/]+)/edit$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Site\\AdminBundle\\Controller\\CategoriesController::editAction',)), array('_route' => 'categories_edit'));
                }

                // categories_update
                if (preg_match('#^/admin/categories/(?<id>[^/]+)/update$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_categories_update;
                    }

                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Site\\AdminBundle\\Controller\\CategoriesController::updateAction',)), array('_route' => 'categories_update'));
                }
                not_categories_update:

                // categories_delete
                if (preg_match('#^/admin/categories/(?<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_categories_delete;
                    }

                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Site\\AdminBundle\\Controller\\CategoriesController::deleteAction',)), array('_route' => 'categories_delete'));
                }
                not_categories_delete:

            }

            if (0 === strpos($pathinfo, '/admin/comments')) {
                // comments
                if (rtrim($pathinfo, '/') === '/admin/comments') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'comments');
                    }

                    return array (  '_controller' => 'Site\\AdminBundle\\Controller\\CommentsController::indexAction',  '_route' => 'comments',);
                }

                // comments_show
                if (preg_match('#^/admin/comments/(?<id>[^/]+)/show$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Site\\AdminBundle\\Controller\\CommentsController::showAction',)), array('_route' => 'comments_show'));
                }

                // comments_new
                if ($pathinfo === '/admin/comments/new') {
                    return array (  '_controller' => 'Site\\AdminBundle\\Controller\\CommentsController::newAction',  '_route' => 'comments_new',);
                }

                // comments_create
                if ($pathinfo === '/admin/comments/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_comments_create;
                    }

                    return array (  '_controller' => 'Site\\AdminBundle\\Controller\\CommentsController::createAction',  '_route' => 'comments_create',);
                }
                not_comments_create:

                // comments_edit
                if (preg_match('#^/admin/comments/(?<id>[^/]+)/edit$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Site\\AdminBundle\\Controller\\CommentsController::editAction',)), array('_route' => 'comments_edit'));
                }

                // comments_update
                if (preg_match('#^/admin/comments/(?<id>[^/]+)/update$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_comments_update;
                    }

                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Site\\AdminBundle\\Controller\\CommentsController::updateAction',)), array('_route' => 'comments_update'));
                }
                not_comments_update:

                // comments_delete
                if (preg_match('#^/admin/comments/(?<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_comments_delete;
                    }

                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Site\\AdminBundle\\Controller\\CommentsController::deleteAction',)), array('_route' => 'comments_delete'));
                }
                not_comments_delete:

            }

            if (0 === strpos($pathinfo, '/admin/links')) {
                // links
                if (rtrim($pathinfo, '/') === '/admin/links') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'links');
                    }

                    return array (  '_controller' => 'Site\\AdminBundle\\Controller\\LinksController::indexAction',  '_route' => 'links',);
                }

                // links_show
                if (preg_match('#^/admin/links/(?<id>[^/]+)/show$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Site\\AdminBundle\\Controller\\LinksController::showAction',)), array('_route' => 'links_show'));
                }

                // links_new
                if ($pathinfo === '/admin/links/new') {
                    return array (  '_controller' => 'Site\\AdminBundle\\Controller\\LinksController::newAction',  '_route' => 'links_new',);
                }

                // links_create
                if ($pathinfo === '/admin/links/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_links_create;
                    }

                    return array (  '_controller' => 'Site\\AdminBundle\\Controller\\LinksController::createAction',  '_route' => 'links_create',);
                }
                not_links_create:

                // links_edit
                if (preg_match('#^/admin/links/(?<id>[^/]+)/edit$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Site\\AdminBundle\\Controller\\LinksController::editAction',)), array('_route' => 'links_edit'));
                }

                // links_update
                if (preg_match('#^/admin/links/(?<id>[^/]+)/update$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_links_update;
                    }

                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Site\\AdminBundle\\Controller\\LinksController::updateAction',)), array('_route' => 'links_update'));
                }
                not_links_update:

                // links_delete
                if (preg_match('#^/admin/links/(?<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_links_delete;
                    }

                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Site\\AdminBundle\\Controller\\LinksController::deleteAction',)), array('_route' => 'links_delete'));
                }
                not_links_delete:

            }

            if (0 === strpos($pathinfo, '/admin/medias')) {
                // medias
                if (rtrim($pathinfo, '/') === '/admin/medias') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'medias');
                    }

                    return array (  '_controller' => 'Site\\AdminBundle\\Controller\\MediasController::indexAction',  '_route' => 'medias',);
                }

                // medias_show
                if (preg_match('#^/admin/medias/(?<id>[^/]+)/show$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Site\\AdminBundle\\Controller\\MediasController::showAction',)), array('_route' => 'medias_show'));
                }

                // medias_new
                if ($pathinfo === '/admin/medias/new') {
                    return array (  '_controller' => 'Site\\AdminBundle\\Controller\\MediasController::newAction',  '_route' => 'medias_new',);
                }

                // medias_create
                if ($pathinfo === '/admin/medias/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_medias_create;
                    }

                    return array (  '_controller' => 'Site\\AdminBundle\\Controller\\MediasController::createAction',  '_route' => 'medias_create',);
                }
                not_medias_create:

                // medias_edit
                if (preg_match('#^/admin/medias/(?<id>[^/]+)/edit$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Site\\AdminBundle\\Controller\\MediasController::editAction',)), array('_route' => 'medias_edit'));
                }

                // medias_update
                if (preg_match('#^/admin/medias/(?<id>[^/]+)/update$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_medias_update;
                    }

                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Site\\AdminBundle\\Controller\\MediasController::updateAction',)), array('_route' => 'medias_update'));
                }
                not_medias_update:

                // medias_delete
                if (preg_match('#^/admin/medias/(?<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_medias_delete;
                    }

                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Site\\AdminBundle\\Controller\\MediasController::deleteAction',)), array('_route' => 'medias_delete'));
                }
                not_medias_delete:

            }

            if (0 === strpos($pathinfo, '/admin/tags')) {
                // tags
                if (rtrim($pathinfo, '/') === '/admin/tags') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'tags');
                    }

                    return array (  '_controller' => 'Site\\AdminBundle\\Controller\\TagsController::indexAction',  '_route' => 'tags',);
                }

                // tags_show
                if (preg_match('#^/admin/tags/(?<id>[^/]+)/show$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Site\\AdminBundle\\Controller\\TagsController::showAction',)), array('_route' => 'tags_show'));
                }

                // tags_new
                if ($pathinfo === '/admin/tags/new') {
                    return array (  '_controller' => 'Site\\AdminBundle\\Controller\\TagsController::newAction',  '_route' => 'tags_new',);
                }

                // tags_create
                if ($pathinfo === '/admin/tags/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_tags_create;
                    }

                    return array (  '_controller' => 'Site\\AdminBundle\\Controller\\TagsController::createAction',  '_route' => 'tags_create',);
                }
                not_tags_create:

                // tags_edit
                if (preg_match('#^/admin/tags/(?<id>[^/]+)/edit$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Site\\AdminBundle\\Controller\\TagsController::editAction',)), array('_route' => 'tags_edit'));
                }

                // tags_update
                if (preg_match('#^/admin/tags/(?<id>[^/]+)/update$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_tags_update;
                    }

                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Site\\AdminBundle\\Controller\\TagsController::updateAction',)), array('_route' => 'tags_update'));
                }
                not_tags_update:

                // tags_delete
                if (preg_match('#^/admin/tags/(?<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_tags_delete;
                    }

                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Site\\AdminBundle\\Controller\\TagsController::deleteAction',)), array('_route' => 'tags_delete'));
                }
                not_tags_delete:

            }

            if (0 === strpos($pathinfo, '/admin/users')) {
                // users
                if (rtrim($pathinfo, '/') === '/admin/users') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'users');
                    }

                    return array (  '_controller' => 'Site\\AdminBundle\\Controller\\UsersController::indexAction',  '_route' => 'users',);
                }

                // users_show
                if (preg_match('#^/admin/users/(?<id>[^/]+)/show$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Site\\AdminBundle\\Controller\\UsersController::showAction',)), array('_route' => 'users_show'));
                }

                // users_new
                if ($pathinfo === '/admin/users/new') {
                    return array (  '_controller' => 'Site\\AdminBundle\\Controller\\UsersController::newAction',  '_route' => 'users_new',);
                }

                // users_create
                if ($pathinfo === '/admin/users/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_users_create;
                    }

                    return array (  '_controller' => 'Site\\AdminBundle\\Controller\\UsersController::createAction',  '_route' => 'users_create',);
                }
                not_users_create:

                // users_edit
                if (preg_match('#^/admin/users/(?<id>[^/]+)/edit$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Site\\AdminBundle\\Controller\\UsersController::editAction',)), array('_route' => 'users_edit'));
                }

                // users_update
                if (preg_match('#^/admin/users/(?<id>[^/]+)/update$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_users_update;
                    }

                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Site\\AdminBundle\\Controller\\UsersController::updateAction',)), array('_route' => 'users_update'));
                }
                not_users_update:

                // users_delete
                if (preg_match('#^/admin/users/(?<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_users_delete;
                    }

                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Site\\AdminBundle\\Controller\\UsersController::deleteAction',)), array('_route' => 'users_delete'));
                }
                not_users_delete:

            }

            // search_query
            if ($pathinfo === '/admin/search') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_search_query;
                }

                return array (  '_controller' => 'Site\\AdminBundle\\Controller\\SlotController::searchAction',  '_route' => 'search_query',);
            }
            not_search_query:

            // search_query_ajax
            if ($pathinfo === '/admin/searchajax') {
                return array (  '_controller' => 'Site\\AdminBundle\\Controller\\SlotController::searchajaxAction',  '_route' => 'search_query_ajax',);
            }

            // administrateurs
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'administrateurs');
                }

                return array (  '_controller' => 'Site\\AdminBundle\\Controller\\AdministrateursController::indexAction',  '_route' => 'administrateurs',);
            }

            // my_account
            if ($pathinfo === '/admin/my-account') {
                return array (  '_controller' => 'Site\\AdminBundle\\Controller\\AdministrateursController::myaccountAction',  '_route' => 'my_account',);
            }

            // administrateurs_show
            if (preg_match('#^/admin/(?<id>[^/]+)/show$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Site\\AdminBundle\\Controller\\AdministrateursController::showAction',)), array('_route' => 'administrateurs_show'));
            }

            // administrateurs_new
            if ($pathinfo === '/admin/new') {
                return array (  '_controller' => 'Site\\AdminBundle\\Controller\\AdministrateursController::newAction',  '_route' => 'administrateurs_new',);
            }

            // administrateurs_create
            if ($pathinfo === '/admin/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_administrateurs_create;
                }

                return array (  '_controller' => 'Site\\AdminBundle\\Controller\\AdministrateursController::createAction',  '_route' => 'administrateurs_create',);
            }
            not_administrateurs_create:

            // administrateurs_edit
            if (preg_match('#^/admin/(?<id>[^/]+)/edit$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Site\\AdminBundle\\Controller\\AdministrateursController::editAction',)), array('_route' => 'administrateurs_edit'));
            }

            // administrateurs_update
            if (preg_match('#^/admin/(?<id>[^/]+)/update$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_administrateurs_update;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Site\\AdminBundle\\Controller\\AdministrateursController::updateAction',)), array('_route' => 'administrateurs_update'));
            }
            not_administrateurs_update:

            // administrateurs_delete
            if (preg_match('#^/admin/(?<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_administrateurs_delete;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Site\\AdminBundle\\Controller\\AdministrateursController::deleteAction',)), array('_route' => 'administrateurs_delete'));
            }
            not_administrateurs_delete:

            if (0 === strpos($pathinfo, '/admin/pages')) {
                // pages
                if (rtrim($pathinfo, '/') === '/admin/pages') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'pages');
                    }

                    return array (  '_controller' => 'Site\\AdminBundle\\Controller\\PagesController::indexAction',  '_route' => 'pages',);
                }

                // pages_show
                if (preg_match('#^/admin/pages/(?<id>[^/]+)/show$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Site\\AdminBundle\\Controller\\PagesController::showAction',)), array('_route' => 'pages_show'));
                }

                // pages_new
                if ($pathinfo === '/admin/pages/new') {
                    return array (  '_controller' => 'Site\\AdminBundle\\Controller\\PagesController::newAction',  '_route' => 'pages_new',);
                }

                // pages_create
                if ($pathinfo === '/admin/pages/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_pages_create;
                    }

                    return array (  '_controller' => 'Site\\AdminBundle\\Controller\\PagesController::createAction',  '_route' => 'pages_create',);
                }
                not_pages_create:

                // pages_edit
                if (preg_match('#^/admin/pages/(?<id>[^/]+)/edit$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Site\\AdminBundle\\Controller\\PagesController::editAction',)), array('_route' => 'pages_edit'));
                }

                // pages_update
                if (preg_match('#^/admin/pages/(?<id>[^/]+)/update$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_pages_update;
                    }

                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Site\\AdminBundle\\Controller\\PagesController::updateAction',)), array('_route' => 'pages_update'));
                }
                not_pages_update:

                // pages_delete
                if (preg_match('#^/admin/pages/(?<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_pages_delete;
                    }

                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Site\\AdminBundle\\Controller\\PagesController::deleteAction',)), array('_route' => 'pages_delete'));
                }
                not_pages_delete:

            }

            if (0 === strpos($pathinfo, '/admin/parametres')) {
                // parametres
                if (rtrim($pathinfo, '/') === '/admin/parametres') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'parametres');
                    }

                    return array (  '_controller' => 'Site\\AdminBundle\\Controller\\ParametresController::indexAction',  '_route' => 'parametres',);
                }

                // parametres_show
                if (preg_match('#^/admin/parametres/(?<id>[^/]+)/show$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Site\\AdminBundle\\Controller\\ParametresController::showAction',)), array('_route' => 'parametres_show'));
                }

                // parametres_edit
                if (preg_match('#^/admin/parametres/(?<id>[^/]+)/edit$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Site\\AdminBundle\\Controller\\ParametresController::editAction',)), array('_route' => 'parametres_edit'));
                }

                // parametres_update
                if (preg_match('#^/admin/parametres/(?<id>[^/]+)/update$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_parametres_update;
                    }

                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Site\\AdminBundle\\Controller\\ParametresController::updateAction',)), array('_route' => 'parametres_update'));
                }
                not_parametres_update:

            }

            // fos_js_routing_js
            if (0 === strpos($pathinfo, '/admin/js/routing') && preg_match('#^/admin/js/routing(?:\\.(?<_format>js|json))?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'fos_js_routing.controller:indexAction',  '_format' => 'js',)), array('_route' => 'fos_js_routing_js'));
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
