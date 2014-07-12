<?php
return array(
	'_root_'  => 'event/index',  // The default route
	'_404_'   => 'welcome/404',    // The main 404 route
	'event'   => 'welcome/index',
	'hello(/:name)?' => array('welcome/hello', 'name' => 'hello'),
);
