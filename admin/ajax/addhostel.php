<?php 
    include('connection.php');
    session_start();
    if(isset($_POST['token']) && password_verify("hostel", $_POST['token']))
    {
    	$hname=test_input($_POST['hname']);

    	$check=$db->prepare('INSERT INTO hostel_details(hname) VALUES (?)');
    	$data=array($hname);
    	$execute = $check->execute($data);
    	if($execute)
    	{
    		echo 0;
    	}

    	else
    	{
    		echo 2;
    	}
    }

    function test_input($data) {
    	$data = trim($data);
    	$data = stripslashes($data);
    	$data = htmlspecialchars($data);
    	return $data;
    }


?>