<?php
defined('MYAAC') or die('Direct access not allowed!');

/**
 * @var array $args
 */

if ($args['skill'] == SKILL_CHARMS_POINTS) {
	$args['query']
		->join('player_charms', 'player_charms.player_id', '=', 'players.id')
		->addSelect('player_charms.charm_points as value');
}
else if ($args['skill'] == SKILL_BOSS_POINTS) {
	$args['query']
		->addSelect('players.boss_points as value');
}

if($args['skill'] == SKILL_BOSS_POINTS) {
	$args['skillName'] = 'Boss Points';
}
else if($args['skill'] == SKILL_CHARMS_POINTS) {
	$args['skillName'] = 'Charms Points';
}
