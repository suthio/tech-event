<style type="text/css">

  .boxContainer:before,
  .boxContainer:after {
  	content: "";
  	display: table;
  }
  .boxContainer:after {
  	clear: both;
  }
  .box {
  	width:300px;
  	display: inline-block;
  	_display: inline;
  }
  .box .title {
  	white-space: nowrap;
	  overflow: hidden;
  	text-overflow: ellipsis;
  }	

</style>
<h2><span class='muted'></span></h2>
<br>
<?php if ($events): ?>
<?php $i = 0; ?>
<div class="boxContainer">
<?php foreach ($events as $item): ?>
<div class="box"  >
	<a href="<?php echo $item->url; ?>" target="_blank">
		<div class="title">
			<?php echo $item->title; ?>
		</div>
		<div class="date">
			<?php echo date('n/d G:i', strtotime($item->started_at)); ?>&nbsp;-&nbsp;<?php echo date('n/d G:i', strtotime($item->ended_at)); ?>		
		</div>
		<div class="">
			参加/定員 <?php echo ($item->accepted+$item->waiting); ?>/<?php echo $item->limit; ?>
		</div>
	</a>
	<div class="option">
	<!--ここには画像を置く-->
	<?php if($item->type_flg == 1){echo 'Zusaar';}elseif($item->type_flg == 2){echo 'Connpass';}elseif($item->type_flg == 3){echo 'Doorkeeper';} ?>
	<a href="http://www.google.com/calendar/event?action=TEMPLATE&amp;
		text=<?php echo $item->title; ?>&amp;
		dates=<?php echo date('Ymd\THis\Z', strtotime($item->started_at.' -9 hour')); ?>/<?php echo date('Ymd\THis\Z', strtotime($item->ended_at.' -9 hour')); ?>&amp;
		details=<?php echo $item->url; ?>&amp;
		location=<?php echo $item->address; ?>&amp;
		trp=false&amp;
		sprop=http://www.tech-event.info/index.php/event/index.php/&amp;
		sprop=name:tech-event" target="_blank"><span class="icon_gcal_add">Googleカレンダー</span></a>
		<img src="http://b.hatena.ne.jp/entry/image/<?php echo $item->url; ?>" alt="はてなブックマーク - <?php echo $item->title; ?>" title="はてなブックマーク - <?php echo $item->title; ?>">

	</div>
	<hr>
</div>
<?php $i++; ?>
<?php endforeach; ?>
</div>
<?php else: ?>
<p>No Events.</p>

<?php endif; ?><p>
</p>
