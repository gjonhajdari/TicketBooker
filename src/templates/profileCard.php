<div class="col-12 col-12 col-md-6 col-lg-4">

	<div class="card <?php echo $isDark ? '' : 'card-light'; ?>">
		<h1 class="card-title">Card title</h1>
	
		<div class="card-body">
			<div class="date <?php echo $isDark ? '' : 'icon-light'; ?>">
				<?php echo file_get_contents('assets/icons/Calendar.svg') ?>
				<div class="info">
					<p class="primary">Date</p>
					<p class="secondary">Start time - end time</p>
				</div>
			</div>
			<div class="location <?php echo $isDark ? '' : 'icon-light'; ?>">
				<?php echo file_get_contents('assets/icons/Location.svg') ?>
				<div class="info">
					<p class="primary">Location</p>
				</div>
			</div>
		</div>

		<hr>
	
		<div class="card-bottom">
			<p class="type">Ticket type</p>
			<button class="trash">
				<?php echo file_get_contents('assets/icons/Trash.svg') ?>
			</button>
		</div>
	</div>

</div>