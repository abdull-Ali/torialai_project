<?php include ('header.php') ?>

<?php print_r($art); ?>
<div class ='container' style='margin-top: 40px;'>
<div class='table'>
<table >
<thead>
<tr>
<th>Id</th>
<th>Article Title</th>
<th>Edit</th>
<th>Delete</th>
</tr>
</thead>
<tbody>
<?php //if(count($art)):?>
<?php //foreach( $art as $a):?>
<tr>
<td>1</td>
<td> article </td>
<td><a href="#" class="btn btn-primary">Edit</a></td>
<td><a href="#" class="btn btn-danger">Delete</a></td>
</tr>
<?php //endforeach; ?>
<?php //else: ?>
<tr>
<td colspan='3'>not data avalibale</td>
</tr>
<?php endif; ?>

</tbody>
</table>
</div>
</div>
<?php include ('footer.php') ?>