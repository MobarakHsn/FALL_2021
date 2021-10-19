<?php
class db{
 
function OpenCon()
{
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $db = "aiub";
    $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
    
    return $conn;
 }
 
 function InsertUser($conn,$fname,$lname,$email,$gender,$mobile,$dob,$hsc,$ssc,$dept,$year,$semester)
 {
    $sql="INSERT INTO new_students(First_Name,Last_Name,Email,Gender,Mobile_No,Date_Of_Birth,HSC_Result,SSC_Result,Course,Year,Semester) VALUES('$fname','$lname','$email','$gender','$mobile','$dob',$hsc,$ssc,'$dept',$year,'$semester')";
    if($conn->query($sql)===TRUE)
    {
        
        echo "New record created successfully";
    }
    else
    {
        echo "Error: ".$sql."<br>".$conn->error;
    }
 }



function CloseCon($conn)
{
    $conn -> close();
}
}
?>