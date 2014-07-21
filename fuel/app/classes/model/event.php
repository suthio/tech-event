<?php
use Orm\Model;

class Model_Event extends Model
{
	protected static $_properties = array(
		'id',
		'type_flg',
		'event_id',
		'title',
		'url',
		'address',
		'started_at',
		'ended_at',
		'accepted',
		'limit',
		'waiting',
		'place',
		'catch',
		'lon',
		'lat',
		'created_at',
		'updated_at',
	);

	protected static $_observers = array(
		'Orm\Observer_CreatedAt' => array(
			'events' => array('before_insert'),
			'mysql_timestamp' => false,
		),
		'Orm\Observer_UpdatedAt' => array(
			'events' => array('before_save'),
			'mysql_timestamp' => false,
		),
	);

	public static function validate($factory)
	{
		$val = Validation::forge($factory);
		$val->add_field('type_flg', 'Type Flg', 'required|max_length[10]');
		$val->add_field('event_id', 'Event Id', 'required|max_length[255]');
		$val->add_field('title', 'Title', 'required|max_length[255]');
		$val->add_field('url', 'Url', 'required|max_length[255]');
		$val->add_field('started_at', 'Started At', 'required');
		$val->add_field('ended_at', 'Ended At', 'required');
		$val->add_field('accepted', 'Accepted', 'required|valid_string[numeric]');
		$val->add_field('limit', 'Limit', 'required|valid_string[numeric]');
		$val->add_field('waiting', 'Waiting', 'required|valid_string[numeric]');
		$val->add_field('place', 'Place', 'required|max_length[255]');
		$val->add_field('catch', 'Catch', 'required|max_length[255]');
		$val->add_field('lon', 'Lon', 'required|max_length[20]');
		$val->add_field('lat', 'Lat', 'required|max_length[20]');

		return $val;
	}

}
