<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        // ele_editorial_default_index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'ele_editorial_default_index');
            }

            return array (  '_controller' => 'ELE\\EditorialBundle\\Controller\\DefaultController::indexAction',  '_route' => 'ele_editorial_default_index',);
        }

        if (0 === strpos($pathinfo, '/user')) {
            // user_index
            if (rtrim($pathinfo, '/') === '/user') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_user_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'user_index');
                }

                return array (  '_controller' => 'ELE\\EditorialBundle\\Controller\\UserController::indexAction',  '_route' => 'user_index',);
            }
            not_user_index:

            // user_new
            if ($pathinfo === '/user/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_user_new;
                }

                return array (  '_controller' => 'ELE\\EditorialBundle\\Controller\\UserController::newAction',  '_route' => 'user_new',);
            }
            not_user_new:

            // user_show
            if (preg_match('#^/user/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_user_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_show')), array (  '_controller' => 'ELE\\EditorialBundle\\Controller\\UserController::showAction',));
            }
            not_user_show:

            // user_edit
            if (preg_match('#^/user/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_user_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_edit')), array (  '_controller' => 'ELE\\EditorialBundle\\Controller\\UserController::editAction',));
            }
            not_user_edit:

            // user_delete
            if (preg_match('#^/user/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_user_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_delete')), array (  '_controller' => 'ELE\\EditorialBundle\\Controller\\UserController::deleteAction',));
            }
            not_user_delete:

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
