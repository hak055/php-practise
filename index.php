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
					      <th scope="col">Snippet</th>
					      <th scope="col">Due Date</th>
					      <th scope="col">Time Left</th>
					      <th scope="col">Progress</th>
					      <th scope="col">Actions</th>
					    </tr>
					  </thead>
					  <tbody>
					    <tr>
					      <th scope="row">1</th>
					      <td>Mark</td>
					      <td>Otto</td>
					      <td>12123</td>
					      <td>25%</td>
					      <td>edit|delete</td>
					    </tr>					   
					  </tbody>
					</table>					
				</div>
			</div>			
		</div>
		
	</div>

</body>
</html>