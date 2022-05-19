<?php 
    include('connection.php');
    session_start();
    if(isset($_POST['token']) && password_verify("mess_menu", $_POST['token']))
    {
    	$date1=test_input($_POST['date1']);
        $breakfast=test_input($_POST['breakfast']);
        $lunch=test_input($_POST['lunch']);
        $snacks=test_input($_POST['snacks']);
        $dinner=test_input($_POST['dinner']);

    	$check=$db->prepare('INSERT INTO mess_details(date1,breakfast,lunch,snacks,dinner) VALUES (?,?,?,?,?)');
    	$data=array($date1,$breakfast,$lunch,$snacks,$dinner);
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