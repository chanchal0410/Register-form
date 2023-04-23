<html>
    <head>
        <title>DISPLAY</title>
    </head>
    <style>
        body{
            background-color: lightpink;
        }
        table{
            background-color:white;
        }
    </style>


    <?php 
        include("connect.php");
        //error_reporting(0);//don't show error
        $query= "select * from trip";
        $data=mysqli_query($conn,$query) ;   //execute query
        $total=mysqli_num_rows($data);        //telling about rows of data
        /*echo $total;
        $result=mysqli_fetch_assoc($data);      //it fetch data from database in form of array
        echo $result["name"]." ".$result["age"]." ".$result["gender"]." ".$result["email"]." ".$result["phone"]." ".$result["clg"];*/

        if($total!=0)
        {

            //echo"Table has records";
            ?>
            <h2 align="center"><mark>DISPLAYING ALL RECORDS</mark></h2>
            <br><br><br>
            <table border="3" cellspacing="9" width="90%" align="center" >
                <tr>
                <th width="10%">ID</th>
                <th width="10%">NAME</th>
                <th width="10%">AGE</th>
                <th width="10%">GENDER</th>
                <th width="20%" >EMAIL</th>
                <th width="10%">PHONE</th>
                <th width="30%">COLLEGE NAME</th>
                </tr>
                <?php
                 while($result=mysqli_fetch_assoc($data) )
                {
                    echo "<tr>
                            <td>".$result["id"]."</td>
                            <td>".$result["name"]."</td>
                            <td>".$result["age"]."</td>
                            <td>".$result["gender"]."</td>
                            <td>".$result["email"]."</td>
                            <td>".$result["phone"]."</td>
                            <td>".$result["clg"]."</td>
                        </tr>
                        ";

                }
        }
        else
        {
            echo "No records";
        }

    ?>
        </table>
</html>