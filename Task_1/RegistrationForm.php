<?php include "Output/Output.php"; ?>
<html>
    <body>
        <h1>Registration Form</h1>
        <hr>
        <form action="" method="post">
            <table>
                <tr>
                    <td>First Name:</td>
                    <td><input type="text" name="fname"></td><?php echo $validatefname; ?>
                </tr>
                <tr>
                    <td>Last Name:</td>
                    <td><input type="text" name="lname"></td><?php echo $validatelname; ?>
                </tr>
                <tr>
                    <td>Age:</td>
                    <td><input type="text" name="age"></td><?php echo $validateage; ?>
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
                        <?php echo $validateradio; ?>
                        <br>
                    </td>
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
                        <?php echo $validatecheckbox; ?>
                        <?php echo $v1;?>
                        <?php echo $v2;?>
                        <?php echo $v3;?>
                        <br>
                    </td>
                </tr>
                <tr>
                    <td>E-mail:</td>
                    <td>
                        <input type="text" name="email"><?php echo $validateemail; ?>
                    </td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td>
                        <input type="password" name="password" ><?php echo $validatepassword; ?>
                    </td>
                </tr>
                <tr>
                    <td>Please choose a file:</td>
                    <td>
                        <input type="file" name="myfile">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" value="Submit">
                        <input type="reset">
                    </td>
                </tr>
            </table>
        <inout>
        </form>
    </body>
</html>