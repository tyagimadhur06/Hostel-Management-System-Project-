<?php 
include ('connection.php');
session_start();
if(isset($_POST['token']) && password_verify("gethostel", $_POST['token']))
{
	$check = $db->prepare('SELECT * FROM hostel_details');
	$data = array();
	$execute = $check->execute($data);
	?>
	<select name="hostel" id="hostel" class="form-control" onchange="getroom();">
		<option value="0">SELECT HOSTEL</option>
		<?php 
		while($datarow = $check->fetch())
		{
			?>
			<option value="<?php echo $datarow['id'];?>"><?php echo $datarow['hname'];?></option>
			<?php
		} ?>
	</select>
	<?php
}
?>