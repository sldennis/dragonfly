<!-- File: /app/View/Users/index.ctp -->
<h1>Users</h1>
<table>
	<tr>
		<th>Picture</th>
		<th>Login</th>
		<th>Email</th>
	</tr>
	
	<?php foreach($users as $user): ?>
	<tr>
		<td>
			<?php 
				echo $this->Html->image($user['User']['picture'], 
										array(
											'url' => array(
													'controller' => 'users', 
													'action' => 'view', 
													$user['User']['login']
											),
											'width' => '100px'
										));
			?>
		</td>
		<td>
			<?php echo $user['User']['login'] ?>
		</td>
		<td>
			<?php echo $user['User']['email'] ?>
		</td>
	</tr>
	<?php endforeach ?>
	
	<?php unset($users) ?>
</table>