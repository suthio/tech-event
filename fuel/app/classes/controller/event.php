<?php
class Controller_Event extends Controller_Template{

	public function action_index()
	{
		$data['events'] = Model_Event::find('all');
		$this->template->title = "Events";
		$this->template->content = View::forge('event/index', $data);

	}

	public function action_view($id = null)
	{
		// is_null($id) and Response::redirect('event');

		// if ( ! $data['event'] = Model_Event::find($id))
		// {
		// 	Session::set_flash('error', 'Could not find event #'.$id);
		// 	Response::redirect('event');
		// }

		// $this->template->title = "Event";
		// $this->template->content = View::forge('event/view', $data);

	}

	public function action_create()
	{
		// if (Input::method() == 'POST')
		// {
		// 	$val = Model_Event::validate('create');
			
		// 	if ($val->run())
		// 	{
		// 		$event = Model_Event::forge(array(
		// 			'type_flg' => Input::post('type_flg'),
		// 			'event_id' => Input::post('event_id'),
		// 			'title' => Input::post('title'),
		// 			'url' => Input::post('url'),
		// 			'started_at' => Input::post('started_at'),
		// 			'ended_at' => Input::post('ended_at'),
		// 			'accepted' => Input::post('accepted'),
		// 			'limit' => Input::post('limit'),
		// 			'waiting' => Input::post('waiting'),
		// 			'place' => Input::post('place'),
		// 			'catch' => Input::post('catch'),
		// 			'lon' => Input::post('lon'),
		// 			'lat' => Input::post('lat'),
		// 		));

		// 		if ($event and $event->save())
		// 		{
		// 			Session::set_flash('success', 'Added event #'.$event->id.'.');

		// 			Response::redirect('event');
		// 		}

		// 		else
		// 		{
		// 			Session::set_flash('error', 'Could not save event.');
		// 		}
		// 	}
		// 	else
		// 	{
		// 		Session::set_flash('error', $val->error());
		// 	}
		// }

		// $this->template->title = "Events";
		// $this->template->content = View::forge('event/create');

	}

	public function action_edit($id = null)
	{
		// is_null($id) and Response::redirect('event');

		// if ( ! $event = Model_Event::find($id))
		// {
		// 	Session::set_flash('error', 'Could not find event #'.$id);
		// 	Response::redirect('event');
		// }

		// $val = Model_Event::validate('edit');

		// if ($val->run())
		// {
		// 	$event->type_flg = Input::post('type_flg');
		// 	$event->event_id = Input::post('event_id');
		// 	$event->title = Input::post('title');
		// 	$event->url = Input::post('url');
		// 	$event->started_at = Input::post('started_at');
		// 	$event->ended_at = Input::post('ended_at');
		// 	$event->accepted = Input::post('accepted');
		// 	$event->limit = Input::post('limit');
		// 	$event->waiting = Input::post('waiting');
		// 	$event->place = Input::post('place');
		// 	$event->catch = Input::post('catch');
		// 	$event->lon = Input::post('lon');
		// 	$event->lat = Input::post('lat');

		// 	if ($event->save())
		// 	{
		// 		Session::set_flash('success', 'Updated event #' . $id);

		// 		Response::redirect('event');
		// 	}

		// 	else
		// 	{
		// 		Session::set_flash('error', 'Could not update event #' . $id);
		// 	}
		// }

		// else
		// {
		// 	if (Input::method() == 'POST')
		// 	{
		// 		$event->type_flg = $val->validated('type_flg');
		// 		$event->event_id = $val->validated('event_id');
		// 		$event->title = $val->validated('title');
		// 		$event->url = $val->validated('url');
		// 		$event->started_at = $val->validated('started_at');
		// 		$event->ended_at = $val->validated('ended_at');
		// 		$event->accepted = $val->validated('accepted');
		// 		$event->limit = $val->validated('limit');
		// 		$event->waiting = $val->validated('waiting');
		// 		$event->place = $val->validated('place');
		// 		$event->catch = $val->validated('catch');
		// 		$event->lon = $val->validated('lon');
		// 		$event->lat = $val->validated('lat');

		// 		Session::set_flash('error', $val->error());
		// 	}

		// 	$this->template->set_global('event', $event, false);
		// }

		// $this->template->title = "Events";
		// $this->template->content = View::forge('event/edit');

	}

	public function action_delete($id = null)
	{
		// is_null($id) and Response::redirect('event');

		// if ($event = Model_Event::find($id))
		// {
		// 	$event->delete();

		// 	Session::set_flash('success', 'Deleted event #'.$id);
		// }

		// else
		// {
		// 	Session::set_flash('error', 'Could not delete event #'.$id);
		// }

		// Response::redirect('event');

	}


}
