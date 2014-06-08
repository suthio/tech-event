<?php echo Form::open(array("class"=>"form-horizontal")); ?>

	<fieldset>
		<div class="form-group">
			<?php echo Form::label('Type flg', 'type_flg', array('class'=>'control-label')); ?>

				<?php echo Form::input('type_flg', Input::post('type_flg', isset($event) ? $event->type_flg : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Type flg')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Event id', 'event_id', array('class'=>'control-label')); ?>

				<?php echo Form::input('event_id', Input::post('event_id', isset($event) ? $event->event_id : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Event id')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Title', 'title', array('class'=>'control-label')); ?>

				<?php echo Form::input('title', Input::post('title', isset($event) ? $event->title : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Title')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Url', 'url', array('class'=>'control-label')); ?>

				<?php echo Form::input('url', Input::post('url', isset($event) ? $event->url : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Url')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Started at', 'started_at', array('class'=>'control-label')); ?>

				<?php echo Form::input('started_at', Input::post('started_at', isset($event) ? $event->started_at : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Started at')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Ended at', 'ended_at', array('class'=>'control-label')); ?>

				<?php echo Form::input('ended_at', Input::post('ended_at', isset($event) ? $event->ended_at : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Ended at')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Accepted', 'accepted', array('class'=>'control-label')); ?>

				<?php echo Form::input('accepted', Input::post('accepted', isset($event) ? $event->accepted : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Accepted')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Limit', 'limit', array('class'=>'control-label')); ?>

				<?php echo Form::input('limit', Input::post('limit', isset($event) ? $event->limit : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Limit')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Waiting', 'waiting', array('class'=>'control-label')); ?>

				<?php echo Form::input('waiting', Input::post('waiting', isset($event) ? $event->waiting : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Waiting')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Place', 'place', array('class'=>'control-label')); ?>

				<?php echo Form::input('place', Input::post('place', isset($event) ? $event->place : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Place')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Catch', 'catch', array('class'=>'control-label')); ?>

				<?php echo Form::input('catch', Input::post('catch', isset($event) ? $event->catch : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Catch')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Lon', 'lon', array('class'=>'control-label')); ?>

				<?php echo Form::input('lon', Input::post('lon', isset($event) ? $event->lon : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Lon')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Lat', 'lat', array('class'=>'control-label')); ?>

				<?php echo Form::input('lat', Input::post('lat', isset($event) ? $event->lat : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Lat')); ?>

		</div>
		<div class="form-group">
			<label class='control-label'>&nbsp;</label>
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>		</div>
	</fieldset>
<?php echo Form::close(); ?>