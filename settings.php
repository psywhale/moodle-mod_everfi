<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
* Everfi plugin settings
*
* @package    mod_everfi
* @copyright  2018 Brian Carpenter
* @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
*/

defined('MOODLE_INTERNAL') || die;

if ($ADMIN->fulltree) {
    require_once(__DIR__ . '/lib.php');
    $settings->add(new admin_setting_configtext('everfi/schoolid',
        get_string('settingschoolid','mod_everfi'),
        get_string('settingschoolid_desc','mod_everfi'),
        '11597',PARAM_INT));
    $settings->add(new admin_setting_configtext('everfi/apitoken',
        get_string('settingsapitoken','mod_everfi'),
        get_string('settingsapitoken_desc','mod_everfi'),
        '93b65e1576b01356a90d'));
    $settings->add(new admin_setting_configtext('everfi/serverurl',
        get_string('settingsserverurl','mod_everfi'),
        get_string('settingsserverurl_desc','mod_everfi'),
        "https://platform.deverfi.net/sso",PARAM_URL));

    $curriculum = everfi_get_curriculum();

    $settings->add(new admin_setting_configmultiselect('everfi/curriculum_id',
        get_string('settingscurriculum_id','mod_everfi'),
        get_string('settingscurriculum_desc','mod_everfi'),
        null,$curriculum));









}