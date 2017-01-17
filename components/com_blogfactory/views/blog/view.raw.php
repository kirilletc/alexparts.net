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

class BlogFactoryFrontendViewBlog extends BlogFactoryFrontendView
{
    protected
        $variables = array('rss');

    public function display($tpl = null)
    {
        $document = JFactory::getDocument();
        $document->setMimeEncoding('text/xml');

        $this->setLayout('rss');

        return parent::display($tpl);
    }
}
