<?php
$validatefname="";
$validatelname="";
$validateage="";
$validateemail="";
$validatecheckbox="";
$validateradio="";
$validatepassword="";
$v1=$v2=$v3="";
$validateimage="";
$cnt=0;
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $cnt1=0;
    $fname=$_REQUEST["fname"];
    $lname=$_REQUEST["lname"];
    $age=$_REQUEST["age"];
    $email=$_REQUEST["email"];
    $password=$_REQUEST["password"];
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

    if(empty($age))
    {
        $validateage="<h4>Age cannot be empty<h4>";
    }
    else
    {
        if(is_numeric($age))
        {
            $cnt1=$cnt1+1;
        }
        else
        {
            $validateage="<h4>Please enter an integer age.<h4>";
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

    if(empty($password))
    {
        $validatepassword="<h4>Password cannot be empty<h4>";
    }
    else
    {
        if(strlen($password)<8)
        {
            $validatepassword="<h4>Please enter atleast 8 character.<h4>";
        }
        else
        {
            $cnt1=$cnt1+1;
        }
        
    }

    if(!isset($_REQUEST["designation"]))
    {
        $validateradio="<h4>Must choose one option.<h4>";
        
    }
    else
    {
        $cnt1=$cnt1+1;
    }

    if(!isset($_REQUEST["language1"])&&!isset($_REQUEST["lagnuage2"])&&!isset($_REQUEST["language3"]))
    {
        $validatecheckbox = "<h4>please select at least one checkbox<h4>";
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

    if(!isset($_REQUEST["image1"]))
    {
        $validateimage="<h4>Please select an image<h4>";
    }

    if($cnt1===7)
    {
        if($_FILES["image1"]["type"]=="image/jpeg")
        {
            $cnt=8;
            $target_dir="files/";
            $_FILES["image1"]["name"]="image1.jpg";
            $target_file="files/".$_FILES["image1"]["name"];

            if(move_uploaded_file($_FILES["image1"]["tmp_name"],$target_file))
            {
                echo "Image successfully uploaded<br>";
                //echo "<img src='".$target_file."'>";
            }
            else
            {
                echo "Sorry, there was an error uploading image<br>";
            }
            $formdata=array(
                'firstname'=>$fname,
                'lastname'=>$lname,
                'age'=>$age,
                'designation'=>$_REQUEST['designation'],
                'language'=>$v1,
                'email'=>$email,
                'password'=>$password,
                'image'=>$target_file
            );
            if($v2!="")
            {
                $formdata['language']=$formdata['language'].",".$v2;
            }
            if($v3!="")
            {
                $formdata['language']=$formdata['language'].",".$v3;
            }
            $jsondata=json_encode($formdata,JSON_PRETTY_PRINT);
            if(file_put_contents("files/mydata.json",$jsondata))
            {
                echo "Data successfully saved<br>";
            }
            else
            {
                echo "No data saved<br>";
            }
            $validateimage="<img src='".$target_file."'/>";
            $validatefname=$fname;
            $validatelname=$lname;
            $validateage=$age;
            $validateradio=$_REQUEST["designation"];
            $validateemail=$email;
            $validatepassword=$password;
        }
        else
        {
            $validateimage="<h4>Please select an image<h4>";
        }
    }

}
?>