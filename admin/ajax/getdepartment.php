<?php 
include ('connection.php');
session_start();
if(isset($_POST['token']) && password_verify("getdept", $_POST['token']))
{
	$check = $db->prepare('SELECT * FROM dept_details');
	$data = array();
	$execute = $check->execute($data);
	?>
	<select name="department" id="department" class="form-control" onchange="gethostel();">
		<option value="0">SELECT DEPARTMENT</option>
		<?php 
		while($datarow = $check->fetch())
		{
			?>
			<option value="<?php echo $datarow['id'];?>"><?php echo $datarow['dname'];?></option>
			<?php
		} ?>
	</select>
	<?php
}
?>