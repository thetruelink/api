<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appDevDebugProjectContainerUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
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
        '_wdt' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:toolbarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_wdt',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:homeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_bar' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchBarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search_bar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_info' => array (  0 =>   array (    0 => 'about',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:infoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'about',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler/info',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_phpinfo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/phpinfo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_results' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchResultsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/search/results',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_router' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.router:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/router',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception_css' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:cssAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception.css',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_twig_error_test' => array (  0 =>   array (    0 => 'code',    1 => '_format',  ),  1 =>   array (    '_controller' => 'twig.controller.preview_error:previewErrorPageAction',    '_format' => 'html',  ),  2 =>   array (    'code' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => '[^/]++',      3 => '_format',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'code',    ),    2 =>     array (      0 => 'text',      1 => '/_error',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'data_new_contact' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'DataBundle\\Controller\\ContactController::newContactAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/trueLink/newContact',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'data_update_contact' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'DataBundle\\Controller\\ContactController::updateContactAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/trueLink/updateContact',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'data_add_contact' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'DataBundle\\Controller\\ContactController::addContactAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/trueLink/addContact',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'data_remove_contact' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'DataBundle\\Controller\\ContactController::removeContactAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/trueLink/removeContact',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'data_state_contact' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'DataBundle\\Controller\\ContactController::changeStateAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/trueLink/changeState',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'data_liste_contact' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'DataBundle\\Controller\\ContactController::listeContactAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/trueLink/listeContact',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'data_all_contact' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'DataBundle\\Controller\\ContactController::allContactsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/trueLink/allContacts',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'data_all_admin_contact' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'DataBundle\\Controller\\ContactController::allContactsAdminAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/trueLink/allContactsAdmin',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'data_send_message' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'DataBundle\\Controller\\MessageController::sendMessageAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/trueLink/sendMessage',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'data_show_message' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'DataBundle\\Controller\\MessageController::getMessagesAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/trueLink/getMessages',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'data_change_status' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'DataBundle\\Controller\\ContactController::changeStatusAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/trueLink/changeStatus',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'data_all_status' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'DataBundle\\Controller\\ContactController::allStatusAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/trueLink/allStatus',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'data_credientials' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'DataBundle\\Controller\\SecurityController::crediantialCheckAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/trueLink/crediantialCheck',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'data_api_change' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'DataBundle\\Controller\\ContactController::changeApiIdAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/trueLink/changeApiId',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'data_api_get' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'DataBundle\\Controller\\ContactController::getApiIdAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/trueLink/getApiId',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'data_contact_get' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'DataBundle\\Controller\\ContactController::getContactAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/trueLink/getContact',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'data_password_change' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'DataBundle\\Controller\\SecurityController::changePasswordAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/trueLink/change-password',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
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
