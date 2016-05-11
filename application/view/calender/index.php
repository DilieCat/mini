<?php

	foreach($birthdays as $birthday):
		if($currentMonth != $birthday->month_name ){
			$currentMonth = $birthday->month_name;
			echo "<h1>" . $currentMonth . "</h1>";
		}
		

?>

<h2><?=$birthday->day; ?></h2><p><a href="<?php echo URL . 'calender/editbirthday/' . htmlspecialchars($birthday->id, ENT_QUOTES, 'UTF-8'); ?>"><?=$birthday->person; ?> (<?=$birthday->year; ?>)</a><a href="<?php echo URL . 'calender/deletebirthday/' . htmlspecialchars($birthday->id, ENT_QUOTES, 'UTF-8'); ?>"> X </a></p><br>



<?php
endforeach;
?>
<p><a href="<?php echo URL; ?>calender/addBirthday">Toevoegen</a></p>
