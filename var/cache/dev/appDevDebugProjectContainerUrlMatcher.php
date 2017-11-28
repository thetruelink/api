<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/trueLink')) {
            // data_new_contact
            if ($pathinfo === '/trueLink/newContact') {
                return array (  '_controller' => 'DataBundle\\Controller\\ContactController::newContactAction',  '_route' => 'data_new_contact',);
            }

            // data_update_contact
            if ($pathinfo === '/trueLink/updateContact') {
                return array (  '_controller' => 'DataBundle\\Controller\\ContactController::updateContactAction',  '_route' => 'data_update_contact',);
            }

            // data_add_contact
            if ($pathinfo === '/trueLink/addContact') {
                return array (  '_controller' => 'DataBundle\\Controller\\ContactController::addContactAction',  '_route' => 'data_add_contact',);
            }

            // data_remove_contact
            if ($pathinfo === '/trueLink/removeContact') {
                return array (  '_controller' => 'DataBundle\\Controller\\ContactController::removeContactAction',  '_route' => 'data_remove_contact',);
            }

            // data_state_contact
            if ($pathinfo === '/trueLink/changeState') {
                return array (  '_controller' => 'DataBundle\\Controller\\ContactController::changeStateAction',  '_route' => 'data_state_contact',);
            }

            // data_liste_contact
            if ($pathinfo === '/trueLink/listeContact') {
                return array (  '_controller' => 'DataBundle\\Controller\\ContactController::listeContactAction',  '_route' => 'data_liste_contact',);
            }

            if (0 === strpos($pathinfo, '/trueLink/allContacts')) {
                // data_all_contact
                if ($pathinfo === '/trueLink/allContacts') {
                    return array (  '_controller' => 'DataBundle\\Controller\\ContactController::allContactsAction',  '_route' => 'data_all_contact',);
                }

                // data_all_admin_contact
                if ($pathinfo === '/trueLink/allContactsAdmin') {
                    return array (  '_controller' => 'DataBundle\\Controller\\ContactController::allContactsAdminAction',  '_route' => 'data_all_admin_contact',);
                }

            }

            // data_send_message
            if ($pathinfo === '/trueLink/sendMessage') {
                return array (  '_controller' => 'DataBundle\\Controller\\MessageController::sendMessageAction',  '_route' => 'data_send_message',);
            }

            // data_show_message
            if ($pathinfo === '/trueLink/getMessages') {
                return array (  '_controller' => 'DataBundle\\Controller\\MessageController::getMessagesAction',  '_route' => 'data_show_message',);
            }

            // data_change_status
            if ($pathinfo === '/trueLink/changeStatus') {
                return array (  '_controller' => 'DataBundle\\Controller\\ContactController::changeStatusAction',  '_route' => 'data_change_status',);
            }

            // data_all_status
            if ($pathinfo === '/trueLink/allStatus') {
                return array (  '_controller' => 'DataBundle\\Controller\\ContactController::allStatusAction',  '_route' => 'data_all_status',);
            }

            if (0 === strpos($pathinfo, '/trueLink/c')) {
                // data_credientials
                if ($pathinfo === '/trueLink/crediantialCheck') {
                    return array (  '_controller' => 'DataBundle\\Controller\\SecurityController::crediantialCheckAction',  '_route' => 'data_credientials',);
                }

                // data_api_change
                if ($pathinfo === '/trueLink/changeApiId') {
                    return array (  '_controller' => 'DataBundle\\Controller\\ContactController::changeApiIdAction',  '_route' => 'data_api_change',);
                }

            }

            if (0 === strpos($pathinfo, '/trueLink/get')) {
                // data_api_get
                if ($pathinfo === '/trueLink/getApiId') {
                    return array (  '_controller' => 'DataBundle\\Controller\\ContactController::getApiIdAction',  '_route' => 'data_api_get',);
                }

                // data_contact_get
                if ($pathinfo === '/trueLink/getContact') {
                    return array (  '_controller' => 'DataBundle\\Controller\\ContactController::getContactAction',  '_route' => 'data_contact_get',);
                }

            }

            // data_password_change
            if ($pathinfo === '/trueLink/change-password') {
                return array (  '_controller' => 'DataBundle\\Controller\\SecurityController::changePasswordAction',  '_route' => 'data_password_change',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
