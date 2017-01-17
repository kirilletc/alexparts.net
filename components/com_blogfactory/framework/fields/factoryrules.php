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

JFormHelper::loadFieldType('Rules');

class JFormFieldFactoryRules extends JFormFieldRules
{
    public $type = 'FactoryRules';

    protected function getLabel()
    {
        return '';
    }

    protected function getInput()
    {
        JHtml::_('behavior.tooltip');

        // Initialise some field attributes.
        $section = $this->element['section'] ? (string)$this->element['section'] : '';
        $component = $this->element['component'] ? (string)$this->element['component'] : '';
        $assetField = $this->element['asset_field'] ? (string)$this->element['asset_field'] : 'asset_id';

        // Get the actions for the asset.
        $actions = $this->getActions($component);

        // Get the explicit rules for this asset.
        if ($section == 'component') {
            // Need to find the asset id by the name of the component.
            $db = JFactory::getDbo();
            $query = $db->getQuery(true);
            $query->select($db->quoteName('id'));
            $query->from($db->quoteName('#__assets'));
            $query->where($db->quoteName('name') . ' = ' . $db->quote($component));
            $db->setQuery($query);
            $assetId = (int)$db->loadResult();
        } else {
            // Find the asset id of the content.
            // Note that for global configuration, com_config injects asset_id = 1 into the form.
            $assetId = $this->form->getValue($assetField);
        }

        // Use the compact form for the content rules (deprecated).

        /* @todo remove code:
         * if (!empty($component) && $section != 'component') {
         * return JHtml::_('rules.assetFormWidget', $actions, $assetId, $assetId ? null : $component, $this->name, $this->id);
         * }
         */

        // Full width format.

        // Get the rules for just this asset (non-recursive).
        $assetRules = JAccess::getAssetRules($assetId);

        // Get the available user groups.
        $groups = $this->getUserGroups();

        // Build the form control.
        $curLevel = 0;

        // Prepare output
        $html = array();

        // Description
        $html[] = '<p class="rule-desc">' . JText::_('JLIB_RULES_SETTINGS_DESC') . '</p>';

        // Begin tabs
        $html[] = '<div id="permissions-sliders" class="tabbable tabs-left">';

        // Building tab nav
        $html[] = '<ul class="nav nav-tabs">';
        foreach ($groups as $group) {
            // Initial Active Tab
            $active = "";
            if ($group->value == 1) {
                $active = "active";
            }

            $html[] = '<li class="' . $active . '">';
            $html[] = '<a href="#permission-' . $group->value . '" data-toggle="tab">';
            $html[] = str_repeat('<span class="level">&ndash;</i> ', $curLevel = $group->level) . $group->text;
            $html[] = '</a>';
            $html[] = '</li>';
        }
        $html[] = '</ul>';

        $html[] = '<div class="tab-content">';

        // Start a row for each user group.
        foreach ($groups as $group) {
            // Initial Active Pane
            $active = "";
            if ($group->value == 1) {
                $active = " active";
            }

            $difLevel = $group->level - $curLevel;

            $html[] = '<div class="tab-pane' . $active . '" id="permission-' . $group->value . '">';
            $html[] = '<table class="table table-striped">';
            $html[] = '<thead>';
            $html[] = '<tr>';

            $html[] = '<th class="actions" id="actions-th' . $group->value . '">';
            $html[] = '<span class="acl-action">' . JText::_('JLIB_RULES_ACTION') . '</span>';
            $html[] = '</th>';

            $html[] = '<th class="settings" id="settings-th' . $group->value . '">';
            $html[] = '<span class="acl-action">' . JText::_('JLIB_RULES_SELECT_SETTING') . '</span>';
            $html[] = '</th>';

            // The calculated setting is not shown for the root group of global configuration.
            $canCalculateSettings = ($group->parent_id || !empty($component));
            if ($canCalculateSettings) {
                $html[] = '<th id="aclactionth' . $group->value . '">';
                $html[] = '<span class="acl-action">' . JText::_('JLIB_RULES_CALCULATED_SETTING') . '</span>';
                $html[] = '</th>';
            }

            $html[] = '</tr>';
            $html[] = '</thead>';
            $html[] = '<tbody>';

            foreach ($actions as $action) {
                $html[] = '<tr>';
                $html[] = '<td headers="actions-th' . $group->value . '">';
                $html[] = '<label class="hasTip" for="' . $this->id . '_' . $action->name . '_' . $group->value . '" title="'
                    . htmlspecialchars(JText::_($action->title) . '::' . JText::_($action->description), ENT_COMPAT, 'UTF-8') . '">';
                $html[] = JText::_($action->title);
                $html[] = '<br /><small class="muted">' . JText::_($action->description) . '</small>';
                $html[] = '</label>';
                $html[] = '</td>';

                $html[] = '<td headers="settings-th' . $group->value . '">';

                $html[] = '<select class="input-small" name="' . $this->name . '[' . $action->name . '][' . $group->value . ']" id="' . $this->id . '_' . $action->name
                    . '_' . $group->value . '" title="'
                    . JText::sprintf('JLIB_RULES_SELECT_ALLOW_DENY_GROUP', JText::_($action->title), trim($group->text)) . '">';

                $inheritedRule = JAccess::checkGroup($group->value, $action->name, $assetId);

                // Get the actual setting for the action for this group.
                $assetRule = $assetRules->allow($action->name, $group->value);

                // Build the dropdowns for the permissions sliders

                // The parent group has "Not Set", all children can rightly "Inherit" from that.
                $html[] = '<option value=""' . ($assetRule === null ? ' selected="selected"' : '') . '>'
                    . JText::_(empty($group->parent_id) && empty($component) ? 'JLIB_RULES_NOT_SET' : 'JLIB_RULES_INHERITED') . '</option>';
                $html[] = '<option value="1"' . ($assetRule === true ? ' selected="selected"' : '') . '>' . JText::_('JLIB_RULES_ALLOWED')
                    . '</option>';
                $html[] = '<option value="0"' . ($assetRule === false ? ' selected="selected"' : '') . '>' . JText::_('JLIB_RULES_DENIED')
                    . '</option>';

                $html[] = '</select>&#160; ';

                // If this asset's rule is allowed, but the inherited rule is deny, we have a conflict.
                if (($assetRule === true) && ($inheritedRule === false)) {
                    $html[] = JText::_('JLIB_RULES_CONFLICT');
                }

                $html[] = '</td>';

                // Build the Calculated Settings column.
                // The inherited settings column is not displayed for the root group in global configuration.
                if ($canCalculateSettings) {
                    $html[] = '<td headers="aclactionth' . $group->value . '">';

                    // This is where we show the current effective settings considering currrent group, path and cascade.
                    // Check whether this is a component or global. Change the text slightly.

                    if (JAccess::checkGroup($group->value, 'core.admin') !== true) {
                        if ($inheritedRule === null) {
                            $html[] = '<span class="label label-important">' . JText::_('JLIB_RULES_NOT_ALLOWED') . '</span>';
                        } elseif ($inheritedRule === true) {
                            $html[] = '<span class="label label-success">' . JText::_('JLIB_RULES_ALLOWED') . '</span>';
                        } elseif ($inheritedRule === false) {
                            if ($assetRule === false) {
                                $html[] = '<span class="label label-important">' . JText::_('JLIB_RULES_NOT_ALLOWED') . '</span>';
                            } else {
                                $html[] = '<span class="label"><i class="icon-lock icon-white"></i> ' . JText::_('JLIB_RULES_NOT_ALLOWED_LOCKED')
                                    . '</span>';
                            }
                        }
                    } elseif (!empty($component)) {
                        $html[] = '<span class="label label-success"><i class="icon-lock icon-white"></i> ' . JText::_('JLIB_RULES_ALLOWED_ADMIN')
                            . '</span>';
                    } else {
                        // Special handling for  groups that have global admin because they can't  be denied.
                        // The admin rights can be changed.
                        if ($action->name === 'core.admin') {
                            $html[] = '<span class="label label-success">' . JText::_('JLIB_RULES_ALLOWED') . '</span>';
                        } elseif ($inheritedRule === false) {
                            // Other actions cannot be changed.
                            $html[] = '<span class="label label-important"><i class="icon-lock icon-white"></i> '
                                . JText::_('JLIB_RULES_NOT_ALLOWED_ADMIN_CONFLICT') . '</span>';
                        } else {
                            $html[] = '<span class="label label-success"><i class="icon-lock icon-white"></i> ' . JText::_('JLIB_RULES_ALLOWED_ADMIN')
                                . '</span>';
                        }
                    }

                    $html[] = '</td>';
                }

                $html[] = '</tr>';
            }

            $html[] = '</tbody>';
            $html[] = '</table></div>';

        }

        $html[] = '</div></div>';

        $html[] = '<div class="alert">';
        if ($section == 'component' || $section == null) {
            $html[] = JText::_('JLIB_RULES_SETTING_NOTES');
        } else {
            $html[] = JText::_('JLIB_RULES_SETTING_NOTES_ITEM');
        }
        $html[] = '</div>';

        // Get the JInput object
        $input = JFactory::getApplication()->input;

        $js = "window.addEvent('domready', function(){ new Fx.Accordion($$('div#permissions-sliders.pane-sliders .panel h3.pane-toggler'),"
            . "$$('div#permissions-sliders.pane-sliders .panel div.pane-slider'), {onActive: function(toggler, i) {toggler.addClass('pane-toggler-down');"
            . "toggler.removeClass('pane-toggler');i.addClass('pane-down');i.removeClass('pane-hide');Cookie.write('jpanesliders_permissions-sliders"
            . $component
            . "',$$('div#permissions-sliders.pane-sliders .panel h3').indexOf(toggler));},"
            . "onBackground: function(toggler, i) {toggler.addClass('pane-toggler');toggler.removeClass('pane-toggler-down');i.addClass('pane-hide');"
            . "i.removeClass('pane-down');}, duration: 300, display: "
            . $input->cookie->get('jpanesliders_permissions-sliders' . $component, 0, 'integer') . ", show: "
            . $input->cookie->get('jpanesliders_permissions-sliders' . $component, 0, 'integer') . ", alwaysHide:true, opacity: false}); });";

        JFactory::getDocument()->addScriptDeclaration($js);

        return implode("\n", $html);
    }

    protected function getActions($component)
    {
        $actions = array();

        foreach ($this->element->children() as $el) {
            if ($el->getName() == 'action') {
                if ('' == $el['title']) {
                    $el['title'] = strtoupper($component . '_SETTINGS_RULES_' . $el['name'] . '_label');
                }

                if ('' == $el['description']) {
                    $el['description'] = strtoupper($component . '_SETTINGS_RULES_' . $el['name'] . '_desc');
                }

                $actions[] = (object)array('name' => (string)$el['name'], 'title' => (string)$el['title'],
                    'description' => (string)$el['description']);
            }
        }

        return $actions;
    }
}
