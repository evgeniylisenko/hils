<?php foreach ($articels as $articel) : ?>
	<div class="col-md-4">
		<h2><?php echo $articel['name'] ?></h2>
		<img id="images" src="<?php echo $articel['img'] ?>" alt="">
		<p><?php echo $articel['short_description'] ?></p>
		<p><a class="btn btn-secondary" href="#" role="button">Читать далее »</a></p>
	</div>
	<?php endforeach; ?>
