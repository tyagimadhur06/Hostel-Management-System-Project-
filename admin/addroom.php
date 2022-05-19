<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Page</title>
	<link rel="stylesheet" type="text/css" href="css/addroom.css">
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/normalize.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Antonio:wght@200&display=swap" rel="stylesheet">	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://code.jquery.com/jquery-3.0.0.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>
	<div class="col-sm-12 page">
		<div class="col-sm-2 index">
			<div class="dashboard">Dashboard<hr></div>
			<div class="admin">Admin</div>
			<div class="menu-bar">
				<ul>
					<li><a href="addstudent.php"><i class="fa fa-user-circle" aria-hidden="true"></i></a>Student</li>
					<li><a href="adddepartment.php"><i class="fa fa-university" aria-hidden="true"></i></a>Department</li>
					<li><a href="addroom.php"><i class="fa fa-desktop" aria-hidden="true"></i></a>Room</li>
					<li><a href="addhostel.php"><i class="fa fa-h-square" aria-hidden="true"></i></a>Hostel</li>
					<li><a href="addgym.php"><i class="fa fa-life-ring" aria-hidden="true"></i></a>Gym</li>
					<li><a href="addmess.php"><i class="fa fa-cutlery" aria-hidden="true"></i></a>Mess</li>
					<li><a href="addmates.php"><i class="fa fa-users" aria-hidden="true"></i></a>Roommates</li>
					<li><a href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i></a>LOGOUT</li>
				</ul>
				
			</div>
		</div>
		<div class="col-sm-8 background">
			<h1>Hello!! <?php echo $_SESSION['email'];?></h1>
			<div class="col-sm-12">
				<div class="col-sm-4"></div>
				<div class="form">
			<form>
				<div class="contain">
							<div class="user_fields">
								<label for="department">Department:</label>
								<div class="list" id="list" style="width:100%;float:left;color:black;"></div>
							</div>
							<div class="user_fields">
								<label for="room">Room:</label>
								<input type="name" name="rname" id="rname" class="form-control" placeholder="Enter your Room">
							</div>
							<div class="user_fields">
								<label for="bed">Bed:</label>
								<select name="bed_select" id="bno">
								<option value="a" id="opt">A</option>
								<option value="b" id="opt">B</option>
								<option value="c" id="opt">C</option>
								<option value="d" id="opt">D</option>
							</select>
							</div>
							<div class="col-sm-12">
								<div class="col-sm-3"></div>
							<div class="col-sm-6 submit_btn">
								<button type="submit" name="Submit" id="submit" onclick="addroom();">Submit</button>
							</div>
							<div class="col-sm-3"></div>
						</div>
				    </div>
			</form>				
			</div>
				<div class="col-sm-4"></div>
			</div>
		</div>
		<div class="col-sm-2 background">
			<button type="submit" class="profile_btn">My Profile<a href="#"><i class="fa fa-chevron-down" aria-hidden="true"></i></a></button>
		</div>
	<script src='https://code.jquery.com/jquery-3.2.1.min.js'></script>
	<script type="text/javascript">
        getdept();
		function getdept()
		{
			var token='<?php echo password_hash("getdept", PASSWORD_DEFAULT);?>';
			
				$.ajax(
				{
					type:'POST',
					url:"ajax/getdepartment.php",
					data:{token:token},
					success:function(data)
					{
						$('#list').html(data);
					}
				});
			
		}

		function addroom()
		{
			var rname=document.getElementById('rname').value;
			var bno=document.getElementById('bno').value;
			var did=document.getElementById('department').value;
			alert(rname);
			var token='<?php echo password_hash("room", PASSWORD_DEFAULT);?>';
			if(rname!="" && bno!="")
			{
				$.ajax(
				{
					type:'POST',
					url:"ajax/addroom.php",
					data:{rname:rname,bno:bno,did:did,token:token},
					success:function(data)
					{
						// alert(data);
						if(data == 0)
						{
							alert("Room added successfully");
						}
					}
				});
			}
		}


    </script>
<script type="text/javascript">
    $('form').submit(function(e) {
    e.preventDefault();
});</script>

</body>
</html>