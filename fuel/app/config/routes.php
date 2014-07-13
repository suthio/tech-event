<?php
return array(
	'_root_'  => 'event/index',  // The default route
	'_404_'   => 'event/404',    // The main 404 route
	'event'   => 'event/index',
	'hello(/:name)?' => array('welcome/hello', 'name' => 'hello'),
);
