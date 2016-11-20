<ul class="nav" id="side-menu">
<?php foreach ($name_id as $ni){?>
	<li><a href="<?php echo $ni['account_id']?>" class=" hvr-bounce-to-right"><i
			class="fa fa-cog nav_icon"></i><span class="nav-label"><?php echo $ni['account_name']?></span><span
			class="fa arrow"></span></a>
		<ul class="nav nav-second-level">
			<li><a href="edit_account_holder_details.php?id=<?php echo $ni['account_id']?>" class=" hvr-bounce-to-right"><i
					class="fa fa-sign-in nav_icon"></i>Edit</a></li>
			<li><a href="view_account.php?name=<?php echo $ni['account_name']?>" class=" hvr-bounce-to-right"><i
					class="fa fa-sign-in nav_icon"></i>View</a></li>
					
			<li><a href="delete_account.php?name=<?php echo $ni['account_name']?>" class=" hvr-bounce-to-right" onclick="return confirm('Are you sure?')"><i
					class="fa fa-sign-in nav_icon"></i>Delete</a></li>
		</ul></li>
<?php } ?>
</ul>

