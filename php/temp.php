<?php
include "dbconfig.php";
$con=mysqli_connect($host, $username, $password, $dbname) or die("<br>Cannot connect to DB\n");

$query = "SELECT * FROM kumarketplacedb.employees";
$result = mysqli_query($con,$query);
    $resultCheck = mysqli_num_rows($result);
    if($result) {
        if (mysqli_num_rows($result) > 0) {
	    echo "There are <b>" .mysqli_num_rows($result) . "</b> admins(s) in the databse.";
            echo "<TABLE border=1>\n";

                
            echo "<TR><TD>employee_id<TD>first_name<TD>last_name<TD>hourly_pay<TD>hire_date";

            while($row = mysqli_fetch_array($result)){
                $employee_id=$row["employee_id"];

                $first_name=$row["first_name"];

                $last_name=$row["last_name"];

                $hourly_pay=$row["hourly_pay"];

                $hire_date=$row["hire_date"];

                echo "<TR><TD>$employee_id<TD>$first_name<TD>$last_name<TD>$hourly_pay<TD>$hire_date";

            }


            echo "</TABLE>\n";
        }
    }
    
    mysqli_close($con);
    ?>
    
    