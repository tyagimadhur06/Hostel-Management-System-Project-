<?php 
include ('connection.php');
session_start();
if(isset($_POST['token']) && password_verify("getroom", $_POST['token']))
{
	$did = $_POST['did'];
	$check = $db->prepare('SELECT * FROM room_details WHERE did=?');
	$data = array($did);
	$execute = $check->execute($data);
	?>
	<select name="room" id="room" class="form-control">
		<?php 
		while($datarow = $check->fetch())
		{
			?>
			<option value="<?php echo $datarow['id'];?>"><?php echo $datarow['rname_bno'];?></option>
			<?php
		} ?>
	</select>
	<?php
}
?>