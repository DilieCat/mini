<h1>Wijzig verjaardag</h1>
        <form action="<?php echo URL; ?>calender/editBirthdayAction" method="POST">
		<div>
			<input type="hidden" name="id" value="<?=$birthday->id?>">
			<label for="name">Persoon:</label>
			<input type="text" id="name" name="person" value="<?=$birthday->person?>">
		</div>->
		
		 <label for="name"> Datum: </label>
		  <input type="number" name="day" min="1" max="31" value="<?=$birthday->day?>">
		  <select name="month_id">
		  <?php
		  foreach($months as $month):
		  	?>
		  <option value="<?=$month->id?>" <?php if ($birthday->month_id == $month->id) { echo 'selected'; } ?> ><?=$month->name?></option>
		<?php
		endforeach;
		?>
		  </select>
		  <input type="number" name="year" min="1900" max="2016" value="<?=$birthday->year?>">
		<br>
		<input type="submit" name="Save" value="Save">
		<input type="hidden" name="birthday_id" value="<?php echo htmlspecialchars($birthday->id, ENT_QUOTES, 'UTF-8'); ?>" />
		</form>
		<form action="<?php echo URL; ?>calender/index">
	    <input type="submit" value="Ga terug">
	</form>