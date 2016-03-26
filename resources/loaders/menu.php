<?

use Ayim\Quickadmin\Wdget\Menu\Item;
use Ayim\Quickadmin\Wdget\Menu\Menu;


return [
	new Item('Home','fa-home'),
	(new Menu('Test','fa-users'))
		->addItem(new Item('Google','http://www.google.com','fa-times'))
		->addItem(new Item('Bing','http://bing.com', 'fa-times'))
		->addMenu((new Menu('kiswahili','fa-flag'))
				->addItem(new Item('Google','http://google.co.ke', 'fa-times'))
				->addItem(new Item('Bing','http://bing.co.ke', 'fa-times'))
			)
];