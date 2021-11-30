<html>
    <head>
    </head>
    <body>
        <h1>Registration Form</h1>
        <hr>
        <form action="" onsubmit="return validateform()" method="post">
            <table>
                <tr>
                    <td>First Name:</td>
                    <td><input type="text" id="fname" name="fname"></td>
                </tr>
                <tr>
                    <td><h3 id="message_fname"></h3></td>
                </tr>
                <tr>
                    <td>Last Name:</td>
                    <td><input type="text" id="lname" name="lname"></td>
                </tr>
                <tr>
                    <td><h3 id="message_lname"></h3></td>
                </tr>
                <tr>
                    <td>Age:</td>
                    <td><input type="text" id="age" name="age"></td>
                </tr>
                <tr>
                    <td><h3 id="message_age"></h3></td>
                </tr>
                <tr>
                    <td>Designation:</td>
                    <td>
                        <input type="radio"  id="designation" name="designation" value="Junior Programmer">
                        <label for="designation">Junior Programmer</label>
                        <input type="radio"  id="designation1" name="designation" value="Senior Programmer">
                        <label for="designation">Senior Programmer</label>
                        <input type="radio" id="designation2" name="designation" value="Project Lead">
                        <label for="designation">Project Lead</label>
                    </td>
                </tr>
                <tr>
                    <td><h3 id="message_designation"></h3></td>
                </tr>
                <tr>
                    <td>Preffered language:</td>
                    <td>
                        <input type="checkbox" id="language1" name="language1" value="JAVA">
                        <label for="language1">JAVA</label>
                        <input type="checkbox" id="language2" name="language2" value="PHP">
                        <label for="language2">PHP</label>
                        <input type="checkbox" id="language3" name="language3" value="C++">
                        <label for="language3">C++</label>
                    </td>
                </tr>
                <tr>
                    <td><h3 id="message_language"></h3></td>
                </tr>
                <tr>
                    <td>E-mail:</td>
                    <td>
                        <input type="text" id="email" name="email">
                    </td>
                </tr>
                <tr>
                    <td><h3 id="message_email"></h3></td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td>
                        <input type="password" id="password" name="password" >
                    </td>
                </tr>
                <tr>
                    <td><h3 id="message_password"></h3></td>
                </tr>
                <tr>
                    <td>Please choose a file:</td>
                    <td>
                        <input type="file" name="myfile">
                    </td>
            </table>
            <input name="submit" type="submit" value="Submit">
            <input type="reset">
            <table>
            <tr>
                <td id="print_fname"></td>
            </tr>
            <tr>
                <td id="print_lname"></td>
            </tr>
            <tr>
                <td id="print_age"></td>
            </tr>
            <tr>
                <td id="print_designation"></td>
            </tr>
            <tr>
                <td id="print_language"></td>
            </tr>
            <tr>
                <td id="print_email"></td>
            </tr>
            <tr>
                <td id="print_password"></td>
            </tr>
        </table>
        </form>
        <script src="../js/js.js"></script> 
    </body>
</html>