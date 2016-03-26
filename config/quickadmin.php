<?php 

return [
	'title' => 'QuickadminTemplate',
	'header' => 'Menu',

	'footer' => [
		'left' => '<strong>Copyright &copy; '.date('Y').' <a href="https://teitter.com/sirdom__"Ayimdomnic</a>. </strong> All Rights Reserved'
		'right' => 'Ralphowino made me bad',
		],
		
	'logo' => [
		'large' => '<b>Quick</b>admin',
		'small' => '<b> Q</b>admin',
		'link'=> '#',
	],

    'layout' => [
        // Skins are: blue, black, purple, yellow, red, green
        'skin' => 'red',
        // Options are: fixed, layout-boxed, layout-top-nav, sidebar-collapse, sidebar-mini
        // These can be combined
        'options' => 'sidebar-mini',
    ],

    'includes' => [
        'css' => [],
        'js' => [],
    ],

    'search' => [
        'url' => '',
        'method' => 'POST',
        'parameter' => 'query',
        'placeholder' => 'Search...',
    ]
];