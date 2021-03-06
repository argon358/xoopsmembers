<?php

defined( 'XOOPS_ROOT_PATH' ) or die;

$mydirname = basename(dirname(__FILE__));

$modversion['name'] = _MI_MEMBERS_NAME;
$modversion['version'] = 1.01;
$modversion['description'] = _MI_MEMBERS_DESC;
$modversion['credits'] = 'nouphet';
$modversion['author'] = 'nouphet https://github.com/nouphet/xoopsmembers';
$modversion['license'] = 'GPL see LICENSE';
$modversion['image'] = 'members_slogo.png';
$modversion['dirname'] = $mydirname;

$modversion['cube_style'] = false;

// Admin things
$modversion['hasAdmin'] = 1;
$modversion['adminindex'] = 'admin/index.php' ;
$modversion['adminmenu'] = 'admin/menu.php' ;

// Menu
$modversion['hasMain'] = 1;

// Templates
$modversion['templates'][1]['file'] = 'xoopsmembers_searchform.html';
$modversion['templates'][1]['description'] = '';
$modversion['templates'][2]['file'] = 'xoopsmembers_searchresults.html';
$modversion['templates'][2]['description'] = '';

// Config
$modversion['config'][] = array(
	'name'        => 'listed_groups',
	'title'       => '_MI_MEMBERS_CONFIG_LISTED_GROUPS',
	'description' => '_MI_MEMBERS_CONFIG_LISTED_GROUPS_DESC',
	'formtype'    => 'group_multi',
	'valuetype'   => 'array',
	'default'     => array(XOOPS_GROUP_ADMIN, XOOPS_GROUP_USERS),
);