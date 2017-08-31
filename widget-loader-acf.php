<?php

$key = 'widget_trending_tags';
$widgetplacement = self::$config['tab_placement'];

$widget_config = array (
	'key' => $key,
	'name' => 'trending_tags',
	'label' => 'Trending Tags',
	'display' => 'block',
	'sub_fields' => array (
		array (
			'key' => $key . '_basic_details_tab',
			'label' => 'Basic Details',
			'type' => 'tab',
			'placement' => $widgetplacement,
		),
		array (
			'key' => $key . '_placeholder',
			'label' => 'Trending Tags',
			'type' => 'message',
			'message' => 'This will autofill with trending tags',
		),
		array (
			'key' => $key . '_advanced_details_tab',
			'label' => 'Advanced Details',
			'type' => 'tab',
			'placement' => $widgetplacement,
		)
	)
);

$widget_config["content-types"] = get_option("options_" . $key . "_available_post_types");
$widget_config["content-sizes"] = array('main', 'main-full-bleed'); // main, main-full-bleed, sidebar
