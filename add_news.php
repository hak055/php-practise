<?php
	include_once ('libs/create_todo.php');
	include_once ('statics/header.php');

?>

<div id="mainContent">
	
		<form class="form p-3" action="add_news.php" method="post">
			<div class="form-group">
		    	<label><h1>Create Todo</h1></label>
		    </div>
		    <?php 
    		if(isset($error))
    		echo '<div class="alert alert-error">'.$error.'</div>';
 			?>
 			<?php 
    		if(isset($success))
    		echo '<div class="alert alert-success">'.$success.'</div>';
 			?>
			<div class="form-group">
				<label>Title</label>
				<input type="text" class="form-control" name="title" id="title">
			</div>

			<div class="form-group">
				<label>Description</label>
				<textarea name="description" class="form-control"></textarea>
			</div>

			<div class="form-group">
				<label>Due Date</label>
				<input type="date" name="due_date" class="form-control" id="due_date">
			</div>

			<div class="form-group">
				<label>Label Under</label>
				<select name="label" class="form-control" id="lable_under">
					<option value="">Select</option>
					<option value="Inbox">Inbox</option>
					<option value="Read_Later">Read Later</option>
					<option value="Important">Important</option>
				</select>
			</div>
			<?php 
		    	if(isset($error))
		    		echo '<div class="alert alert-error">'.$error.'</div>';
		    ?>
			<button type="submit" name="create_todo" value="" class="btn btn-primary" id="create_todo">Create Todo</button>
		</form>
</div>

</body>
</html>