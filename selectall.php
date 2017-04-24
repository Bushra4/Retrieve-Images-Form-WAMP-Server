    <?php
         $con = mysql_connect("localhost","root","");
         if (!$con)
           {
             die('Could not connect: ' . mysql_error());
           }
           mysql_select_db("imagestore", $con);           
           $i=mysql_query("select * from students",$con);

           $num_rows = mysql_num_rows($i);                
          $check='';
          while($row = mysql_fetch_array($i))
            {
                    $r[]=$row;
                  $check=$row['rollNo'];
		echo $row ['name'];
		echo "</br>";
		echo "<img src=image.php?rollNo=".$row['rollNo']." width=300 height=300/>";
		echo "</br>";
             }          
         if($check==NULL)
           {            
                      $r[$num_rows]="Record is not available";
                      print(json_encode($r));   
             }
            else
             {
                $r[$num_rows]="success";
                 print(json_encode($r));          
              } 
 mysql_close($con);
               
    ?> 
