<?php

namespace Fuel\Migrations;

class Create_events
{
	public function up()
	{
		\DBUtil::create_table('events', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'type_flg' => array('constraint' => 10, 'type' => 'varchar'),
			'event_id' => array('constraint' => 255, 'type' => 'varchar'),
			'title' => array('constraint' => 255, 'type' => 'varchar'),
			'url' => array('constraint' => 255, 'type' => 'varchar'),
			'address' => array('constraint' => 255, 'type' => 'varchar', 'null' => true),
			'started_at' => array('type' => 'datetime'),
			'ended_at' => array('type' => 'datetime'),
			'accepted' => array('constraint' => 11, 'type' => 'int', 'default' => 0),
			'limit' => array('constraint' => 11, 'type' => 'int', 'default' => 0),
			'waiting' => array('constraint' => 11, 'type' => 'int', 'default' => 0),
			'place' => array('constraint' => 255, 'type' => 'varchar', 'null' => true),
			'catch' => array('constraint' => 255, 'type' => 'varchar', 'null' => true),
			'lon' => array('constraint' => 20, 'type' => 'varchar', 'null' => true),
			'lat' => array('constraint' => 20, 'type' => 'varchar', 'null' => true),
			'created_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'updated_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('events');
	}
}