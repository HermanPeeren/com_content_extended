<?php

/**
 * @package     Joomla.Administrator
 * @subpackage  com_contentextended
 *
 * @copyright   (C) 2024 Herman Peeren, Yepr
 * @license     GNU General Public License version 3 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

use Joomla\CMS\Language\Text;

/** @var \Yepr\Component\ContentExtended\Administrator\View\Featured\HtmlView $this */

/** @var Joomla\CMS\WebAsset\WebAssetManager $wa */
$wa = $this->getDocument()->getWebAssetManager();
$wa->useScript('com_contentextended.admin-articles-stage');

?>
<button class="btn btn-secondary" type="button" data-bs-dismiss="modal">
    <?php echo Text::_('JCANCEL'); ?>
</button>
<button id="stage-submit-button-id" class="btn btn-success" type="button" data-submit-task="">
    <?php echo Text::_('JGLOBAL_STAGE_PROCESS'); ?>
</button>
