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

class BlogFactoryBackendControllerUser extends JControllerForm
{
    protected $option = 'com_blogfactory';

    public function save($key = null, $urlVar = null)
    {
        $data = $this->input->post->get('jform', array(), 'array');
        $files = $this->input->files->get('jform', array(), 'array');

        $this->input->post->set('jform', array_merge($data, $files));

        return parent::save($key, $urlVar);
    }
}
