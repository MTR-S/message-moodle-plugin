<?php

/**
 * @package     local_message
 * @author      kristian
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

 defined('MOODLE_INTERNAL') || die();

 function local_message_before_footer() {
 }
 
 function local_message_extend_navigation($navigation) {
     global $PAGE;
     
     if ($PAGE->pagetype == 'site-index') {
         error_log('We are on site-index page');
         
         local_message_before_footer();
     }
 }
 

