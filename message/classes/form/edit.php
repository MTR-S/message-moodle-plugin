<?php

/**
 * @package     local_message
 * @author      kristian
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */


require_once("$CFG->libdir/formslib.php");

class edit extends moodleform {

    public function definition() {
        global $CFG;
        $mform = $this->_form; 
    
        $mform->addElement('text', 'messagetxt', 'Assunto:'); 
        $mform->setType('messagetxt', PARAM_NOTAGS);
        $mform->setDefault('messagetxt','Digite aqui a sua mensagem');

        $choices = array();
        $choices['0'] = \core\output\notification::NOTIFY_WARNING; 
        $choices['1'] = \core\output\notification::NOTIFY_SUCCESS; 
        $choices['2'] = \core\output\notification::NOTIFY_ERROR;
        $choices['3'] = \core\output\notification::NOTIFY_INFO;
        $mform->addElement('select', 'messagetype', 'Tipo:', $choices); 
        $mform->setDefault( 'messagetype', '3');
    
        $this->add_action_buttons();
}
}