<?php

/**
-------------------------------------------------------------------------
blogfactory - Blog Factory 4.3.0
-------------------------------------------------------------------------
 * @author thePHPfactory
 * @copyright Copyright (C) 2011 SKEPSIS Consult SRL. All Rights Reserved.
 * @license - http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 * Websites: http://www.thePHPfactory.com
 * Technical Support: Forum - http://www.thePHPfactory.com/forum/
-------------------------------------------------------------------------
*/

defined('_JEXEC') or die;

?>

<div class="blogfactory-bulk-actions">
    <div class="btn-group" style="display: inline-block;">
        <a href="#" data-toggle="dropdown" class="btn dropdown-toggle btn-small">
            <i class="factory-icon-ui-check-box-mix"></i><?php echo BlogFactoryText::_('manageposts_batch_label'); ?>
        </a>

        <ul class="dropdown-menu button-batch">
            <li>
                <a data-task="manageposts.publish" href="#">
                    <i class="icon-publish"></i><?php echo BlogFactoryText::_('manageposts_batch_publish'); ?>
                </a>
            </li>

            <li>
                <a data-task="manageposts.unpublish" href="#">
                    <i class="icon-unpublish"></i><?php echo BlogFactoryText::_('manageposts_batch_unpublish'); ?>
                </a>
            </li>

            <li>
                <a data-task="manageposts.delete" href="#">
                    <i class="icon-delete"></i><?php echo BlogFactoryText::_('manageposts_batch_delete'); ?>
                </a>
            </li>
        </ul>
    </div>
</div>
