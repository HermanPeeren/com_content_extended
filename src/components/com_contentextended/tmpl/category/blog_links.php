<?php

/**
 * @package     Joomla.Site
 * @subpackage  com_contentextended
 *
 * @copyright   (C) 2006 Open Source Matters, Inc. <https://www.joomla.org>
 * @license     GNU General Public License version 3 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

use Joomla\CMS\Router\Route;
use Yepr\Component\ContentExtended\Site\Helper\RouteHelper;

/** @var \Yepr\Component\ContentExtended\Site\View\Category\HtmlView $this */
?>

<ol class="com-content-blog__links">
    <?php foreach ($this->link_items as $item) : ?>
        <li class="com-content-blog__link">
            <a href="<?php echo Route::_(RouteHelper::getArticleRoute($item->slug, $item->catid, $item->language)); ?>">
                <?php echo $item->title; ?></a>
        </li>
    <?php endforeach; ?>
</ol>
