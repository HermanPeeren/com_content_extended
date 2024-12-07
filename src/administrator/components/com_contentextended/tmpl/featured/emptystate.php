<?php

/**
 * @package     Joomla.Administrator
 * @subpackage  com_contentextended
 *
 * @copyright   (C) 2024 Herman Peeren, Yepr
 * @license     GNU General Public License version 3 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

use Joomla\CMS\Layout\LayoutHelper;

/** @var \Yepr\Component\ContentExtended\Administrator\View\Featured\HtmlView $this */

$displayData = [
    'textPrefix' => 'COM_CONTENT',
    'formURL'    => 'index.php?option=com_contentextended&view=featured',
    'helpURL'    => 'https://docs.joomla.org/Special:MyLanguage/Adding_a_new_article',
];

$user = $this->getCurrentUser();

if ($user->authorise('core.create', 'com_contentextended') || count($user->getAuthorisedCategories('com_contentextended', 'core.create')) > 0) {
    $displayData['createURL'] = 'index.php?option=com_contentextended&task=article.add';
}

echo LayoutHelper::render('joomla.content.emptystate', $displayData);
