<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // ele_editorial_default_index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'ele_editorial_default_index');
            }

            return array (  '_controller' => 'ELE\\EditorialBundle\\Controller\\DefaultController::indexAction',  '_route' => 'ele_editorial_default_index',);
        }

        if (0 === strpos($pathinfo, '/c')) {
            if (0 === strpos($pathinfo, '/categoria')) {
                // categoria_index
                if (rtrim($pathinfo, '/') === '/categoria') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_categoria_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'categoria_index');
                    }

                    return array (  '_controller' => 'ELE\\EditorialBundle\\Controller\\categoriaController::indexAction',  '_route' => 'categoria_index',);
                }
                not_categoria_index:

                // categoria_new
                if ($pathinfo === '/categoria/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_categoria_new;
                    }

                    return array (  '_controller' => 'ELE\\EditorialBundle\\Controller\\categoriaController::newAction',  '_route' => 'categoria_new',);
                }
                not_categoria_new:

                // categoria_show
                if (preg_match('#^/categoria/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_categoria_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'categoria_show')), array (  '_controller' => 'ELE\\EditorialBundle\\Controller\\categoriaController::showAction',));
                }
                not_categoria_show:

                // categoria_edit
                if (preg_match('#^/categoria/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_categoria_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'categoria_edit')), array (  '_controller' => 'ELE\\EditorialBundle\\Controller\\categoriaController::editAction',));
                }
                not_categoria_edit:

                // categoria_delete
                if (preg_match('#^/categoria/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_categoria_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'categoria_delete')), array (  '_controller' => 'ELE\\EditorialBundle\\Controller\\categoriaController::deleteAction',));
                }
                not_categoria_delete:

            }

            if (0 === strpos($pathinfo, '/cliente')) {
                // cliente_index
                if (rtrim($pathinfo, '/') === '/cliente') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_cliente_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'cliente_index');
                    }

                    return array (  '_controller' => 'ELE\\EditorialBundle\\Controller\\clienteController::indexAction',  '_route' => 'cliente_index',);
                }
                not_cliente_index:

                // cliente_new
                if ($pathinfo === '/cliente/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_cliente_new;
                    }

                    return array (  '_controller' => 'ELE\\EditorialBundle\\Controller\\clienteController::newAction',  '_route' => 'cliente_new',);
                }
                not_cliente_new:

                // cliente_show
                if (preg_match('#^/cliente/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_cliente_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'cliente_show')), array (  '_controller' => 'ELE\\EditorialBundle\\Controller\\clienteController::showAction',));
                }
                not_cliente_show:

                // cliente_edit
                if (preg_match('#^/cliente/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_cliente_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'cliente_edit')), array (  '_controller' => 'ELE\\EditorialBundle\\Controller\\clienteController::editAction',));
                }
                not_cliente_edit:

                // cliente_delete
                if (preg_match('#^/cliente/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_cliente_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'cliente_delete')), array (  '_controller' => 'ELE\\EditorialBundle\\Controller\\clienteController::deleteAction',));
                }
                not_cliente_delete:

            }

            if (0 === strpos($pathinfo, '/coleccion')) {
                // coleccion_index
                if (rtrim($pathinfo, '/') === '/coleccion') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_coleccion_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'coleccion_index');
                    }

                    return array (  '_controller' => 'ELE\\EditorialBundle\\Controller\\coleccionController::indexAction',  '_route' => 'coleccion_index',);
                }
                not_coleccion_index:

                // coleccion_new
                if ($pathinfo === '/coleccion/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_coleccion_new;
                    }

                    return array (  '_controller' => 'ELE\\EditorialBundle\\Controller\\coleccionController::newAction',  '_route' => 'coleccion_new',);
                }
                not_coleccion_new:

                // coleccion_show
                if (preg_match('#^/coleccion/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_coleccion_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'coleccion_show')), array (  '_controller' => 'ELE\\EditorialBundle\\Controller\\coleccionController::showAction',));
                }
                not_coleccion_show:

                // coleccion_edit
                if (preg_match('#^/coleccion/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_coleccion_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'coleccion_edit')), array (  '_controller' => 'ELE\\EditorialBundle\\Controller\\coleccionController::editAction',));
                }
                not_coleccion_edit:

                // coleccion_delete
                if (preg_match('#^/coleccion/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_coleccion_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'coleccion_delete')), array (  '_controller' => 'ELE\\EditorialBundle\\Controller\\coleccionController::deleteAction',));
                }
                not_coleccion_delete:

            }

        }

        if (0 === strpos($pathinfo, '/libro')) {
            // libro_index
            if (rtrim($pathinfo, '/') === '/libro') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_libro_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'libro_index');
                }

                return array (  '_controller' => 'ELE\\EditorialBundle\\Controller\\libroController::indexAction',  '_route' => 'libro_index',);
            }
            not_libro_index:

            // libro_new
            if ($pathinfo === '/libro/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_libro_new;
                }

                return array (  '_controller' => 'ELE\\EditorialBundle\\Controller\\libroController::newAction',  '_route' => 'libro_new',);
            }
            not_libro_new:

            // libro_show
            if (preg_match('#^/libro/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_libro_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'libro_show')), array (  '_controller' => 'ELE\\EditorialBundle\\Controller\\libroController::showAction',));
            }
            not_libro_show:

            // libro_edit
            if (preg_match('#^/libro/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_libro_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'libro_edit')), array (  '_controller' => 'ELE\\EditorialBundle\\Controller\\libroController::editAction',));
            }
            not_libro_edit:

            // libro_delete
            if (preg_match('#^/libro/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_libro_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'libro_delete')), array (  '_controller' => 'ELE\\EditorialBundle\\Controller\\libroController::deleteAction',));
            }
            not_libro_delete:

        }

        if (0 === strpos($pathinfo, '/pais')) {
            // pais_index
            if (rtrim($pathinfo, '/') === '/pais') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_pais_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'pais_index');
                }

                return array (  '_controller' => 'ELE\\EditorialBundle\\Controller\\paisController::indexAction',  '_route' => 'pais_index',);
            }
            not_pais_index:

            // pais_new
            if ($pathinfo === '/pais/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_pais_new;
                }

                return array (  '_controller' => 'ELE\\EditorialBundle\\Controller\\paisController::newAction',  '_route' => 'pais_new',);
            }
            not_pais_new:

            // pais_show
            if (preg_match('#^/pais/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_pais_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pais_show')), array (  '_controller' => 'ELE\\EditorialBundle\\Controller\\paisController::showAction',));
            }
            not_pais_show:

            // pais_edit
            if (preg_match('#^/pais/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_pais_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pais_edit')), array (  '_controller' => 'ELE\\EditorialBundle\\Controller\\paisController::editAction',));
            }
            not_pais_edit:

            // pais_delete
            if (preg_match('#^/pais/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_pais_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pais_delete')), array (  '_controller' => 'ELE\\EditorialBundle\\Controller\\paisController::deleteAction',));
            }
            not_pais_delete:

        }

        if (0 === strpos($pathinfo, '/solicitud')) {
            // solicitud_index
            if (rtrim($pathinfo, '/') === '/solicitud') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_solicitud_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'solicitud_index');
                }

                return array (  '_controller' => 'ELE\\EditorialBundle\\Controller\\solicitudController::indexAction',  '_route' => 'solicitud_index',);
            }
            not_solicitud_index:

            // solicitud_new
            if ($pathinfo === '/solicitud/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_solicitud_new;
                }

                return array (  '_controller' => 'ELE\\EditorialBundle\\Controller\\solicitudController::newAction',  '_route' => 'solicitud_new',);
            }
            not_solicitud_new:

            // solicitud_show
            if (preg_match('#^/solicitud/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_solicitud_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'solicitud_show')), array (  '_controller' => 'ELE\\EditorialBundle\\Controller\\solicitudController::showAction',));
            }
            not_solicitud_show:

            // solicitud_edit
            if (preg_match('#^/solicitud/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_solicitud_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'solicitud_edit')), array (  '_controller' => 'ELE\\EditorialBundle\\Controller\\solicitudController::editAction',));
            }
            not_solicitud_edit:

            // solicitud_delete
            if (preg_match('#^/solicitud/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_solicitud_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'solicitud_delete')), array (  '_controller' => 'ELE\\EditorialBundle\\Controller\\solicitudController::deleteAction',));
            }
            not_solicitud_delete:

        }

        if (0 === strpos($pathinfo, '/usuario')) {
            // usuario_index
            if (rtrim($pathinfo, '/') === '/usuario') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_usuario_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'usuario_index');
                }

                return array (  '_controller' => 'ELE\\EditorialBundle\\Controller\\usuarioController::indexAction',  '_route' => 'usuario_index',);
            }
            not_usuario_index:

            // usuario_new
            if ($pathinfo === '/usuario/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_usuario_new;
                }

                return array (  '_controller' => 'ELE\\EditorialBundle\\Controller\\usuarioController::newAction',  '_route' => 'usuario_new',);
            }
            not_usuario_new:

            // usuario_show
            if (preg_match('#^/usuario/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_usuario_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuario_show')), array (  '_controller' => 'ELE\\EditorialBundle\\Controller\\usuarioController::showAction',));
            }
            not_usuario_show:

            // usuario_edit
            if (preg_match('#^/usuario/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_usuario_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuario_edit')), array (  '_controller' => 'ELE\\EditorialBundle\\Controller\\usuarioController::editAction',));
            }
            not_usuario_edit:

            // usuario_delete
            if (preg_match('#^/usuario/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_usuario_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuario_delete')), array (  '_controller' => 'ELE\\EditorialBundle\\Controller\\usuarioController::deleteAction',));
            }
            not_usuario_delete:

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        // index
        if ($pathinfo === '/index') {
            return array (  '_controller' => 'ELE\\EditorialBundle\\Controller\\DefaultController::indexAction',  '_route' => 'index',);
        }

        // resena
        if ($pathinfo === '/resena') {
            return array (  '_controller' => 'ELE\\EditorialBundle\\Controller\\DefaultController::resenaAction',  '_route' => 'resena',);
        }

        // novedades
        if ($pathinfo === '/novedades') {
            return array (  '_controller' => 'ELE\\EditorialBundle\\Controller\\DefaultController::novedadesAction',  '_route' => 'novedades',);
        }

        // login
        if ($pathinfo === '/login') {
            return array (  '_controller' => 'ELE\\EditorialBundle\\Controller\\DefaultController::loginAction',  '_route' => 'login',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
