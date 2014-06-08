<h2>Listing <span class='muted'>Events</span></h2>
<br>
<?php if ($events): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Type flg</th>
			<th>Event id</th>
			<th>Title</th>
			<th>Url</th>
			<th>Started at</th>
			<th>Ended at</th>
			<th>Accepted</th>
			<th>Limit</th>
			<th>Waiting</th>
			<th>Place</th>
			<th>Catch</th>
			<th>Lon</th>
			<th>Lat</th>
			<th>&nbsp;</th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($events as $item): ?>		<tr>

			<td><?php echo $item->type_flg; ?></td>
			<td><?php echo $item->event_id; ?></td>
			<td><?php echo $item->title; ?></td>
			<td><?php echo $item->url; ?></td>
			<td><?php echo $item->started_at; ?></td>
			<td><?php echo $item->ended_at; ?></td>
			<td><?php echo $item->accepted; ?></td>
			<td><?php echo $item->limit; ?></td>
			<td><?php echo $item->waiting; ?></td>
			<td><?php echo $item->place; ?></td>
			<td><?php echo $item->catch; ?></td>
			<td><?php echo $item->lon; ?></td>
			<td><?php echo $item->lat; ?></td>
			<td>
				<div class="btn-toolbar">
					<div class="btn-group">
						<?php echo Html::anchor('event/view/'.$item->id, '<i class="icon-eye-open"></i> View', array('class' => 'btn btn-small')); ?>						<?php echo Html::anchor('event/edit/'.$item->id, '<i class="icon-wrench"></i> Edit', array('class' => 'btn btn-small')); ?>						<?php echo Html::anchor('event/delete/'.$item->id, '<i class="icon-trash icon-white"></i> Delete', array('class' => 'btn btn-small btn-danger', 'onclick' => "return confirm('Are you sure?')")); ?>					</div>
				</div>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Events.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('event/create', 'Add new Event', array('class' => 'btn btn-success')); ?>

</p>
