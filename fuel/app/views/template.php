<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $title; ?></title>
	<?php echo Asset::css('bootstrap.css'); ?>
	<style>
		body { margin: 40px; }
	</style>
</head>
<body>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-53041011-1', 'auto');
  ga('send', 'pageview');

</script>

	<div class="container">
		<div class="col-md-12">
			<h1><?php echo $title; ?></h1>
			<hr>
<?php if (Session::get_flash('success')): ?>
			<div class="alert alert-success">
				<strong>Success</strong>
				<p>
				<?php echo implode('</p><p>', e((array) Session::get_flash('success'))); ?>
				</p>
			</div>
<?php endif; ?>
<?php if (Session::get_flash('error')): ?>
			<div class="alert alert-error">
				<strong>Error</strong>
				<p>
				<?php echo implode('</p><p>', e((array) Session::get_flash('error'))); ?>
				</p>
			</div>
<?php endif; ?>
		</div>
		<div class="col-md-12">
<?php echo $content; ?>
		</div>
		<footer>
			<h3>機能紹介</h3>
			<ul>
				<li>Connpass、Zusaar、Doorkeeperからイベント情報の取得を行っています。</li>
				<li>参加者数の多い順に最大30件のみ表示しています。</li>
			</ul>
			<h3>更新履歴</h3>
			<dl class="history">
				<dt>2014/07/21</dt>
				<dd>
					・リリース
				</dd>
			</dl>
<!-- 			<p class="pull-right">Page rendered in {exec_time}s using {mem_usage}mb of memory.</p>
 -->			<p>
				<a href="http://fuelphp.com">FuelPHP</a> is released under the MIT license.<br>
<!-- 				<small>Version: <?php echo e(Fuel::VERSION); ?></small>
 -->			</p>
		</footer>
	</div>
</body>
</html>
