<?php

/**
 * @package     local_message
 * @author      kristian
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require_once(__DIR__ . '/../../config.php');


require_once($CFG->dirroot . '/local/message/classes/form/edit.php');

global $DB;

$PAGE->set_url(new moodle_url('/local/message/manage.php'));
$PAGE->set_context(\context_system::instance());
$PAGE->set_title("Edit");

$mform = new edit();


if ($mform->is_cancelled()) {
    redirect($CFG->wwwroot . '/local/message/manage.php', 'Você cancelou a criação de uma nova mensagem!');
} else if ($fromform = $mform->get_data()) {
    $recordtoinsert = new stdClass();
    $recordtoinsert->messagetext = $fromform->messagetxt;
    $recordtoinsert->messagetype = $fromform->messagetype;

    $DB->insert_record('local_message', $recordtoinsert);

    redirect($CFG->wwwroot . '/local/message/manage.php', 'Você criou uma nova mensagem!' . $fromform->messagetext);
}

echo $OUTPUT->header();

$mform->display();

echo $OUTPUT->footer();