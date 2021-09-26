<?php
$validatefname="";
$validatelname="";
$validateage="";
$validateemail="";
$validatecheckbox="";
$validateradio="";
$validatepassword="";
$v1=$v2=$v3="";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$fname=$_REQUEST["fname"];
$lname=$_REQUEST["lname"];
$age=$_REQUEST["age"];
$email=$_REQUEST["email"];
$password=$_REQUEST["password"];
$flag=true;
if(empty($fname))
{
    $validatefname="Please enter first name.";
    $flag=false;
}
else
{
    $validatefname=$fname;
}

if(empty($lname))
{
    $validatelname="Please enter last name.";
    $flag=false;
}
else
{
    $validatelname=$lname;
}

if(ctype_alpha($fname))
{
    $validatefname=$fname;
}
else
{
    $validatefname="Please enter only alphabet.";
    $flag=false;
}

if(ctype_alpha($lname))
{
    $validatelname=$lname;
}
else
{
    $validatelname="Please enter only alphabet.";
    $flag=false;
}

if(strlen($fname)<5)
{
    $validatefname="Atleast 5 alphabet required.";
    $falg=false;
}
else
{
    $validatefname=$fname;
}
if(strlen($lname)<5)
{
    $validatelname="Atleast 5 alphabet required.";
    $falg=false;
}
else
{
    $validatelname=$lname;
}

if(empty($age))
{
    $flag=false;
    $validateage="Age cannot be empty";
}
else
{
    $validateage="Age";
}

if(is_numeric($age))
{
    $validateage=$age;
}
else
{
    $flag=false;
    $validateage="Please enter an integer age.";
}

if(empty($email) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$email))
{
    $flag=false;
    $validateemail="Enter a valid email address.";
}
else
{
    $validateemail= $email;
}

if(empty($password))
{
    $flag=false;
    $validatepassword="Password cannot be empty";
}
else
{
    $validatepassword=$password;
}

if(!isset($_REQUEST["designation"]))
{
    $flag=false;
    $validateradio="Must choose one option.";
    
}
else
{
    $validateradio=$_Request["designation"];
}

if(!isset($_REQUEST["language1"])&&!isset($_REQUEST["lagnuage2"])&&!isset($_REQUEST["language3"]))
{
    $validatecheckbox = "please select at least one checkbox";
    $flag=false;
}
else
{
    $validatecheckbox="Choosen options are ";
   if(isset($_REQUEST["language1"]))
   {
       $v1= $_REQUEST["language1"];
   }
   if(isset($_REQUEST["language2"]))
   { 
       $v2= $_REQUEST["language2"];
   }
   if(isset($_REQUEST["language3"]))
   {
    $v3= $_REQUEST["language3"];
   }
}

}
?>