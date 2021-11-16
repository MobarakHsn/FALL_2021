<?php include "../control/registrationcontrol.php"; ?>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../css/css.css">
    </head>
    <body>
        <div class="header">
            <h2>ABC Management System</h2>
            <h4>We Create Future</h4>
        </div>
        <div class="sticky">
            <div class="topnav">
                <a href="#">Home</a>
                <a href="#">About US</a>
                <a href="#">Shop</a>
            </div>
        </div>
        <div class="prebox">
            <div class="box"><h3>Registration Form</h3></div>
        </div>
        <form action="" method="post">
            <hr class="new">
            <table id="table1">
                <tr>
                    <td>First Name:</td>
                    <td><input type="text"  name="fname"></td>
                    <?php if($cnt!=7 && $validatefname!=""){?>
                    <td class="error">
                        <?php echo $validatefname;?>
                    </td>
                    <?php } ?>
                </tr>
                <tr>
                    <td>Last Name:</td>
                    <td><input type="text"  name="lname"></td>
                    <?php if($cnt!=7 && $validatelname!=""){?>
                    <td class="error">
                        <?php echo $validatelname;?>
                    </td>
                    <?php } ?>
                </tr>
                <tr>
                    <td>Age:</td>
                    <td><input type="text"  name="age"></td>
                    <?php if($cnt!=7 && $validateage!=""){?>
                    <td class="error">
                        <?php echo $validateage;?>
                    </td>
                    <?php } ?>
                </tr>
                <tr>
                    <td>Designation:</td>
                    <td>
                        <input type="radio" name="designation" value="Junior Programmer">
                        <label for="designation">Junior Programmer</label>
                        <input type="radio" name="designation" value="Senior Programmer">
                        <label for="designation">Senior Programmer</label>
                        <input type="radio" name="designation" value="Project Lead">
                        <label for="designation">Project Lead</label>
                    </td>
                    <?php if($cnt!=7 && $validateradio!=""){?>
                    <td class="error">
                        <?php echo $validateradio;?>
                    </td>
                    <?php } ?>
                </tr>
                <tr>
                    <td>Preffered language:</td>
                    <td>
                        <input type="checkbox" name="language1" value="JAVA">
                        <label for="language1">JAVA</label>
                        <input type="checkbox" name="language2" value="PHP">
                        <label for="language2">PHP</label>
                        <input type="checkbox" name="language3" value="C++">
                        <label for="language3">C++</label>
                    </td>
                    <?php if($cnt!=7 && $validatecheckbox!=""){?>
                    <td class="error">
                        <?php echo $validatecheckbox;?>
                    </td>
                    <?php } ?>
                </tr>
                <tr>
                    <td>E-mail:</td>
                    <td>
                        <input type="text" name="email">
                    </td>
                    <?php if($cnt!=7 && $validateemail!=""){?>
                    <td class="error">
                        <?php echo $validateemail;?>
                    </td>
                    <?php } ?>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td>
                        <input type="password"  name="password" >
                    </td>
                    <?php if($cnt!=7 && $validatepassword!=""){?>
                    <td class="error">
                        <?php echo $validatepassword;?>
                    </td>
                    <?php } ?>
                </tr>
                <tr>
                    <td class="tablepadding">Please choose a file:</td>
                    <td>
                        <input type="file" name="myfile">
                    </td>
            </table>
            <input  class="button round" type="reset">
            <input class="button round" name="submit" type="submit" value="Submit">
        </form>
    </body>
</html>