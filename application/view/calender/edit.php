<h1>Wijzig verjaardag</h1>
	<form method="post">
		<div>
			<input type="hidden" name="id" value="<?=$birthday->id?>">
			<label for="name">Persoon:</label>
			<input type="text" id="name" name="name" value="<?=$birthday->person?>">
		</div>->
		
		 <label for="name"> Datum: </label>
		  <input type="number" name="day" min="1" max="31" value="<?=$birthday->day?>">
		  <select name="month_id">
		  <?php
		  foreach($monthlist as $month):
		  	?>
		  <option value="<?=$month->id?>" <?php if ($birthday->month_id == $month->id) { echo 'selected'; } ?> ><?=$month->name?></option>
		<?php
		endforeach;
		?>
		  </select>
		  <input type="number" name="year" min="1900" max="2016" value="<?=$birthday->year?>">
		<br>
		<input type="submit" value="Save">
		</form>
		<form action="<?php echo URL; ?>calender/index">
	    <input type="submit" value="Ga terug">
	</form>