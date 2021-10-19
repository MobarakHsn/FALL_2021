<?php
include("../model/db.php");
$validatefname="";
$validatelname="";
$validategender="";
$validateemail="";
$validatemobile="";
$validatedob="";
$validatehsc="";
$validatessc="";
$validatecourse="";
$validateyear="";
$validatesemester="";
$cnt=0;

if($_SERVER["REQUEST_METHOD"]==="POST")
{
    $cnt1=0;
    $fname=$_REQUEST["fname"];
    $lname=$_REQUEST["lname"];
    $email=$_REQUEST["email"];
    $gender="";
    $mobile=$_REQUEST["mobile"];
    $dob="";
    $ssc=$_REQUEST["ssc"];
    $hsc=$_REQUEST["hsc"];
    $dept=$_REQUEST["dept"];
    $year=$_REQUEST["year"];
    $semester=$_REQUEST["semester"];
    if(empty($fname))
    {
        $validatefname="<h4>Please enter first name.<h4>";
    }
    else
    {
        if(ctype_alpha($fname))
        {
            if(strlen($fname)<5)
            {
                $validatefname="<h4>Atleast 5 alphabet required.<h4>";
            }
            else
            {
                $cnt1=$cnt1+1;
            }

        }
        else
        {
            $validatefname="<h4>Please enter only alphabet.<h4>";
        }   
    }

    if(empty($lname))
    {
        $validatelname="<h4>Please enter last name.<h4>";
    }
    else
    {
        if(ctype_alpha($lname))
        {
            if(strlen($lname)<5)
            {
                $validatelname="<h4>Atleast 5 alphabet required.<h4>";
            }
            else
            {
                $cnt1=$cnt1+1;
            }

        }
        else
        {
            $validatelname="<h4>Please enter only alphabet.<h4>";
        }   
    }

    if(empty($email) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$email))
    {
        $validateemail="<h4>Enter a valid email address.<h4>";
    }
    else
    {
        $cnt1=$cnt1+1;
    }

    if(!isset($_REQUEST["gender"]))
    {
        $validategender="<h4>Must choose one option.<h4>";
        
    }
    else
    {
        $gender=$_REQUEST["gender"];
        $cnt1=$cnt1+1;
    }

    if(empty($mobile))
    {
        $validatemobile="<h4>Please enter a mobile number.<h4>";
    }
    else
    {
        if(preg_match('/^[0-9]{11}+$/', $mobile))
        {
            $cnt1=$cnt1+1;
        }
        else
        {
            $validatemobile="<h4>Please enter a valid mobile number.<h4>";
        }
    }

    if(isset($_REQUEST["dob"]))
    {
        $cnt1=$cnt1+1;
        $dob=$_REQUEST["dob"];
    }
    else
    {
        $validatedob="<h4>Please select date of birth.<h4>";
    }

    if(!isset($_REQUEST["hsc"]))
    {
        $validatehsc="<h4>Please enter hsc result.<h4>";
    }
    else
    {
        if(is_numeric($hsc))
        {
            $cnt1=$cnt1+1;
        }
        else
        {
            $validatehsc="<h4>Please enter numeric value.<h4>";
        }
    }

    if(!isset($_REQUEST["ssc"]))
    {
        $validatessc="<h4>Please enter ssc result.<h4>";
    }
    else
    {
        if(is_numeric($ssc))
        {
            $cnt1=$cnt1+1;
        }
        else
        {
            $validatessc="<h4>Please enter numeric value.<h4>";
        }
    }

    if(!isset($_REQUEST["dept"]))
    {
        $validatecourse="<h4>Please select department<h4>";
    }
    else
    {
        $cnt1=$cnt1+1;
    }

    if(!isset($_REQUEST["year"]))
    {
        $validateyear="<h4>Please select a year<h4>";
    }
    else
    {
        $cnt1=$cnt1+1;
    }

    if(!isset($_REQUEST["semester"]))
    {
        $validatesemester="<h4>Please select semester<h4>";
    }
    else
    {
        $cnt1=$cnt1+1;
    }

    if($cnt1===11)
    {
        $cnt=11;
        $validatefname=$fname;
        $validatelname=$lname;
        $validateemail=$email;
        $validategender=$gender;
        $validatemobile=$mobile;
        $validatedob=$dob;
        $validatehsc=$hsc;
        $validatessc=$ssc;
        $validatecourse=$dept;
        $validateyear=$year;
        $validatesemester=$semester;
        $connection = new db();
        $conobj=$connection->OpenCon();
        $connection->InsertUser($conobj,$fname,$lname,$email,$gender,$mobile,$dob,$hsc,$ssc,$dept,$year,$semester);
        $connection->CloseCon($conobj);
    }
}

?>