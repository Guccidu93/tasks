<?php
echo '<div id="todolist">';
echo '<form method="POST" action="http://localhost/tasks/index.php/tasks">
<input type="text" name="formu">
<input type="submit" value="Ajouter" />
</form><br /><br />';

foreach ($tasksList as $task) {
	echo '<form method="POST" action="http://localhost/tasks/index.php/tasks/delete"> - '.$task['name'].' 
	<input type="hidden" value="'.$task['id'].'" name="id" /><input type="submit" value="Effacer" />
	</form>
	
	<form method="POST" action="http://localhost/tasks/index.php/tasks/update">
	<input type="text" name="update">
	<input type="hidden" value="'.$task['id'].'" name="id" /><input type="submit" value="Modifier" />
	</form>
	<br /><br />';
}

echo '</div>';
?>