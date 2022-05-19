<?php 
    include('connection.php');
    session_start();
    if(isset($_POST['token']) && password_verify("department", $_POST['token']))
    {
    	$dname=test_input($_POST['dname']);

    	$check=$db->prepare('INSERT INTO dept_details(dname) VALUES (?)');
    	$data=array($dname);
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