<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

use \Bitrix\Main\Localization\Loc;

return array(
	'block' => array(
		'name' => Loc::getMessage('LANDING_BLOCK_MENU_23-NAME'),
		'section' => array('sidebar', 'menu'),
		'type' => ['knowledge', 'group'],
		'dynamic' => false,
		'subtype' => 'menu',
		'subtype_params' => array(
			'source' => 'catalog',
		),
		'version' => '20.0.0', // old param for backward compatibility. Can used for old versions of module via repo. Do not delete!
	),
	'menu' => [
		'.landing-block-node-menu' => [
			'item' => '.landing-block-node-menu-item',
			'name' => Loc::getMessage('LANDING_BLOCK_MENU_23-NAVBAR'),
			'root' => [
				'ulClassName' => 'landing-block-node-menu g-menu-multilevel w-100 navbar-nav flex-column list-group js-scroll-nav g-brd-color-inherit',
				'liClassName' => 'landing-block-node-menu-item nav-item list-group-item g-pa-0 g-brd-color-inherit',
				'aClassName' => 'landing-block-node-menu-link d-flex justify-content-between g-px-20 g-py-10 u-link-v5',
			],
			'children' => [
				'ulClassName' => 'landing-block-node-menu g-pl-15 g-menu-sublevel list-group w-100 navbar-nav flex-column js-scroll-nav g-brd-color-inherit',
				'liClassName' => 'landing-block-node-menu-item nav-item g-pa-0 g-mr-minus-1 g-mb-minus-1 g-brd-color-inherit',
				'aClassName' => 'landing-block-node-menu-link d-flex justify-content-between g-px-20 g-py-10 u-link-v5 g-brd-color-inherit g-brd-around',
			],
			'nodes' => [
				'.landing-block-node-menu-link' => [
					'name' => Loc::getMessage('LANDING_BLOCK_MENU_23-LINK'),
					'type' => 'link',
				],
			],
		],
	],
	'style' => array(
		'block' => array(
			'type' => ['block-default', 'block-border']
		),
		'nodes' => array(
			'.landing-block-node-navbar' => array(
				'name' => Loc::getMessage('LANDING_BLOCK_MENU_23-NAVBAR'),
				'type' => ['navbar-bg', 'border-color'],
			),
		),
	),
	'assets' => array(
		'ext' => array('landing_menu'),
	),
);