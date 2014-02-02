<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
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

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                if (0 === strpos($pathinfo, '/_profiler/i')) {
                    // _profiler_info
                    if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                    }

                    // _profiler_import
                    if ($pathinfo === '/_profiler/import') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:importAction',  '_route' => '_profiler_import',);
                    }

                }

                // _profiler_export
                if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]++)\\.txt$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_export')), array (  '_controller' => 'web_profiler.controller.profiler:exportAction',));
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

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        // locazik_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'locazik_homepage');
            }

            return array (  '_controller' => 'Locazik\\AnnonceBundle\\Controller\\DefaultController::indexAction',  '_route' => 'locazik_homepage',);
        }

        if (0 === strpos($pathinfo, '/categorie')) {
            // locazik_categorie_lister
            if (rtrim($pathinfo, '/') === '/categorie/lister') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'locazik_categorie_lister');
                }

                return array (  '_controller' => 'Locazik\\AnnonceBundle\\Controller\\CategorieController::listerCategorieAction',  '_route' => 'locazik_categorie_lister',);
            }

            // locazik_categorie_ajouter
            if (rtrim($pathinfo, '/') === '/categorie/gerer') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'locazik_categorie_ajouter');
                }

                return array (  '_controller' => 'Locazik\\AnnonceBundle\\Controller\\CategorieController::gererCategorieAction',  '_route' => 'locazik_categorie_ajouter',);
            }

            // locazik_categorie_detail
            if (0 === strpos($pathinfo, '/categorie/detail') && preg_match('#^/categorie/detail/(?P<id>\\d+)/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'locazik_categorie_detail');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'locazik_categorie_detail')), array (  '_controller' => 'Locazik\\AnnonceBundle\\Controller\\CategorieController::detailCategorieAction',));
            }

            // locazik_categorie_modifier
            if (0 === strpos($pathinfo, '/categorie/gerer') && preg_match('#^/categorie/gerer/(?P<id>\\d+)/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'locazik_categorie_modifier');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'locazik_categorie_modifier')), array (  '_controller' => 'Locazik\\AnnonceBundle\\Controller\\CategorieController::gererCategorieAction',));
            }

            // locazik_categorie_supprimer
            if (rtrim($pathinfo, '/') === '/categorie/supprimer') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'locazik_categorie_supprimer');
                }

                return array (  '_controller' => 'Locazik\\AnnonceBundle\\Controller\\CategorieController::ajaxSupprimerCategorieAction',  '_route' => 'locazik_categorie_supprimer',);
            }

        }

        if (0 === strpos($pathinfo, '/annonce')) {
            // locazik_annonce_creer
            if (rtrim($pathinfo, '/') === '/annonce/creer') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'locazik_annonce_creer');
                }

                return array (  '_controller' => 'Locazik\\AnnonceBundle\\Controller\\AnnonceController::creerAnnonceAction',  '_route' => 'locazik_annonce_creer',);
            }

            // locazik_annonce_validation
            if (0 === strpos($pathinfo, '/annonce/valider') && preg_match('#^/annonce/valider/(?P<id>\\d+)/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'locazik_annonce_validation');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'locazik_annonce_validation')), array (  '_controller' => 'Locazik\\AnnonceBundle\\Controller\\AnnonceController::validerAnnonceAction',));
            }

            // locazik_annonce_supprimer
            if (0 === strpos($pathinfo, '/annonce/supprimer') && preg_match('#^/annonce/supprimer/(?P<id>\\d+)/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'locazik_annonce_supprimer');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'locazik_annonce_supprimer')), array (  '_controller' => 'Locazik\\AnnonceBundle\\Controller\\AnnonceController::supprimerAnnonceAction',));
            }

            // locazik_annonce_confirmer
            if (rtrim($pathinfo, '/') === '/annonce/confirmer') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'locazik_annonce_confirmer');
                }

                return array (  '_controller' => 'Locazik\\AnnonceBundle\\Controller\\AnnonceController::confirmerCreationAnnonceAction',  '_route' => 'locazik_annonce_confirmer',);
            }

            // locazik_annonce_lister
            if (rtrim($pathinfo, '/') === '/annonce/lister') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'locazik_annonce_lister');
                }

                return array (  '_controller' => 'Locazik\\AnnonceBundle\\Controller\\AnnonceController::listerAnnonceAdminAction',  '_route' => 'locazik_annonce_lister',);
            }

            if (0 === strpos($pathinfo, '/annonce/detail')) {
                // locazik_annonce_detail
                if (preg_match('#^/annonce/detail/(?P<id>\\d+)/?$#s', $pathinfo, $matches)) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'locazik_annonce_detail');
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'locazik_annonce_detail')), array (  '_controller' => 'Locazik\\AnnonceBundle\\Controller\\AnnonceController::detailAnnonceAction',));
                }

                // locazik_annonce_detailGetNumeroTel
                if (0 === strpos($pathinfo, '/annonce/detail/getNumTel') && preg_match('#^/annonce/detail/getNumTel/(?P<annonceKey>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'locazik_annonce_detailGetNumeroTel')), array (  '_controller' => 'Locazik\\AnnonceBundle\\Controller\\AnnonceController::ajaxGetNumeroTelAnnonceAction',));
                }

            }

            // locazik_annonce_listerFiltre
            if (0 === strpos($pathinfo, '/annonces') && preg_match('#^/annonces(?:/(?P<categorieUrlName>[^/]++)(?:/(?P<regionUrlName>[a-zA-Z0-9-]*)(?:/(?P<depUrlName>[a-zA-Z0-9-]*)(?:/(?P<villeUrlName>[a-zA-Z0-9-]*))?)?)?)?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'locazik_annonce_listerFiltre')), array (  '_controller' => 'Locazik\\AnnonceBundle\\Controller\\AnnonceController::listerAnnonceAction',  'categorieUrlName' => 'toutes',  'regionUrlName' => NULL,  'depUrlName' => NULL,  'villeUrlName' => NULL,));
            }

        }

        if (0 === strpos($pathinfo, '/mot-interdit')) {
            // locazik_mot_creer
            if (rtrim($pathinfo, '/') === '/mot-interdit/creer') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'locazik_mot_creer');
                }

                return array (  '_controller' => 'Locazik\\AnnonceBundle\\Controller\\MotInterditController::creerMotAction',  '_route' => 'locazik_mot_creer',);
            }

            // locazik_mot_lister
            if (rtrim($pathinfo, '/') === '/mot-interdit/lister') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'locazik_mot_lister');
                }

                return array (  '_controller' => 'Locazik\\AnnonceBundle\\Controller\\MotInterditController::listerMotAction',  '_route' => 'locazik_mot_lister',);
            }

            // locazik_mot_supprimer
            if (rtrim($pathinfo, '/') === '/mot-interdit/supprimer') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'locazik_mot_supprimer');
                }

                return array (  '_controller' => 'Locazik\\AnnonceBundle\\Controller\\MotInterditController::ajaxSupprimerMotAction',  '_route' => 'locazik_mot_supprimer',);
            }

        }

        if (0 === strpos($pathinfo, '/ge')) {
            if (0 === strpos($pathinfo, '/geo/liste')) {
                // locazik_geo_listedepfromregion
                if (rtrim($pathinfo, '/') === '/geo/listedepfromregion') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'locazik_geo_listedepfromregion');
                    }

                    return array (  '_controller' => 'Locazik\\AnnonceBundle\\Controller\\GeoController::ajaxListeDepFromRegionAction',  '_route' => 'locazik_geo_listedepfromregion',);
                }

                // locazik_geo_listevilles
                if (0 === strpos($pathinfo, '/geo/listeVilles') && preg_match('#^/geo/listeVilles/(?P<finder>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'locazik_geo_listevilles')), array (  '_controller' => 'Locazik\\AnnonceBundle\\Controller\\GeoController::ajaxListeCpVilleAction',));
                }

            }

            if (0 === strpos($pathinfo, '/genere')) {
                // genereDepUrl
                if ($pathinfo === '/genereDepUrl') {
                    return array (  '_controller' => 'Locazik\\AnnonceBundle\\Controller\\GeoController::genereDepUrlAction',  '_route' => 'genereDepUrl',);
                }

                // genereVilleUrl
                if ($pathinfo === '/genereVilleUrl') {
                    return array (  '_controller' => 'Locazik\\AnnonceBundle\\Controller\\GeoController::genereVilleUrlAction',  '_route' => 'genereVilleUrl',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }

        }

        if (0 === strpos($pathinfo, '/compte')) {
            // locazik_user_login_before_confirm
            if (0 === strpos($pathinfo, '/compte/annonce/identification') && preg_match('#^/compte/annonce/identification/(?P<annonceKey>[^/]++)/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'locazik_user_login_before_confirm');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'locazik_user_login_before_confirm')), array (  '_controller' => 'Locazik\\UserBundle\\Controller\\UserController::identificationConfirmAnnonceAction',));
            }

            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/compte') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }

            // fos_user_profile_edit
            if ($pathinfo === '/compte/modifier') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }

        }

        if (0 === strpos($pathinfo, '/inscription')) {
            // fos_user_registration_register
            if (rtrim($pathinfo, '/') === '/inscription') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
            }

            if (0 === strpos($pathinfo, '/inscription/c')) {
                // fos_user_registration_check_email
                if ($pathinfo === '/inscription/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_registration_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                }
                not_fos_user_registration_check_email:

                if (0 === strpos($pathinfo, '/inscription/confirm')) {
                    // fos_user_registration_confirm
                    if (preg_match('#^/inscription/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_confirm;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                    }
                    not_fos_user_registration_confirm:

                    // fos_user_registration_confirmed
                    if ($pathinfo === '/inscription/confirmed') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_confirmed;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                    }
                    not_fos_user_registration_confirmed:

                }

            }

        }

        if (0 === strpos($pathinfo, '/resetting')) {
            // fos_user_resetting_request
            if ($pathinfo === '/resetting/request') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_resetting_request;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
            }
            not_fos_user_resetting_request:

            // fos_user_resetting_send_email
            if ($pathinfo === '/resetting/send-email') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_fos_user_resetting_send_email;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
            }
            not_fos_user_resetting_send_email:

            // fos_user_resetting_check_email
            if ($pathinfo === '/resetting/check-email') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_resetting_check_email;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
            }
            not_fos_user_resetting_check_email:

            // fos_user_resetting_reset
            if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_resetting_reset;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
            }
            not_fos_user_resetting_reset:

        }

        // fos_user_change_password
        if ($pathinfo === '/compte/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        // _imagine_liste_annonce
        if (0 === strpos($pathinfo, '/media/cache/liste_annonce') && preg_match('#^/media/cache/liste_annonce/(?P<path>.+)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not__imagine_liste_annonce;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => '_imagine_liste_annonce')), array (  '_controller' => 'liip_imagine.controller:filterAction',  'filter' => 'liste_annonce',));
        }
        not__imagine_liste_annonce:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
