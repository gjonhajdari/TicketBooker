<div class="col-12 col-12 col-md-6 col-lg-4">

	<div class="card <?php echo $isDark ? '' : 'card-light'; ?>">
		<h1 class="card-title"><?php echo $title; ?></h1>
	
		<div class="card-body">
			<div class="date <?php echo $isDark ? '' : 'icon-light'; ?>">
				<?php echo file_get_contents('assets/icons/calendar.svg') ?>
				<div class="info">
					<p class="primary"><?php echo $date; ?></p>
					<p class="secondary"><?php echo $time; ?></p>
				</div>
			</div>
			<div class="location <?php echo $isDark ? '' : 'icon-light'; ?>">
				<?php echo file_get_contents('assets/icons/location.svg') ?>
				<div class="info">
					<p class="primary"><?php echo $location; ?></p>
				</div>
			</div>
		</div>

		<hr>
	
		<div class="card-bottom">
			<p class="type"><?php echo $type; ?></p>
			<button class="trash">
				<?php echo file_get_contents('assets/icons/trash.svg') ?>
			</button>
		</div>
	</div>

</div>