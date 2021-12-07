<?php 
    include('../model/db.php');
    $name="";
    $department="";
    $date="";
    $salary="";
    $pid="";
    if(isset($_REQUEST["search"]))
    {
        $pid=$_REQUEST["id"];
        if($_REQUEST["id"]!="")
        {
            $connection = new db();
            $conobj=$connection->OpenCon();
            $userQuery=$connection->GetById($conobj,"employee",$_REQUEST["id"],);
            if ($userQuery->num_rows > 0) {
                // output data of each row
                while($row = $userQuery->fetch_assoc()) {
                $name=$row["Name"];
                $department=$row["Department"];
                $date=$row["JoiningDate"];
                $salary=$row["Salary"];   
            } 
            $connection->CloseCon($conobj);
            }
        }   
        
    }

    if(isset($_REQUEST["update"]))
    {
        $connection = new db();
        //echo $_REQUEST["pid"];
        $conobj=$connection->OpenCon();
        $connection->update($conobj,"employee",$_REQUEST["pid"],$_REQUEST["name"],$_REQUEST["department"],$_REQUEST["date"],$_REQUEST["salary"]);
        $connection->CloseCon($conobj);
    }
?>