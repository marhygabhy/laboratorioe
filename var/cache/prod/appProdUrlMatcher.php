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

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
