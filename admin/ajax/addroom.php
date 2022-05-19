<?php 
    include('connection.php');
    session_start();
    if(isset($_POST['token']) && password_verify("room", $_POST['token']))
    {
    	$rname=test_input($_POST['rname']);
        $bno=test_input($_POST['bno']);
        $did=test_input($_POST['did']);
        $rname_bno = $rname.'/'.$bno;

    	$check=$db->prepare('INSERT INTO room_details(rname,bno,rname_bno,did) VALUES (?,?,?,?)');
    	$data=array($rname,$bno,$rname_bno,$did);
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