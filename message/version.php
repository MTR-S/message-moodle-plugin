<?php

/**
 * @package     local_message
 * @author      kristian
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @var stdClass $plugin
 */

defined('MOODLE_INTERNAL') || die();

$plugin->component = 'local_message';   // Nome do componente
$plugin->version = 20200713900;          // Versão do plugin
$plugin->requires = 2016052300;         // Requer Moodle 3.1 ou superior
$plugin->maturity = MATURITY_STABLE;
$plugin->release = 'v1.0';

$plugin->installxml = 'db/install.xml';
