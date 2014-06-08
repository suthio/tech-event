<h2>Viewing <span class='muted'>#<?php echo $event->id; ?></span></h2>

<p>
	<strong>Type flg:</strong>
	<?php echo $event->type_flg; ?></p>
<p>
	<strong>Event id:</strong>
	<?php echo $event->event_id; ?></p>
<p>
	<strong>Title:</strong>
	<?php echo $event->title; ?></p>
<p>
	<strong>Url:</strong>
	<?php echo $event->url; ?></p>
<p>
	<strong>Started at:</strong>
	<?php echo $event->started_at; ?></p>
<p>
	<strong>Ended at:</strong>
	<?php echo $event->ended_at; ?></p>
<p>
	<strong>Accepted:</strong>
	<?php echo $event->accepted; ?></p>
<p>
	<strong>Limit:</strong>
	<?php echo $event->limit; ?></p>
<p>
	<strong>Waiting:</strong>
	<?php echo $event->waiting; ?></p>
<p>
	<strong>Place:</strong>
	<?php echo $event->place; ?></p>
<p>
	<strong>Catch:</strong>
	<?php echo $event->catch; ?></p>
<p>
	<strong>Lon:</strong>
	<?php echo $event->lon; ?></p>
<p>
	<strong>Lat:</strong>
	<?php echo $event->lat; ?></p>

<?php echo Html::anchor('event/edit/'.$event->id, 'Edit'); ?> |
<?php echo Html::anchor('event', 'Back'); ?>