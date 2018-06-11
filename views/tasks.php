
<form method="POST" action="tasks">
		<input type="text" name="formu">
		<input type="submit" value="Valider" />
	</form>

	<?php
foreach ($tasksList as $task) {
    echo '<form method="POST" action="tasks/delete"> - '.$task['name'].' 
	<input class="hidden" type="text" value="'.$task['id'].'" name="id"/><input type="submit" value="Effacer" />
	</form><br />';
}
?>