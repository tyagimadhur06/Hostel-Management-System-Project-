<?php
    include("connection.php");
    session_start();

    if(isset($_POST['token']) && password_verify("getmates", $_POST['token']))
    {
        $input = $_POST['input'];
    	$query = "SELECT * FROM stu_details JOIN room_details ON stu_details.rid = room_details.id WHERE rname LIKE '{$input}%'";
        $stmt = $db->prepare($query);
        $stmt->execute();
        $data=$stmt->fetchALL(PDO::FETCH_ASSOC);

        if(isset($data['0'])){
            $html='<table class="table table-bordered"><thead>
                    <tr>
                        <th>Name</th>
                        <th>Room</th>
                        <th>UID</th>
                    </tr>
                </thead>';
                foreach($data as $list) {
                    $html.='<tr>
                    <td>'.$list['name'].'</td>
                    <td>'.$list['rname_bno'].'</td>
                    <td>'.$list['uid'].'</td>
                    </tr>';
                }
                $html.='</table>';
                echo $html;
        }else{
            echo "Data not Found";
        }
}
?>
