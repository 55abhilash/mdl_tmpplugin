<?php

defined('MOODLE_INTERNAL') || die;

if($hassiteconfig) {
	$settings = new admin_settingpage('local_mdl_tmplugin', 'mdl_tmpplugin');
	$ADMIN->add('localplugins', $settings);
	$settings->add(new admin_setting_configtext('local_mdl_plugin/option', 'Info', 'This is a temporary moodle plugin', 100, PARAM_INT));
}
