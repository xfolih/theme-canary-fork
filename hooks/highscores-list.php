<?php
defined('MYAAC') or die('Direct access not allowed!');

/**
 * @var array $args
 */
const SKILL_BOSS_POINTS = 21;
const SKILL_CHARMS_POINTS = 22;

/**
 * @var array $args
 */
switch ($args['list'])
{
	case 'boss':
		$args['skill'] = SKILL_BOSS_POINTS;
		break;

	case 'charms':
		$args['skill'] = SKILL_CHARMS_POINTS;
		break;
}

$args['categories']['boss'] = 'Boss Points';
$args['categories']['charms'] = 'Charms Points';
