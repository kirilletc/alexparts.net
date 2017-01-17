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

class BlogFactoryBackendController extends JControllerLegacy
{
    protected $default_view = 'dashboard';

    public function home()
    {
        $this->setRedirect(BlogFactoryRoute::view('dashboard'));
    }

    public function about()
    {
        $this->setRedirect(BlogFactoryRoute::view('about'));
    }
}
