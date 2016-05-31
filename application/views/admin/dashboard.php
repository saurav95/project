<?php include('admin_header.php'); ?>
	<div class="container"> 
	
	<table class="table table-striped">
	<thead> 
		<th>Sr no.</th>
		<th>Title</th>
		<th>Action </th>
	</thead>
	<tbody>
	<?php if(count($articles)): ?>
	<?php foreach ($articles as $article): ?>
		<tr>
			<td>1</td>
			<td>Test</td>
			<td>
				<button type="button" class="btn btn-primary">Edit</button>	
				<button type="button" class="btn btn-danger">Delete</button>
			</td>
		</tr>
	<?php endforeach; ?>
	<?php else:  ?>
		<tr>
		<td colspan="3">No records found</td>
		</tr>
    <?php endif; ?>	
	</tbody>
	</table>
	
	
	</div>
<?php include('admin_footer.php'); ?>