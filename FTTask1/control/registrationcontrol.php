<?php
$validatefname="";
$validatelname="";
$validateage="";
$validateemail="";
$validatecheckbox="";
$validateradio="";
$validatepassword="";
$v1=$v2=$v3="";
$cnt=0;
if($_SERVER["REQUEST_METHOD"]=="POST" && isset($_REQUEST["submit"]))
{
    $cnt1=0;
    $fname=$_REQUEST["fname"];
    $lname=$_REQUEST["lname"];
    $age=$_REQUEST["age"];
    $email=$_REQUEST["email"];
    $password=$_REQUEST["password"];
    if(empty($fname))
    {
        $validatefname="Please enter first name.";
    }
    else
    {
        if(ctype_alpha($fname))
        {
            if(strlen($fname)<5)
            {
                $validatefname="Atleast 5 alphabet required.";
            }
            else
            {
                $cnt1=$cnt1+1;
            }

        }
        else
        {
            $validatefname="Please enter only alphabet.";
        }   
    }

    if(empty($lname))
    {
        $validatelname="Please enter last name.";
    }
    else
    {
        if(ctype_alpha($lname))
        {
            if(strlen($lname)<5)
            {
                $validatelname="Atleast 5 alphabet required.";
            }
            else
            {
                $cnt1=$cnt1+1;
            }

        }
        else
        {
            $validatelname="Please enter only alphabet.";
        }   
    }

    if(empty($age))
    {
        $validateage="Age cannot be empty";
    }
    else
    {
        if(is_numeric($age))
        {
            $cnt1=$cnt1+1;
        }
        else
        {
            $validateage="Please enter an integer age.";
        }
    }


    if(empty($email) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$email))
    {
        $validateemail="Enter a valid email address.";
    }
    else
    {
        $cnt1=$cnt1+1;
    }

    if(empty($password))
    {
        $validatepassword="Password cannot be empty";
    }
    else
    {
        if(strlen($password)<8)
        {
            $validatepassword="Please enter atleast 8 character.";
        }
        else
        {
            $cnt1=$cnt1+1;
        }
        
    }

    if(!isset($_REQUEST["designation"]))
    {
        $validateradio="Must choose one option.";
        
    }
    else
    {
        $cnt1=$cnt1+1;
    }

    if(!isset($_REQUEST["language1"])&&!isset($_REQUEST["lagnuage2"])&&!isset($_REQUEST["language3"]))
    {
        $validatecheckbox = "please select at least one checkbox";
    }
    else
    {
        $cnt1=$cnt1+1;
        $validatecheckbox="";
        if(isset($_REQUEST["language1"]) && $cnt1===7)
        {
            $v1= $_REQUEST["language1"];
        }
        if(isset($_REQUEST["language2"]) && $cnt1===7)
        { 
            $v2= $_REQUEST["language2"];
        }
        if(isset($_REQUEST["language3"]) && $cnt1===7)
        {
            $v3= $_REQUEST["language3"];
        }
    }

    if($cnt1===7)
    {
        $cnt=7;
        $validatefname=$fname;
        $validatelname=$lname;
        $validateage=$age;
        $validateradio=$_REQUEST["designation"];
        $validateemail=$email;
        $validatepassword=$password;
    }

}
?>