

function allLetter(inputtxt)
{
    var letters = /^[A-Za-z]+$/;
    if(letters.test(inputtxt))
    {
        return true;
    }
    else
    {
        return false;
    }
}

function matchemail(inputtext)
{
    var patt = /^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/;
    if(patt.test(inputtext))
    {
        return true;
    }
    else
    {
        return false;
    }
}

function allnumber(inputnum)
{
    if(isNaN(inputnum)==false)
    {
        return true;
    }
    else
    {
        return false;
    }
}

function validateform()
{
    document.getElementById("print_fname").innerHTML="";
    document.getElementById("print_lname").innerHTML="";
    document.getElementById("print_age").innerHTML="";
    document.getElementById("print_designation").innerHTML="";
    document.getElementById("print_language").innerHTML="";
    document.getElementById("print_email").innerHTML="";
    document.getElementById("print_password").innerHTML="";
    var fname=document.getElementById("fname").value;
    var lname=document.getElementById("lname").value;
    var age=document.getElementById("age").value;
    var designation="";
    var language="";
    var email=document.getElementById("email").value;
    var password=document.getElementById("password").value;

    if(document.getElementById("language1").checked==true)
    {
        language=document.getElementById("language1").value+" ";
    }
    if(document.getElementById("language2").checked==true)
    {
        language=language+document.getElementById("language2").value+" ";
    }
    if(document.getElementById("language3").checked==true)
    {
        language=language+document.getElementById("language3").value+" ";
    }


    if(fname=="")
    {
        document.getElementById("message_fname").innerHTML="First name must not be empty";
        return false;
    }
    else if(fname.length<5)
    {
        document.getElementById("message_fname").innerHTML="Atleast 5 alphabet required";
        return false;
    }
    else
    {
        if(allLetter(fname)==false)
        {
            document.getElementById("message_fname").innerHTML="Only alphabet required";
            return false;
        }
        else
        {
            document.getElementById("message_fname").innerHTML="";
        }
    }


    if(lname=="")
    {
        document.getElementById("message_lname").innerHTML="Last name must not be empty";
        return false;
    }
    else if(lname.length<5)
    {
        document.getElementById("message_lname").innerHTML="Atleast 5 alphabet required";
        return false;
    }
    else
    {
        if(allLetter(lname)==false)
        {
            document.getElementById("message_lname").innerHTML="Only alphabet required";
            return false;
        }
        else
        {
            document.getElementById("message_lname").innerHTML="";
        }
    }

    if(age=="")
    {
        document.getElementById("message_age").innerHTML="Age must not be empty";
        return false;
    }
    else
    {
        if(allnumber(age)==false)
        {
            document.getElementById("message_age").innerHTML="Age must be integer";
            return false;
        }
        else
        {
            document.getElementById("message_age").innerHTML="";
        }
    }

    if(document.getElementById("designation").checked==true)
    {
        designation=document.getElementById("designation").value;
        document.getElementById("message_designation").innerHTML="";
    }
    else if(document.getElementById("designation1").checked==true)
    {
        designation=document.getElementById("designation1").value;
        document.getElementById("message_designation").innerHTML="";
    }
    else if(document.getElementById("designation2").checked==true)
    {
        designation=document.getElementById("designation2").value;
        document.getElementById("message_designation").innerHTML="";
    }
    else
    {
        document.getElementById("message_designation").innerHTML="Must choose one option";
        return false;
    }

    if(language=="")
    {
        document.getElementById("message_language").innerHTML="Must choose atleast one language";
        return false;
    }
    else
    {
        document.getElementById("message_language").innerHTML="";
    }

    if(email=="")
    {
        document.getElementById("message_email").innerHTML="Email must not be empty";
        return false;
    }
    else
    {
        if(matchemail(email)==false)
        {
            document.getElementById("message_email").innerHTML="Enter a valid email";
            return false;
        }
        else
        {
            document.getElementById("message_email").innerHTML="";
        }
    }

    if(password=="")
    {
        document.getElementById("message_password").innerHTML="Password must not be empty";
        return false;
    }
    else
    {
        if(password.length<8)
        {
            document.getElementById("message_password").innerHTML="Atleast 8 character required";
            return false;
        }
    }

    document.getElementById("print_fname").innerHTML="First Name: "+fname;
    document.getElementById("print_lname").innerHTML="Last Name: "+lname;
    document.getElementById("print_age").innerHTML="Age: "+age;
    document.getElementById("print_designation").innerHTML="Designation: "+designation;
    document.getElementById("print_language").innerHTML="Preffered language: "+language;
    document.getElementById("print_email").innerHTML="Email: "+email;
    document.getElementById("print_password").innerHTML="Password: "+password;

    return false;
}