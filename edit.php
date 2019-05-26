<?php 
	include_once ('statics/header.php');
	include_once ('libs/list_todo.php');
?>

<div id="mainContent">
	
		<form class="form p-3" action="add_news.php" method="post">
			<?php foreach($list_todo as $elem) {?>
			<div class="form-group">
		    	<label><h1>Edit Todo</h1></label>
		    </div>
		    
			<div class="form-group">
				<label>Title</label>
				<input type="text" class="form-control" name="title" id="title" value="<?=$elem['title'];?>">
			</div>

			<div class="form-group">
				<label>Description</label>
				<textarea name="description" class="form-control"><?=$elem['description'];?></textarea>
			</div>

			<div class="form-group">
				<label>Due Date</label>
				<input type="date" name="due_date" class="form-control" id="due_date" value="<?=$elem['due_date'];?>">
			</div>

			<div class="form-group">
				<label>Label Under</label>
				<select name="label" class="form-control" id="lable_under">
					<option value="">Select</option>
					<option value="Inbox" <?= ($elem['status'] == "Inbox") ? 'selected = "selected"' : '' ;?>>Inbox</option>
					<option value="Read_Later" <?= ($elem['status'] == "Read_Later") ? 'selected = "selected"' : '' ;?>>Read Later</option>
					<option value="Important" <?= ($elem['status'] == "Important") ? 'selected = "selected"' : '' ;?>>Important</option>
				</select>
			</div>
			<?php }?>
			<button type="submit" name="create_todo" class="btn btn-primary" id="create_todo">Create Todo</button>
		</form>
</div>

</body>
</html>