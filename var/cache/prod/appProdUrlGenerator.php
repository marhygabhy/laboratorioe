<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'ele_editorial_default_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ELE\\EditorialBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ELE\\EditorialBundle\\Controller\\UserController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/user/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ELE\\EditorialBundle\\Controller\\UserController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/user/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'ELE\\EditorialBundle\\Controller\\UserController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/user',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'ELE\\EditorialBundle\\Controller\\UserController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/user',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'ELE\\EditorialBundle\\Controller\\UserController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/user',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'categoria_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ELE\\EditorialBundle\\Controller\\categoriaController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/categoria/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'categoria_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ELE\\EditorialBundle\\Controller\\categoriaController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/categoria/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'categoria_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'ELE\\EditorialBundle\\Controller\\categoriaController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/categoria',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'categoria_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'ELE\\EditorialBundle\\Controller\\categoriaController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/categoria',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'categoria_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'ELE\\EditorialBundle\\Controller\\categoriaController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/categoria',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'cliente_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ELE\\EditorialBundle\\Controller\\clienteController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/cliente/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'cliente_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ELE\\EditorialBundle\\Controller\\clienteController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/cliente/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'cliente_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'ELE\\EditorialBundle\\Controller\\clienteController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/cliente',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'cliente_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'ELE\\EditorialBundle\\Controller\\clienteController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/cliente',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'cliente_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'ELE\\EditorialBundle\\Controller\\clienteController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/cliente',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'coleccion_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ELE\\EditorialBundle\\Controller\\coleccionController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/coleccion/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'coleccion_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ELE\\EditorialBundle\\Controller\\coleccionController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/coleccion/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'coleccion_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'ELE\\EditorialBundle\\Controller\\coleccionController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/coleccion',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'coleccion_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'ELE\\EditorialBundle\\Controller\\coleccionController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/coleccion',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'coleccion_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'ELE\\EditorialBundle\\Controller\\coleccionController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/coleccion',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'libro_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ELE\\EditorialBundle\\Controller\\libroController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/libro/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'libro_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ELE\\EditorialBundle\\Controller\\libroController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/libro/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'libro_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'ELE\\EditorialBundle\\Controller\\libroController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/libro',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'libro_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'ELE\\EditorialBundle\\Controller\\libroController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/libro',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'libro_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'ELE\\EditorialBundle\\Controller\\libroController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/libro',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pais_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ELE\\EditorialBundle\\Controller\\paisController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/pais/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pais_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ELE\\EditorialBundle\\Controller\\paisController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/pais/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pais_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'ELE\\EditorialBundle\\Controller\\paisController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/pais',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pais_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'ELE\\EditorialBundle\\Controller\\paisController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/pais',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pais_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'ELE\\EditorialBundle\\Controller\\paisController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/pais',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'solicitud_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ELE\\EditorialBundle\\Controller\\solicitudController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/solicitud/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'solicitud_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ELE\\EditorialBundle\\Controller\\solicitudController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/solicitud/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'solicitud_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'ELE\\EditorialBundle\\Controller\\solicitudController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/solicitud',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'solicitud_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'ELE\\EditorialBundle\\Controller\\solicitudController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/solicitud',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'solicitud_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'ELE\\EditorialBundle\\Controller\\solicitudController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/solicitud',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ELE\\EditorialBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/index',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'resena' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ELE\\EditorialBundle\\Controller\\DefaultController::resenaAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resena',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'novedades' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ELE\\EditorialBundle\\Controller\\DefaultController::novedadesAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/novedades',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ELE\\EditorialBundle\\Controller\\DefaultController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}