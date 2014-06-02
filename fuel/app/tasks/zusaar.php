<?php
/**
 * Fuel is a fast, lightweight, community driven PHP5 framework.
 *
 * @package    Fuel
 * @version    1.7
 * @author     Fuel Development Team
 * @license    MIT License
 * @copyright  2010 - 2013 Fuel Development Team
 * @link       http://fuelphp.com
 */

namespace Fuel\Tasks;

/**
 * Robot example task
 *
 * Ruthlessly stolen from the beareded Canadian sexy symbol:
 *
 *		Derek Allard: http://derekallard.com/
 *
 * @package		Fuel
 * @version		1.0
 * @author		Phil Sturgeon
 */

ini_set("mbstring.internal_encoding", "UTF-8");

class Zusaar 
{

	/**
	 * This method gets ran when a valid method name is not used in the command.
	 *
	 * Usage (from command line):
	 *
	 * php oil r robots
	 *
	 * or
	 *
	 * php oil r robots "Kill all Mice"
	 *
	 * @return string
	 */
	public static function run($speech = null)
	{
			$data = static::get_zusaar();
			$valid_data = array();
			$cnt = 0;
			$enabled_keys = array('event_id',
														'event_url',
														'title',
														'started_at',
														'ended_at',
														'address',
														'accepted',
														'limit',
														'waiting',
														'place',
														'catch',
														'lon',
														'lat',
														'updated_at',
														);

			foreach ($data as $event) {
					//$limit = $event['owner_nickname'];
					//$limit = $event['url'];
					$data_array = array();
					foreach ($event as $key => $value) {
							if(in_array($key, $enabled_keys))
							{
									$data_array = array_merge(array($key => $value),$data_array);
							}
					}
					array_push($valid_data,$data_array);
			}
			//print_r($valid_data);
			$zusaar_data = static::convert_zusaar_data($valid_data);
			
	}
	// 配列のKeyを変換		
	private static function convert_zusaar_data($data)
	{
			$from_keys = array('event_id',
												'title',
												'event_url',
												'started_at',
												'ended_at',
												'address',
												'accepted',
												'limit',
												'waiting',
												'place',
												'catch',
												'lon',
												'lat',
												'updated_at',
												);
			$to_keys = array( 'id',
												'title',
												'url',
												'started_at',
												'ended_at',
												'address',
												'accepted',
												'limit',
												'waiting',
												'place',
												'catch',
												'lon',
												'lat',
												'updated_at',
												);
			$convert_array = array();
			foreach ($data as $event) {
					$event_array = array();
					for($i=0;$i<count($from_keys);$i++)
					{
							if(array_key_exists($from_keys[$i],$event))
							{
									$event_array = array_merge($event_array,array($to_keys[$i] => $event[$from_keys[$i]]));
							}
					}
					array_push($convert_array,$event_array);
			}
			return $convert_array;
	}
	
	private static function get_zusaar()
	{
			// 何ヶ月取得するのか。
			$month = 3;
			$minus = 2;
			$zusaar_data = array();
			for($i=0;$i<=3;$i++)
			{
					$ym = date('Ym',strtotime(($i-$minus)." month"));
					$zusaar_data = array_merge($zusaar_data,static::get_zusaar_api_all($ym));
			}
			return $zusaar_data;
	}

	private static function get_zusaar_api_all($ym,$start=1)
	{
			$zusaar_data = static::get_zusaar_api($ym,$start)['event'];
			//print count($zusaar_data['event'])."\n";
			if(count($zusaar_data) >= 100)
			{
					//再帰処理	
					$zusaar_data = array_merge($zusaar_data,static::get_zusaar_api_all($ym,$start+100));
			}
			return $zusaar_data;
	}

	private static function get_zusaar_api($ym,$start)
	{
			$curl = curl_init();
			$url = 'http://www.zusaar.com/api/event/'. '?count=100'.'&start='. $start .'&ym='. $ym;
			//print $url;
			curl_setopt($curl, CURLOPT_URL,$url);
			curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
			$res = curl_exec($curl);
			$header = curl_getinfo($curl);
			// APIのHTTPコードをチェック
			$code = $header["http_code"];
			if ($code >= 400) { // もしエラーなら
				  header("HTTP", true, $code);
				  echo $res;   // APIのエラー表示をそのままブラウザへ返す(開発作業中はそうしておくと便利)
  				exit();
			}
			$data = json_decode($res, true);
			return $data;
	}

	/**
	 * An example method that is here just to show the various uses of tasks.
	 *
	 * Usage (from command line):
	 *
	 * php oil r robots:protect
	 *
	 * @return string
	 */
	public static function protect()
	{

	}
}

/* End of file tasks/robots.php */
