<?php

defined('MOODLE_INTERNAL') || die;

if(is_siteadmin()) {
	$ADMIN->add('themes', new admin_category('local_mdl_tmpplugin', 'mdl_tmpplugin'));
}
