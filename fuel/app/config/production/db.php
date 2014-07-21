  <?php
/**
 * The production database settings. These get merged with the global settings.
 */

return array(
  'default' => array(
    'type' => 'mysqli',
    'connection' => array(
        'hostname'       => '127.0.0.1',
        'port'           => '3306',
        'database'       => 'event',
        'username'   => 'root',
        'password'   => 'rootpass',
        'persistent' => false,
        'compress' => false,
    ),
    'identifier' => '`',
    'table_prefix' => '',
    'charset' => 'utf8',
    //'enable_cache' => true,
    //'profiling' => false,
    'readonly' => false,
  ),
);
