		Welcome, <?php echo $current_user["user_name"]?><br>


				<?php foreach ($post_numbers as  $values) {
					 foreach ($values as $value) {
					 	echo $value;
					 }
					
				}?>
					people poked you!<br>
				<?php foreach ($posts as $post) {?>
					
					 <tr>
					 	<td><?php echo $post['name']; ?></td>
					 	
						<td><?php echo $post['MAX(posts.number_of_pokes)']; ?></td><br>	 	
					 </tr>
				<?php }
				 ?>
<div class="row">
	<div class="col-md-8">
		<table class="table table-striped">
		



		<h4>People you may want to poke:</h4>
			<thead>
				
				<th>Name</th>
				<th>Alias</th>
				<th>Email Address</th>
				
				<th>Poke Histrory</th>		
				<th>Actions </th>
				
			</thead>
			<tbody>
				<?php foreach ($users as $user) {?>
					 <?php if($user['id'] != $current_user["user_id"]){    ?>
					 <tr>
					 	
					 	<td><?php echo $user['name']; ?></td>
					 	<td><?php echo $user['alias']; ?></td>
					 	<td><?php echo $user['email']; ?></td>
						<td><?php echo $user['total_number_of_pokes']; ?></td>
					
					 	
					 	
					 	<td> 
							<form action="/dashboard/create_post" method="post">
									<input type="hidden" name="one_poke"    value="<?=$user["total_number_of_pokes"]?>">
									<input type="hidden" name="post_created_for"    value="<?=$user["id"]?>">
									<input type="hidden" name="post_created_by"     value="<?=$current_user['user_id']?>">
									<div class="form-group">
										<input type="submit" name="form_action" value="Poke" class="btn btn-primary">
									</div>
							</form>
					 	</td>

					 </tr>
				<?php }
				 }?>
			</tbody>
		</table>
	
</div>
 
					 	 

