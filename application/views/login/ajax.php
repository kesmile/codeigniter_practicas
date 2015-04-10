<!--<tabla>
	<thead>
		<tr>
			<th>Usuarios</th>
			<th>Password</th>
			<th>Perfil</th>
		</tr>
	</thead>
	<tbody>
	<?php foreach($usuarios as $row): ?>
		<tr>
			<td><?php echo $row->username; ?></td>
			<td><?php echo $row->password; ?></td>
			<td><?php echo $row->perfil; ?></td>
		</tr>
	<?php endforeach; ?>
	</tbody>
</tabla> -->
<ul>
	<?php foreach($usuarios as $row): ?>
			<li><?php echo $row->username; ?></li>
	<?php endforeach; ?>
</ul>
