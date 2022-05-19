<?php 
    include('connection.php');
    if(isset($_POST['token']) && password_verify("stu_login",$_POST['token']))
    {
    	// echo "hello";
    	$name = $_POST['name'];
    	$email = $_POST['email'];
        $uid = $_POST['uid'];
    	$did = $_POST['did'];
        $hid = $_POST['hid'];
    	$rid = $_POST['rid'];
        

    	if($name != "" && $email != "" && $did != "" && $hid != "" && $rid != "")
    	{
            // $id = ['id'];
            // function count_digit($id)
            // {
            //     return strlen((string) $id);
            // }
            // $number = 12312;
            // $digit = count_digit($id);

            // echo $digit ;

            // if($digit == '1')
            // $uid = "20BCS000".$digit;

            // elseif($digit == '2')
            // $uid = "20BCS00".$digit; 

            // elseif($digit == '3')
            // $uid = "20BCS0".$digit;

            // elseif($digit == '4')
            // $uid = "20BCS".$digit;

            // else
            //     echo "k";

            $password_hash=password_hash(substr($name,0,4)."1234", PASSWORD_DEFAULT); 
    		$query = $db->prepare("INSERT INTO stu_details(name,email,uid,did,hid,rid,password) VALUES (?,?,?,?,?,?,?)");
    		$data = array($name,$email,$uid,$did,$hid,$rid,$password_hash);

    		$execute = $query->execute($data);
    		if($execute)
    		{
    			echo 0;
    		}
    		else
    		{
    			echo "something went wrong";
    		}
    	}
    }
    else
    {
    	echo "server error";
    }
?>