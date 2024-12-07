<?php

/**
 * @package     Joomla.Site
 * @subpackage  com_contentextended
 *
 * @copyright   (C) 2024 Herman Peeren, Yepr
 * @license     GNU General Public License version 3 or later; see LICENSE.txt
 */

namespace Yepr\Component\ContentExtended\Site\Service;

use Joomla\CMS\Categories\Categories;

// phpcs:disable PSR1.Files.SideEffects
\defined('_JEXEC') or die;
// phpcs:enable PSR1.Files.SideEffects

/**
 * Content Component Category Tree
 *
 * @since  1.6
 */
class Category extends Categories
{
    /**
     * Class constructor
     *
     * @param   array  $options  Array of options
     *
     * @since   1.7.0
     */
    public function __construct($options = [])
    {
        $options['table']     = '#__content';
        $options['extension'] = 'com_contentextended';

        parent::__construct($options);
    }
}
