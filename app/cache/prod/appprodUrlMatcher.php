<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appprodUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appprodUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/admin')) {
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

            // home
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'home');
                }

                return array (  '_controller' => 'Site\\AdminBundle\\Controller\\ArticlesController::indexAction',  '_route' => 'home',);
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

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
