
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
    document.getElementById("message_id").innerHTML="";
    document.getElementById("message_name").innerHTML="";
    document.getElementById("message_department").innerHTML="";
    document.getElementById("message_date").innerHTML="";
    document.getElementById("message_salary").innerHTML="";
   
    // var id=document.getElementById("id").value;
    var name=document.getElementById("name").value;
    var department=document.getElementById("department").value;
    var date=document.getElementById("date").value;
    //document.getElementById("message_date").innerHTML=date;
    var salary=document.getElementById("salary").value;
    
    if(name.length==0)
    {
        document.getElementById("message_name").innerHTML="Name must not be empty";
        return false;
    }
    if(name.length<=8)
    {
        document.getElementById("message_name").innerHTML="Name must be more then 8 characters";
        return false;
    }

    if(department.length==0)
    {
        document.getElementById("message_department").innerHTML="Department name must not be empty";
        return false;
    }
    if(date==="")
    {
        document.getElementById("message_date").innerHTML="Joining data must not  be empty";
        return false;
    }

    if(salary.length==0)
    {
        document.getElementById("message_salary").innerHTML="Salary must not be empty";
        return false;
    }

    if(allnumber(salary)==false)
    {
        document.getElementById("message_salary").innerHTML="Salary must be numeric";
        return false;
    }

    // var xhttp = new XMLHttpRequest();
    // xhttp.onreadystatechange = function() {
    //     if (this.readyState == 4 && this.status == 200) 
    //     {
    //         document.getElementById("demo").innerHTML = this.responseText;
    //     }
    //     else
    //     {
    //         document.getElementById("demo").innerHTML = this.status;
    //     }
    // };
    // xhttp.open("POST", "../control/validation.php", true);
    // xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    // xhttp.send("id="+id+"&name="+name+"&minimum="+minimum+"&maximum="+maximum);
    return true;
}