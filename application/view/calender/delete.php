	<h1>Verwijder verjaardag</h1>
	<p>Are you sure you want to delete:</p>
	<form method="post" action="<?php echo URL . 'calender/deleteBirthdayAction/' . htmlspecialchars($birthday->id, ENT_QUOTES, 'UTF-8'); ?>">
		<div>
			<input type="hidden" name="id" value="<?=$birthday->id; ?>">
			<label for="name">Naam:</label>
			<span><?=$birthday->person; ?></span>
		</div>

		<div>
			<label></label>
			<input type="submit" name="confirmed" value="Yes">
			<input type="submit" name="canceled" value="No">
		</div>
	</form>