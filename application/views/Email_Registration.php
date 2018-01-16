
<!DOCTYPE>
<!-- saved from url=(0056)http://icetia.ums.ac.id/2017/submit/index.php?page=index -->
<html>
<head>
<title>ICCTE 2018 - Registration</title>
</head>

<body>
			
<?php $row = $user->result()[0];?>
<table width="100%" cellspacing="0" cellpadding="2" border="0" bgcolor="#ccddff">
<tbody><tr><td class="cthead_td_cmds" nowrap="" width="80%"><span class="cthead_cmds">
<td class="cthead_td_cmds right" nowrap="" valign="middle">
&nbsp;&nbsp;&nbsp;
</tbody></table>
<h1>Welcome,<?php echo $row->FullTitle?> <?php echo $row->title?> <?php echo $row->FName?></h1>
<p class="standard">Your Email has been Registered on THE 4th ICTTE FKIP UNS 2018</b>.</p>

<table id="datatable" class="table table-striped  dataTable no-footer"> 
	In the name of <?php echo $row->FName.' '.$row->MName.''.$row->LName; ?>
	<tr>
		<td><strong>Username :
		</strong></td><td><?php echo $row->user?></td>
	</tr>
	<tr>
		<td><strong>Password :
		</strong></td><td><?php echo $row->pass?></td>
	</tr>
</table>
</td>
</tr>
</tbody>
</table>
</div>
</body></html>