
<!DOCTYPE>
<!-- saved from url=(0056)http://icetia.ums.ac.id/2017/submit/index.php?page=index -->
<html>
<head>
<title>ICCTE 2018 - ConfTool - Index</title>
</head>

<body>
			
<?php $row = $user->result()[0];?>
<table width="100%" cellspacing="0" cellpadding="2" border="0" bgcolor="#ccddff">
<tbody><tr><td class="cthead_td_cmds" nowrap="" width="80%"><span class="cthead_cmds">
<a href="http://icetia.ums.ac.id/2017/submit/index.php?page=index" class="cthead_a">Overview</a></span></td>
<td class="cthead_td_cmds right" nowrap="" valign="middle">
&nbsp;&nbsp;&nbsp;
</tbody></table>
<h1>Welcome, <?php echo $row->FullTitle?> <?php echo $row->title?> <?php echo $_SESSION['nama']; ?></h1>
<p class="standard">You are logged in as user <b><?php echo $row->user?></b>.</p>


<p><span class="fontlabel font10">You are registered as 
				<?php 
					if ($row->status == 1){
						echo 'Non Participation';
					}
					elseif ($row->status == 2) {
						echo 'Author (you have not submit full paper yet)';
					}
					elseif ($row->status == 3) {
						echo 'participantion';
					}
					
				?>
.</span><br>


<span class="fontlabel font10">Suggest Payment Method :</span> <span class="fontnormal font10">Via bank transfer (wire transfer)</span></p>
<p><span class="fontbold font10">Payment in full has been 
	 <?php 
					if ($row->status_pay == 1){
						echo 'has not been received';
					}
					elseif ($row->status_pay == 2) {
						echo 'has been confirmed';
					}					
				?>
			. Thank you.</span></p>
<a name="menu"></a><table cellpadding="5" align="center" width="100%">
</table>
<div style="font-size:4pt; clear:both;">&nbsp;</div>
<h3>Status of <?php 
					if ($row->status == 1){
						echo 'Non Participation';
					}
					elseif ($row->status == 2) {
						echo 'Author';
					}
				?></h3>
<div class="col-lg-8 mx-auto text-center border:solid">
<div style="font-size:4pt; clear:both;">&nbsp;</div>

<table id="datatable" class="table table-striped  dataTable no-footer"> 
	<tr>
		<strong><?php 
				if ($row->status == 1){
					echo 'You have not';
				}
				elseif ($row->status == 2) {
					echo 'You have';
				}
				?>
					register for a participation
				</strong>
	</tr>
	<tr>
		<td>
		<a href="<?php echo base_url(); ?>index.php/user/input" class="btn btn-success">Submition</a>
		</td>
		<td>
		<a href="<?php echo base_url(); ?>index.php/user/register" class="btn btn-success">Registration</a>
		</td>
	</tr>
</table>

<table id="datatable" class="table table-striped table-bordered dataTable no-footer">
	<tr>
		<th class="sorting_asc">
			ID
		</th>
		<th class="sorting_asc">
			Title
		</th>
		<th class="sorting_asc">
			Date
		</th>
		<th></th>
	</tr>
			<?php foreach ($abstract as $row1) {
    			echo "<tr>";
    				
    					echo "<td>".$row1->id_judul."</td>";
    					echo "<td> Title <b>".$row1->judul."</b>
    							<p>Author(s)".$row->user."</p></td>";
    					echo "<td>".$row1->tanggal."</td>";
    					echo "<td>Show abstract</td>";
    			echo "</tr>";

    			} ?>
</table>
</td>
</tr>
</tbody>
</table>
</div>
</body></html>