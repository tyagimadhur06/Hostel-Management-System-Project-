<?php
    include("connection.php");
    session_start();

    if(isset($_POST['token']) && password_verify("getmenu", $_POST['token']))
    {
    	$check = $db->prepare('SELECT * FROM mess_details');
    	$data = array();
    	$execute = $check->execute($data);
    	?>
    	<table class="table table-bordered table-responsive">
    		<tr style="display: inline-flex;">
                <td style="border:1px solid black;">SR NO</td>
    			<td style="border:1px solid black;">DATE</td>
    			<td style="border:1px solid black;">BREAKFAST <br> 7:30 A.M - 9:00 A.M </td>
    			<td style="border:1px solid black;">LUNCH <br> 12:00 P.M - 2:00 P.M </td>
                <td style="border:1px solid black;">SNACKS <br> 4:30 P.M - 5:15 P.M </td>
                <td style="border:1px solid black;">DINNER <br> 8:30 P.M - 9:00 P.M </td>
                <td style="border:1px solid black;">OPERATION</td>
    		</tr>
    		<?php
                $srno = 1;
    		while($datarow=$check->fetch())
    		{
    			?>
    			<tr style="display: inline-flex;">
                    <td style="border:1px solid black;"><?php echo $srno?></td>
    				<td style="border:1px solid black;"><?php echo $datarow['date1']?></td>
    				<td style="border:1px solid black;"><?php echo $datarow['breakfast']?></td>
    				<td style="border:1px solid black;"><?php echo $datarow['lunch']?></td>
                    <td style="border:1px solid black;"><?php echo $datarow['snacks']?></td>
                    <td style="border:1px solid black;"><?php echo $datarow['dinner']?></td>
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