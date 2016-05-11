<h1>Voeg verjaardag toe</h1>
<form method="post" action="<?php echo URL; ?>calender/addBirthdayAction">
	<div>
		<label for="name">Persoon:</label>
		<input type="text" id="name" name="person">
	</div>
	<label for="name"> Datum: </label>
	<input type="number" name="day" min="1" max="31"?>

	<select name="month_id">
	<?php
	foreach($months as $month) {
	?>
		<option value="<?=$month->id?>"><?=$month->name?></option>
	<?php
	}
	?>
	</select>

	<input type="number" name="year" min="1900" max="2016">
	<br>
	<input type="submit" name="Save" value="Save">
</form>

<form action="<?php echo URL; ?>calender/index">
	<input type="submit" value="Ga terug">
</form>