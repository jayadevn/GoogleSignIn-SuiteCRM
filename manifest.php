<?php
/* * *******************************************************************************
* This file is part of KReporter. KReporter is an enhancement developed
* by aac services k.s.. All rights are (c) 2016 by aac services k.s.
*
* This Version of the KReporter is licensed software and may only be used in
* alignment with the License Agreement received with this Software.
* This Software is copyrighted and may not be further distributed without
* witten consent of aac services k.s.
*
* You can contact us at info@kreporter.org
******************************************************************************* */
$manifest = array(
    'acceptable_sugar_versions' => array (
	'regex_matches' => array (
    	   0 => "6\\.5\\.*",
	   1 => "6\\.6\\.*",
	   2 => "6\\.7\\.*",
	),
    ),
    'acceptable_sugar_flavors' => array(
	    'CE'
    ),
    'latest_supported_version' => '6.5.24',
    'readme'=>'README.md',
    'key'=>'sqlfiddle',
    'author' => 'Sohan T.',
    'description' => 'Google Sign-In for CRM',
    'icon' => '',
    'is_uninstallable' => true,
    'name' => 'Google Sign-In',
    'published_date' => '2018-07-27 10:19:00',
    'type' => 'module',
    'version' => '1.0',
    'remove_tables' => '',
);

$installdefs = array(
    'id' => 'GoogleSignIn',
    'administration' => array (
        0 => array (
            'from' => '<basepath>/administration/GoogleSignInAdmin.menu.php',
        ),
    ),
    'language' => array(
        0 => array(
            'from' => '<basepath>/language/en_us.GoogleSignIn.php',
            'to_module'=> 'Administration',
			'language'=>'en_us'
        )
    ),
    'copy' => array(
    	0 => array(
            'from' => '<basepath>/SugarModules/modules/Administration',
            'to' => 'custom/modules/Administration'
        ),
        1 => array(
            'from' => '<basepath>/SugarModules/GoogleSignIn',
            'to' => 'custom/include/GoogleSignIn'
        ),
		2 => array(
			'from' => '<basepath>/SugarModules/modules/Users',
            'to' => 'custom/modules/Users'
		)
    ),
    'entrypoints' => array (
        0 => array (
            'from' => '<basepath>/SugarModules/EntryPointRegistry/GoogleSignInEntryPoint_registry.php',
            'to_module' => 'application',
        ),
    ),
);
