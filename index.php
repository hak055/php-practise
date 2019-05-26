<?php 
	include_once ('statics/header.php');
	include_once ('libs/list_todo.php');
?>

			<div id="mainContent">
				<div id="head">
					<h2>Manage Todo</h2>
					<div id="add_more">
						<a href="add_news.php">+ Add News</a>
					</div>
				</div>

				<div id="mainBody">
					<table class="table">
					  <thead>
					    <tr>
					      <th scope="col">Title</th>
					      <th scope="col">Description</th>
					      <th scope="col">Due Date</th>
					      <th scope="col">Time Left</th>
					      <th scope="col">Progress</th>
					      <th scope="col">Actions</th>
					    </tr>
					  </thead>
					  <tbody>
					    
					    <?php
					    if($list_todo !== 0)
					    {
							    foreach ($list_todo as $key => $value)
							    {
							    	$due_date = strtotime($value['due_date']);
							    	$today = strtotime("now");
							    	$time_left = (($due_date - $today) / 3600) / 24;
							    	if($time_left < 1)
							    	{
							    		$time_left = 'Less than one day';
							    	}
							    	else{
							    		$time_left = round($time_left).' days remeining';
							    	}
							    	
							    	echo '<tr>';
							    	  echo '<th scope="row">'.$value['title'].'</th>';
								      echo '<td>'.$value['description'].'</td>';
								      echo '<td>'.$value['due_date'].'</td>';
								      echo '<td>'.$time_left.'</td>';
								      echo '<td><div class="progress">
									    <div class="progress-bar" role="progressbar" aria-valuemin="0" style="width:'.$value['progress'].'%">
									      '.$value['progress'].'
									    </div>
									  </div></td>';


								      echo '<td><a href="edit.php?edit_id='.$value['id'].'">edit</a>|
								      <a href="?delete='.$value['id'].'">delete</a>
								      </td>';
								      echo '<tr>';
							    }
						}
						else{
							    	echo '<td><td><td><h1>List empty!</h1></td></td></td>';
							    }
					    ?>
					     
					    </tr>					   
					  </tbody>
					</table>					
				</div>
			</div>			
		</div>
		
	</div>

</body>
</html>