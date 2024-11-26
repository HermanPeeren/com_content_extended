<?php

/**
 * @package     Joomla.Administrator
 * @subpackage  com_content_extended
 *
 * @copyright   (C) 2024 Herman Peeren, Yepr
 * @license     GNU General Public License version 3 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

use Joomla\CMS\Layout\LayoutHelper;

/** @var \Yepr\Component\Content_extended\Administrator\View\Articles\HtmlView $this */

$displayData = [
    'textPrefix' => 'COM_CONTENT',
    'formURL'    => 'index.php?option=com_content_extended&view=articles',
    'helpURL'    => 'https://docs.joomla.org/Special:MyLanguage/Adding_a_new_article',
    'icon'       => 'icon-copy article',
];

$user = $this->getCurrentUser();

if ($user->authorise('core.create', 'com_content_extended') || count($user->getAuthorisedCategories('com_content_extended', 'core.create')) > 0) {
    $displayData['createURL'] = 'index.php?option=com_content_extended&task=article.add';
}

echo LayoutHelper::render('joomla.content.emptystate', $displayData);
