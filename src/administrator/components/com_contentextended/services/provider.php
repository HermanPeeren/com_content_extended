<?php

/**
 * @package         Joomla.Administrator
 * @subpackage      com_contentextended
 *
 * @copyright   (C) 2024 Herman Peeren, Yepr
 * @license         GNU General Public License version 3 or later; see LICENSE.txt
 */

\defined('_JEXEC') or die;

use Joomla\CMS\Association\AssociationExtensionInterface;
use Joomla\CMS\Categories\CategoryFactoryInterface;
use Joomla\CMS\Component\Router\RouterFactoryInterface;
use Joomla\CMS\Dispatcher\ComponentDispatcherFactoryInterface;
use Joomla\CMS\Extension\ComponentInterface;
use Joomla\CMS\Extension\Service\Provider\CategoryFactory;
use Joomla\CMS\Extension\Service\Provider\ComponentDispatcherFactory;
use Joomla\CMS\Extension\Service\Provider\MVCFactory;
use Joomla\CMS\Extension\Service\Provider\RouterFactory;
use Joomla\CMS\HTML\Registry;
use Joomla\CMS\MVC\Factory\MVCFactoryInterface;
use Joomla\DI\Container;
use Joomla\DI\ServiceProviderInterface;
use Yepr\Component\ContentExtended\Administrator\Extension\ContentComponent;
use Yepr\Component\ContentExtended\Administrator\Helper\AssociationsHelper;

/**
 * The content service provider.
 *
 * @since  4.0.0
 */
return new class () implements ServiceProviderInterface {
    /**
     * Registers the service provider with a DI container.
     *
     * @param   Container  $container  The DI container.
     *
     * @return  void
     *
     * @since   4.0.0
     */
    public function register(Container $container)
    {
        $container->set(AssociationExtensionInterface::class, new AssociationsHelper());

        $container->registerServiceProvider(new CategoryFactory('\\Yepr\\Component\\ContentExtended'));
        $container->registerServiceProvider(new MVCFactory('\\Yepr\\Component\\ContentExtended'));
        $container->registerServiceProvider(new ComponentDispatcherFactory('\\Yepr\\Component\\ContentExtended'));
        $container->registerServiceProvider(new RouterFactory('\\Yepr\\Component\\ContentExtended'));

        $container->set(
            ComponentInterface::class,
            function (Container $container) {
                $component = new ContentComponent($container->get(ComponentDispatcherFactoryInterface::class));

                $component->setRegistry($container->get(Registry::class));
                $component->setMVCFactory($container->get(MVCFactoryInterface::class));
                $component->setCategoryFactory($container->get(CategoryFactoryInterface::class));
                $component->setAssociationExtension($container->get(AssociationExtensionInterface::class));
                $component->setRouterFactory($container->get(RouterFactoryInterface::class));

                return $component;
            }
        );
    }
};
