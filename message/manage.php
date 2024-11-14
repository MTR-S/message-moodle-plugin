    <?php

    /**
     * @package     local_message
     * @author      kristian
     * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
     */

    require_once(__DIR__ . '/../../config.php');

    $PAGE->set_url(new moodle_url('/local/message/manage.php'));  
    $PAGE->set_context(\context_system::instance());
    $PAGE->set_title("Menu de mensagens");

    $messages = $DB->get_records('local_message');

    foreach ($messages as $message) {
        switch ($message->messagetype) {
            case '0':
                $message->typeclass = 'success';
                break;
            case '1':
                $message->typeclass = 'warning';
                break;
            case '2':
                $message->typeclass = 'error';
                break;
            case '3':
            default:
                $message->typeclass = 'info';
                break;
        }
    }

    echo $OUTPUT->header();

    $templatecontext = (object) [
        'messages' => array_values($messages),  
        'editurl' => new moodle_url("/local/message/edit.php")
    ];

    echo $OUTPUT->render_from_template('local_message/manage', $templatecontext);  

    echo $OUTPUT->footer();
