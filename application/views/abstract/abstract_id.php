<?php $row = $abstract->result()[0] ?>
<table class="table">
	<tr>
		<th>Titlle</th>
		<td colspan="2"><?php echo $row->judul; ?></td>
	</tr>
	<tr>
		<th>Abstract</th>
		<td colspan="2"><?php echo $row->abstract; ?></td>
	</tr>
	<tr>
		<th>Keyword</th>
		<td colspan="2"><?php echo $row->keyword; ?></td>
	</tr>
	<?php if($row->status_recv != 2) { ?>
	<tr>
		<form enctype="multipart/form-data" method="POST" action="<?php echo form_open(current_url()); ?>">
		<th>Upload Full Paper</th>
		<td>
			<input type="file" name="full_paper">
		</td>
		<td>
			<input type="submit" name="upload_full_paper" value="Upload">
		</td>
		</form>
	</tr>
	<?php } ?>
</table>