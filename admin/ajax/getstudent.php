<?php
    include("connection.php");
    session_start();

    if(isset($_POST['token']) && password_verify("getstudent", $_POST['token']))
    {
    	$check = $db->prepare('SELECT * FROM stu_details JOIN hostel_details ON stu_details.hid = hostel_details.id JOIN room_details ON stu_details.rid = room_details.id JOIN dept_details ON room_details.did = dept_details.id');
    	$data = array();
    	$execute = $check->execute($data);
    	?>
    	<table class="table table-bordered">
    		<tr style="display: inline-flex;">
                <td style="border:1px solid black;">SR NO</td>
    			<td style="border:1px solid black;">NAME</td>
    			<td style="border:1px solid black;">ROOM</td>
    			<td style="border:1px solid black;">DEPARTMENT</td>
                <td style="border:1px solid black;">HOSTEL</td>
                <td style="border:1px solid black;">UID</td>
                <td style="border:1px solid black;">OPERATION</td>
    		</tr>
    		<?php
                $srno = 1;
    		while($datarow=$check->fetch())
    		{
    			?>
    			<tr style="display: inline-flex;">
                    <td style="border:1px solid black;"><?php echo $srno?></td>
    				<td style="border:1px solid black;"><?php echo $datarow['name']?></td>
    				<td style="border:1px solid black;"><?php echo $datarow['rname_bno']?></td>
    				<td style="border:1px solid black;"><?php echo $datarow['dname']?></td>
                    <td style="border:1px solid black;"><?php echo $datarow['hname']?></td>
                    <td style="border:1px solid black;"><?php echo $datarow['uid']?></td>
                    <td style="border:1px solid black;"><button type="button" class="btn btn-danger" onclick="delete_data('<?php echo $datarow['id']?>')">Delete</button></td>
    			</tr>
    	<?php
            $srno++;
        	} ?>
    	</table>
    	<?php
    }

?>

    <script src='https://code.jquery.com/jquery-3.2.1.min.js'></script>
    <script type="text/javascript">

        function delete_data(id)
        {

             $.ajax(
                {
                    type:'POST',
                    url:"ajax/delete.php",
                    data:'id='+id,
                    success:function(data)
                    {
                        alert("data deleted successfully");
                        window.location="addstudent.php";
                    }
                });
        }


    </script>


<!-- SELECT * FROM stu_details JOIN room_details ON stu_details.rid = room_details.id WHERE rid LIKE '{$input}%'; -->