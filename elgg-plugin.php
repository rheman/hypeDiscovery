<?php

use hypeJunction\Discovery\Router;
use hypeJunction\Discovery\Discovery;

/**
 * hypeDiscovery
**/
return [
	'bootstrap' => \hypeJunction\Discovery\Bootstrap::class,
	'views' => [
		'default' => [
			'/' =>  __DIR__ . '/vendors/webicons/',
		],
	],
	'routes' => [
		'hypeDiscovery:permalink:permalink' => [
			'path' => '/permalink/default/{guid}/{title?}',
			'resource' => 'hypeDiscovery/permalink',
			'walled' => false,
		],
		'hypeDiscovery:permalink:oembed' => [
			'path' => '/permalink/oembed/{guid}/{title?}',
			'resource' => 'hypeDiscovery/permalink',
			'walled' => false,
		],
		'hypeDiscovery:permalink:image' => [
			'path' => '/permalink/image/{guid}/{title?}',
			'resource' => 'hypeDiscovery/permalink',
			'walled' => false,
		],
		'hypeDiscovery:opengraph:edit' => [
			'path' => '/opengraph/edit/{guid}',
			'resource' => 'hypeDiscovery/opengraphHandler',
		],
		'hypeDiscovery:opengraph:share' => [
			'path' => '/opengraph/share/{guid}',
			'resource' => 'hypeDiscovery/opengraphHandler',
		],

	],
];
/*
			'controller' => [Router::class, 'opengraphHandler'],
		'play:object:izap_videos' => [
			'path' => '/opengraph/edit/{guid}',
			'resource' => 'hypeDiscovery/',
		],

*/
