<?php
class db
{
    function OpenCon()
    {
        $dbhost = "localhost";
        $dbuser = "root";
        $dbpass = "";
        $db = "mydb";
        $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
        
        return $conn;
    }

    function GetById($conn,$table,$id)
    {
        $result = $conn->query("SELECT * FROM $table WHERE ID='$id'");
        return $result;
    }
    

    function update($conn,$table,$id,$name,$department,$date,$salary)
    {
        $sql = "UPDATE $table SET Name='$name', Department='$department',JoiningDate='$date',Salary='$salary' WHERE ID='$id'";

        if ($conn->query($sql) === TRUE) {
            echo "Updated Successfully";
        } else {
            echo "There was an error" ;
        }
    }
    function CloseCon($conn)
    {
        $conn -> close();
    }
}
?>