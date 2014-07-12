<h2>Listing <span class='muted'>Events</span></h2>
<br>
<?php if ($events): ?>
<?php foreach ($events as $item): ?>	
	<div>
		<div>
		<!--ここには画像を置く-->
		<?php if($item->type_flg == 1){echo 'Zusaar';} ?>
		</div>
		<div>
			<a href="<?php echo $item->url; ?>"><?php echo $item->title; ?></a>
		</div>

		<div>
			<?php echo date('n/d G:i', strtotime($item->started_at)); ?>-<?php echo date('n/d G:i', strtotime($item->ended_at)); ?>		
		</div>

		<div>
			<?php echo ($item->accepted+$item->waiting); ?>/<?php echo $item->limit; ?>
		</div>
	</div>
<?php endforeach; ?>
<?php else: ?>
<p>No Events.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('event/create', 'Add new Event', array('class' => 'btn btn-success')); ?>

</p>
