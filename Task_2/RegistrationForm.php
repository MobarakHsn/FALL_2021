<?php include "validation/validation.php"; ?>
<html>
    <body>
        <h1>Registration Form</h1>
        <hr>
        <form action="" method="post" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>First Name:</td>
                    <td><input type="text" name="fname"></td>
                </tr>
                    <td>
                        <?php if($cnt===8)echo "<h4>Your first name is: ".$validatefname;
                              else echo $validatefname;
                        ?>
                    </td>
                <tr>

                </tr>
                <tr>
                    <td>Last Name:</td>
                    <td><input type="text" name="lname"></td>
                </tr>
                <tr>
                    <td>
                        <?php if($cnt===8)echo "<h4>Your last name is: ".$validatelname;
                            else echo $validatelname;
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Age:</td>
                    <td><input type="text" name="age"></td>
                </tr>
                <tr>
                    <td>
                        <?php if($cnt===8)echo "<h4>Your age is: ".$validateage;
                            else echo $validateage;
                        ?>
                    </td>
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
                </tr>
                <tr>
                    <td>
                        <?php if($cnt===8)echo "<h4>Your designation is: ".$validateradio;
                            else echo $validateradio;
                        ?>
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
                    </td>
                </tr>
                <tr>
                    <td><?php if($cnt===8)
                                {
                                    echo "<h4>Selected options are: ".$v1." ".$v2." ".$v3;
                                }
                                else
                                {
                                    echo $validatecheckbox;
                                }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>E-mail:</td>
                    <td>
                        <input type="text" name="email">
                    </td>
                </tr>
                <tr>
                    <td><?php if($cnt===8)echo "<h4>Your email is: ".$validateemail;
                              else echo $validateemail;
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td>
                        <input type="password" name="password" >
                    </td>
                </tr>
                <tr>
                    <td><?php if($cnt===8)echo "<h4>Your password is: ".$validatepassword;
                              else echo $validatepassword;
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Please choose a file:</td>
                    <td>
                        <input type="file" name="image1">
                    </td>
                </tr>
                <tr>
                    <td><?php if($cnt===8)echo "<h4>Selected image is: ".$validateimage;
                              else echo $validateimage;
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" value="Submit">
                        <input type="reset">
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>