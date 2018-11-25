
<!DOCTYPE html>
<html>
<h3 class="text-primary"><i class="glyphicon glyphicon-dashboard"></i> Dashboard</h3>
<hr>

<ul class="nav nav-stacked">
	<li><a href="admin_inbox.php"><i class="fa fa-envelope fa-lg"></i> Inbox <?php echo $mes;?></a></li>
	<li><a href="admin_donor.php"><i class="fa fa-search fa-lg"></i>Search Donors</a></li>
	<li><a href="admin_ndonor.php"><i class="fa fa-users fa-lg text-danger"></i> Need Blood</a></li>
    <li><a href="admin_ndonor.php"><i class="fa fa-eye fa-lg text-danger"></i> Regular Activities</a></li>
	<li><a href="admin_ndonor.php"><i class="fa fa-eye fa-lg text-danger"></i> Camp Activities</a></li>
	<li><a href="#add" data-toggle="collapse" ><i class="fa fa-cogs fa-lg"></i>  Settings</a></li>
	<ul class="nav collapse" id="add">
		<li><a href="admin_country.php"><i class="fa fa-plus fa-lg"></i> Add Volunteer</a>
		<li><a href="admin_country.php"><i class="fa fa-plus fa-lg"></i> Select Volunteer Secretary</a>	
		<li><a href="admin_state.php"><i class="fa fa-plus fa-lg"></i> Add Camp</a></li>
		<li><a href="admin_city.php"><i class="fa fa-plus fa-lg"></i> Add Event</a></li>
		<li><a href="admin_area.php"><i class="fa fa-plus fa-lg"></i> Add Achievements and Awards</a></li>
		</li>
	</ul>
</ul>

<hr></html>
