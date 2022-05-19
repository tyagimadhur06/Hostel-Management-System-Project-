
   <!--    <table class="table table-bordered">
          <tr style="display: inline-flex;">
                 <td style="border:1px solid black;">SR NO</td>
              <td style="border:1px solid black;">NAME</td>
              <td style="border:1px solid black;">ROOM</td>
                 <td style="border:1px solid black;">DEPARTMENT</td>
                 <td style="border:1px solid black;">UID</td> 
          </tr>
          <?php
                 $srno = 1;
          while($datarow=$check->mysqli_fetch_assoc($result))
          {
                 $rno = $row['rid'];
                 $name = $row['name'];
                 $room = $row['rname_bno']
              ?>
              <tr style="display: inline-flex;">
                     <td style="border:1px solid black;"><?php echo $srno?></td>
                  <td style="border:1px solid black;"><?php echo $datarow['name']?></td>
                  <td style="border:1px solid black;"><?php echo $datarow['rname_bno']?></td>
                     <td style="border:1px solid black;"><?php echo $datarow['dname']?></td>
                     <td style="border:1px solid black;"><?php echo $datarow['uid']?></td>
              </tr>
      <?php
             $srno++;
          } ?>
      </table>
      <?php
     } else{
         echo "<h6 class='text-danger text-center mt-3'>No data Found</h6>";
     }

 }

 ?> -->